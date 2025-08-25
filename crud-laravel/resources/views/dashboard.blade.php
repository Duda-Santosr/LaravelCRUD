<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { height: 100%; margin:0; font-family: 'Segoe UI', sans-serif; }
        .bg-wave {
            background: linear-gradient(135deg, #7B2CBF, #C77DFF, #E0AAFF);
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }
        .btn-purple {
            background-color: #7B2CBF;
            color: white;
            border-radius: 25px;
            margin: 5px;
            padding: 10px 20px;
            transition: 0.3s;
        }
        .btn-purple:hover { background-color: #9D4EDD; transform: translateY(-2px); }
    </style>
</head>
<body>
<div class="bg-wave">
    <div>
        <h2 class="mb-4"> Bem-vinda, você está logada!</h2>
        <!-- <a href="{{ route('users.index') }}" class="btn btn-purple">Usuários</a> -->
        <a href="{{ route('home') }}" class="btn btn-purple">Sair</a>
    </div>
</div>
</body>
</html>
