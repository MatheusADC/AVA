<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    // Listar os cursos
    public function index()
    {
        // Carregar a view
        return view('courses.index');
    }

}
