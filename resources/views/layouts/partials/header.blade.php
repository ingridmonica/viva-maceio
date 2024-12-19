<!-- resources/views/layouts/partials/header.blade.php -->
<header class="header">
    <div class="div-itens-nav">
        <a href="{{ route('welcome') }}">
            <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo viva maceió">
        </a>
        <a href="{{ route('welcome') }}" class="item-nav">Todos os eventos</a>
        <a href="#" class="item-nav">Hoje</a>
        <a href="#" class="item-nav">Próximos</a>
        <a href="{{ route('login') }}" class="item-nav">Divulgue seu evento</a>
    </div>

    <div class="container-btn-login">
        @auth
            <!-- Dropdown para usuários logados -->
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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

  {{-- Usar ou não...
            @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                    <a href="{{ url('/dashboard') }}">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">
                            Register
                        </a>
                    @endif
                @endauth
            </nav> 
        @endif --}}