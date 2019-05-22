<?php

namespace App\Http\Controllers;

use App\Blok;
use App\Gudang;
use App\VGudang;
use App\AsalKota;
use App\JenisBeras;
use App\KualitasBeras;
use App\BeratBeras;
use App\BlokGudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{

    public function __construct()
    {
        if(Blok::all()->count() == 0)
        {
           return view('blok.setup');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $v_gudang = VGudang::all();
        return view('gudang.index', compact('v_gudang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Blok::all()->count() > 0)
        {
            $kota = AsalKota::all();
            $jenisberas = JenisBeras::all();
            $kualitasberas = KualitasBeras::all();
            $berat = BeratBeras::all();
            return view('gudang.create', compact('kota', 'jenisberas', 'kualitasberas', 'berat'));
        }
        else
        {
            return view('blok.setup');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gudang = new Gudang();
        $gudang->id_asal_kota = $request->input('kota');
        $gudang->id_jenis_beras = $request->input('jenis_beras');
        $gudang->id_kualitas_beras = $request->input('kualitas_beras');
        $gudang->id_jenis_berat_beras = $request->input('berat_beras');
        $gudang->jumlah_karung = $request->input('jumlah_karung');
        $gudang->tanggal_masuk = date('Y-m-d H:i:s');
        $gudang->save();

        // Masukkan karung ke blok
        $last_gudang = Gudang::orderBy('id', 'desc')->first();
        $jumlah_karung = $last_gudang->jumlah_karung;

        $blok = Blok::all()->where('sisa_kapasitas', '>', 0);
        foreach ($blok as $item) {
            if ($jumlah_karung == 0)
                break;
            $blok_gudang = new BlokGudang();
            $blok_gudang->id_gudang = $last_gudang->id;
            $blok_gudang->id_blok = $item->id;
            if ($jumlah_karung > $item->sisa_kapasitas) {
                $blok_gudang->jumlah_karung = $item->sisa_kapasitas;
                Blok::where('id', $item->id)->update(['sisa_kapasitas' => 0]);
                $jumlah_karung -= $item->sisa_kapasitas;
            } else {
                $blok_gudang->jumlah_karung = $jumlah_karung;
                Blok::where('id', $item->id)->update(['sisa_kapasitas' => $item->sisa_kapasitas - $jumlah_karung]);
                $jumlah_karung = 0;
            }
            $blok_gudang->save();
        }
        return redirect()->route('gudang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function show(Gudang $gudang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function edit(Gudang $gudang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gudang $gudang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gudang $gudang)
    {
        //
    }
}