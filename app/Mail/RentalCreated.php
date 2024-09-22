<?php

namespace App\Mail;

use App\Models\Rental;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RentalCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $rental;

    /**
     * Create a new message instance.
     *
     * @param Rental $rental
     * @return void
     */
    public function __construct(Rental $rental)
    {
        $this->rental = $rental;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.rental.created')
            ->with([
                'carName' => $this->rental->car->name,
                'startDate' => $this->rental->start_date,
                'endDate' => $this->rental->end_date,
                'totalCost' => $this->rental->total_cost,
            ]);
    }
}
