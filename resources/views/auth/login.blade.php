@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css')}}">
@endsection

<x-guest-layout>
    <div class="container-sm container-login-cont">
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
        
                <div class="d-flex justify-content-center mt-4">
                    <button class="btn btn-entrar">
                        {{ __('Entrar') }}
                    </button>
                </div>
            </form>
            <form method="GET" action="{{ route('register') }}">
                <div class="container-cadastre">
                    <span class="text-comum">{{ __('Ainda não tem conta?') }}</span>          
                    <button class="btn btn-cadastre">
                        {{ __('Cadastre-se') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
