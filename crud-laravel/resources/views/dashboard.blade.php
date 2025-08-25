<div class="max-w-md mx-auto mt-20 bg-white p-6 rounded shadow text-center">
    <h1 class="text-2xl font-bold mb-4">Estou logado!</h1>
    <div class="flex justify-center gap-4">
        <a href="/edit" class="bg-yellow-500 text-white px-4 py-2 rounded">Editar Perfil</a>
        <form method="POST" action="/logout">@csrf
            <button class="bg-red-500 text-white px-4 py-2 rounded">Sair</button>
        </form>
    </div>
</div>
