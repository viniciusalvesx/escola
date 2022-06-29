@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="/turmas/new">Nova Turma</a></div>
               
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Lista das Turmas</h1>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Turno</th>
                            <th scope="col">Visualizar</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Deletar</th>
                            </tr>
                        </thead>
                        <tbody>

                    @foreach( $turmas as $t)

                            <tr>
                            <td>{{$t->id}}</td>
                            <td>{{$t->nome}}</td>
                            <td>{{$t->turno}}</td>
                           
                            <td><a href="turmas/{{ $t->id }}/listar" class="btn btn-warning">Visualizar</a></td>
                            <td><a href="turmas/{{ $t->id }}/edit" class="btn btn-info">Editar</a></td>
                            <td>
                               <form  action="turmas/delete/{{ $t->id }}" method="post">
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

