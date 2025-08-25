<form method="POST" action="/login" class="max-w-md mx-auto mt-20 bg-white p-6 rounded shadow">
    @csrf
    <h2 class="text-xl font-bold mb-4 text-center">Entrar</h2>
    <input type="email" name="email" placeholder="Email" class="w-full p-2 border rounded mb-3">
    <input type="password" name="password" placeholder="Senha" class="w-full p-2 border rounded mb-3">
    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded mb-2">Entrar</button>
    <a href="#" class="text-sm text-blue-600 hover:underline block text-center">Esqueceu a senha?</a>
</form>
