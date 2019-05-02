<?php

namespace App\Http\Controllers;

use App\BeratBeras;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class BeratBerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $berat = BeratBeras::all();
        return view('berat.index', compact('berat'));
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
            'berat' => 'required|string',
        ]);
        BeratBeras::create($request->all());
        return redirect()->route('berat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param BeratBeras $BeratBeras
     * @return Response
     */
    public function show(BeratBeras $BeratBeras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Response
     */
    public function edit($id)
    {
        $berat = BeratBeras::findOrFail($id);
        return view('berat.edit', compact('berat'));
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
            'berat' => 'required|string',
        ]);
        $berat = BeratBeras::findOrFail($id);
        $berat->berat = $request->input('berat');
        $berat->update();
        return redirect()->route('berat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        BeratBeras::find($id)->delete();
        return redirect()->route('berat.index');
    }
}
