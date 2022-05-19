@extends('backend.layouts.app')
@section('title','Categorias')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <div class="card">
                    <div class="card-header row justify-content-between">
                        <h5 class="card-title col-auto">Lista de categorias</h5>
                        <a href="{{ route('category.create') }}" class="col-auto btn btn-purple">
                        <i class="align-middle" data-feather="layers"></i>&nbsp; <span class="align-middle">Nova categoria</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible show fade" role="alert" style="border-left: 5px solid darkgreen;">
                                <div class="alert-body">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <strong>{{ session('success') }}</strong>
                                </div>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible show fade" role="alert" style="border-left: 5px solid darkgreen;">
                                <div class="alert-body">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <strong>{{ session('error') }}</strong>
                                </div>
                            </div>
                        @endif
                        <table id="categories_table" class="table table-responsive display table-hover my-0 w-100">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Slug</th>
                                <th>Post's</th>
                                <th>Editar</th>
                                <th>Deletar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->posts->count() }}</td>
                                <td><a class="btn btn-warning" href="{{route('category.edit',$category->id)}}">Editar</a></td>
                                <td><button class="btn btn-danger" onclick="document.getElementById('category_{{$category->id}}_delete').submit()">Delete</button>
                                    <form action="{{route('category.destroy',$category->id)}}" method="post" id="category_{{$category->id}}_delete">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>

                                    <tr>
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>Slug</th>
                                        <th>Post's</th>
                                        <th>Editar</th>
                                        <th>Deletar</th>
                                    </tr>

                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>

    </script>
@endpush
