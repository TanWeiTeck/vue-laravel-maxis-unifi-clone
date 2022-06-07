<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewCoverageCheck extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $Coverage_Check;

    public function __construct($Coverage_Check)
    {
        $this->Coverage_Check = $Coverage_Check;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('tanwt08180@gmail.com')->view('user.maxis.email-coverage-check')->subject('New Coverage Check Request - Maxis Fibre');
    }
}
