<?php

namespace App\Http\Controllers;
use DB;
use App\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.index', ['pegawai' => $pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
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
            'id_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'nip' => 'required',
            'alamat' => 'required',
        ]);
        Pegawai::create($request->all());
        return redirect()->route('pegawai.index')
                        ->with('success','SUKSES');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pegawai)
    {
        $data = DB::table('pegawai')->where('id_pegawai',$id_pegawai)->first();
        return view('pegawai/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $data = DB::table('pegawai')->where('id_pegawai',$request->id_pegawai)->update([
            'id_pegawai' => $request->id_pegawai,
            'nama_pegawai' => $request->nama_pegawai,
            'nip' => $request->nip,
            'alamat' => $request->alamat
        ]);

        return redirect('/alamat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pegawai)
    {
        DB::table('pegawai')->where('id_pegawai',$id_pegawai)->delete();
        return redirect('/pegawai')->with('success','BERHASIL DI HAPUS!!!');
    }
}
