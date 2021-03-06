<?php

namespace App\Http\Controllers;

use App\Blok;
use App\Tumpukan;
use App\Jalur;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        if(Blok::all()->count() == 0)
        {
            return view('blok.setup');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if(Blok::all()->count() > 0)
        {
            $blok = Blok::selectRaw('nama_blok, SUM(sisa_kapasitas) as sisa_kapasitas')->groupBy('nama_blok')->get();
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
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function setup(Request $request)
    {
        foreach (range(1, $request->input('banyak-blok')) as $banyak_blok) {
            foreach (range(1, $request->input('kolom')) as $kolom) {
                foreach (range(1, $request->input('baris')) as $baris) {
                    $blok = new Blok();
                    $blok->nama_blok = chr(64 + $banyak_blok);
                    $blok->kolom = $kolom;
                    $blok->baris = $baris;
                    $blok->sisa_kapasitas = $request->input('tumpukan') * $request->input('karung_tumpukan');
                    $blok->save();
                }
            }
        }

        $tumpukan = new Tumpukan();
        $tumpukan->maksimal_tumpukan = $request->input('tumpukan');
        $tumpukan->banyak_karung = $request->input('karung_tumpukan');
        $tumpukan->save();

        // Buat jalur
        foreach (range(1, $request->input('banyak-blok')) as $banyak_blok) {
            $res = [];
            $jalur = new Jalur();
            $jalur->nama_blok = chr(64 + $banyak_blok);
            for($i = 1; ($i - 1 < $banyak_blok); $i++) {
                if($banyak_blok % 2 == 0 && $i % 2 == 0)
                    array_push($res, chr(64 + $i));
                else if($banyak_blok % 2 != 0 && $i % 2 != 0)
                    array_push($res, chr(64 + $i));
            }
            $jalur->jalur = implode('-', $res);
            $jalur->save();
        }
        return redirect()->route('blok.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Blok $blok
     * @return Response
     */
    public function show($nama_blok)
    {
        $blok = Blok::where('nama_blok', '=', $nama_blok)->get();
        return view('blok.show', compact('blok'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blok $blok
     * @return Response
     */
    public function edit(Blok $blok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Blok $blok
     * @return Response
     */
    public function update(Request $request, Blok $blok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blok $blok
     * @return Response
     */
    public function destroy(Blok $blok)
    {
        //
    }
}
