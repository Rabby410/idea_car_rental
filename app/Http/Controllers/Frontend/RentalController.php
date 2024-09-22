<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\RentalCreated;

class RentalController extends Controller
{
    public function create(Car $car)
    {
        return view('frontend.rentals.create', compact('car'));
    }

    public function store(Request $request, Car $car)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $rental = new Rental();
        $rental->user_id = Auth::id();
        $rental->car_id = $car->id;
        $rental->start_date = $request->start_date;
        $rental->end_date = $request->end_date;

        // Calculate the number of days
        $startDate = \Carbon\Carbon::parse($request->start_date);
        $endDate = \Carbon\Carbon::parse($request->end_date);
        $days = $startDate->diffInDays($endDate);

        $rental->total_cost = $car->daily_rent_price * $days; // Calculate total cost
        $rental->save();

        Mail::to(Auth::user()->email)->send(new RentalCreated($rental));

        return redirect()->route('frontend.rentals.index')->with('success', 'Car booked successfully.');
    }

    public function index()
    {
        $rentals = Rental::where('user_id', Auth::id())->with('car')->get();
        return view('frontend.rentals.index', compact('rentals'));
    }

    public function cancel(Rental $rental)
    {
        if ($rental->start_date > now()) {
            $rental->delete();
            return redirect()->route('frontend.rentals.index')->with('success', 'Rental canceled successfully.');
        }

        return redirect()->route('frontend.rentals.index')->with('error', 'Cannot cancel a rental that has already started.');
    }
}
