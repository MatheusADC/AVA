<?php

namespace App\Http\Controllers;

use App\Models\CourseStatus;
use Illuminate\Http\Request;

class CourseStatusController extends Controller
{
    // Listar os status cursos
    public function index()
    {
        // Recuperar os registros do banco de dados
        $coursesStatuses = CourseStatus::orderBy('id','DESC')->get();

        // Carregar a view
        return view('courses_status.index', ['coursesStatuses' => $coursesStatuses]);
    }

    // Visualizar os detalhes do status para curso
    public function show(CourseStatus $courseStatus)
    {
        // Carregar a view
        return view('courses_status.show', ['courseStatus' => $courseStatus]);
    }

    // Carregar o formulário cadastrar novo status curso
    public function create()
    {
        // Carregar a view
        return view('courses_status.create');
    }

    // Cadastrar no banco de dados o novo status curso
    public function store(Request $request)
    {
        // dd($request);
        // Cadastrar no banco de dados na tabela status cursos
        CourseStatus::create([
            'name' => $request->name
        ]);

        // Redirecionar o usuário, enviar a mensagem de sucesso
        return redirect()->route('course_statuses.index')->with('success', 'Status cadastrado com sucesso!');
    }
}
