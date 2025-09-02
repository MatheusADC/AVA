<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseBatch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CourseBatchController extends Controller
{
  // Listar as turmas dos cursos
    public function index(Course $course)
    {
        // Recuperar os registros do banco dados
        $coursesBatches = CourseBatch::orderBy('id', 'DESC')
            ->where('course_id', $course->id)
            ->paginate(10);

        // Salvar log
        Log::info('Listar as turmas.');

        // Carregar a view
        return view('course_batches.index', ['coursesBatches' => $coursesBatches, 'course' => $course]);
    }

    // Carregar o formulário cadastrar nova turma
    public function create()
    {
        // Carregar a view
        return view('courses_batches.create');
    }

    // Cadastrar no banco de dados o nova turma
    public function store(Request $request)
    {
        // dd($request);
        // Cadastrar no banco de dados na tabela turmas
        CourseBatch::create([
            'name' => $request->name
        ]);

        // Redirecionar o usuário, enviar a mensagem de sucesso
        return redirect()->route('courses-batches.index')->with('success', 'Turma cadastrada com sucesso!');
    }
}
