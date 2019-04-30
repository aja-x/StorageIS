<?php

namespace App\Http\Controllers;

use App\Blok;
use App\BlokDetail;
use Illuminate\Http\Request;

class BlokController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        if(Blok::all()->count() > 0)
        {
            $blok = Blok::all();
            return view('blok.index', compact('blok'));
        }
        else
        {
            return view('blok.setup');
        }
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
    public function setup(Request $request)
    {
//        echo dd($request->all());
        foreach (range(1, $request->input('banyak-blok')) as $banyak_blok) {
            $blok = new Blok();
            $blok->nama_blok = chr(64 + $banyak_blok);
            $blok->kapasitas_blok = $request->input('kapasitas');
            $blok->sisa_kapasitas_blok = $request->input('kapasitas');
            $blok->save();

            foreach (range(1, $request->input('kolom')) as $kolom) {
                foreach (range(1, $request->input('baris')) as $baris) {
                    $blok_detail = new BlokDetail();
                    $last_data = Blok::select('id')->orderBy('id', 'desc')->first();
                    $blok_detail->id_blok = $last_data->id;
                    $blok_detail->baris = $baris;
                    $blok_detail->kolom = $kolom;
                    $blok_detail->save();
                }
            }
        }
        return redirect()->route('blok.index');
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
     * @param  \App\Blok  $blok
     * @return \Illuminate\Http\Response
     */
    public function show(Blok $blok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blok  $blok
     * @return \Illuminate\Http\Response
     */
    public function edit(Blok $blok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blok  $blok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blok $blok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blok  $blok
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blok $blok)
    {
        //
    }
}
