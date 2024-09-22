<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        return view('frontend.profile'); // Ensure this view exists
    }
    public function edit()
    {
        return view('frontend.settings');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        return redirect()->route('frontend.profile')->with('success', 'Profile updated successfully!');
    }
}
