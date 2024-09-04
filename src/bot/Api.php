<?php

namespace Bot;

use Utilities\Env;
use Utilities\ErrorHandler;

class Api
{
    private static $apiToken;
    /**
     * Retrieves the Telegram API token from the environment.
     *
     * @return string The API token for accessing Telegram.
     */
    public static function getToken(): string
    {
        Env::load();
        self::$apiToken = Env::get('API_TOKEN');
        return self::$apiToken;
    }
    /**
     * Saves the incoming Telegram API response to a JSON file.
     *
     * This method writes the raw input from Telegram to a specified file.
     * 
     * @return void
     */
    private function saveTelegramResponse(): void
    {
        $response = file_get_contents('php://input');
        $this->writeToFile('../logs/user_info.json', $response);
    }
    /**
     * Retrieves and decodes Telegram data from a JSON file.
     *
     * This method reads the JSON file containing Telegram data and decodes it into an associative array.
     * Handles errors by throwing exceptions if JSON decoding fails.
     *
     * @return array|null The decoded data from the JSON file, or null if the file does not exist or decoding fails.
     * @throws Exception If there is an error during JSON decoding.
     */
    public function getTelegramDataFromJson(): ?array
    {
        $this->saveTelegramResponse();
        $path = '../logs/user_info.json';
        if (!file_exists($path)) {
            return null;
        }
        $response = file_get_contents($path);
        $update = json_decode($response, TRUE);
        if (json_last_error() != JSON_ERROR_NONE) {
            ErrorHandler::throwException('Error decoding json: ' . json_last_error_msg(), 1);
        }
        return $update;
    }


    /**
     * Parses the message from the Telegram data.
     *
     * Extracts and returns the message part of the update if available.
     *
     * @return array|null The parsed message, or null if not available.
     */
    public function parseTelegramMessage(): ?array
    {
        $update = $this->getTelegramDataFromJson();
        return $update['message'] ?? null;
    }
    /**
     * Parses the channel post from the Telegram data.
     *
     * Extracts and returns the channel post part of the update if available.
     *
     * @return array|null The parsed channel post, or null if not available.
     */
    public function parseTelegramChannel(): ?array
    {
        $update = $this->getTelegramDataFromJson();
        return $update['channel_post'] ?? null;
    }


    /**
     * Sends a request to the Telegram API.
     *
     * This function sends a POST request to the specified Telegram API method with the given parameters.
     * It handles the request, checks for errors, and throws an exception if the request fails.
     *
     * @param string $method The Telegram API method to call (e.g., 'sendMessage').
     * @param array $params The parameters to be sent with the request.
     * @return string The response from the Telegram API.
     * @throws Exception If the HTTP status code is not 200 or if there is a cURL error.
     */
    public function sendRequest(string $method, $params = []): string
    {
        $url = "https://api.telegram.org/bot" . self::getToken() . "/$method";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        if ($httpCode !== 200 || $error) {
            ErrorHandler::throwException("HTTP Error $httpCode: $error - Connection to bot failed. Please check URL and API bot.", 1);
        }
        return $response;
    }


    /**
     * Sends a message to a specified chat.
     *
     * This function sends a message with the specified text to the chat with the given ID
     * using the Telegram Bot API. It relies on the `sendRequest` method to handle the API request.
     *
     * @param int $id The chat ID to which the message should be sent.
     * @param string $text The text of the message to be sent.
     */
    function sendMessage($id, $text, $replyMarkup = null): void
    {
        $params = ['chat_id' => $id, 'text' => $text];
        if ($replyMarkup) {
            $params['reply_markup'] = json_encode([
                'keyboard' => $replyMarkup,
                'resize_keyboard' => true
            ]);
        }


        $this->sendRequest('sendMessage', $params);
    }
    /**
     * Sends a video to a specified chat.
     *
     * Utilizes the `sendRequest` method to send a video file to the specified chat.
     *
     * @param int $user_id The chat ID to which the video should be sent.
     * @param string $video_id The ID of the video file to be sent.
     * @return void
     */
    public function sendVideo($user_id, $video_id)
    {
        $params = ['chat_id' => $user_id, 'video' => $video_id];
        $this->sendRequest('sendVideo', $params);
    }

    /**
     * Writes data to a file.
     *
     * @param string $path The path to the file.
     * @param string $data The data to be written to the file.
     * @return void
     */
    private function writeToFile(string $path, string $data): void
    {
        file_put_contents($path, $data);
    }
}
