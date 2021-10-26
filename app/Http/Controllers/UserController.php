<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Karyawan;
use Illuminate\Http\Request;
//panggil model
//use App\Karyawan;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        $jabatan = Jabatan::all();

        return view('karyawan.karyawan', ['karyawan' => $karyawan, 'jabatan' => $jabatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //echo "ini adalah halaman tambah";
        $jabatan = Jabatan::all();
        return view('karyawan.tambah', ['jabatan' => $jabatan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //var_dump($request);
        $this->validate($request, [
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jabatan' => 'required'
        ]);
        Karyawan::create([
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => $request->password,
            'id_jabatan' => $request->jabatan
        ]);
        return redirect('/karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //echo "ini halaman show";
        $karyawan = Karyawan::where('id', $id)->get();
        return view('karyawan.detail', ['karyawan' => $karyawan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatan = Jabatan::all();
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit', ['jabatan' => $jabatan, 'karyawan' => $karyawan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jabatan' => 'required'
        ]);

        $karyawan = Karyawan::find($id);
        $karyawan->nama = $request->nama;
        $karyawan->tgl_lahir = $request->tgl_lahir;
        $karyawan->alamat = $request->alamat;
        $karyawan->email = $request->email;
        $karyawan->password = $request->password;
        $karyawan->id_jabatan = $request->jabatan;
        $karyawan->save();
        return redirect('/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan');
    }
}