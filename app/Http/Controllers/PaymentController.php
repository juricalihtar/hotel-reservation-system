<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Reservation;
use App\Models\Guest;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments =Payment::with(['guest', 'reservation'])->paginate();
        return view('payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reservations = Reservation::pluck('id', 'id');
        $guests = Guest::pluck('first_name','id');

        return view('payments.create', compact('reservations', 'guests'));
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
            'payment_method' => 'required',
            'reservation_id' => 'required',
            'guest_id' => 'required'
        ]);

        $payment = Payment::create($validated);

        return view('payments.show', compact('payment'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $payment = Payment::findOrFail($id);
        return view('payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment = Payment::findOrFail($id);

        $reservations = Reservation::pluck('id', 'id');
        $guests = Guest::pluck('first_name','id');

        return view('payments.edit', compact('payment', 'reservations', 'guests'));
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
            'payment_method' => 'required',
            'reservation_id' => 'required',
            'guest_id' => 'required'
        ]);

        $payment = Payment::findOrFail($id);
        $payment->fill($validated);
        $payment->save();

        return view('payments.show', compact('payment'));
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
