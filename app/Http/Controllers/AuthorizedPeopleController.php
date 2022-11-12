<?php

namespace App\Http\Controllers;

use App\Models\AuthorizedPeople;
use Illuminate\Http\Request;

class AuthorizedPeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('authorizedpeople.index', ['authorizedpeople' => AuthorizedPeople::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authorizedpeople.create');
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        if($request->hasFile('image')){
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        AuthorizedPeople::create($validated);

        return redirect(route('authorizedpeople.index'))->with('message', 'person created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\AuthorizedPeople $authorizedperson
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorizedPeople $authorizedperson)
    {
        return view('authorizedpeople.show',['authorizedperson' => $authorizedperson] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\AuthorizedPeople $authorizedperson
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthorizedPeople $authorizedperson)
    {
        return view('authorizedpeople.edit',['authorizedperson' => $authorizedperson] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\AuthorizedPeople $authorizedperson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthorizedPeople $authorizedperson)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        if($request->hasFile('image')){
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        $authorizedperson->update($validated);

        return redirect(route('authorizedpeople.index'))->with('message', 'person updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\AuthorizedPeople $authorizedperson
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorizedPeople $authorizedperson)
    {
        $authorizedperson->delete();

        return redirect(route('authorizedpeople.index'))->with('message', 'person deleted successfully!');
    }
}
