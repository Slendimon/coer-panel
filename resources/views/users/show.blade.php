@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Detalle de usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">Usuario</div>
                        <p class="card-category">Vista detallada del usuario {{ $user->name}}</p>
                    </div>
                    <!-- body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <div class="author">
												<a href="#" class="d-flex">
													<img src="" alt="image" class="avatar">
													<h5 class="title mx-3">{{ $user->name}}</h5>
												</a>
												<p class="description">
													{{ $user->username}} <br>
													 Administrator <br>
													 984395328 <br>
													 {{ $user->email }} <br>
													 {{ $user->created_at }}
												</p>
                                            </div>
										</p>
										<div class="card-description">
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus saepe asperiores enim repudiandae. Fuga architecto nisi molestiae obcaecati nostrum quae cumque laudantium ea, eveniet itaque numquam in! Minus molestias tempora porro asperiores et, debitis omnis alias pariatur facere laboriosam adipisci. Dolor, in distinctio!
										</div>			 
									</div>
									<div class="card-footer">
										<div class="button-container">
											<a href="{{ route('users.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
											<button class="btn btn-sm btn-primary">Editar</button>
										</div>
									</div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection