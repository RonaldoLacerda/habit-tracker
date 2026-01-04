<x-layout>
  <main class="py-10">
    <section class="bg-white max-w-[600px] mx-auto p-10 border-2 mt-4">

      <h1 class="font-bold text-xl">
        Registre-se
      </h1>

      <p>
        Preencha as informações para cadastrar seus hábitos.
      </p>

      <form action="{{ route('auth.register') }}" method="POST" class="flex flex-col">
        @csrf

        <div class="flex flex-col gap-2">
          <label for="name">
            Nome
          </label>
          <input
            type="text"
            name="name"
            placeholder="Nome"
            class="bg-white p-2 border-2 @error ('name') border-red-500 @enderror"
          >
          @error('name')
            <p class="text-red-500">
              {{ $message }}
            </p>
          @enderror

        </div>

        <div class="flex flex-col gap-2">
          <label for="email">
            Email
          </label>
          <input
            type="email"
            name="email"
            placeholder="your@email.com"
            class="bg-white p-2 border-2 @error ('email') border-red-500 @enderror"
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
            class="bg-white p-2 border-2 @error ('password') border-red-500 @enderror"
          >

          @error('password')
            <p class="text-red-500">
              {{ $message }}
            </p>
          @enderror

        </div>

        <div class="flex flex-col gap-2 mb-4">
          <label for="password_confirmation">
            Repita sua senha
          </label>
          <input
            type="password"
            name="password_confirmation"
            placeholder="********"
            class="bg-white p-2 border-2 @error ('password') border-red-500 @enderror"
          >

          @error('password')
            <p class="text-red-500">
              {{ $message }}
            </p>
          @enderror

        </div>

        <button
          type="submit"
          class="bg-white p-2 border-2"
        >
          Cadastrar
        </button>

        <p class="text-center mt-4">
          Já tem um conta?
          <a href="{{ route('site.login') }}" class="underline hover:opacity-70 transition">
            Faça login
          </a>
        </p>

      </form>
    </section>

  </main>
</x-layout>
