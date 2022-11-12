<?php

namespace App\Http\Controllers;

use App\Models\RecognizedPerson;
use Illuminate\Http\Request;

class RecognizedPeopleController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dailyrecognition.people', ['people' => RecognizedPerson::latest()->get()]);
    }
}
