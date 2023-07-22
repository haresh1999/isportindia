<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Fantacy;
use Illuminate\Http\Request;

class FantacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fantasys = Fantacy::paginate(10);

        return view('admin.fantasy.list',compact('fantasys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fantasy.create');
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fantacy  $fantacy
     * @return \Illuminate\Http\Response
     */
    public function edit(Fantacy $fantacy)
    {
        return view('admin.fantasy.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fantacy  $fantacy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fantacy $fantacy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fantacy  $fantacy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fantacy $fantacy)
    {
        //
    }
}
