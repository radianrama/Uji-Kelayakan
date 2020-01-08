<?php

namespace App\Http\Controllers;
use DB;
use App\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('peminjaman.index', ['peminjaman' => $peminjaman]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peminjam = Peminjaman::all();
        return view('peminjaman.create', ['peminjaman' => $peminjam]);
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
            'id_peminjaman' => 'required',
            'tgl_peminjaman' => 'required',
            'tgl_kembali' => 'required',
            
            'id_pegawai' => 'required',
            ]);
            Peminjaman::create($request->all());
            return redirect()->route('peminjaman.index')
                            ->with('success','SUKSES');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id_peminjaman)
    {
        $data = DB::table('peminjaman')->where('id_peminjaman',$id_peminjaman)->first();
        return view('peminjaman/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $data = DB::table('peminjaman')->where('id_peminjaman',$request->id_peminjaman)->update([
            'id_peminjaman' => $request->id_peminjaman,
            'tgl_peminjaman' => $request->tgl_peminjaman,
            'tgl_kembali' => $request->tgl_kembali,
            'status_peminjaman' => $request->status_peminjaman,
            'id_pegawai' => $request->id_pegawai,
        ]);
           
            return redirect('/peminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_peminjaman)
    {
        DB::table('peminjaman')->where('id_peminjaman',$id_peminjaman)->delete();
        return redirect('/peminjaman')->with('success','BERHASIL DIHAPUS');
    }
}
