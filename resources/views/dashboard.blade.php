<x-layout>

    <main class="py-10">
      <h1>Welcome, dashboard!</h1>
    </main>

    <p>
      Bem vindo  {{ Auth::user()->name }} ao seu painel de controle. Aqui você pode gerenciar seus hábitos e acompanhar seu progresso.

    </p>
</x-layout>
