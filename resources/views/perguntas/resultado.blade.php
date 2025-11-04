<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado do Quiz do Terror 😱</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonte temática -->
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">

    <style>
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
            padding: 30px;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.85);
            z-index: -1;
        }

        h1 {
            color: #ff0000;
            font-size: 3rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 30px;
            animation: flicker 2s infinite alternate;
        }

        @keyframes flicker {
            from { text-shadow: 0 0 10px red; }
            to { text-shadow: 0 0 25px #ff4444; }
        }

        .card {
            background: rgba(20, 0, 0, 0.85);
            border: 2px solid #900;
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(255, 0, 0, 0.3);
            color: #fff;
            padding: 30px;
        }

        .card-title {
            color: #ff4444;
            font-size: 2rem;
            text-shadow: 0 0 8px #000;
        }

        .btn-terror {
            background: #900;
            border: 2px solid #c00;
            color: #fff;
            font-size: 1.3rem;
            padding: 12px 35px;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.6);
            text-transform: uppercase;
        }

        .btn-terror:hover {
            background: #c00;
            transform: scale(1.1);
            box-shadow: 0 0 25px rgba(255, 0, 0, 0.9);
        }

        .mensagem {
            font-size: 1.4rem;
            color: #eee;
            margin-top: 20px;
        }

        .container {
            max-width: 700px;
        }

    </style>
</head>
<body>

    <div class="container text-center">
        <h1>☠️ Resultado do Quiz ☠️</h1>

        <div class="card">
            <h2 class="card-title">Sua Pontuação: {{ $pontuacao }}</h2>

            @if($pontuacao <= 3)
                <p class="mensagem">👻 Parece que o medo te dominou... volte e tente escapar novamente!</p>
            @elseif($pontuacao <= 7)
                <p class="mensagem">🩸 Você sobreviveu por pouco... mas ainda há escuridão à frente.</p>
            @else
                <p class="mensagem">🔥 Incrível! Nenhum espírito ousaria te desafiar novamente!</p>
            @endif

            <a href="{{ route('inicio') }}" class="btn btn-terror mt-4">Tentar Novamente</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
