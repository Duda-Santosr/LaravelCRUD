<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { height: 100%; margin:0; font-family: 'Segoe UI', sans-serif; }
        .bg-wave {
            background: linear-gradient(135deg, #7B2CBF, #C77DFF, #E0AAFF);
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .card-register {
            background: white;
            border-radius: 25px;
            padding: 30px;
            width: 350px;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.15);
        }
        .card-register h3 { color: #7B2CBF; font-weight: bold; }
        .btn-purple {
            background-color: #7B2CBF;
            color: white;
            border-radius: 30px;
            width: 100%;
            transition: 0.3s;
        }
        .btn-purple:hover { background-color: #9D4EDD; transform: translateY(-2px); }
        a { color: #7B2CBF; text-decoration:none; font-weight: 500;  }
    </style>
</head>
<body>
<div class="bg-wave">
    <div class="card-register">
        <h3 class="mb-3 text-center">Criar Conta</h3>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" placeholder="Nome completo" class="form-control mb-2" required>
            <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
            <input type="password" name="password" placeholder="Senha" class="form-control mb-2" required>
            <button class="btn btn-purple mt-2">Cadastrar</button>
        </form>
        <p class="mt-3 text-center">Já tem conta? <a href="{{ route('login') }}">Entrar</a></p>
    </div>
</div>
</body>
</html>
