# Realtime Chat Application

![screenshot](./preview.png)

This is a realtime chat application built on top of Laravel and [Chatify](https://github.com/munafio/chatify). The application allows users to send and receive messages in real-time, with features such as message attachments, seen status, and user authentication, light and dark themes, all within a simple and intuitive interface.

## Features

-   Realtime messaging using Laravel Echo and Pusher
-   User authentication and authorization
-   Real-time contact list updates.
-   Favorite users system (Like stories style).
-   Saved Messages to save your messages online like Telegram messenger app.
-   Search functionality.
-   Contact item's last message indicator (e.g. You: ....).
-   Real-time user's active status.
-   Real-time typing indicator.
-   Real-time message seen indicator.
-   Real-time internet connection status.
-   Upload attachments (Photo/File).
-   Send Emoji's.
-   User details panel (Shared photos, delete conversation..).
-   Responsive design with all devices.
-   User settings and chat customization : user's profile photo, dark mode and chat color. with simple and wonderful UI design.

## Requirements

-   PHP >= 8.0
-   Composer
-   Node.js and npm
-   MySQL or compatible database
-   Pusher account for real-time communication

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/ibrahim11elian/Realtime-Chat-App-Chatify.git
```

```bash
cd Realtime-Chat-App-Chatify
```

### 2. Install Dependencies

Install the PHP dependencies:

```bash
composer install
```

Install the Node.js dependencies:

```bash
npm install
```

### 3. Environment Setup

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Database Setup

-   Create database and modify `.env` with your DB name and Pusher credentials.

-   Run the following command to create the database tables:

```bash
php artisan migrate
```

### 5. Storage Link

Create a symbolic link from `public/storage` to `storage/app/public`:

```bash
php artisan storage:link
```

### 6. Compile Assets

Compile the CSS and JavaScript assets:

```bash
npm run dev
```

or

```bash
npm run production
```

### 7. Run the Application

```bash
php artisan serve
```

The application will be accessible at `http://127.0.0.1:8000`.

### 8. Deployment

For production, ensure you set `APP_ENV=production` and `APP_URL` to the correct HTTPS URL. in your `.env` file and use the following build command:

```bash
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan storage:link
php artisan view:clear
npm install
npm run build
```

## Live Instance

You can view the live instance of the application at [This link](https://realtime-chat-app-chatify-production.up.railway.app/)
You just need to create an account, and have fun 😀.

## Author

<p align="left">

<a href="https://www.linkedin.com/in/ibrahim-ahmed-a8bba9196" target="_blank">![LinkedIn](https://img.shields.io/badge/linkedin-%230077B5.svg?style=for-the-badge&logo=linkedin&logoColor=white)
</a>
<a href="https://www.facebook.com/ibrahim11ahmed" target="_blank">![Facebook](https://img.shields.io/badge/Facebook-%231877F2.svg?style=for-the-badge&logo=Facebook&logoColor=white)
</a>
<a href="mailto:ibrahim11elian@gmail.com" target="_blank">![Gmail](https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white)
</a>
<a href="tel:+201157676284" target="_blank">![WhatsApp](https://img.shields.io/badge/WhatsApp-25D366?style=for-the-badge&logo=whatsapp&logoColor=white)
</a>
<a href="https://www.instagram.com/ibrahim11ahmed/" target="_blank">![Instagram](https://img.shields.io/badge/Instagram-%23E4405F.svg?style=for-the-badge&logo=Instagram&logoColor=white)
</a>
<a href="https://twitter.com/ibrahim11elian" target="_blank">![Twitter](https://img.shields.io/badge/Twitter-%231DA1F2.svg?style=for-the-badge&logo=Twitter&logoColor=white)
<a href="https://leetcode.com/ibrahim11elian" target="_blank">![LeetCode](https://img.shields.io/badge/LeetCode-000000?style=for-the-badge&logo=LeetCode&logoColor=#d16c06)

</p>
