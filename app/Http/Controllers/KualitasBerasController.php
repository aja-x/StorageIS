<?php

namespace App\Http\Controllers;

use App\KualitasBeras;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class KualitasBerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $kualitasberas = KualitasBeras::all();
        return view('kualitas-beras.index', compact('kualitasberas'));
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
            'jenis_kualitas' => 'required|string',
        ]);
        KualitasBeras::create($request->all());
        return redirect()->route('kualitasberas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param KualitasBeras $KualitasBeras
     * @return Response
     */
    public function show(KualitasBeras $KualitasBeras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param KualitasBeras $KualitasBeras
     * @return Response
     */
    public function edit($id)
    {
        $kualitasberas = KualitasBeras::findOrFail($id);
        return view('kualitas-beras.edit', compact('kualitasberas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return Response
     * @throws ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'jenis_kualitas' => 'required|string',
        ]);
        $kualitasberas = KualitasBeras::findOrFail($id);
        $kualitasberas->jenis_kualitas = $request->input('jenis_kualitas');
        $kualitasberas->update();
        return redirect()->route('kualitasberas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        KualitasBeras::find($id)->delete();
        return redirect()->route('kualitasberas.index');
    }
}
