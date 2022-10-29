<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $siswa = Siswa::orderBy('no_pendaftaran', 'desc')->first();
        // $siswas = Siswa::orderBy('no_pendaftaran', 'desc')->paginate(20);
        return view('daftar', compact('siswa'));
    }

    public function create()
    {
        $agama = Agama::orderBy('id', 'asc')->paginate(10);
        return view('create', compact('agama'));
    }

    // store data todatabase
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->asal_sekolah = $request->asal_sekolah;
        $siswa->agama_id = $request->agama_id;
        $siswa->nilai_ind = $request->nilai_ind;
        $siswa->nilai_ipa = $request->nilai_ipa;
        $siswa->nilai_mtk = $request->nilai_mtk;

        $siswa->save();

        return redirect()->route('siswa.index')->with('success', 'Anggota has been created successfully.');
    }
}