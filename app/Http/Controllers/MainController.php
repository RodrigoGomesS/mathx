<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View as ViewView;

class MainController extends Controller
{
    public function home(): ViewView
    {
        return view('home');
    }

    public function generateExercises(Request $request)
    {
        $request->validate([
            'check_sum' => 'required_without_all:check_subtraction,check_multiplication,check_division',
            'check_subtraction' => 'required_without_all:check_sum,check_multiplication,check_division',
            'check_multiplication' => 'required_without_all:check_sum,check_subtraction,check_division',
            'check_division' => 'required_without_all:check_sum,check_subtraction,check_multiplication',
            'number_one' => 'required|integer|min:0|max:999',
            'number_two' => 'required|integer|min:0|max:999',
            'number_exercises' => 'required|integer|min:5|max:50',
        ]);
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
