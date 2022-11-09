<?php

namespace App\Http\Controllers;


use App\Models\Ijasah;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function find(Request $req)
    {

       $siswa = Ijasah::where('nisn', $req->nisn)->where('nama_ibu', $req->nama_ibu)->first();
       if(!$siswa){
        return back();
       }
       else{

           return view('siswa.dashboard', compact('siswa'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit( $Ijasah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ijasah  $Ijasah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $Ijasah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ijasah  $Ijasah
     * @return \Illuminate\Http\Response
     */
    public function destroy( $Ijasah)
    {
        //
    }
}
