<h1>
    Welcome to the home page
</h1>

<p>
    Hello, {{ $nome }}! Here are your habits:
    <ul>
        @foreach ($habits as $habit)
            <li>{{ $habit }}</li>
        @endforeach
    </ul>
</p>

@auth
    <p>
        Logado!
    </p>
@endauth
@guest
    <p>
        Não logado!
    </p>
@endguest
