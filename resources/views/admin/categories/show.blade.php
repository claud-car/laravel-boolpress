@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12 card-header row justify-content-center">     
            <h5 class=text-align-center>Categoria: {{$category->name}}</h5>
        </div>
        <a href="{{route('admin.categories.index')}}">-Indietro</a>
    </div>


@endsection