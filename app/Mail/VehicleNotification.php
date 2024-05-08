<?php

namespace App\Mail;

use App\Models\Vehicle;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VehicleNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $vehicle;

    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function build()
    {
        return $this->markdown('emails.vehicle_notification');
    }
}
