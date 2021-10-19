<?php

namespace App\Http\Controllers\SwitchAccess;

use App\Http\Controllers\Controller;
use App\Model\SwitchTag;
use Illuminate\Http\Request;

class SwitchTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Model\SwitchTag  $switchTag
     * @return \Illuminate\Http\Response
     */
    public function show(SwitchTag $switchTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SwitchTag  $switchTag
     * @return \Illuminate\Http\Response
     */
    public function edit(SwitchTag $switchTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\SwitchTag  $switchTag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SwitchTag $switchTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SwitchTag  $switchTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(SwitchTag $switchTag)
    {
        $switchTag->delete();
        return response()->json([
            'message' => 'Data deleted',
            'status' => 'success'
        ]);
    }
}
