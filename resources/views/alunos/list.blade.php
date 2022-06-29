@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="/alunos/new">Novo Aluno</a></div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Lista dos Alunos</h1>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Escola</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Turma</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Deletar</th>
                            </tr>
                        </thead>
                        <tbody>

                    @foreach( $alunos as $a )
                   
                            <tr>
                            <td>{{$a->id}}</td>
                            <td>{{$a->nome}}</td>
                            <td>{{$a->email}}</td>
                            <td>{{$a->escola}}</td>
                            <td>{{$a->endereco}}</td>
                            <td>{{$a->turmas->nome}}</td>
                            <td><a href="alunos/{{ $a->id }}/edit" class="btn btn-info">Editar</a></td>
                            <td>
                               <form  action="alunos/delete/{{ $a->id }}" method="post">
                                @csrf
                                @method('delete')
                               <button class="btn btn-danger"> Deletar </button>
                               </form>
                            </td>
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

