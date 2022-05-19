@extends('backend.layouts.app')
@section('title', request()->routeIs('category.edit') ? 'Editar a categoria ' . $category->name : 'Criar nova categoria')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <div class="card">
                    <div class="card-header row justify-content-between">
                        <a href="{{ route('category.index') }}" class="col-auto btn btn-info">
                            <i class="align-middle" data-feather="corner-up-left"></i>&nbsp; Voltar
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible " role="alert"
                                style="border-left: 5px solid darkred;">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                                <div class="alert-message">
                                    <ul class="list-unstyled">
                                        @foreach ($errors->all() as $error)
                                            <li><i class="align-middle" data-feather="alert-triangle"></i> &nbsp;
                                                <strong>{{ $error }}</strong>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div class="container row">

                            @if (request()->routeIs('category.edit'))
                                <form action="{{ route('category.update', $category->id) }}" method="post">
                                    @method('PATCH')@csrf
                                @else
                                    <form action="{{ route('category.store') }}" method="post">
                                        @method('POST')@csrf
                            @endif

                            <div class="row justify-content-between mb-3">
                                <div class="col-md-12">
                                    <label for="name">Nome da categoria</label>
                                    <input name="name"
                                        value="@if (old('name')) {{ old('name') }}@elseif (request()->routeIs('category.edit')){{ $category->name }} @endif"
                                        type="text" class="form-control" placeholder="Nome da categoria" autofocus
                                        autocomplete="{{ old('name') }}" required>
                                </div>
                            </div>

                            <div class="container justify-content-center row">
                                <input type="submit" class="btn btn-primary rounded-3 col"
                                    value="@if (request()->routeIs('category.edit')) Actualizar @else Guardar @endif">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
