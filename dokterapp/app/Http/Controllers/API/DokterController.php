<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Dokter\DokterResource;
use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dokter::with('jadwal')->get();
        $collection = DokterResource::collection($data);
        return response()->json(['message'=>'Success',
            'data' => $collection],200);
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
        $request->validate(
            [
                'nama' => 'required',
                'kategori' => 'required',

            ]);
       $dokter = Dokter::create($request->all());

        return response()->json(['message' => 'Success',
            'data' => $dokter],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dokter = Dokter::with('jadwal')->where('id',$id)->first();
        $collection = new DokterResource($dokter);
        return response()->json(['message' => 'Success',
            'data' => $collection],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dokter = Dokter::find($id);
        $resource = new DokterResource($dokter);
        return response()->json(['message' => 'Success',
            'data' => $resource]);
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
        $dokter = Dokter::find($id);

        $dokter->update($request->all());


        return response()->json([
            'message' => 'Success',
            'data' => $dokter
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter = Dokter::find($id);

        $dokter->delete();

        return response()->json([
            'message' => 'Deleted',
            'data' => $dokter
        ],200);
    }
}
