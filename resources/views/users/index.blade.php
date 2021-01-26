@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Manejo de Usuarios'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Usuarios</h4>
                                <p class="card-category">Usuarios registrados</p>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{ route('users.create')}}" class="btn btn-sm btn-facebook">Añadir usuario</a>
                                    </div>

                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Nombre usuario</th>
                                            <th>Correo</th>
                                            <th>Creado en</th>
                                            <th class="text-right">Acciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)     
                                                <tr>
                                                    <td>{{ $user->id}}</td>
                                                    <td>{{ $user->name}}</td>
                                                    <td>{{ $user->username}}</td>
                                                    <td>{{ $user->email}}</td>
                                                    <td>{{ $user->created_at}}</td>
                                                    <td class="td-actions text-right">
                                                        <button class="btn  btn-info" type="button">
                                                            <i class="material-icons">person</i>
                                                        </button>
                                                        <button class="btn btn-warning" type="button">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                        <button class="btn btn-danger" type="button">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer ml-auto">
                                {{ $users -> links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection