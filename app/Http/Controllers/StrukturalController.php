<?php

namespace App\Http\Controllers;

use App\Desa;
use App\Struktural;
use Illuminate\Http\Request;

class StrukturalController extends Controller
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
        return view('admin.tambah_struktur', [
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
            'jabatan' => 'required',
            'nip' => 'required|unique:strukturals',
            'nama' => 'required',
            'desa_id' => 'required'
        ]);

        Struktural::create($validasi);

        return back()->with('berhasil', 'Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Struktural  $struktural
     * @return \Illuminate\Http\Response
     */
    public function show(Struktural $struktural)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Struktural  $struktural
     * @return \Illuminate\Http\Response
     */
    public function edit(Struktural $struktural)
    {
        return view('admin.struktural', [
            "struktural" => $struktural
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Struktural  $struktural
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Struktural $struktural)
    {
        $validasi = $request->validate([
            'jabatan' => 'required',
            'nip' => 'required',
            'nama' => 'required'
        ]);

        Struktural::where('id', $struktural->id)->update($validasi);

        return back()->with('berhasil', 'Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Struktural  $struktural
     * @return \Illuminate\Http\Response
     */
    public function destroy(Struktural $struktural)
    {
        Struktural::destroy($struktural->id);

        return back();
    }
}
