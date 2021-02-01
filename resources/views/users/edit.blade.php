@extends('layouts.main', ['activePage' => 'users', 'titlePage'=>'Editar Usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('users.update', $user->id)}}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Usuario</h4>
                            <p class="card-category">Editar datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row mt-2">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" autofocus>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="username" class="col-sm-2 col-form-label">Nombre de usuario</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="username" value="{{ $user->username }}">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="number" class="col-sm-2 col-form-label">Celular</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="celular" value="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="función" class="col-sm-2 col-form-label">Función</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="función" value="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" name="password" placeholder="Ingrese contraseña sólo si va a dmoficarla">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <a href="{{ route('users.index') }}" class="btn btn-danger mr-4">Cancelar</a>
                            <button type="submit" class="btn btn-primary">{{ __('Actualizar') }}</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection