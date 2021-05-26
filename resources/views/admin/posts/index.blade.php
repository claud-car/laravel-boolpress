@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12"></div>
        <a href="{{route('admin.posts.create')}}">Nuovo Post</a>
    </div>
    <div class="row justify-content-center">
    @foreach ($posts as $post)
        <div class="col-md-3">
            <div class="card">
                <a href="{{route('admin.posts.show', ['post' => $post->id])}}">               
                <div class="card-header">{{ $post->title }}</div>
                </a>

                <div class="card-body">
                    {{$post->content}}
                    <div>          
                        <a href="{{route('admin.posts.edit', ['post' => $post->id])}}">Edit</a>
                        <form action="{{route('admin.posts.destroy',['post'=>$post->id])}}" method="post">
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