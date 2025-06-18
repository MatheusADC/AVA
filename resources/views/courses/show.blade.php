@extends('layouts.admin')

@section('content')
    <h2>Detalhes do curso</h2>

     <a href="{{ route('courses.index') }}">Listar</a><br><br>

    <x-alert />
    {{-- {{ dd($course) }} --}}

    {{-- Imprimir o registro --}}
    ID: {{ $course->id }}<br>
    Nome: {{ $course->name }}<br>
    Cadastrado: {{ \Carbon\Carbon::parse($course->created_at)->format('d/m/Y H:i:s') }}<br>
    Editado: {{  \Carbon\Carbon::parse($course->updated_at)->format('d/m/Y H:i:s') }}<br>
@endsection
