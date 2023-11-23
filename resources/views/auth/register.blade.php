@extends('layouts.app')

@section('content')
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <h3 class="mt-1 mb-5 pb-1">CREAR CUENTA</h3>
                                    <img src="{{ asset('assets/img/LOGO.PNG') }}" alt="Logo" id="mi-imagen">
                                </div>

                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <p id="form-heading">Ingresa tu Correo y Contraseña</p>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Nombre</label>
                                        <input type="text" id="form2Example11" name="name" class="form-control"
                                            placeholder="Ingresar Nombre" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example12">Correo</label>
                                        <input type="email" id="form2Example12" name="email" class="form-control"
                                            placeholder="Ingresar Correo" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example22">Contraseña</label>
                                        <input type="password" id="form2Example22" name="password" class="form-control"
                                            placeholder="Ingresar Contraseña" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example23">Confirmar Contraseña</label>
                                        <input type="password" id="form2Example23" name="password_confirmation"
                                            class="form-control" placeholder="Confirmar Contraseña" />
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                            type="submit">Crear Cuenta</button>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">¿Ya tienes una cuenta?</p>
                                        <a href="{{ route('login') }}" class="btn btn-outline-danger">Login</a>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">SLOGAN</h4>
                                <p class="small mb-0">Su mejor oportunidad y exige un control total del inventario
                                    debido a que todos quieren vivir de manera saludable. También tiene conocimientos
                                    adecuados sobre Medicina y su licencia que no es fácil de obtener.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection