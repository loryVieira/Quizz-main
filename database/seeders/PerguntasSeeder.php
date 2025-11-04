<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Pergunta;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pergunta::create([
            'texto' => 'Qual é a linguagem de programação usada no desenvolvimento do Laravel?',
            'opcao_a' => 'Java',
            'opcao_b' => 'Python',
            'opcao_c' => 'PHP',
            'opcao_d' => 'Ruby',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem pintou a obra "A Noite Estrelada"?',
            'opcao_a' => 'Claude Monet',
            'opcao_b' => 'Vincent van Gogh',
            'opcao_c' => 'Leonardo da Vinci',
            'opcao_d' => 'Pablo Picasso',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual país é conhecido como "Terra do Sol Nascente"?',
            'opcao_a' => 'China',
            'opcao_b' => 'Japão',
            'opcao_c' => 'Coreia do Sul',
            'opcao_d' => 'Tailândia',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem desenvolveu a teoria da relatividade?',
            'opcao_a' => 'Isaac Newton',
            'opcao_b' => 'Galileu Galilei',
            'opcao_c' => 'Nikola Tesla',
            'opcao_d' => 'Albert Einstein',
            'resposta_correta' => 'D',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual é o menor continente do mundo?',
            'opcao_a' => 'Europa',
            'opcao_b' => 'Antártida',
            'opcao_c' => 'Austrália',
            'opcao_d' => 'América do Sul',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual destes animais é um mamífero?',
            'opcao_a' => 'Tubarão',
            'opcao_b' => 'Golfinho',
            'opcao_c' => 'Polvo',
            'opcao_d' => 'Jacaré',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);
    }
}
