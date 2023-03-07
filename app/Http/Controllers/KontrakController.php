<?php

namespace App\Http\Controllers;

use App\Models\Kontrak;
use Illuminate\Http\Request;

class KontrakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kontrak.index', [
            'data' => Kontrak::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kontrak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'jenis_kontrak' => 'required',
        ]);

        Kontrak::create($validated);

        return redirect('/kontrak');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kontrak  $kontrak
     * @return \Illuminate\Http\Response
     */
    public function show(Kontrak $kontrak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kontrak  $kontrak
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontrak $kontrak)
    {
        return view('dashboard.kontrak.edit', [
            'data' => $kontrak,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kontrak  $kontrak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kontrak $kontrak)
    {
        $validated = $request->validate([
            'jenis_kontrak' => 'required',
        ]);

        Kontrak::where('id', $kontrak->id)->update($validated);

        return redirect('/kontrak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kontrak  $kontrak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontrak $kontrak)
    {
        Kontrak::destroy($kontrak->id);
        return redirect('/kontrak');
    }

    public function getKontrakData()
    {
        $kontrakData = Kontrak::all();
        return response()->json($kontrakData);
    }
}
