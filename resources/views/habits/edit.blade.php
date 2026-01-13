<x-layout>

  <main class="py-10">

    <h1>
      Editar hábito
    </h1>
    <section class="bg-white max-w-[600px] mx-auto p-10 border-2 mt-4">
      <form action="{{ route('habit.update', $habit) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="flex flex-col gap-2 mb-4">
          <label for="name">
            Nome do hábito
          </label>
          <input
            type="text"
            name="name"
            placeholder="Nome do hábito"
            class="bg-white p-2 border-2 @error ('name') border-red-500 @enderror"
            value="{{ $habit->name }}"
          >
          @error('name')
            <p class="text-red-500">
              {{ $message }}
            </p>
          @enderror

        </div>

        <button
            type="submit"
            class="bg-white p-2 border-2"
          >
            Editar hábito
        </button>

      </form>
    </section>

  </main>
</x-layout>
