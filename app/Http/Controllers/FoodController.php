<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FoodRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $food = Food::paginate();

        return view('food.index', compact('food'))
            ->with('i', ($request->input('page', 1) - 1) * $food->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $food = new Food();
        
        return view('food.create', compact('food'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FoodRequest $request): RedirectResponse
    {
        Food::create($request->validated());

        return Redirect::route('food.index')
            ->with('success', 'Food created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $food = Food::find($id);

        return view('food.show', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $food = Food::find($id);

        return view('food.edit', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FoodRequest $request, Food $food): RedirectResponse
    {
        $food->update($request->validated());

        return Redirect::route('food.index')
            ->with('success', 'Food updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Food::find($id)->delete();

        return Redirect::route('food.index')
            ->with('success', 'Food deleted successfully');
    }
}
