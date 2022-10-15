<?php

namespace App\Http\Controllers;

use App\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Desa $desa)
    {
        return view('desa', [
            'list_desa' => Desa::all(),
            'data_desa' => $desa,
            'struktur_desa' => $desa->struktural,
            'info_desa' => $desa->info_desa
        ]);
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
     * @param  \App\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function show(Desa $desa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function edit(Desa $desa)
    {
        return view('admin.vmedit', [
            'desa' => $desa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desa $desa)
    {
        $validasi = $request->validate([
            'visi' => 'required',
            'misi' => 'required'
        ]);

        Desa::where('id', $desa->id)->update($validasi);

        return back()->with('berhasil', 'Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desa $desa)
    {
        //
    }

    public function editImg(Desa $desa)
    {
        return view('admin.edit_img', [
            'desa' => $desa
        ]);
    }

    public function updateImg(Request $request, Desa $desa)
    {
        $validasi = $request->validate([
            'img_desa' => 'image|file|max:2048',
            'img_kades' => 'image|file|max:1024'
        ]);

        if ($request->file('img_desa')) {
            if ($request->old_img_desa) {
                Storage::delete($request->old_img_desa);
            }
            $validasi['img_desa'] = $request->file('img_desa')->store('gambar-desa');
        }

        if ($request->file('img_kades')) {
            if ($request->old_img_kades) {
                Storage::delete($request->old_img_kades);
            }
            $validasi['img_kades'] = $request->file('img_kades')->store('gambar-kades');
        }

        Desa::where('id', $desa->id)->update($validasi);

        return back()->with('berhasil', 'Berhasil Diubah');
    }
}
