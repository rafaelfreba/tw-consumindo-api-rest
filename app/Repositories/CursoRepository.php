<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class CursoRepository
{
    public function create(array $data)
    {
        Http::post('http://localhost:3002/api/treinaweb/curso', $data);
    }
}
