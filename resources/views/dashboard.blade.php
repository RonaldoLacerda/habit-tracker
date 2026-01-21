<x-layout>

    <main class="py-10 min-h-[calc(100vh-160px)]">
      <h1 class="font-bold text-4x1 text-center">
        Welcome, dashboard!:
      </h1>

      <a href="{{ route('habits.create') }}" class="p-2 border-2 bg-white font-bold block">
        Cadastrar Habito
      </a>

      @session('success')
        <div class="flex">
          <p class="bg-green-100 border-2 border-green-400 p-3 mb-4">
            {{ session('success') }}
          </p>
        </div>
      @endsession

      <p>
        Bem vindo  {{ Auth::user()->name }} ao seu painel de controle. Aqui você pode gerenciar seus hábitos e acompanhar seu progresso.

      </p>

      <div >

        <h2 class="text-xl mt-4">
          Listagem dos Hábitos
        </h2>

        <ul class="flex flex-col gap-2">
          @forelse ($habits as $habit)
            <li class="pl-4">
              <div class="flex gap-2 items-center">
                <p class="font-bold text-xl">
                  - {{ $habit->name }}
                </p>
                <p>
                  [{{ $habit->habitLogs->count() }}]
                </p>
                <a class="bg-white p-1 hover:opacity-50" href="{{ route('habits.edit', $habit )}}">
                  <x-icons.edit />
                </a>
                <form action="{{ route('habits.destroy', $habit) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="bg-red-500 text-white hover:opacity-50 cursor-pointer p-2 rounded-md">
                    <x-icons.trash />
                  </button>
                </form>
                </p>
              </div>
            </li>
          @empty
            <li class="pl-4">
              <p>
                Nenhum hábito cadastrado.
              </p>
              <a href="{{ route('habits.create') }}" class=" bg-white p-2 border-2">
                Cadastre um novo hábito agora!
              </a>
            </li>
          @endforelse
        </ul>
      </div>
    </main>
</x-layout>
