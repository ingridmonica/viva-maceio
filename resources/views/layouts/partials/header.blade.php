<header class="header">
    <div class="div-itens-nav">
        <a href="{{ route('home') }}">
            <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo viva maceió">
        </a>
        <a href="{{ route('eventos.listar') }}" class="item-nav">Todos os eventos</a>
        <a href="{{ route('eventos.listar.hoje') }}" class="item-nav">Hoje</a>
        <a href="{{ route('eventos.listar') }}" class="item-nav">Próximos</a>
        <a href="{{ route('login') }}" class="item-nav">Divulgue seu evento</a>
    </div>

    <div class="container-btn-login">
        @auth
            <!-- Dropdown para usuários logados -->
            <div class="dropdown">
                <button class="btn btn-usuario dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item" type="submit">Sair</button>
                        </form>
                    </li>
                </ul>
            </div>
        @else
            <!-- Localização e ícone para visitantes -->
            <p class="item-nav loc-nav">Maceió - AL</p>
            <img src="{{ asset('icons/icon-mapa.svg') }}" alt="Ícone Mapa" class="icone" />
        @endauth
    </div>
</header>
