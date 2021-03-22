<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function index()
    {
        $passengers = Passenger::latest()->paginate(5);
        return view('passengers.index',compact('passengers'))
            ->with('i', (request()->input('page', 1)- 1) * 5);
    }

    public function create()
    {
        return view('passengers.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile_no' => 'required',
            'passport_no' => 'required',
            'flight_date' => 'required',
            'flight_time' => 'required',
            'cabin-type' => 'required',
            'destination' => 'required',
    
        ]);
       Passenger::create($request->all());

        return redirect()->route('passengers.index')
            ->with('success','Passenger created successfully.');
    }

    public function show(Passenger $passenger)
    {
        return view('passengers.show',compact('passenger'));
    }
    
    public function edit(Passenger $passenger)
    {
        return view('passengers.edit',compact('passenger'));
    }

    
    public function update(Request $request, Passenger $passenger)
    {
        $request->validate([
        
            ]);
            $passenger->update($request->all());
            return redirect()->route('passengers.index')
                ->with('success','Passenger updated successfully');
    }

    
    public function destroy(Passenger $passenger)
    {
        $passenger->delete();

        return redirect()->route('passengers.index')
            ->with('success','Passenger deleted successfully');
    }

}