<?php

namespace App\Http\Controllers;
use DB;
use App\Inventaris;
use App\Jenis;
use App\Ruang;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventaris = Inventaris::all();
        return view('inventaris.index', ['inventaris' => $inventaris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inv = Inventaris::all();
        return view('inventaris.create', ['inventaris' => $inv]);
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
            'id_inventaris' => 'required',
            'nama' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
            'id_jenis' => 'required',
            'tgl_register' => 'required',
            'id_ruang' => 'required',
            'kode_inventaris' => 'required',
            'id_petugas' => 'required'
            ]);
            Inventaris::create($request->all());
            return redirect()->route('inventaris.index')
                            ->with('success','SUKSES');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function show(Inventaris $inventaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function edit($id_inventaris)
    {
        $data = DB::table('investaris')->where('id_inventaris',$id_inventaris)->first();
        return view('inventaris/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventaris $inventaris)
    {
        $data = DB::table('investaris')->where('id_inventaris',$request->id_inventaris)->update([
            'id_inventaris' => $request->id_inventaris,
            'nama' => $request->nama,
            'kondisi' => $request->kondisi,
            'keterangan' => $request->keterangan,
            'jumlah' => $request->jumlah,
            'id_jenis' => $request->id_jenis,
            'tgl_register' => $request->tgl_register,
            'id_ruang' => $request->ruang,
            'kode_inventaris' => $request->kode_inventaris,
            'id_petugas' => $request->petugas,
        ]);
           
            return redirect('/inventaris');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_inventaris)
    {
        DB::table('investaris')->where('id_inventaris',$id_inventaris)->delete();
        return redirect('/inventaris')->with('success','BERHASIL DI HAPUS!!!');
    }
}
