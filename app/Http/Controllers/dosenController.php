<?php

namespace App\Http\Controllers;
use App\dosen;
use Auth;
use Illuminate\Http\Request;

class dosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = \App\dosen::paginate(5);
        return view('dosen.index', ['dosen' => $dosen]);
    }
     
    // soal 1 implemetasi crud
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dosen.create');
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
            'nama_dosen' => 'required',
            'email' => 'required',
            ]);  //implementasi form validation & request

        dosen::create($request->all());
        // soal 1 implemetasi crud
        return 'Data dosen berhasil ditambah';
       
  
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
    public function edit(Dosen $dosen)
    {
        return view ('dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dosen $dosen)
    {
        $dosen->update($request->all());

        return "Data berhasil di update";
       // soal 1 implemetasi crud
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(dosen $dosen)
    {
        $dosen->delete();

        return "Data dosen berhasil dihapus";

        // soal 1 implemetasi crud
    }
}

//soal 1 implementasi resource controller &crud