<?php

namespace App\Http\Controllers;

use App\Models\AuthorizedVehicles;
use Illuminate\Http\Request;

class AuthorizedVehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('authorizedvehicles.index', ['authorizedvehicles' => AuthorizedVehicles::latest()->get()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authorizedvehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'plate_number' => ['required', 'string', 'max:255'],
            'vehicle_type' => ['required', 'string', 'max:255'],
            'vehicle_model' => ['required', 'string', 'max:255'],
            'vehicle_owner' => ['required', 'string', 'max:255'],
        ]);

        AuthorizedVehicles::create($validated);

        return redirect(route('authorizedvehicles.index'))->with('message', 'vehicle created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuthorizedVehicles  $authorizedvehicle
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorizedVehicles $authorizedvehicle)
    {
        return view('authorizedvehicles.show',['authorizedvehicle' => $authorizedvehicle] );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuthorizedVehicles  $authorizedvehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthorizedVehicles $authorizedvehicle)
    {
        return view('authorizedvehicles.edit',['authorizedvehicle' => $authorizedvehicle] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuthorizedVehicles  $authorizedvehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthorizedVehicles $authorizedvehicle)
    {
        $validated = $request->validate([
            'plate_number' => ['required', 'string', 'max:255'],
            'vehicle_type' => ['required', 'string', 'max:255'],
            'vehicle_model' => ['required', 'string', 'max:255'],
            'vehicle_owner' => ['required', 'string', 'max:255'],
        ]);

        $authorizedvehicle->update($validated);

        return redirect(route('authorizedvehicles.index'))->with('message', 'vehicle updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuthorizedVehicles  $authorizedvehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorizedVehicles $authorizedvehicle)
    {
        $authorizedvehicle->delete();

        return redirect(route('authorizedvehicles.index'))->with('message', 'vehicle updated successfully!');
    }
}
