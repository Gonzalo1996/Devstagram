@extends('layouts.app')
@section('title-nav')
    Login
@endsection
@section('title')
    Devstegram
@endsection
@section('titulo-main')
    Inicia Sesión en DevStagram
@endsection
@section('contenido-main')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2">
            <p>Imagen aquí</p>
        </div>

        <div class="md:w-1/2 bg-white p-6 rounded-lg shadow-xl">
            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf

                @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
                @endif

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input 
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Tu Email de Registro"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}"
                    />
                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">El email es obligatorio</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input 
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Password de Registro"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                    />
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">La contraseña es obligatorio</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <input type="checkbox" name="remember" id="remember"> 
                    <label class="text-gray-500 text-sm" for="">Mantener sesión abierta</label>
                </div>
                <input 
                    type="submit" 
                    value="Iniciar Sesión"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg text-center"
                    />
            </form>
        </div>
    </div>    
@endsection