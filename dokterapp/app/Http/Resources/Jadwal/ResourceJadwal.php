<?php

namespace App\Http\Resources\Jadwal;

use App\Http\Resources\Dokter\DokterResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ResourceJadwal extends JsonResource
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
            'hari' => $this->hari,
            'jam' => $this->jam,
            'dokter' => new ResourceDokter($this->dokter)
        ];
    }
}
