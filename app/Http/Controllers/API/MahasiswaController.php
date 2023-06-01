<?php

namespace App\Http\Controllers\API;


use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\Camaba;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends BaseController
{
    public function getMahasiswa(Request $request): JsonResponse
    {
        $mahasiswa = DB::table('pendaftaran')->select('nama_lengkap', 'nisn', 'email', 'password')->get();

        return $this->sendResponse(Camaba::collection($mahasiswa), 'mahasiswa berhasil singkron');
    }
}
