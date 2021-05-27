@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12 card-header row justify-content-center">     
            <h5 class=text-align-center>Categoria: {{$post->category->name}}</h5>
        </div>
        <div class="col-md-12 card-header row justify-content-center">     
            <h2 class=text-align-center>{{$post->title}}</h2>
        </div>
        <div class="col-md-12 card-body row justify-content-center">
            <h3 class=text-align-center>{{$post->content}}</h3>
        </div>
        <a href="{{route('admin.posts.index')}}">-Indietro</a>
    </div>


@endsection