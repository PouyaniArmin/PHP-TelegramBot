<?php

namespace Bot;

use Models\Channels;
use Models\User;

class TelegramBot
{
    private Api $api; // Instance of the API class for interacting with Telegram API
    private User $user; // Instance of the User model for handling user data
    private Channels $channelPost; // Instance of the Channels model for handling channel data
    // Command constants for easier management and readability
    private const COMMAND_START = '/start';
    private const COMMAND_VIDEO = 'video';

    /**
     * Constructor method.
     *
     * Initializes the TelegramBot instance with the necessary dependencies.
     *
     * @param Api $api Instance of the API class to interact with Telegram API.
     * @param User $user Instance of the User model for handling user data.
     * @param Channels $channel Instance of the Channels model for handling channel data.
     */
    public function __construct(Api $api, User $user, Channels $channel)
    {
        $this->api = $api;
        $this->user = $user;
        $this->channelPost = $channel;
    }
    /**
     * Starts the bot by processing user messages and channel posts.
     *
     * This method triggers the necessary actions based on incoming data
     * by invoking methods to handle user and channel data.
     */
    public function startBot()
    {
        $this->startedUser();
        $this->startedChannel();
    }
    /**
     * Handles incoming user messages and executes commands based on the message text.
     *
     * This method checks for specific commands (e.g., '/start' or 'video') and performs
     * the corresponding actions such as inserting user data into the database
     * or sending a video to the user.
     */
    private function startedUser()
    {
        $message = $this->api->parseTelegramMessage();
        if (!$message || !isset($message['from']['id'], $message['text'])) {
            return;
        }
        $userId = $message['from']['id'];
        $text = $message['text'];
        $filter = ['from.id' => $userId];

        switch ($text) {
            case self::COMMAND_START:
                $this->user->insertIfNotExists($filter, $message);
                $this->sendStartMessageWithButton($userId,);
                break;
            case self::COMMAND_VIDEO:
                $this->sendRandomVideo($userId);
                break;
        }
    }
    /**
     * Processes incoming channel posts and stores unique video data.
     *
     * This method checks if the incoming channel post contains video data and if so,
     * inserts or updates the channel post in the database.
     */
    private function startedChannel()
    {

        $channel = $this->api->parseTelegramChannel();

        if ($channel) {
            $uniqueId = $channel['video'][0]['file_unique_id'];
            $filterPost = ['video.file_unique_id' => $uniqueId];
            $this->channelPost->insertIfNotExists($filterPost, $channel);
        }
    }
    /**
     * Sends a random video from stored channel posts to a user.
     *
     * @param int $userId The Telegram user ID to send the video to.
     *
     * This method retrieves a random video from the channel posts and sends it to the user.
     * If no videos are available, a message is sent to the user indicating the lack of content.
     */
    private function sendRandomVideo($userId)
    {
        $post = $this->channelPost->getRandomDocument();
        if ($post) {
            $videoFileId = $post['video']['file_id'];
            $this->api->sendVideo($userId, $videoFileId);
        } else {
            $this->api->sendMessage($userId, 'No videos available at the moment.');
        }
    }
    /**
     * Sends a welcome message with a button to the user.
     *
     * @param int $userId The Telegram user ID to send the message to.
     *
     * This method sends a welcome message along with a keyboard button that allows the user
     * to request a video.
     */
    private function sendStartMessageWithButton($userId)
    {

        $mainKeyboard = [
            ['video']
        ];

        $this->api->sendMessage($userId, "Welcome to bot", $mainKeyboard);
    }
}
