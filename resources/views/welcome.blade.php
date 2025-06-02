<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Celke</title>
    </head>
    <body>
        <h1>Bem-vindo à Celke</h1>
        <a href="{{ route('courses.index') }}">Cursos</a><br>
        <a href="{{ route('courses-status.index') }}">Status Cursos</a><br>
        <a href="{{ route('courses-batches.index') }}">Turmas</a><br>
        <a href="{{ route('modules.index') }}">Módulos</a><br>
        <a href="{{ route('lessons.index') }}">Aulas</a><br>
        <a href="{{ route('users.index') }}">Usuários</a><br>
        <a href="{{ route('status.index') }}">Status</a><br>
    </body>
</html>
