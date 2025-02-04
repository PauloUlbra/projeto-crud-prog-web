<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
{
    $cars = Car::all();
    return view('cars.index', compact('cars'));
}

public function create()
{
    return view('cars.create');
}

public function store(Request $request)
{
    Car::create($request->all());
    return redirect('cars')->with('success', 'Car created successfully.');
}

public function edit($id)
{
    $cars = Car::findOrFail($id);
    return view('cars.edit', compact('car'));
}
public function update(Request $request, $id)
{
    $car = Car::findOrFail($id);
    $car->update($request->all());
    return redirect('cars')->with('success', 'Car updated successfully.');
}

public function destroy($id)
{
    $car = Car::findOrFail($id);
    $car->delete();
    return redirect('cars')->with('success', 'Car deleted successfully.');
}
}
