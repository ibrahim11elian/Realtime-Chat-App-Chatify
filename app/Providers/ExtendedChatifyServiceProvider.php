<?php

namespace App\Providers;

use Chatify\ChatifyServiceProvider;

class ExtendedChatifyServiceProvider extends ChatifyServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        app()->bind('ChatifyMessenger', function () {
            return new \App\Services\ChatifyMessenger;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        parent::boot();

        $this->publishes([
            base_path('vendor/munafio/chatify/src/ChatifyMessenger.php') => app_path('Services/ChatifyMessenger.php'),
        ], 'chatify-messenger');
    }
}
