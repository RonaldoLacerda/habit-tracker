<x-layout>

    <main class="py-10">

      <h2>Veja seus Hábitos ganharem vida!</h2>
      <p>
        Cadastre seus hábitos e comece a viver melhor!
      </p>
      <div class="flex gap-2">
        <a href="{{ route('site.register') }}" class="bg-white p-2 border-2">
            Cadastre-se
        </a>
        <a href="{{ route('site.login') }}" class="bg-white p-2 border-2">
            Faça Login
        </a>
      </div>
    </main>
</x-layout>
