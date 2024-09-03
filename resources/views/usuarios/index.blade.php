@extends('template.master')

@section('contenido')

<div class="bg-gray-300 grid grid-cols-2 col-span-6 m-5">
    <div class="bg-purple-500 col-span-1">
        <!--forms-->
        <form method="POST" action="{{ route('usuarios.autenticar') }}">
            @csrf
            <div>
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        
            <div>
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        
            <div>
                <label>
                    <input type="checkbox" name="remember">
                    Recuérdame
                </label>
                @if (Route::has('usuarios.contrasena'))
                    <a href="{{ route('usuarios.contrasena') }}">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif
            </div>
        
            <div>
                <button type="submit">Iniciar Sesión</button>
            </div>
        </form>
        
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif        
    </div>
    <div class="bg-pink-500 col-span-1">
        imagen
    </div>
</div>


@endsection