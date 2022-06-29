@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   <a href="{{ url('alunos') }}">Voltar</a> </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                @if( Request::is('*/edit'))
                <form action= "{{ url('alunos/update') }}/{{ $aluno->id }}" method="post">
                @csrf
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{ $aluno->nome }}">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail:</label>
                <input type="email" name="email" class="form-control" value="{{ $aluno->email }}">
            </div>

            <div class="form-group">
                <label>Escola:</label>
                <input type="text" name="escola" class="form-control" value="{{ $aluno->escola }}">
            </div>
            
            <div class="form-group">
                <label>Endereço:</label>
                <input type="text" name="endereco" class="form-control" value="{{ $aluno->endereco }}">
            </div>

            <div class="form-group">
                <select name="turma_id" id="turma_id" >
                    <option value=""disabled selected>Selecione uma turma</option>

                    @foreach ($turmas as $turma)
                    <option value="{{$turma->id}}">{{$turma->nome}}</option>
                    @endforeach
                </select>
                <label for="turma_id">Turma</label>
            </div>
            
            <button type="submit" class="btn btn-primary">Atualizar</button>
            </form> 

            @else
            <form action= "{{ url('alunos/add') }}" method="post">
                @csrf
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail:</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label>Escola:</label>
                <input type="text" name="escola" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Endereço:</label>
                <input type="text" name="endereco" class="form-control">
            </div>

            <div class="input-field">
                <select name="turma_id" id="turma_id">
                    <option value=""disabled selected>Selecione uma turma</option>

                    @foreach ($turmas as $turma)
                    <option value="{{$turma->id}}">{{$turma->nome}}</option>
                    @endforeach
                </select>
                <label for="turma_id">Turma</label>
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

