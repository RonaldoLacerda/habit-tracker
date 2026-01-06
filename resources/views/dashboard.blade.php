<x-layout>

    <main class="py-10">
      <h1>Welcome, dashboard!</h1>
    </main>

    <p>
      Bem vindo  {{ Auth::user()->name }} ao seu painel de controle. Aqui você pode gerenciar seus hábitos e acompanhar seu progresso.

    </p>

    <div >

      <h2 class="text-xl mt-4">
        Listagem dos Hábitos
      </h2>

      <ul class="flex flex-col gap-2">
        @forelse ($habits->get() as $habit)
          <li class="pl-4">
            <div class="flex gap-2 items-center">
              <p class="font-bold text-xl">
                - {{ $habit->name }}
              </p>
              <p>
                [{{ $habit->habitLogs->count() }}]
              </p>
            </div>
          </li>
        @empty
          <li class="pl-4">
            <p>
              Nenhum hábito cadastrado.
            </p>
            <a href="/habito/cadastrar" class=" bg-white p-2 border-2">
              Cadastre um novo hábito agora!
            </a>
          </li>
        @endforelse
      </ul>
    </div>
</x-layout>
