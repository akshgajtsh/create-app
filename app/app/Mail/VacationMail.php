<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VacationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $vacationdata;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($vacationdata)
    {
        $this->vacationdata = $vacationdata;
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
            ->subject('有休申請メール')
            ->view('Mail.vacation_Mail')
            ->with(['vacationdata' => $this->vacationdata]);
    }
}
