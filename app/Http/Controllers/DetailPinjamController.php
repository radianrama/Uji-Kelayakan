<?php

namespace App\Http\Controllers;
use DB;
use App\DetailPinjam;
use Illuminate\Http\Request;

class DetailPinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dp = DetailPinjam::all();
        return view('detailpinjam.index', ['detailpinjam' => $dp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detail = DetailPinjam::all();
        return view('detailpinjam.create', ['detailpinjam' => $detail]);
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
           
            'id_detail_pinjam' => 'required',
            'id_inventaris' => 'required',
            'jumlah' => 'required',
            
        ]);
        DetailPinjam::create($request->all());
        return redirect()->route('detailpinjam.index')
                        ->with('success','SUKSES');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetailPinjam  $detailPinjam
     * @return \Illuminate\Http\Response
     */
    public function show(DetailPinjam $detailPinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetailPinjam  $detailPinjam
     * @return \Illuminate\Http\Response
     */
    public function edit($id_detail_Pinjam)
    {
        $data = DB::table('detail_pinjams')->where('id_detail_pinjam',$id_detail_Pinjam)->first();
        return view('detailpinjam/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetailPinjam  $detailPinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailPinjam $detailPinjam)
    {
        $data = DB::table('detail_pinjams')->where('id_detail_pinjam',$request->id_detail_pinjam)->update([
            'id_detail_pinjam' => $request->id_detail_pinjam,
            'id_inventaris' => $request->id_inventaris,
            'jumlah' => $request->jumlah
            
        ]);

        return redirect('/detailpinjam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailPinjam  $detailPinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailPinjam $detailPinjam)
    {
        DB::table('detail_pinjams')->where('id_detail_pinjam',$id_detail_Pinjam)->delete();
        return redirect('/detailpinjam')->with('success','BERHASIL DI HAPUS!!!');
    }
}
