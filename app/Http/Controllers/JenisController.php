<?php

namespace App\Http\Controllers;
use DB;
use App\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $jeniss = Jenis::all();
        return view('jenis.index', ['jenis' => $jeniss]);
        // return view('jenis.index',compact('jenis'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis.create');
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
            // 'id_anggota' => 'required',
            'id_jenis' => 'required',
            'nama_jenis' => 'required',
            'kode_jenis' => 'required',
            'keterangan' => 'required',
        ]);
        Jenis::create($request->all());
        return redirect()->route('jenis.index')
                        ->with('success','SUKSES');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function show(Jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function edit($id_jenis)
    {
        $data = DB::table('jenis')->where('id_jenis',$id_jenis)->first();
        return view('jenis/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenis $jenis)
    {
        $data = DB::table('jenis')->where('id_jenis',$request->id_jenis)->update([
            'id_jenis' => $request->id_jenis,
            'nama_jenis' => $request->nama_jenis,
            'kode_jenis' => $request->kode_jenis,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/jenis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_jenis)
    {
        DB::table('jenis')->where('id_jenis',$id_jenis)->delete();
        return redirect('/jenis')->with('success','BERHASIL DI HAPUS!!!');
    }
}
