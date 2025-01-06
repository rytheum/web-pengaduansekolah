<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\InputAspirasi;
use App\Models\Siswa;
use Illuminate\Http\Request;


class InputAspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inputaspirasis = InputAspirasi::latest()->get();
        return view('pages.inputaspirasi.index', compact('inputaspirasis'));
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
        $this->validate($request, [
            'nis' => 'required',
            'kategori_id' => 'required',
            'lokasi' => 'required',
            'keterangan' => 'required',
            'foto' => 'required',
        ]);

        $foto = $request->file('foto');
        $name = time() . '.' . $foto->getClientOriginalExtension();
        $destinationPath = public_path('/foto');
        $foto->move($destinationPath, $name);

        if(Siswa::get()->where('nisn',$request->nisn)->count()>0){
            InputAspirasi::create([
                'nis' => $request->get('nis'),
                'kategori_id' => $request->get('kategori_id'),
                'lokasi'=>$request->get('lokasi'),
                'keterangan'=>$request->get('keterangan'),
                'foto'=>$name,
            ]);
            
            return redirect('/#lapor')->with('message', 'Pengaduan Berhasil Ditambahkan');
        }else{
            return redirect('/#lapor')->with('message', 'NISN belum terdaftar. Harap hubungi Admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inputaspirasi = InputAspirasi::find($id);
        return view('pages.inputaspirasi.detail', compact('inputaspirasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function laporan()
    {
        $inputaspirasis = InputAspirasi::latest()->get();
        return
            view('pages.inputaspirasi.laporan', compact('inputaspirasis'));
    }

    public function pdf()
    {
        $inputaspirasis = InputAspirasi::latest()->get();
        $pdf = PDF::loadview('pages.inputaspirasi.pdf', compact('inputaspirasis'));
        return $pdf->download('laporan.pdf');
    }

    public function profil(){
        return view('profil');
    }

    public function search(){
        $inputaspirasis = InputAspirasi::latest()->get();
        return view('search', compact('inputaspirasis'));
    }
}
