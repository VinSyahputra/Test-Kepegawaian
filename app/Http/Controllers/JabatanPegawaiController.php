<?php

namespace App\Http\Controllers;

use App\Models\JabatanPegawai;
use Illuminate\Http\Request;

class JabatanPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.jabatan.index', [
            'data' => JabatanPegawai::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jabatan.create');
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
            'nama' => 'required',
        ]);

        JabatanPegawai::create($validated);

        return redirect('/jabatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JabatanPegawai  $jabatanPegawai
     * @return \Illuminate\Http\Response
     */
    public function show(JabatanPegawai $jabatanPegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JabatanPegawai  $jabatanPegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(JabatanPegawai $jabatan)
    {
        return view('dashboard.jabatan.edit', [
            'data' => $jabatan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JabatanPegawai  $jabatanPegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JabatanPegawai $jabatan)
    {
        $validated = $request->validate([
            'nama' => 'required',
        ]);

        JabatanPegawai::where('id', $jabatan->id)->update($validated);

        return redirect('/jabatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JabatanPegawai  $jabatanPegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(JabatanPegawai $jabatan)
    {
        JabatanPegawai::destroy($jabatan->id);
        return redirect('/jabatan');
    }

    public function getJabatanData()
    {
        $jabatanData = JabatanPegawai::all();
        return response()->json($jabatanData);
    }
}
