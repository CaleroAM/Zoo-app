<?php

namespace App\Http\Controllers;

use App\Models\Careful;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CarefulRequest;
use App\Models\Animal;
use App\Models\Employee;
use App\Models\Food;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CarefulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $carefuls = Careful::paginate();

        return view('careful.index', compact('carefuls'))
            ->with('i', ($request->input('page', 1) - 1) * $carefuls->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $careful = new Careful();
        $food = Food::all();
        $employee = Employee::all();
        $animal = Animal::all();
        
        return view('careful.create', compact('careful', 'food', 'employee', 'animal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarefulRequest $request): RedirectResponse
    {
        Careful::create($request->validated());

        return Redirect::route('carefuls.index')
            ->with('success', 'Careful created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $careful = Careful::find($id);

        return view('careful.show', compact('careful'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $careful = Careful::find($id);
        $food = Food::all();
        $employee = Employee::all();
        $animal = Animal::all();
        return view('careful.edit', compact('careful', 'food', 'employee', 'animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarefulRequest $request, Careful $careful): RedirectResponse
    {
        $careful->update($request->validated());

        return Redirect::route('carefuls.index')
            ->with('success', 'Careful updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Careful::find($id)->delete();

        return Redirect::route('carefuls.index')
            ->with('success', 'Careful deleted successfully');
    }
}
