<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        echo "Tela inicial";
    }

    public function generateExercises(Request $request)
    {
        echo "Tela de geração de exercícios";
    }

    public function printExercises()
    {
        echo "Tela de impressão de exercícios";
    }

    public function exportExercises()
    {
        echo "Tela de exportação de exercícios";
    }
}
