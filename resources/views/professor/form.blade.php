@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   <a href="{{ url('professor') }}">Voltar</a> </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                @if( Request::is('*/edit'))
                <form action= "{{ url('professor/update') }}/{{ $professor->id }}" method="post">
                @csrf
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{ $professor->nome }}">
            </div>

            <div class="form-group">
                <label>CPF:</label>
                <input type="text" name="cpf" class="form-control" value="{{ $professor->cpf }}">
            </div>

            <div class="form-group">
                <label>Formação:</label>
                <input type="text" name="formacao" class="form-control" value="{{ $professor->formacao }}">
            </div>
            
            <button type="submit" class="btn btn-primary">Atualizar</button>
            </form> 

            @else
            <form action= "{{ url('professor/add') }}" method="post">
                @csrf
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control">
            </div>
            
            <div class="form-group">
                <label>CPF:</label>
                <input type="text" name="cpf" class="form-control">
            </div>

            <div class="form-group">
                <label>Formação:</label>
                <input type="text" name="formacao" class="form-control">
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

