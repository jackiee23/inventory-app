<?php

namespace App\Http\Controllers;

use App\Models\Iitem;
use App\Models\Stuff;
use Illuminate\Http\Request;

class IitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iitems = Iitem::all();
        $stuffs = Stuff::all();
        return view('iitem.index', [
            'title' => 'Barang Masuk',
            'iitems' => $iitems,
            'stuffs' => $stuffs
        ]);
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
        Iitem::create($request->all());
        return redirect('/iitem');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Iitem  $iitem
     * @return \Illuminate\Http\Response
     */
    public function show(Iitem $iitem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iitem  $iitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Iitem $iitem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Iitem  $iitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iitem $iitem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iitem  $iitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iitem $iitem)
    {
        //
    }
}
