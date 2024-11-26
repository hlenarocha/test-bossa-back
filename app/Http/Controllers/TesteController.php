<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TesteController extends Controller
{
    public function index(){

        $servicosMarketing = collect([
            [
                'id' => 1,
                'nome' => 'Gerenciamento de Redes Sociais',
                'descricao' => 'Criação de conteúdos, planejamento e interação em plataformas como Instagram, Facebook e LinkedIn.',
                'preco' => 1500, 
                'duracao' => 'Mensal',
            ],
            [
                'id' => 2,
                'nome' => 'SEO (Otimização para Motores de Busca)',
                'descricao' => 'Melhoria do ranqueamento do site em buscadores como Google e Bing.',
                'preco' => 2000,
                'duracao' => 'Projeto único',
            ],
            [
                'id' => 3,
                'nome' => 'Campanha de Anúncios Online',
                'descricao' => 'Gestão e análise de campanhas no Google Ads e Meta Ads.',
                'preco' => 3000,
                'duracao' => 'Mensal',
            ],
        ]);
        
        return response()->json(compact('servicosMarketing'));
    }
}