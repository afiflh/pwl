<?php

namespace App\Http\Controllers;

use App\Models\Hobi;
use App\Models\HobiModel;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hobi = HobiModel::all();
        return view('hobi.hobi', [
            'hobi' => $hobi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hobi.create_hobi')
                    ->with('url_form', url('/hobis'));
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
            'nama_hobi' => 'required|string|max:25|',
            'kategori_hobi' => 'required|string|max:25|',
            'deskripsi' => 'required|string|max:50|',
        ]);

        $data = HobiModel::create($request->except(['_token']));
        return redirect('hobis')
                ->with('success', 'Hobi Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function show(HobiModel $hobi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hobi = HobiModel::find($id);
        return view('hobi.create_hobi')
                ->with('hobi', $hobi)
                ->with('url_form', url('/hobis/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_hobi' => 'required|string|max:25|',
            'kategori_hobi' => 'required|string|max:25|',
            'deskripsi' => 'required|string|max:50|',
        ]);

        $data = HobiModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('hobis')
        ->with('success', 'Hobi Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HobiModel::where('id', '=', $id)->delete();
        return redirect('hobis')
        ->with('success', 'Data Hobi Berhasil Dihapus');
    }
}
