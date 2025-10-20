# 🤖 PHP-TelegramBot

![PHP Version](https://img.shields.io/badge/PHP-8.3.6-blue) ![MongoDB](https://img.shields.io/badge/MongoDB-^2.0-green) ![License](https://img.shields.io/badge/License-MIT-yellow)

A robust and modular Telegram bot built with PHP 8.3.6 to manage and share video content with users and channels. This bot uses MongoDB for efficient data storage and delivers random videos to users via a clean, object-oriented architecture.

---

## 📋 Table of Contents
- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Bot Commands](#bot-commands)
- [Adding a Channel and Sending Random Videos](#adding-a-channel-and-sending-random-videos)
- [Project Structure](#project-structure)
- [Development](#development)
- [Contributing](#contributing)
- [Troubleshooting](#troubleshooting)
- [License](#license)
- [Contact](#contact)

---

## 🎥 Features
- **Random Video Sharing**: Sends random videos from channel posts to users.
- **User Management**: Automatically registers new users in MongoDB.
- **Channel Integration**: Stores unique video posts from Telegram channels using `file_unique_id`.
- **Webhook Support**: Processes Telegram updates efficiently via Webhook.
- **Modular Architecture**: Organized with PSR-4 namespaces and OOP principles for scalability.
- **Secure Configuration**: Uses `.env` file for sensitive settings like API token and MongoDB URL.
- **Error Handling**: Robust error management with a custom `ErrorHandler` class.

---

## 🛠️ Prerequisites
To run this bot, ensure you have the following:
- **PHP**: Version 8.3.6 or higher.
- **MongoDB PHP Library**: Version ^2.0 (`mongodb/mongodb`).
- **PHP Dotenv**: Version ^5.6 (`vlucas/phpdotenv`) for environment variable management.
- **MongoDB Server**: A running MongoDB instance for storing user and video data.
- **Composer**: For managing PHP dependencies.
- **Ngrok**: Or any HTTPS-enabled server for setting up the Webhook.
- **Telegram Bot Token**: Obtained from [@BotFather](https://t.me/BotFather).
- **.env File**: For storing sensitive configuration (`API_TOKEN`, `MONGO_URL`, `MONGO_DB`).

---

## 🚀 Installation
Follow these steps to set up the bot on a local or remote server:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/PouyaniArmin/PHP-TelegramBot.git
   cd PHP-TelegramBot
   ```

2. **Install PHP Dependencies**:
   ```bash
   composer require mongodb/mongodb:^2.0
   composer require vlucas/phpdotenv:^5.6
   ```

3. **Set Up MongoDB**:
   - Ensure a MongoDB server is running (locally or remotely).
   - Create a database (e.g., `telegram_bot`) for storing user and video data.

4. **Configure Environment Variables**:
   - Create a `.env` file in the project root with the following content:
     ```plaintext
     API_TOKEN=your_bot_token_here
     MONGO_URL=mongodb://localhost:27017
     MONGO_DB=telegram_bot
     ```
   - Replace `your_bot_token_here` with the token obtained from [@BotFather](https://t.me/BotFather).
   - Update `MONGO_URL` and `MONGO_DB` to match your MongoDB setup.

5. **Set Up Webhook**:
   - Run Ngrok to expose your local server:
     ```bash
     ngrok http 80
     ```
   - Copy the HTTPS URL provided by Ngrok (e.g., `https://dc3c91b3d3e0.ngrok-free.app`).
   - Set the Webhook with your bot token:
     ```bash
     curl https://api.telegram.org/bot<YOUR_TOKEN>/setWebhook?url=<YOUR_NGROK_URL>/bot.php
     ```

6. **Run the Bot**:
   - Ensure your server (or Ngrok) is running.
   - Access `bot.php` via the Webhook URL to process Telegram updates.

---

## 📱 Usage
1. Start the bot in Telegram by sending `/start`.
2. Use the `video` button or command to receive a random video from stored channel posts.
3. Add the bot to a Telegram channel as an administrator to store videos posted there.
4. The bot saves unique videos (based on `file_unique_id`) and delivers them randomly to users.

**Example Interaction**:
- User sends `/start` → Receives a welcome message with a `[video]` button.
- User clicks `video` → Gets a random video from the stored channel posts.

---

## 🤖 Bot Commands
| Command  | Description                              |
|----------|------------------------------------------|
| `/start` | Initializes the bot and sends a welcome message with a button. |
| `video`  | Sends a random video from stored channel posts. |

---

## 📢 Adding a Channel and Sending Random Videos
To enable the bot to store videos from a Telegram channel and send them randomly to users, follow these steps:

1. **Add the Bot as an Administrator**:
   - Go to your Telegram channel (private or public) and navigate to **Manage Channel** > **Administrators** > **Add Administrator**.
   - Search for your bot (e.g., `@YourBotName`) and add it as an administrator.
   - **Permissions**: Ensure the bot has the **View Messages** permission to access channel posts. Other permissions (e.g., sending messages) are optional unless required for additional functionality.

2. **Upload Videos to the Channel**:
   - Post a video (e.g., MP4 file) in your channel.
   - The bot automatically detects new video posts via the Webhook and stores them in the MongoDB `video` collection, using `file_unique_id` to prevent duplicates.
   - The videos are stored in the `video` collection of the database specified in `MONGO_DB`.

3. **Sending Random Videos to Users**:
   - Users can interact with the bot in a private chat by sending the `/start` command to receive a welcome message with a `[video]` button.
   - Clicking the `video` button or sending the `video` command triggers the bot to retrieve a random video from the `video` collection and send it to the user.
   - The random selection is handled efficiently using MongoDB’s aggregation pipeline to ensure fair and unpredictable video delivery.

---

## 📂 Project Structure
```
PHP-TelegramBot/
├── bot.php              # Main entry point for the bot
├── index.php            # Webhook or test entry point
├── src/
│   ├── Bot/            # Telegram API and bot logic (Api, TelegramBot)
│   ├── Config/         # Database configuration (DatabaseConfig)
│   ├── Database/       # MongoDB connection and operations (MongoDB)
│   ├── Models/         # Data models for users and channels (User, Channels)
│   ├── Utilities/      # Helper classes (Env, ErrorHandler)
│   ├── Services/       # Additional service logic (if applicable)
│   ├── Core/           # Core application logic (if applicable)
├── logs/
│   ├── user_info.json  # Stores raw Telegram updates for debugging
├── config/             # Configuration files (e.g., DatabaseConfig)
├── .env                # Environment variables (API_TOKEN, MONGO_URL, etc.)
├── composer.json        # PHP dependencies and PSR-4 autoloading
└── README.md           # Project documentation
```

---

## 🧑‍💻 Development
To extend the bot’s functionality, consider the following:
- **Adding New Commands**: Modify the `TelegramBot` class in `src/Bot/TelegramBot.php` to handle additional commands.
- **Database Schema**: The `users` collection stores user data (e.g., `from.id`), and the `video` collection stores channel videos with `file_unique_id` as a unique index.
- **Error Handling**: Use the `ErrorHandler` class in `src/Utilities/ErrorHandler.php` for consistent error management.
- **Logging**: Raw Telegram updates are saved in `logs/user_info.json` for debugging purposes.
- **Testing Webhook**: Verify Webhook setup with:
  ```bash
  curl https://api.telegram.org/bot<YOUR_TOKEN>/getWebhookInfo
  ```

**Tips**:
- Use a local MongoDB instance for development.
- Ensure Ngrok or an alternative HTTPS server is running during testing.
- Extend functionality by modifying the `Api`, `User`, or `Channels` classes in their respective namespaces.

---

## 🤝 Contributing
Contributions are welcome! 😍 To contribute:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Commit your changes (`git commit -m "Add your feature"`).
4. Push to the branch (`git push origin feature/your-feature`).
5. Open a Pull Request.

Ensure your code follows the existing OOP structure and includes proper error handling.

---

## 🛠️ Troubleshooting
Common issues and their solutions:
- **Webhook Not Working**: Verify the Webhook with:
  ```bash
  curl https://api.telegram.org/bot<YOUR_TOKEN>/getWebhookInfo
  ```
  Ensure the URL matches your Ngrok or server URL (e.g., `https://<YOUR_NGROK_URL>/bot.php`).
- **MongoDB Connection Errors**: Confirm that the MongoDB server is running and that `MONGO_URL` and `MONGO_DB` are correctly set in `.env`.
- **No Videos Sent**: Check `logs/user_info.json` to ensure Telegram updates are being received. Verify that videos are stored in the `video` collection.
- **Ngrok Instability**: In regions like Iran, Ngrok may be unstable. Ensure it’s active, or consider using **Cloudflare Tunnel** for a more reliable HTTPS endpoint.

---

## 📜 License
This project is licensed under the [MIT License](LICENSE).

---

## 📬 Contact
Built with ❤️ by [PouyaniArmin](https://github.com/PouyaniArmin).  
For questions or suggestions, reach out via [GitHub Issues](https://github.com/PouyaniArmin/PHP-TelegramBot/issues).