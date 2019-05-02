<?php

namespace App\Http\Controllers;

use App\JenisBeras;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class JenisBerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $jenisberas = JenisBeras::all();
        return view('jenis-beras.index', compact('jenisberas'));
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
            'nama_jenis' => 'required|string',
        ]);
        JenisBeras::create($request->all());
        return redirect()->route('jenisberas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param JenisBeras $JenisBeras
     * @return Response
     */
    public function show(JenisBeras $JenisBeras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param JenisBeras $JenisBeras
     * @return Response
     */
    public function edit($id)
    {
        $jenisberas = JenisBeras::findOrFail($id);
        return view('jenis-beras.edit', compact('jenisberas'));
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
            'nama_jenis' => 'required|string',
        ]);
        $jenisberas = JenisBeras::findOrFail($id);
        $jenisberas->nama_jenis = $request->input('nama_jenis');
        $jenisberas->update();
        return redirect()->route('jenisberas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        JenisBeras::find($id)->delete();
        return redirect()->route('jenisberas.index');
    }
}
