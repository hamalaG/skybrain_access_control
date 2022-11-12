<?php

namespace App\Http\Controllers;

use App\Models\RecognizedVehicle;
use App\Http\Requests\StoreRecognizedVehicleRequest;
use App\Http\Requests\UpdateRecognizedVehicleRequest;

class RecognizedVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dailyrecognition.vehicles', ['vehicles' => RecognizedVehicle::latest()->get()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRecognizedVehicleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecognizedVehicleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecognizedVehicle  $recognizedVehicle
     * @return \Illuminate\Http\Response
     */
    public function show(RecognizedVehicle $recognizedVehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecognizedVehicle  $recognizedVehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(RecognizedVehicle $recognizedVehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecognizedVehicleRequest  $request
     * @param  \App\Models\RecognizedVehicle  $recognizedVehicle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecognizedVehicleRequest $request, RecognizedVehicle $recognizedVehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecognizedVehicle  $recognizedVehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecognizedVehicle $recognizedVehicle)
    {
        //
    }
}
