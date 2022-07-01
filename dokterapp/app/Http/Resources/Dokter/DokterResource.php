<?php

namespace App\Http\Resources\Dokter;

use Illuminate\Http\Resources\Json\JsonResource;

class DokterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nama' =>$this->nama,
            'kategori'=>$this->kategori,
            'jadwal' => JadwalResource::collection($this->jadwal)
        ];
    }
}
