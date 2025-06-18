@extends('layouts.admin')

@section('content')
    <h2>Listar os cursos</h2>

    <x-alert />

    <a href="{{ route('courses.create') }}">Cadastrar</a><br><br>

    {{-- {{ dd($courses) }} --}}

    {{-- Imprimir os registros --}}
    @forelse ($courses as $course)
        ID: {{ $course->id }}<br>
        Nome: {{ $course->name }}<br>
        <a href={{ route('courses.show', ['course' => $course->id]) }}>Visualizar</a>
        <hr>
    @empty

    @endforelse
@endsection
