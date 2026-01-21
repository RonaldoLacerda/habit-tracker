<x-layout>
  <main class="py-10 min-h-[calc(100vh-160px)]">
    <section class="bg-white max-w-[600px] mx-auto p-10 habit-shadow-lg mt-4">

      <h1 class="font-bold text-xl">
        Faça Login
      </h1>

      <p>
        Insira seus dados para acessar.
      </p>

      <form action="{{ route('auth.login') }}" method="POST" class="flex flex-col">
        @csrf

        <div class="flex flex-col gap-2 mb-4">
          <label for="email">
            Email
          </label>
          <input
            type="email"
            name="email"
            placeholder="your@email.com"
            class="bg-white p-2 habit-shadow @error ('email') border-red-500 @enderror"
          >
          @error('email')
            <p class="text-red-500">
              {{ $message }}
            </p>
          @enderror

        </div>

        <div class="flex flex-col gap-2 mb-4">
          <label for="password">
            Senha
          </label>
          <input
            type="password"
            name="password"
            placeholder="********"
            class="bg-white p-2 habit-shadow @error ('password') border-red-500 @enderror"
          >

          @error('password')
            <p class="text-red-500">
              {{ $message }}
            </p>
          @enderror

        </div>
        <button
          type="submit"
          class="p-2 bg-habit-orange habit-shadow-lg habit-btn"
        >
          Entrar
        </button>

        <p class="text-center mt-4">
          Ainda não tem um conta?
          <a href="{{ route('site.register') }}" class="underline hover:opacity-70 transition">
            Cadastre-se
          </a>
        </p>

      </form>
    </section>

  </main>
</x-layout>
