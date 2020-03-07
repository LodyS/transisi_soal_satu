<?php

namespace App\Http\Controllers;
use App\mahasiswa;
use App\dosen;
use DB;
use Auth;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')
                    ->join('dosen', 'dosen.nid', '=', 'mahasiswa.nid_dosen_pembimbing')
                    ->select('nim','nama_mahasiswa', 'jurusan', 'dosen.nama_dosen')
                    ->paginate(5);  // soal 1 implementasi  eloquent & relantionship

        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = DB::table('dosen')
                    
                    ->select('nid as nid_dosen_pembimbing', 'nama_dosen' )
                    ->get();
        return view ('mahasiswa.create', ['dosen'=>$dosen]);
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
            'nama_mahasiswa'       => 'required',
            'jurusan'              => 'required',
            'nid_dosen_pembimbing' => 'required',
            ]);

        mahasiswa::create($request->all());
   
        return 'Data mahasiswa berhasil ditambah';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        
        return view ('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        $mahasiswa->update($request->all());

        return "Data berhasil di update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return "Data mahasiswa berhasil dihapus";
    }
}


//soal 1 implementasi resource controller &crud