@extends('layouts.plantilla')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login_user.css') }}">
@endsection

@section('title-page')
    Login
@endsection


@section('body')
    <section class="user" style="background-image: url('{{ asset('images/bg-3.jpg') }}');">
        <div class="user_options-container">
            <div class="user_options-text">
                <div class="user_options-unregistered">
                    <h2 class="user_unregistered-title">
                        ¿No tienes cuenta?
                    </h2>

                    <button class="user_unregistered-signup" id="signup-button">
                        Registrate
                    </button>
                </div>

                <div class="user_options-registered">
                    <h2 class="user_registered-title">¿Ya eres miembro de nuestra comunidad?</h2>
                    <button class="user_registered-login" id="login-button">
                        Login
                    </button>
                </div>
            </div>

            <div class="user_options-forms" id="user_options-forms">
                <div class="user_forms-login">
                    <h2 class="forms_title">Iniciar Sesión</h2>
                    <form class="form_login" method="POST" action="{{route('login')}}" novalidate>
                        @csrf
                        <fieldset class="forms_fieldset">
                            <div class="forms_field">
                                <input id="email-login" type="email" name="email" placeholder="Email" class="forms_field-input"
                                    required autofocus />
                                {{-- Mensaje de error --}}
                                @error('email-login')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="forms_field">
                                <input id="password-login" type="password" name="password" placeholder="Password" class="forms_field-input"
                                    required />
                                {{-- Mensaje de error --}}
                                @error('password-login')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </fieldset>
                        <div class="forms_buttons">
                            {{-- <button type="button" class="forms_buttons-forgot">
                                Forgot password?
                            </button> --}}
                            <input type="submit" value="Crear" class="forms_buttons-action" />
                        </div>
                    </form>
                </div>
                <div class="user_forms-signup">
                    <h2 class="forms_title">Registro</h2>
                    <form class="form_registro" method="POST" action="{{route('register')}}" novalidate>
                        {{-- Directiva de seguridad --}}
                        @csrf
                        <fieldset class="forms_fieldset">
                            <div class="forms_field">
                                <input id="name" type="text" name="name" placeholder="Full Name" class="forms_field-input"
                                    required />
                                {{-- Mensaje de error --}}
                                @error('name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="forms_field">
                                <input id="email" type="email" name="email" placeholder="Email" class="forms_field-input"
                                    required />
                                {{-- Mensaje de error --}}
                                @error('email')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="forms_field">
                                <input id="password-register" name="password" type="password" placeholder="Password"
                                    class="forms_field-input" required />
                                {{-- Mensaje de error --}}
                                @error('password-register')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </fieldset>
                        <div class="forms_buttons">
                            <input type="submit" value="Enviar" class="forms_buttons-action" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/login_user.js') }}"></script>
@endsection
