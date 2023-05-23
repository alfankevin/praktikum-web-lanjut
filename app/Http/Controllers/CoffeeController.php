<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;

class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coffees = Coffee::all();
        $post = Coffee::orderBy('id', 'desc')->paginate(6);
        return view('home', compact('coffees'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('coffees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        Coffee::create($request->all());

        return redirect()
            ->route('home')
            ->with('success', 'Coffee Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Coffee = Coffee::find($id);
        return view('coffees.detail', compact('Coffee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Coffee = Coffee::find($id);
        return view('coffees.edit', compact('Coffee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        Coffee::find($id)->update($request->all());

        return redirect()
            ->route('home')
            ->with('success', 'Coffee Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Coffee::find($id)->delete();
        return redirect()
            ->route('home')
            ->with('success', 'Coffee Deleted Successfully');
    }
}
