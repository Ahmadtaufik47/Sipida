<?php

namespace App\Http\Controllers;

use App\Desa;
use App\InfoDesa;
use Illuminate\Http\Request;

class InfoDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah_info', [
            'list_desa' => Desa::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'judul' => 'required|unique:info_desas',
            'isi' => 'required',
            'desa_id' => 'required'
        ]);

        InfoDesa::create($validasi);

        return back()->with('berhasil', 'Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InfoDesa  $infoDesa
     * @return \Illuminate\Http\Response
     */
    public function show(InfoDesa $infoDesa)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InfoDesa  $infoDesa
     * @return \Illuminate\Http\Response
     */
    public function edit(InfoDesa $infoDesa)
    {
        return view('admin.edit_info', [
            'info_desa' => $infoDesa,
            'list_desa' => Desa::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InfoDesa  $infoDesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InfoDesa $infoDesa)
    {
        $validasi = $request->validate([
            'desa_id' => 'required',
            'judul' => 'required',
            'isi' => 'required',
        ]);

        InfoDesa::where('id', $infoDesa->id)->update($validasi);

        return back()->with('berhasil', 'Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InfoDesa  $infoDesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(InfoDesa $infoDesa)
    {
        InfoDesa::destroy($infoDesa->id);

        return back();
    }
}
