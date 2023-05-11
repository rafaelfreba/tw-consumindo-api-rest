<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class CursoRepository
{
    public function list()
    {
        $response = Http::get('http://localhost:3002/api/treinaweb/curso');

        return $response->successful() ? $response->json() : [];
    }
    
    public function show(string $id)
    {
        $response = Http::get("http://localhost:3002/api/treinaweb/curso?id={$id}");

        return $response->successful() ? $response->json() : [];
    }

    public function create(array $data)
    {
        $response = Http::post('http://localhost:3002/api/treinaweb/curso', $data);

        return $response->successful();
    }

    public function update(string $id, array $data)
    {
        $response = Http::put("http://localhost:3002/api/treinaweb/curso?id={$id}", $data);

        return $response->successful();
    }
    
    public function delete(string $id)
    {
        $response = Http::delete("http://localhost:3002/api/treinaweb/curso?id={$id}");

        return $response->successful();
    }
}
