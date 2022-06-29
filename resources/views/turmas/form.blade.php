@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   <a href="{{ url('turmas') }}">Voltar</a> </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                @if( Request::is('*/edit'))
                <form action= "{{ url('turmas/update') }}/{{ $turma->id }}" method="post">
                @csrf
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{ $turma->nome }}">
            </div>

            <div class="form-group">
                <label>Turno:</label>
                <input type="text" name="turno" class="form-control" value="{{ $turma->turno }}">
            </div>
            
            <button type="submit" class="btn btn-primary">Atualizar</button>
            </form> 

            @else
            <form action= "{{ url('turmas/add') }}" method="post">
                @csrf
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Turno:</label>
                <input type="text" name="turno" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form> 
            @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

