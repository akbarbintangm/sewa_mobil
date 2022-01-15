<?php

namespace App\Http\Controllers;

use App\Models\MDistrict;
use Illuminate\Http\Request;

class MDistrictController extends Controller
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
        return view('master.district');
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
     * @param  \App\Models\MDistrict  $mDistrict
     * @return \Illuminate\Http\Response
     */
    public function show(MDistrict $mDistrict)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MDistrict  $mDistrict
     * @return \Illuminate\Http\Response
     */
    public function edit(MDistrict $mDistrict)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MDistrict  $mDistrict
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MDistrict $mDistrict)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MDistrict  $mDistrict
     * @return \Illuminate\Http\Response
     */
    public function destroy(MDistrict $mDistrict)
    {
        //
    }
}
