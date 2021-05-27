@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12"></div>
        <a href="{{route('admin.categories.create')}}">Nuova Categoria</a>
    </div>
    <div class="row justify-content-center">
    @foreach ($categories as $category)
        <div class="col-md-3">
            <div class="card">
                <a href="{{route('admin.categories.show', ['category' => $category->id])}}">               
                <div class="card-header">{{ $category->name }}</div>
                </a>

                <div class="card-body">
                    <div>          
                        <a href="{{route('admin.categories.edit', ['category' => $category->id])}}">Edit</a>
                        <form action="{{route('admin.categories.destroy',['category'=>$category->id])}}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <a href="{{route('admin.index')}}">-Indietro</a>

</div>


@endsection