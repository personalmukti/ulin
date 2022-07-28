<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KelembagaanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'desa' => $this->desa,
            'bpd' => $this->bpd,
            'lkd' => $this->lkd,
            'pkk' => $this->pkk,
            'rt' => $this->rt,
            'rw' => $this->rw,
            'posyandu' => $this->posyandu,
            'karangtaruna' => $this->karangtaruna,
            'bumdes' => $this->bumdes,
            'lpm' => $this->lpm,
            'keterangan' => $this->keterangan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
