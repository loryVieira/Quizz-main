<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz do Terror 😱</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonte temática -->
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #000;
            background-image: url('https://pbs.twimg.com/media/G3oOE_QXMAArL09.jpg');
            background-size: cover;
            background-position: center;
            color: #f5f5f5;
            font-family: 'Creepster', cursive;
            text-shadow: 2px 2px 8px #000;
            min-height: 100vh;
            padding-top: 40px;
        }

        /* Camada escura sobre o fundo */
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
            font-size: 3rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 30px;
            animation: flicker 2s infinite alternate;
        }

        @keyframes flicker {
            from { text-shadow: 0 0 10px red; }
            to { text-shadow: 0 0 25px #ff4444; }
        }

        p {
            font-size: 1.2rem;
            color: #ddd;
        }

        /* Cartões de perguntas */
        .card {
            background: rgba(20, 0, 0, 0.8);
            border: 2px solid #900;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.3);
            color: #fff;
        }

        .card h2 {
            color: #ff4444;
            font-size: 1.5rem;
            text-shadow: 0 0 8px #000;
            padding: 15px;
        }

        .form-check-label {
            color: #f1f1f1;
            font-size: 1.1rem;
        }

        .form-check-input {
            accent-color: red;
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

        .container {
            max-width: 900px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h1>🩸 Início das Questões 🩸</h1>
            <p>Responda... se tiver coragem. Cada erro pode custar mais que pontos...</p>
        </div>

        <form method="POST" action="{{ route('quizz.responder') }}">
            @csrf
            @foreach($perguntas as $pergunta)
                <div class="card mb-4 p-3">
                    <h2>{{ $pergunta->texto }}</h2>

                    <div class="p-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="{{ $pergunta->id }}" id="opcaoA_{{ $pergunta->id }}" value="A">
                            <label class="form-check-label" for="opcaoA_{{ $pergunta->id }}">
                                {{ $pergunta->opcao_a }}
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="{{ $pergunta->id }}" id="opcaoB_{{ $pergunta->id }}" value="B">
                            <label class="form-check-label" for="opcaoB_{{ $pergunta->id }}">
                                {{ $pergunta->opcao_b }}
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="{{ $pergunta->id }}" id="opcaoC_{{ $pergunta->id }}" value="C">
                            <label class="form-check-label" for="opcaoC_{{ $pergunta->id }}">
                                {{ $pergunta->opcao_c }}
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="{{ $pergunta->id }}" id="opcaoD_{{ $pergunta->id }}" value="D">
                            <label class="form-check-label" for="opcaoD_{{ $pergunta->id }}">
                                {{ $pergunta->opcao_d }}
                            </label>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="d-flex justify-content-center">
                <button class="btn btn-terror btn-lg mt-3">Enviar Respostas 🔥</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
