@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="/professor/new">Novo Professor</a></div>
               
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Lista dos Professores</h1>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Formação</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Deletar</th>
                            </tr>
                        </thead>
                        <tbody>

                    @foreach( $professor as $p)

                            <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->nome}}</td>
                            <td>{{$p->cpf}}</td>
                            <td>{{$p->formacao}}</td>
                           
                            
                            <td><a href="professor/{{ $p->id }}/edit" class="btn btn-info">Editar</a></td>
                            <td>
                               <form  action="professor/delete/{{ $p->id }}" method="post">
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

