@auth
    <h1>Usuário Logado!</h1>
    <h2>{{ Auth::user()->name}}</h2>
    <h2>{{ Auth::user()->email}}</h2>
    <h2>{{ Auth::user()->id}}</h2>
@endauth

@guest
    <h1>Usuário Não Logado!</h1>
@endguest