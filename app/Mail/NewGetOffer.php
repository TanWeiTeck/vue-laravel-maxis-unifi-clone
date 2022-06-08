<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewGetOffer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $Get_Offer;

    public function __construct($Get_Offer)
    {
        $this->Get_Offer = $Get_Offer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('tanwt08180@gmail.com')->view('user.unifi.email-get-offer')->subject('New Get Offer Request - Unifi');
    }
}
