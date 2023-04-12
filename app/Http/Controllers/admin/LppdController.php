<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lppd;
use Illuminate\Http\Request;

class LppdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function monitoring()
    {
        return view('admin.pages.lppd.monitoring');
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
     * @param  \App\Models\Lppd  $lppd
     * @return \Illuminate\Http\Response
     */
    public function show(Lppd $lppd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lppd  $lppd
     * @return \Illuminate\Http\Response
     */
    public function edit(Lppd $lppd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lppd  $lppd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lppd $lppd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lppd  $lppd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lppd $lppd)
    {
        //
    }
}
