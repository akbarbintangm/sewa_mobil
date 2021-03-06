<?php

namespace App\Http\Controllers;

use App\Models\MOperator;
use Illuminate\Http\Request;

class MOperatorController extends Controller
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
        return view('master.operator');
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
     * @param  \App\Models\MOperator  $mOperator
     * @return \Illuminate\Http\Response
     */
    public function show(MOperator $mOperator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MOperator  $mOperator
     * @return \Illuminate\Http\Response
     */
    public function edit(MOperator $mOperator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MOperator  $mOperator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MOperator $mOperator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MOperator  $mOperator
     * @return \Illuminate\Http\Response
     */
    public function destroy(MOperator $mOperator)
    {
        //
    }
}
