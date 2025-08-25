<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Senha</title>
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
        .card-edit {
            background: white;
            border-radius: 25px;
            padding: 30px;
            width: 350px;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.15);
        }
        .card-edit h3 { color: #7B2CBF; font-weight: bold; }
        .btn-purple {
            background-color: #7B2CBF;
            color: white;
            border-radius: 30px;
            width:100%;
            transition: 0.3s;
        }
        .btn-purple:hover { background-color: #9D4EDD; transform: translateY(-2px);color:#fff; }
    </style>
</head>
<body>
<div class="bg-wave">
    <div class="card-edit">
        <h3 class="text-center mb-3">Editar Dados</h3>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('edit.password') }}">
            @csrf
            <input type="text" name="name" placeholder="Nome completo" value="{{ $user->name }}" class="form-control mb-2" required>
            <input type="email" name="email" placeholder="Email" value="{{ $user->email }}" class="form-control mb-2" required>
            <input type="password" name="password" placeholder="Nova senha" class="form-control mb-2" required>
            <button class="btn btn-purple mt-2">Salvar Alterações</button>
        </form>
    </div>
</div>
</body>
</html>
