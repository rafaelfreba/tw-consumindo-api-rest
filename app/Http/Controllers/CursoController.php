<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CursoRepository;

class CursoController extends Controller
{
    public function create(CursoRepository $cursoRepository)
    {
        $cursoRepository->create([
            'name' => 'PHP Fundamentals',
            'language' => 'PHP'
        ]);
    }
}