<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Guest;
use App\Models\Room;
use App\Models\User;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::with(['guest', 'room', 'user'])->paginate();
        return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guests = Guest::pluck('first_name', 'id');
        $rooms = Room::pluck('number', 'id');
        $users = User::pluck('name', 'id');

        return view('reservations.create', compact('guests', 'rooms', 'users'));
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
            'reservation_date' => 'required',
            'check_in_date' => 'required',
            'check_out_date' => 'required',
            'adults' => 'required',
            'children' => 'required',
            'guest_id' => 'required',
            'room_id' => 'required',
            'user_id' => 'required'
        ]);

        $reservation = Reservation::create($validated);

        return view('reservations.show', compact('reservation'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);

        
        $rooms = Room::pluck('number', 'id');

        return view('reservations.edit',
            compact('reservation', 'rooms')
        );
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
            'check_in_date' => 'required',
            'check_out_date' => 'required',
            'adults' => 'required',
            'children' => 'required',
            'room_id' => 'required'
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->fill($validated);
        $reservation->save();

        return view('reservations.show', compact('reservation'));

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