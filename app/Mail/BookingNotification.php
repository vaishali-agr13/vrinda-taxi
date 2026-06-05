<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class BookingNotification extends Mailable
{
    public $booking;

    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        return $this->subject('New Booking Received')
                    ->view('emails.booking-notification');
    }
}