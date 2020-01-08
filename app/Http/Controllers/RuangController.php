<?php

namespace App\Http\Controllers;
use DB;
use App\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruang = Ruang::all();
        return view('ruang.index', ['ruang' => $ruang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruang.create');
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
            'id_ruang' => 'required',
            'nama_ruang' => 'required',
            'kode_ruang' => 'required',
            'keterangan' => 'required',
        ]);
        Ruang::create($request->all());
        return redirect()->route('ruang.index')
                        ->with('success','SUKSES');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function show(Ruang $ruang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function edit($id_ruang)
    {
        $data = DB::table('ruang')->where('id_ruang',$id_ruang)->first();
        return view('ruang/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruang $ruang)
    {
        $data = DB::table('ruang')->where('id_ruang',$request->id_ruang)->update([
            'id_ruang' => $request->id_ruang,
            'nama_ruang' => $request->nama_ruang,
            'kode_ruang' => $request->kode_ruang,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/ruang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ruang $ruang)
    {
        DB::table('ruang')->where('id_ruang',$id_ruang)->delete();
        return redirect('/ruang')->with('success','BERHASIL DI HAPUS!!!');
    }
}
