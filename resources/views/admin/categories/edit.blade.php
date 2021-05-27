@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">       
                <h3>Nuova Categoria</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('admin.categories.update', ['category' => $category->id])}}" method= "post">
                    @csrf 
                    @method('PATCH')

                    <div class="form-group">
                        <label for="title">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name', $category->name) }}">
                        @error ('title')
                            <small class=" text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Salva</button>

                </form>
            </div>
        </div>
    </div>


@endsection