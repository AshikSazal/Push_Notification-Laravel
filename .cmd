php artisan make:controller PushNotificationController
php artisan make:event SendNotification
composer require pusher/pusher-php-server
.env file update [BROADCAST_DRIVER,PUSHER_APP_ID,PUSHER_APP_KEY,PUSHER_APP_SECRET,PUSHER_APP_CLUSTER]