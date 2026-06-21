<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — KKN Digital</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('icon.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <style>body { font-family: 'Nunito', sans-serif; }</style>
</head>
<body class="bg-stone-900 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-sm">
        <!-- Logo -->
        <div class="flex flex-col items-center mb-8">
            <img src="{{ asset('icon.svg') }}" alt="KKN Digital" class="w-14 h-14 mb-3">
            <h1 class="text-xl font-black text-white">KKN<span class="text-green-400">Digital</span></h1>
            <p class="text-xs text-stone-400 mt-1">Panel Admin</p>
        </div>

        <!-- Card -->
        <div class="bg-stone-800 border border-stone-700 rounded-2xl p-8 shadow-2xl">
            <h2 class="text-lg font-black text-white mb-1">Masuk ke Dashboard</h2>
            <p class="text-xs text-stone-400 mb-6">Hanya untuk pengelola KKN Digital.</p>

            @if(session('error'))
            <div class="mb-5 p-3 bg-red-500/10 border border-red-500/30 text-red-400 rounded-lg text-xs font-semibold">
                {{ session('error') }}
            </div>
            @endif

            @if(session('success'))
            <div class="mb-5 p-3 bg-green-500/10 border border-green-500/30 text-green-400 rounded-lg text-xs font-semibold">
                {{ session('success') }}
            </div>
            @endif

            @if($errors->has('login'))
            <div class="mb-5 p-3 bg-red-500/10 border border-red-500/30 text-red-400 rounded-lg text-xs font-semibold">
                {{ $errors->first('login') }}
            </div>
            @endif

            <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="username" class="block text-xs font-bold text-stone-300 mb-2">Username</label>
                    <input
                        type="text"
                        name="username"
                        id="username"
                        value="{{ old('username') }}"
                        autocomplete="username"
                        required
                        placeholder="Username admin"
                        class="w-full bg-stone-700 border border-stone-600 rounded-xl px-4 py-3 text-sm text-white placeholder:text-stone-500 focus:outline-none focus:border-green-500 transition-colors"
                    >
                </div>
                <div>
                    <label for="password" class="block text-xs font-bold text-stone-300 mb-2">Password</label>
                    <div class="relative">
                        <input
                            type="password"
                            name="password"
                            id="password"
                            autocomplete="current-password"
                            required
                            placeholder="••••••••"
                            class="w-full bg-stone-700 border border-stone-600 rounded-xl px-4 py-3 pr-10 text-sm text-white placeholder:text-stone-500 focus:outline-none focus:border-green-500 transition-colors"
                        >
                        <button type="button" onclick="togglePwd()" class="absolute right-3 top-1/2 -translate-y-1/2 text-stone-400 hover:text-stone-200 transition-colors" tabindex="-1">
                            <svg id="eyeIcon" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </button>
                    </div>
                </div>
                <button type="submit" class="w-full py-3 bg-green-700 hover:bg-green-600 text-white font-black rounded-xl text-sm transition-all mt-2 shadow-lg shadow-green-900/30">
                    Masuk →
                </button>
            </form>
        </div>

        <!-- Back link -->
        <p class="text-center mt-6 text-xs text-stone-600">
            <a href="{{ url('/') }}" class="hover:text-stone-400 transition-colors">← Kembali ke KKN Digital</a>
        </p>
    </div>

    <script>
    function togglePwd() {
        const input = document.getElementById('password');
        input.type = input.type === 'password' ? 'text' : 'password';
    }
    </script>
</body>
</html>
