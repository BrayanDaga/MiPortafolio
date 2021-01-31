@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="text-primary">Projectos</h3>
                    <a class="btn btn-info" href="{{ route('projects.index') }}">Atras</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('projects.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="">Titulo</label>
                          <input type="text" name="title" class="form-control" placeholder="titulo de project" >
                        </div>
                        <div class="form-group">
                          <label for="">Url Git</label>
                          <input type="text" name="git" class="form-control" placeholder="Url Git" >
                        </div>
                        <div class="form-group">
                          <label for="">Url Demo</label>
                          <input type="text" name="demo" class="form-control" placeholder="url demo.." >
                        </div>
                        <div class="form-group">
                          <label for="">Descripcion </label>
                          <textarea class="form-control" name="desc"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input id="my-input" class="custom-file-input" type="file" name="image">
                                <label for="my-input" class="custom-file-label">Imagen</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
