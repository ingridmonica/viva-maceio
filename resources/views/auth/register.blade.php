@section('styles')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

<x-guest-layout>
    <div class="container-sm container-cadastro-cont">
        <div class="container-cadastro">
            <x-input-label class="titulo mt-2" :value="__('Dados do usuário')" />
            <form method="POST" action="{{ route('register') }}" class="form-cadastro">
                @csrf
                <!-- Name -->
                <div>
                    <x-text-input id="name" class="input-padrao mb-2" placeholder="Nome" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mb-2">
                    <x-text-input id="email" class="input-padrao mb-2" placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-2">

                    <x-text-input id="password" class="input-padrao mb-2"
                                    placeholder="Senha"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-2">

                    <x-text-input id="password_confirmation" class="input-padrao mb-2"
                                    placeholder="Confirmar senha"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="d-flex flex-column align-items-center mb-2 mt-2">
                    <button class="btn btn-cadastro">
                        {{ __('Cadastrar') }}
                    </button>
                    <a class="text-possui-registro" href="{{ route('login') }}">
                        {{ __('Já está registrado?') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
