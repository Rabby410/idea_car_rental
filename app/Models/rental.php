<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'car_id',
        'start_date',
        'end_date',
        'total_cost',
        'status',
    ];

    const STATUSES = ['pending', 'ongoing', 'completed', 'canceled'];

    public function updateStatus()
    {
        $now = Carbon::now();
        if ($this->status !== 'canceled') {
            if ($now->isBefore($this->start_date)) {
                $this->status = 'pending';
            } elseif ($now->isBetween($this->start_date, $this->end_date)) {
                $this->status = 'ongoing';
            } elseif ($now->isAfter($this->end_date)) {
                $this->status = 'completed';
            }
            $this->save();
        }
    }
    // Define the relationship with the User model (renter)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the Car model (rented car)
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
