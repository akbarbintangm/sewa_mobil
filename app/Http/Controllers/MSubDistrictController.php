<?php

namespace App\Http\Controllers;

use App\Models\MSubDistrict;
use Illuminate\Http\Request;

class MSubDistrictController extends Controller
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
        return view('master.sub_district');
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
     * @param  \App\Models\MSubDistrict  $mSubDistrict
     * @return \Illuminate\Http\Response
     */
    public function show(MSubDistrict $mSubDistrict)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MSubDistrict  $mSubDistrict
     * @return \Illuminate\Http\Response
     */
    public function edit(MSubDistrict $mSubDistrict)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MSubDistrict  $mSubDistrict
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MSubDistrict $mSubDistrict)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MSubDistrict  $mSubDistrict
     * @return \Illuminate\Http\Response
     */
    public function destroy(MSubDistrict $mSubDistrict)
    {
        //
    }
}
