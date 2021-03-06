<?php

namespace App\Http\Controllers;

use App\Models\MProvince;
use Illuminate\Http\Request;

class MProvinceController extends Controller
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
        return view('master.province');
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
     * @param  \App\Models\MProvince  $mProvince
     * @return \Illuminate\Http\Response
     */
    public function show(MProvince $mProvince)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MProvince  $mProvince
     * @return \Illuminate\Http\Response
     */
    public function edit(MProvince $mProvince)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MProvince  $mProvince
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MProvince $mProvince)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MProvince  $mProvince
     * @return \Illuminate\Http\Response
     */
    public function destroy(MProvince $mProvince)
    {
        //
    }
}
