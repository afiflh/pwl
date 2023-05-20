<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PDF;
use PDO;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = MahasiswaModel::with('kelas')->get();
        // $paginate = MahasiswaModel::get('id_mahasiswa', 'asc')->paginate(3);
        return view('mahasiswa.mahasiswa', ['mhs' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('mahasiswa.create_mahasiswa', [
            'url_form' => url('/mahasiswa'),
            'kelas' => $kelas
        ]);
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
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'foto' => 'requared|image|max:2048',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15',
        ]);

        $imageName = time().'.'.$request->foto->extension();  
        $request->foto->move(public_path('storage'), $imageName);


        $mahasiswa = new MahasiswaModel;
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->foto = $imageName;
        $mahasiswa->jk = $request->get('jk');
        $mahasiswa->tempat_lahir = $request->get('tempat_lahir');
        $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        $mahasiswa->alamat = $request->get('alamat');
        $mahasiswa->hp = $request->get('hp');

        $kelas = new Kelas;
        $kelas->id = $request->get('kelas');

        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save();

        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }
        // $data = MahasiswaModel::create($request->except(['_token']));
        // //jika data berhasil ditambahkan, akan kembali ke halaman utama
        // return redirect('mahasiswa')
        //     ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($nim)
    {
        //menampilkan detail data berdasarkan Nim Mahasiswa
        //code sebelum dibuat relasi --> $mahasiswa = Mahasiswa ::find($nim);
        $mahasiswa = MahasiswaModel::with('kelas')->where('nim', $nim)->first();

        // return view('')
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = MahasiswaModel::with('kelas')->find($id);
        $kelas = Kelas::all();
        return view('mahasiswa.create_mahasiswa', [
            'mhs' => $mahasiswa,
            'kelas' => $kelas,
            'url_form' => url('/mahasiswa/' . $id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,'.$id,
            'nama' => 'required|string|max:50',
            'foto' => 'required',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15'
        ]);

        $mahasiswa = MahasiswaModel::with('kelas')->find($id);
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->jk = $request->get('jk');
        $mahasiswa->tempat_lahir = $request->get('tempat_lahir');
        $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        $mahasiswa->alamat = $request->get('alamat');
        $mahasiswa->hp = $request->get('hp');
        $mahasiswa->save();

        if($request->file('foto')){
            // hapus foto lama jika ada foto baru yang diupload
            if($mahasiswa->foto && file_exists(storage_path('app/public/'.$mahasiswa->foto))){
                Storage::delete('public/'.$mahasiswa->foto);
            }
            // simpan foto baru ke direktori penyimpanan
            $file = $request->file('foto');
            $nama_file = $file->getClientOriginalName();
            $file->storeAs('public/foto', $nama_file);
            // simpan nama file foto ke dalam kolom 'foto' pada tabel 'mahasiswas'
            $mahasiswa->foto = $nama_file;
        }              
        $image_name = $request->file('foto')->store('images', 'public');
        $mahasiswa->foto = $image_name;

        $kelas = new Kelas;
        $kelas->id = $request->get('kelas');

        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save();

        return redirect('mahasiswa')->with('success', 'Mahasiswa Berhasil Diedit');
    }
        // $data = MahasiswaModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        //     return redirect('mahasiswa')
        //     ->with('success', 'Mahasiswa Berhasil Diedit');
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MahasiswaModel::where('id', '=', $id)->delete();
        return redirect('mahasiswa')
        ->with('success', 'Mahasiswa Berhasil Dihapus');
    }

    public function showKhs(MahasiswaModel $mahasiswa, $id){
        $mahasiswa = MahasiswaModel::with('kelas', 'matakuliah')->find($id);
        $khs = $mahasiswa->matakuliah()->withPivot('nilai')->get();
        return view('mahasiswa.khs', [
            'mahasiswa' => $mahasiswa,
            'khs' => $khs
        ]);
    }

    public function eksporKhs($id){
        $mahasiswa = MahasiswaModel::with('matakuliah')->where('id', $id)->first();
        $nilai = DB::table('mahasiswa_matakuliah')
                    ->join('matakuliah', 'matakuliah.id', '=', 'mahasiswa_matakuliah.matakuliah_id')
                    ->where('mahasiswa_matakuliah.mahasiswa_id', $id)
                    ->select('nilai')
                    ->get();

        $pdf = PDF::loadView('mahasiswa.khs_pdf', ['mahasiswa' => $mahasiswa, 'nilai' => $nilai]);
        return $pdf->download('KHS ' . $mahasiswa->nama . '.pdf'); 
    }
}
