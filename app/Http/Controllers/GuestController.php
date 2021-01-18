<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guests = Guest::paginate();
        return view('guests.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guests.create');
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
            'first_name' => 'required:guests|max:255',
            'last_name' => 'required:guests|max:255',
            'email' => 'required|unique:guests|max:255',
            'phone_number' => 'required:guests|max:50',
            'address' => 'required:guests|max:255',
            'city' => 'required:guests|max:255',
            'country' => 'required:guests|max:255'
        ]);
        $guest = Guest::create($validated);
        return view('guests.show', compact('guest'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $guest = Guest::findOrFail($id);
        return view('guests.show', compact('guest'));
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guest = Guest::findOrFail($id);
        return view('guests.edit', compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'first_name' => 'required:guests|max:255',
            'last_name' => 'required:guests|max:255',
            'email' => 'required:guests|max:255',
            'phone_number' => 'required:guests|max:50',
            'address' => 'required:guests|max:255',
            'city' => 'required:guests|max:255',
            'country' => 'required:guests|max:255'
        ]);

        $guest = Guest::findOrFail($id);
        $guest->fill($validated);
        $guest->save();

        return view('guests.show', compact('guest'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
