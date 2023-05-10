@extends('layout.base')

@section('conteudo')
    <h1>Lista de Repositórios do Github</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">URL</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($repositorios as $repo)
                <tr>
                    <th scope="row">{{ $repo['id'] }}</th>
                    <th scope="row">{{ $repo['name'] }}</th>
                    <th scope="row">{{ $repo['url'] }}</th>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Nenhum repositório encontrado!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
