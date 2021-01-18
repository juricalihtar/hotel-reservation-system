<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Room_type;
use App\Models\Room_status;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::with(['room_type', 'room_status'])->paginate();
        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $room_types = Room_type::pluck('room_type_name', 'id');
        $room_statuses = Room_status::pluck('room_status_name', 'id');

        return view('rooms.create', compact('room_types', 'room_statuses'));
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
            'number' => 'required|max:3',
            'room_type_id' => 'required',
            'room_status_id' => 'required'
        ]);

        $room = Room::create($validated);

        return view('rooms.show', compact('room'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room =Room::findOrFail($id);
        return view('rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::findOrFail($id);

        $room_types = Room_type::pluck('room_type_name', 'id');
        $room_statuses = Room_status::pluck('room_status_name', 'id');

        return view('rooms.edit', compact('room', 'room_types', 'room_statuses'));
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
            'number' => 'required|max:3',
            'room_type_id' => 'required',
            'room_status_id' => 'required'
        ]);

        $room = Room::findOrFail($id);
        $room->fill($validated);
        $room->save();

        return view('rooms.show', compact('room'));
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
