<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::with('pasien')->get();

        return response()->json(['message' => 'Succes',
           'data' => $pendaftaran,
            ],200);
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
//        dd($request->all());
        $pasien = new Pasien();
        $pasien->nama = $request->pasien['nama'];
        $pasien->alamat = $request->pasien['alamat'];
        $pasien->jenis_kelamin = $request->pasien['jenis_kelamin'];
        $pasien->kontak = $request->pasien['kontak'];
        $pasien->usia = $request->pasien['usia'];
        $pasien->save();


        $pendaftaran = array(
            'id_pasien' => $pasien->id,
            'layanan' => $request->layanan
        );

        Pendaftaran::create($pendaftaran);

        return response()->json([
            'message' => 'Success'
        ],200);


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function showByPasien(){
        $pasien = Pasien::with('pendaftaran')->get();
        return response()->json(['message' => 'Succes',
            'data' => $pasien,
        ],200);
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
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->delete();
    }
}
