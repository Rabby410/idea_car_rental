<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use App\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Show the admin dashboard.
     */
    public function index(): View
    {
        $totalCars = Car::count();
        $totalRentals = Rental::count();
        $totalCustomers = User::count();

        return view('admin.dashboard', compact('totalCars', 'totalRentals', 'totalCustomers'));
    }
}
