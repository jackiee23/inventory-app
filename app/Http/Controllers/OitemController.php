<?php

namespace App\Http\Controllers;

use App\Models\Iitem;
use App\Models\Oitem;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class OitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oitem = Oitem::all();
        $iitems = Iitem::all();
        return view('oitem.index', [
            'title' => 'Barang Keluar',
            'oitems' => $oitem,
            'iitems' => $iitems
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oitem  $oitem
     * @return \Illuminate\Http\Response
     */
    public function show(Oitem $oitem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oitem  $oitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Oitem $oitem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oitem  $oitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oitem $oitem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oitem  $oitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oitem $oitem)
    {
        //
    }
}
