<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\RentalCanceled;
use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::with('user', 'car')->get();
        return view('admin.rentals.index', compact('rentals'));
    }

    public function show(Rental $rental)
    {
        return view('admin.rentals.show', compact('rental'));
    }

    public function update(Request $request, Rental $rental)
    {
        $request->validate([
            'status' => 'required|in:' . implode(',', Rental::STATUSES),
        ]);

        // Check if the status is 'canceled'
        if ($request->status === 'canceled') {
            // Send email to the customer
            Mail::to($rental->user->email)->send(new RentalCanceled($rental));
        }

        // Update the rental status
        $rental->update($request->all());

        return redirect()->route('admin.rentals.index')->with('success', 'Rental status updated successfully.' . ($request->status === 'canceled' ? ' The customer has been notified of the cancellation.' : ''));
    }


    public function destroy(Rental $rental)
    {
        if (in_array($rental->status, ['ongoing', 'completed'])) {
            return redirect()->route('admin.rentals.index')->with('error', 'Cannot delete ongoing or completed rentals.');
        }
        // Delete the rental
        $rental->delete();

        return redirect()->route('admin.rentals.index')->with('success', 'Rental deleted successfully. The customer has been notified.');
    }

}
