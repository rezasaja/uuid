<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NamaResource extends JsonResource
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
            'Nama' => $this->nama,
            'Alamat' => $this->alamat,
        ];
    }
}
