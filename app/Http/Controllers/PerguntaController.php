<?php

namespace App\Http\Controllers;

use App\Models\Pergunta;
use Illuminate\Http\Request;

class PerguntaController extends Controller
{
    // Cria tela para inicio do quiz
    public function inicio()
    {
        $total_perguntas = Pergunta::count();

        return view(
            'perguntas.inicio',
            compact('total_perguntas')
        );
    }
}
