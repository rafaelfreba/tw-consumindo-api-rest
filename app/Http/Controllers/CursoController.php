<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CursoRepository;

class CursoController extends Controller
{
    public CursoRepository $cursoRepository;

    public function __construct(CursoRepository $cursoRepository)
    {
        $this->cursoRepository = $cursoRepository;
    }

    public function list()
    {
        $cursos = $this->cursoRepository->list();

        dd($cursos);

    }
    
    public function show()
    {
        $curso = $this->cursoRepository->show('mTzO7KEWuUT5xRc3');

        dd($curso);

    }

    public function create()
    {
        $resposta = $this->cursoRepository->create([
            'name' => 'PHP OO parte 2',
            'language' => 'PHP'
        ]);

        return $resposta ? 'criado com sucesso' : 'erro ao criar';
    }
    
    public function update()
    {
        $resposta = $this->cursoRepository->update('mTzO7KEWuUT5xRc3',[
            'name' => 'PHP Orientado a Objetos',
            'language' => 'PHP'
        ]);

        return $resposta ? 'atualizado com sucesso' : 'erro ao criar';
    }
    
    public function delete()
    {
        $resposta = $this->cursoRepository->delete('K1d2rt6VZ8h0o6Bo');

        return $resposta ? 'deletado com sucesso' : 'erro ao criar';
    }
}
