@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12 card-header row justify-content-center">     
            @if($post->category)
                <h5 class=text-align-center>Categoria:
                    {{$post->category->name}}
                </h5>
            @endif
        </div>
        <div class="col-md-12 card-header row justify-content-center">     
            <h2 class=text-align-center>{{$post->title}}</h2>
        </div>
        <div class="col-md-12 card-body row justify-content-center">
            <h3 class=text-align-center>{{$post->content}}</h3>
        </div>
        <div class="col-md-12 card-header row justify-content-center"> 
            <img src="{{asset($post->cover)}}" alt="{{$post->title}}">    
        </div>

        <a href="{{route('admin.posts.index')}}">-Indietro</a>
    </div>


@endsection