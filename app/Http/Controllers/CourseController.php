<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Exception;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Listar os cursos
    public function index()
    {
        // Recuperar os registros do banco de dados
        $courses = Course::orderBy('id', 'DESC')->get();
        // dd($courses);

        // Carregar a view
        return view('courses.index', ['courses' => $courses]);
    }

    // Visualizar o curso
    public function show(Course $course)
    {
        // dd($course);
        // Carregar a view
        return view('courses.show', ['course' => $course]);
    }

    // Carregar o formulário cadastrar novo curso
    public function create()
    {
        // Carregar a view
        return view('courses.create');
    }

    //Cadastrar no banco de dados o novo curso
    public function store(Request $request)
    {
        // dd($request);

        try {
            // Cadastrar no banco de dados na tabela cursos
            $course = Course::create([
                'name' => $request->name
            ]);

            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('courses.show', ['course' => $course->id])->with('success', 'Curso cadastrado com sucesso!');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Curso não cadastrado!');
        }
    }

    // Carregar o formulário editar curso
    public function edit(Course $course)
    {
        // dd($course);

        // Carregar a view
        return view('courses.edit', ['course' => $course]);
    }

    // Editar no banco de dados o curso
    public function update(Request $request, Course $course)
    {
        // dd($request);
        // dd($course);

        // Capturar possíveis exceções durante a execução
        try {
            // Editar as informações do registro no banco de dados
            $course->update([
                'name' => $request->name
            ]);

            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('courses.show', ['course' => $course->id])->with('success', 'Curso editado com sucesso!');
        } catch (Exception $e) {
            // Redirecionar o usuário, enviar a mensagem de erro
            return back()->withInput()->with('error', 'Curso não editado!');
        }
    }
}
