<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        return view('admin.cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'car_type' => 'required|string',
            'daily_rent_price' => 'required|numeric',
            'image' => 'required|image',
        ]);

        $car = new Car($request->all());
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/cars');
            $car->image = basename($path);  // Save only the file name
        }
        $car->save();

        return redirect()->route('admin.cars.index')->with('success', 'Car added successfully.');
    }


    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'name' => 'required|string',
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'car_type' => 'required|string',
            'daily_rent_price' => 'required|numeric',
            'image' => 'image',
        ]);

        $car->fill($request->all());
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/cars');
            $car->image = basename($path);  // Save only the file name
        }
        $car->save();

        return redirect()->route('admin.cars.index')->with('success', 'Car updated successfully.');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('admin.cars.index')->with('success', 'Car deleted successfully.');
    }
}
