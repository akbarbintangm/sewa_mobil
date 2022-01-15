<?php

namespace App\Http\Controllers;

use App\Models\MBrandMobil;
use Illuminate\Http\Request;

class MBrandMobilController extends Controller
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
        return view('master.brand_mobil');
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
     * @param  \App\Models\MBrandMobil  $mBrandMobil
     * @return \Illuminate\Http\Response
     */
    public function show(MBrandMobil $mBrandMobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MBrandMobil  $mBrandMobil
     * @return \Illuminate\Http\Response
     */
    public function edit(MBrandMobil $mBrandMobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MBrandMobil  $mBrandMobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MBrandMobil $mBrandMobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MBrandMobil  $mBrandMobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(MBrandMobil $mBrandMobil)
    {
        //
    }
}
