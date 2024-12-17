<link rel="stylesheet" href="{{ asset('css/login.css')}}">

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container-login">
        <x-input-label class="titulo" :value="__('Faça o login na plataforma')" />
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
    
            <!-- Email Address -->
            <div>    
                <x-text-input id="email" class="input-padrao" type="email" name="email" :value="old('email')" required autofocus autocomplete="Email" placeholder="Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" class="input-padrao"
                                type="password"
                                name="password"
                                required autocomplete="Senha"
                                placeholder="Senha" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Remember Me -->
            <div class="d-flex justify-content-between mt-2">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span class="text-comum">{{ __('Lembrar-me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="text-senha" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif
            </div>
    
            <div class="d-flex justify-content-center mt-4">
                <button class="btn btn-entrar">
                    {{ __('Entrar') }}
                </button>
            </div>
        </form>
    </div>

</x-guest-layout>
