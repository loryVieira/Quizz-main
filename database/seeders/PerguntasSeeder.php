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
            'texto' => 'Quem são os investigadores paranormais protagonistas de Invocação do Mal?',
            'opcao_a' => 'Ed e Lorraine Warren',
            'opcao_b' => 'Sam e Dean Winchester',
            'opcao_c' => 'Mulder e Scully',
            'opcao_d' => 'Bill e Janet Hodgson',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem dirigiu o primeiro filme Invocação do Mal?',
            'opcao_a' => 'James Wan',
            'opcao_b' => 'Michael Chaves',
            'opcao_c' => 'David F. Sandberg',
            'opcao_d' => 'Jordan Peele',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Em qual ano foi lançado o primeiro Invocação do Mal?',
            'opcao_a' => '2010',
            'opcao_b' => '2013',
            'opcao_c' => '2016',
            'opcao_d' => '2018',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual é o nome da boneca amaldiçoada que aparece no universo Invocação do Mal?',
            'opcao_a' => 'Annabelle',
            'opcao_b' => 'Valak',
            'opcao_c' => 'Bathsheba',
            'opcao_d' => 'Malthus',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual entidade demoníaca aparece como uma freira em Invocação do Mal 2?',
            'opcao_a' => 'Annabelle',
            'opcao_b' => 'Valak',
            'opcao_c' => 'Bathsheba',
            'opcao_d' => 'La Llorona',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Em qual país se passa a história de Invocação do Mal 2?',
            'opcao_a' => 'Estados Unidos',
            'opcao_b' => 'Inglaterra',
            'opcao_c' => 'Irlanda',
            'opcao_d' => 'Canadá',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual é o sobrenome da família assombrada no primeiro filme?',
            'opcao_a' => 'Warren',
            'opcao_b' => 'Perron',
            'opcao_c' => 'Hodgson',
            'opcao_d' => 'Johnson',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual o nome da entidade demoníaca que atormenta a família Perron?',
            'opcao_a' => 'Valak',
            'opcao_b' => 'Bathsheba Sherman',
            'opcao_c' => 'Annabelle',
            'opcao_d' => 'La Llorona',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual atriz interpreta Lorraine Warren?',
            'opcao_a' => 'Vera Farmiga',
            'opcao_b' => 'Patrick Wilson',
            'opcao_c' => 'Taissa Farmiga',
            'opcao_d' => 'Lili Taylor',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual ator interpreta Ed Warren?',
            'opcao_a' => 'Patrick Wilson',
            'opcao_b' => 'Vera Farmiga',
            'opcao_c' => 'James Wan',
            'opcao_d' => 'Ron Livingston',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual o nome do terceiro filme principal da franquia?',
            'opcao_a' => 'Invocação do Mal 3: A Ordem do Demônio',
            'opcao_b' => 'Invocação do Mal: A Maldição de Bathsheba',
            'opcao_c' => 'Annabelle 3',
            'opcao_d' => 'A Freira 2',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'O caso mostrado em Invocação do Mal 3 envolve qual crime?',
            'opcao_a' => 'Um roubo',
            'opcao_b' => 'Um assassinato',
            'opcao_c' => 'Um exorcismo em massa',
            'opcao_d' => 'Um incêndio misterioso',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual destes filmes faz parte do mesmo universo de Invocação do Mal?',
            'opcao_a' => 'Annabelle',
            'opcao_b' => 'Corra!',
            'opcao_c' => 'Hereditário',
            'opcao_d' => 'It: A Coisa',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Em que local os Warrens guardam os objetos amaldiçoados?',
            'opcao_a' => 'Um museu em casa',
            'opcao_b' => 'Uma igreja',
            'opcao_c' => 'Um cofre secreto',
            'opcao_d' => 'Um porão abandonado',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual é o principal objetivo dos Warrens?',
            'opcao_a' => 'Caçar fantasmas para lucro',
            'opcao_b' => 'Provar a existência de demônios',
            'opcao_c' => 'Ajudar famílias atormentadas por forças sobrenaturais',
            'opcao_d' => 'Colecionar objetos amaldiçoados',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);
    }
}
