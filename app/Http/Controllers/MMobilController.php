<?php

namespace App\Http\Controllers;

use App\Models\MMobil;
use Illuminate\Http\Request;

class MMobilController extends Controller
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
        return view('master.mobil');
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
     * @param  \App\Models\MMobil  $mMobil
     * @return \Illuminate\Http\Response
     */
    public function show(MMobil $mMobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MMobil  $mMobil
     * @return \Illuminate\Http\Response
     */
    public function edit(MMobil $mMobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MMobil  $mMobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MMobil $mMobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MMobil  $mMobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(MMobil $mMobil)
    {
        //
    }
}
