<?php

namespace App\Http\Controllers;

use App\Models\Oitem;
use App\Models\Stuff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StuffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $barang = Stuff::all();
        $total =  DB::table('stuffs')
        ->leftJoin('iitems', 'stuffs.id', '=', 'iitems.stuff_id')
        ->select('stuffs.kd_barang', 'stuffs.nama_barang', 'stuffs.satuan', DB::raw('cast(sum(iitems.jumlah)as int) as stok'), 'stuffs.status')
        ->addSelect([
            'oitem' => Oitem::selectRaw('sum(jumlah)')
            ->whereColumn('stuff_id', 'stuffs.id')
            ->groupBy('stuffs.id')
            ->limit(1),
        ])
        ->groupBy('stuffs.id')
        ->get();
        // dd($total);

        return view('barang.index',[
            'stuff' =>$total,
            'title' => 'Data Barang'
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
        Stuff::create($request->all());
        return redirect('/stuff')->with('status', 'New data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function show(Stuff $stuff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function edit(Stuff $stuff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stuff $stuff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stuff $stuff)
    {
        //
    }
}
