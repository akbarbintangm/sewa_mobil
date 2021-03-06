<?php

namespace App\Http\Controllers;

use App\Models\MReservasi;
use Illuminate\Http\Request;

class MReservasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master.reservasi');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MReservasi  $mReservasi
     * @return \Illuminate\Http\Response
     */
    public function show(MReservasi $mReservasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MReservasi  $mReservasi
     * @return \Illuminate\Http\Response
     */
    public function edit(MReservasi $mReservasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MReservasi  $mReservasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MReservasi $mReservasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MReservasi  $mReservasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(MReservasi $mReservasi)
    {
        //
    }
}
