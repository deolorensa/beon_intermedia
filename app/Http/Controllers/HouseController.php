<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\House;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $houses = House::get();
        return view('pages.home', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(House $house)
    {
        $bills = Bill::where('house_id', $house->id)->get();
        return view('pages.detail', [
            'house' => $house,
            'bills' => $bills,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, House $house)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'phone_number' => 'required|numeric',
        ]);

        $house->update($validated);
        $house->update($request->all());
        return redirect(route('house.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        //
    }
}
