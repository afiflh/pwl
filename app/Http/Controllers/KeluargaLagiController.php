<?php

namespace App\Http\Controllers;

use App\Models\KeluargaLagi;
use Illuminate\Http\Request;

class KeluargaLagiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $klg = KeluargaLagi::all();
        return view('keluarga.keluarga', [
            'klg' => $klg
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keluarga.create_keluarga')
                    ->with('url_form', url('/keluargalagi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'nik' => 'required|string|max:20|',
            'nama' => 'required|string|max:25|',
            'jk' => 'required|in:l,p',
            'tanggal_lahir' => 'required|date',
        ]);

        $data = KeluargaLagi::create($request->except(['_token']));
        return redirect('keluargalagi')
                        ->with('success', 'Data Keluarga Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KeluargaLagi  $keluargaLagi
     * @return \Illuminate\Http\Response
     */
    public function show(KeluargaLagi $keluargaLagi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KeluargaLagi  $keluargaLagi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $klg = KeluargaLagi::find();
        return view('keluarga.create_keluarga')
                    ->with('klg', $klg)
                    ->with('url_form', url('/keluargalagi/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KeluargaLagi  $keluargaLagi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nik' => 'required|string|max:20|',
            'nama' => 'required|string|max:25|',
            'jk' => 'required|in:l,p',
            'tanggal_lahir' => 'required|date',
        ]);

        $data = KeluargaLagi::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('keluargalagi')
                        ->with('success', 'Data Keluarga Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KeluargaLagi  $keluargaLagi
     * @return \Illuminate\Http\Response
     */
    public function destroy(KeluargaLagi $keluargaLagi)
    {
        //
    }
}
