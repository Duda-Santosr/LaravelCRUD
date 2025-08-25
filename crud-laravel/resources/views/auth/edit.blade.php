<form method="POST" action="/edit" class="max-w-md mx-auto mt-20 bg-white p-6 rounded shadow">
    @csrf
    <h2 class="text-xl font-bold mb-4 text-center">Editar Perfil</h2>
    <input type="text" name="name" value="{{ $user->name }}" class="w-full p-2 border rounded mb-3">
    <input type="email" name="email" value="{{ $user->email }}" class="w-full p-2 border rounded mb-3">
    <input type="password" name="password" placeholder="Nova senha (opcional)" class="w-full p-2 border rounded mb-3">
    <button type="submit" class="w-full bg-yellow-500 text-white p-2 rounded">Salvar</button>
</form>
