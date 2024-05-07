<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\CarRequest;

class CarRequestNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $carRequest;

    public function __construct(CarRequest $carRequest)
    {
        $this->carRequest = $carRequest;
    }

    public function build()
    {
        return $this->markdown('emails.car-request-notification')
                    ->subject('New Car Request Submitted');
    }
}
