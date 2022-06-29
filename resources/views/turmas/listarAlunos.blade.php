
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="/turmas">Voltar</a></div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Lista dos alunos e suas turmas</h1>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Turma</th>
                            <th scope="col">Turno</th>
                            </tr>
                        </thead>
                        <tbody>

                    @foreach( $alunos as $a )

                    <tr>
                            <td>{{$a->id}}</td>
                            <td>{{$a->nome}}</td>
                            <td>{{$a->email}}</td>
                            <td>{{$a->turmas->nome}}</td>
                            <td>{{$a->turmas->turno}}</td>
                           

                            </tr>

                            @endforeach
                        </tbody>
                        </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

