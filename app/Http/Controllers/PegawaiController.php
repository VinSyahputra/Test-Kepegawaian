<?php

namespace App\Http\Controllers;

use App\Models\JabatanPegawai;
use App\Models\Kontrak;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pegawai.index', [
            // 'data' => Pegawai::with(['jabatanPegawai', 'kontrak'])
            'data' => Pegawai::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pegawai.create');
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
            'username' => 'required|unique:pegawais',
            'password' => 'required|min:6',
            'jabatan_pegawais_id' => 'required',
            'kontraks_id' => 'required',
        ]);

        $request['password'] = bcrypt($request['password']);
        Pegawai::create($validated);

        return redirect('/pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        return view('dashboard.pegawai.edit', [
            'pegawai' => $pegawai,
            'data_kontrak' => Kontrak::all(),
            'data_pegawai' => JabatanPegawai::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'jabatan_pegawais_id' => 'required',
            'kontraks_id' => 'required',
        ]);
        Pegawai::where('id', $pegawai->id)->update($validated);

        return redirect('/pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        Pegawai::destroy($pegawai->id);
        return redirect('/pegawai');
    }
}
