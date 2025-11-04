<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz do Terror 😱</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Fundo e tema geral */
        body {
            background-color: #000;
            background-image: url('https://i0.wp.com/geekpopnews.com.br/wp-content/uploads/2025/09/Invocacao-do-Mal-4-trilha.jpg?resize=1200%2C640&ssl=1');
            background-size: cover;
            background-position: center;
            color: #f5f5f5;
            font-family: 'Creepster', cursive;
            text-shadow: 2px 2px 8px #000;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Escurece fundo com camada */
        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: -1;
        }

        h1 {
            color: #ff0000;
            font-size: 3.5rem;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .lead {
            color: #ddd;
            font-size: 1.2rem;
        }

        /* Botão estilo terror */
        .btn-terror {
            background: #900;
            border: 2px solid #c00;
            color: #fff;
            font-size: 1.3rem;
            padding: 12px 35px;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.6);
        }

        .btn-terror:hover {
            background: #c00;
            transform: scale(1.1);
            box-shadow: 0 0 25px rgba(255, 0, 0, 0.9);
        }

        /* Efeito de sangue escorrendo (animação simples) */
        @keyframes drip {
            0% { text-shadow: 0 0 5px red; }
            50% { text-shadow: 0 5px 15px red; }
            100% { text-shadow: 0 0 5px red; }
        }

        h1 span {
            animation: drip 2s infinite;
        }

        /* Caixa do conteúdo */
        .quiz-box {
            background: rgba(20, 0, 0, 0.7);
            border: 2px solid #800;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 0 30px rgba(255, 0, 0, 0.3);
        }
    </style>
    <!-- Fonte de terror -->
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container text-center">
        <div class="quiz-box">
            <h1><span>Quiz do Terror</span></h1>
            <p class="lead mt-3">
                Teste seus nervos e seus conhecimentos com {{$total_perguntas}} perguntas assustadoras...
            </p>
            <a href="{{ route('responder') }}" class="btn btn-terror btn-lg mt-4">Iniciar o Pesadelo</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
