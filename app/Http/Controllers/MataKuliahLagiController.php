<?php

namespace App\Http\Controllers;

use App\Models\MataKuliahLagi;
use Illuminate\Http\Request;

class MataKuliahLagiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matkul = MataKuliahLagi::all();
        return view('matakuliah.matakuliah', [
            'matkul' => $matkul
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matakuliah.create_matakuliah')
                    ->with('url_form', url('/matakuliahlagi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:30|',
            'dosen' => 'required|string|max:50|',
            'sks' => 'required|integer|',
        ]);

        $data = MataKuliahLagi::create($request->except(['_token']));
        return redirect('matakuliahlagi')
                        ->with('success', 'Data Matkul Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MataKuliahLagi  $mataKuliahLagi
     * @return \Illuminate\Http\Response
     */
    public function show(MataKuliahLagi $mataKuliahLagi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MataKuliahLagi  $mataKuliahLagi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matkul = MataKuliahLagi::find($id);
        return view('matakuliah.create_matakuliah')
                    ->with('matkul', $matkul)
                    ->with('url_form', url('/matakuliahlagi/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MataKuliahLagi  $mataKuliahLagi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:30|',
            'dosen' => 'required|string|max:50|',
            'sks' => 'required|integer|',
        ]);

        $data = MataKuliahLagi::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('matakuliahlagi')
                        ->with('success', 'Data Mata Kuliah Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MataKuliahLagi  $mataKuliahLagi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MataKuliahLagi::where('id', '=', $id)->delete();
        return redirect('matakuliahlagi')
                    ->with('success', 'Data Mata Kuliah Telah Dihapus');
    }
}
