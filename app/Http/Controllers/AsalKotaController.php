<?php

namespace App\Http\Controllers;

use App\AsalKota;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class AsalKotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $kota = AsalKota::all();
        return view('kota.index', compact('kota'));
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
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kota' => 'required|string',
        ]);
        $kota = $request->all();
        AsalKota::create($kota);
        return redirect()->route('kota.index');
    }

    /**
     * Display the specified resource.
     *
     * @param AsalKota $asalKota
     * @return Response
     */
    public function show(AsalKota $asalKota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param AsalKota $asalKota
     * @return Response
     */
    public function edit(AsalKota $asalKota)
    {
        return view('kota.edit')->with('kota' => $asalKota);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param AsalKota $asalKota
     * @return Response
     */
    public function update(Request $request, AsalKota $asalKota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        AsalKota::find($id)->delete();
        return redirect()->route('kota.index');
    }
}