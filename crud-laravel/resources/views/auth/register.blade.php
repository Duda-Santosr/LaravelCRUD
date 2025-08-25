<form method="POST" action="/register" class="max-w-md mx-auto mt-20 bg-white p-6 rounded shadow">
    @csrf
    <h2 class="text-xl font-bold mb-4 text-center">Cadastrar</h2>
    <input type="text" name="name" placeholder="Nome" class="w-full p-2 border rounded mb-3">
    <input type="email" name="email" placeholder="Email" class="w-full p-2 border rounded mb-3">
    <input type="password" name="password" placeholder="Senha" class="w-full p-2 border rounded mb-3">
    <button type="submit" class="w-full bg-green-500 text-white p-2 rounded">Cadastrar</button>
</form>
