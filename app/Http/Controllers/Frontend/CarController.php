<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $query = Car::query();

        if ($request->filled('car_type')) {
            $query->where('car_type', $request->car_type);
        }

        if ($request->filled('brand')) {
            $query->where('brand', $request->brand);
        }

        if ($request->filled('daily_rent_price')) {
            $query->where('daily_rent_price', '<=', $request->daily_rent_price);
        }

        $cars = $query->where('availability', true)->paginate(9);

        return view('frontend.cars.index', compact('cars'));
    }

    public function show(Car $car)
    {
        return view('frontend.cars.show', compact('car'));
    }
}
