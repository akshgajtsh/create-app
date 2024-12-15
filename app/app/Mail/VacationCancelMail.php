<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VacationCancelMail extends Mailable
{
    use Queueable, SerializesModels;

    public $canceldata;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($canceldata)
    {
        $this->canceldata = $canceldata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        return $this->to('xiaolinkeigi309@gmail.com')
            ->subject('有休取消申請メール')
            ->view('Mail.vacationcancel_Mail')
            ->with(['canceldata' => $this->canceldata]);
    }
}
