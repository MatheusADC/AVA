@extends('layouts.admin')

@section('content')
    <h2>Cadastrar o Statuses dos Cursos</h2>

    <a href="{{ route('course_statuses.index') }}">Listar</a><br><br>

    <form action="{{ route('course_statuses.store') }}" method="POST">
        {{-- Só aceita valores da própria aplicação, não recebendo de forma externa, aumentando a segurança --}}
        @csrf
        @method('POST')

        <label>Nome: </label>
        <input type="text" name="name" id="name" placeholder="Nome do status" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
@endsection
