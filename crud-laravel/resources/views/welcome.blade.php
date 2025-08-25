<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { 
            height: 100%; 
            margin: 0; 
            font-family: 'Segoe UI', sans-serif; 
        }

        /* Fundo com gradiente roxo/lilás */
        .bg-wave {
            background: linear-gradient(135deg, #7B2CBF, #C77DFF, #E0AAFF);
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: white;
            text-align: center;
            padding: 20px;
        }

        /* Estilo do título */
        .bg-wave h1 {
            font-size: 3rem;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .bg-wave p {
            font-size: 1.2rem;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        /* Botões arredondados */
        .btn-custom {
            border-radius: 30px;
            padding: 12px 30px;
            margin: 10px;
            border: 2px solid white;
            color: white;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.15);
        }

        /* Hover com destaque lilás */
        .btn-custom:hover { 
            background-color: white; 
            color: #7B2CBF; 
            transform: translateY(-3px);
        }

        /* Efeito suave no fundo */
        .bg-wave::before {
            content: "";
            position: absolute;
            top: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            z-index: 0;
            animation: float 6s infinite ease-in-out alternate;
        }

        @keyframes float {
            from { transform: translateY(0); }
            to { transform: translateY(30px); }
        }
    </style>
</head>
<body>
<div class="bg-wave position-relative">
    <h1>Bem-vinda </h1>
    <p>Entre ou cadastre-se para começar sua jornada</p>
    <div>
        <a href="{{ route('login') }}" class="btn btn-custom">Entrar</a>
        <a href="{{ route('register') }}" class="btn btn-custom">Cadastrar</a>
    </div>
</div>
</body>
</html>
