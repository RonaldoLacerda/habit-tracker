<x-layout>

    <main class="py-10">

      <h1>Welcome, {{ $nome }}!</h1>

      <h2>Your Habits:</h2>
      <ul>
          @foreach ($habits as $habit)
              <li>{{ $habit }}</li>
          @endforeach
      </ul>
    </main>
</x-layout>
