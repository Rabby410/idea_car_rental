<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\car;
use App\Models\rental;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalCars = Car::count();
        $totalRentals = Rental::count();
        $totalCustomers = User::count();
        return view('admin.dashboard' , compact('totalCars', 'totalRentals', 'totalCustomers'));
    }
}
