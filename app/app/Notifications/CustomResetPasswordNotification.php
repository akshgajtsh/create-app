<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Auth\Notifications\ResetPassword;

class CustomResetPasswordNotification extends ResetPassword
{
    use Queueable;
    public $token;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable, $this->token);
        }

        return (new MailMessage)
            ->subject('パスワードリセットのご案内')
            ->view('Mail.reset_password', [
                'reset_url' => url(config('app.url') . route('password.reset', ['token' => $this->token, 'email' => $notifiable->getEmailForPasswordReset()], false))
            ]);
        /*->line('こんにちは！以下のボタンをクリックして、パスワードをリセットしてください。')
            ->action('パスワードをリセット', url(config('app.url') . route('password.reset', $this->token, false)))
            ->line('このリンクは60分間有効です。')
            ->line('ボタンをクリックできない場合は、以下のURLをコピーしてブラウザに貼り付けてください：')
            ->line(url(config('app.url') . route('password.reset', $this->token, false))) // ここで直接リンクを追加
            ->salutation('よろしくお願いいたします。');*/
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
