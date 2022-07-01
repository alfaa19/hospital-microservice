<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Rawatinap;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RawatinapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Rawatinap::all();
        foreach ($data as $tf){
           $var = Http::get('localhost:8001/api/pasien/'.$tf->id_passien)->json();
           $res[] = [
               'id' => $tf->id,
               'kelas' => $tf->jenis_kamar,
               'diagnosa' => $tf->diagnosa,
               'lama dirawat' => $tf->lama_dirawat,
               'pasien' => [
                   'nama' => $var['data']['nama'],
                   'alamat'=> $var['data']['Alamat'],
                   'kontak' => $var['data']['kontak'],
                   'jenis_kelamin'=> $var['data']['jenis_kelamin'],
                   'usia' => $var['data']['usia']
               ]
           ];
      }
      return  response()->json([
          'message' => 'success',
          'data' => $res
      ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->validate([
//        'id_passien' => 'required',
//            'kelas' => 'required',
//            'diagnosa' => 'required'
//        ]);
        $data = Rawatinap::create($request->all());

        return response()->json(['message' => 'Success', 'data' => $data ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Rawatinap::find($id);
        $req = Http::get('localhost:8001/api/pasien/'.$data->id_passien);
        $res[] = [
            'id' => $data->id,
            'kelas' => $data->jenis_kamar,
            'diagnosa' => $data->diagnosa,
            'lama_dirawat' => $data->lama_dirawat,
            'pasien' => [
                'id' => $req['data']['id'],
                'nama' => $req['data']['nama'],
                'alamat'=> $req['data']['Alamat'],
                'kontak' => $req['data']['kontak'],
                'jenis_kelamin'=> $req['data']['jenis_kelamin'],
                'usia' => $req['data']['usia']
        ]];

        return  $res;
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
        $data = Rawatinap::find($id);
        $data->update($request->all());

        return response()->json(['message'=>'Success',
            'data'=>$data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Rawatinap::find($id);
        $data->delete();

        return response()->json(['message' => 'Deleted']);
    }
}
