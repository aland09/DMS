<?php

namespace App\Http\Controllers;

use App\Models\DetailDokumen;
use Illuminate\Http\Request;
use App\Exports\DetailDokumenExport;
use Maatwebsite\Excel\Facades\Excel;

class DetailDokumenController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);

        if ($request->hasFile('file_dokumen')){
            $filenameWithExt = $request->file('file_dokumen')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file_dokumen')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('file_dokumen')->storeAs('public/dokumen_arsip', $filenameSimpan);
            $data['file_dokumen'] = 'dokumen_arsip/'.$filenameSimpan;
        }

        DetailDokumen::create($data);
        return redirect()->route('data-arsip.index')->with('message','Data isi arsip berhasil ditambahkan');
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\DetailDokumen  $detail_data_arsip
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, DetailDokumen $detail_data_arsip)
    {
        // $rules = [
        //     'dokumen_id' => 'required',
        //     'kode_klasifikasi' => 'required',
        //     'uraian' => 'required',
        //     'tanggal_validasi' => 'required',
        //     'jumlah_satuan_item' => 'required',
        //     'keterangan' => 'required',
        //     'no_spm' => 'required',
        //     'no_sp2d' => 'required',
        //     'nominal' => 'required',
        //     'skpd' => 'required',
        //     'pejabat_penandatangan' => 'required',
        //     'unit_pengolah' => 'required',
        //     'kurun_waktu' => 'required',
        //     'jumlah_satuan_berkas' => 'required',
        //     'tkt_perkemb' => 'required',
        //     'no_box' => 'required',
        //     'file_dokumen' => 'required',
        // ];    

        $data = $request->except(['_token','_method']);

        if ($request->hasFile('file_dokumen')){
            $filenameWithExt = $request->file('file_dokumen')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file_dokumen')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('file_dokumen')->storeAs('public/dokumen_arsip', $filenameSimpan);
            $data['file_dokumen'] = 'dokumen_arsip/'.$filenameSimpan;
        }

        DetailDokumen::where('id', $detail_data_arsip->id)->update($data);

        return redirect()->route('data-arsip.index')->with('message','Data arsip berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailDokumen  $penempatan_murid
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailDokumen $detail_data_arsip)
    {
        DetailDokumen::destroy($detail_data_arsip->id);
        return redirect()->route('data-arsip.index')->with('message', 'Data arsip berhasil dihapus');
    }

    public function export_excel($ext)
    {
        return Excel::download(new DetailDokumenExport, 'daftar-isi-arsip.'.$ext);
    }
}
