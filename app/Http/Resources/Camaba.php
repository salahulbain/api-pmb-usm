<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Camaba extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nama'            => $this->nama_lengkap,
            'username'        => $this->nisn,
            'email'           => $this->email,
            'password'        => $this->password,
            'jurusan_pilihan' => $this->jurusan_pilihan,
            'jalur_masuk'     => $this->jalur_masuk,
        ];
    }
}
