<?php

namespace App\Http\Controllers;

use App\Models\MBank;
use Illuminate\Http\Request;

class MBankController extends Controller
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
        return view('master.bank');
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
     * @param  \App\Models\MBank  $mBank
     * @return \Illuminate\Http\Response
     */
    public function show(MBank $mBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MBank  $mBank
     * @return \Illuminate\Http\Response
     */
    public function edit(MBank $mBank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MBank  $mBank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MBank $mBank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MBank  $mBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(MBank $mBank)
    {
        //
    }
}
