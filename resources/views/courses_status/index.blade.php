@extends('layouts.admin')

@section('content')
    <h2>Listar os Status Cursos</h2>

    <a href="{{ route('course_statuses.create') }}">Cadastrar</a><br><br>

    <x-alert />

    {{-- Imprimir o registro --}}
    @forelse ($coursesStatuses as $courseStatus)
        ID: {{ $courseStatus->id }}<br>
        Nome: {{ $courseStatus->name }}<br>
        <a href="{{ route('course_statuses.show', ['courseStatus' => $courseStatus->id]) }}">Visualizar</a>
    @empty
        Nenhum registro encontrado!
    @endforelse
@endsection
