<?php

namespace App\Http\Resources\Jadwal;

use Illuminate\Http\Resources\Json\JsonResource;

class ResourceDokter extends JsonResource
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
            'nama'=> $this->nama,
            'kategori' => $this->kategori
        ];
    }
}
