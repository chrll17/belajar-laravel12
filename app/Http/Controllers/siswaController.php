<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\Siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data_siswa = [
        //     ['nama'=>'irul','nilai'=>80,'id'=>'001'],
        //     ['nama'=>'anwar','nilai'=>50,'id'=>'002']
        // ];

        // $data_siswa=Siswa::all(); //mengambil semua data dari model (model mengambil data dari database)

        $data_siswa=Siswa::orderby('nilai','desc')->paginate(10); //mengambil data dari model (model mengambil data dari database) dari urutan nilai terbesar ||| 'paginate' untuk pagination 

        return view('siswa.index', ['data_siswa' => $data_siswa]); //mengirim data ke view dengan array asosiatif
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mentors=Mentor::all();
        return view('siswa.create', ['mentors'=>$mentors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        siswa::create([
            'nama'=>$request['nama'],
            'tgl_lahir'=>$request['tgl_lahir'],
            'jurusan'=>$request['jurusan'],
            'nilai'=>$request['nilai'],
            'mentor_id'=>$request['mentor_id'],
        ]);
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa=Siswa::with('mentor')->findorfail($id); //with('mentor') = satu kali query pada siswa.id, findorfail($id) = menangkap data id yg dikirim dari siswa.index
        return view('siswa.id', ['siswa' => $siswa]); //mengirim data ke view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
