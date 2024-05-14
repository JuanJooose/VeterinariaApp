<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function ($notifable, $url) {
            return (new MailMessage)
                ->subject('Verificar cuenta')
                ->line('Tu cuenta está casi lista, presiona el link para verificarla.')
                ->action('Verificar cuenta', $url)
                ->line('Si no has creado una cuenta puedes ignorar este email');
        });
    }
}
