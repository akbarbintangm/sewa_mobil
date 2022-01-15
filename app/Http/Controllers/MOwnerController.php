<?php

namespace App\Http\Controllers;

use App\Models\MOwner;
use Illuminate\Http\Request;

class MOwnerController extends Controller
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
        return view('master.owner');
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
     * @param  \App\Models\MOwner  $mOwner
     * @return \Illuminate\Http\Response
     */
    public function show(MOwner $mOwner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MOwner  $mOwner
     * @return \Illuminate\Http\Response
     */
    public function edit(MOwner $mOwner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MOwner  $mOwner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MOwner $mOwner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MOwner  $mOwner
     * @return \Illuminate\Http\Response
     */
    public function destroy(MOwner $mOwner)
    {
        //
    }
}
