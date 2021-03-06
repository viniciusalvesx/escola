@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Olá, {{ Auth::user()->name }}!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Seja Bem-Vindo</h1>
                    <p><a href="/alunos">Lista dos Alunos</a></p>
                    <p><a href="/turmas">Lista das Turmas</a></p>
                    <p><a href="/professor">Lista dos Professores</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
