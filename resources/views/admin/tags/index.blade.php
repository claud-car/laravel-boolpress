@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12"></div>
        <a href="{{route('admin.tags.create')}}">Nuova Tag</a>
    </div>
    <div class="row justify-content-center">
    @foreach ($tags as $tag)
        <div class="col-md-3">
            <div class="card">
                <a href="{{route('admin.tags.show', ['tag' => $tag->id])}}">               
                <div class="card-header">{{ $tag->name }}</div>
                </a>

                <div class="card-body">
                    <div>          
                        <a href="{{route('admin.tags.edit', ['tag' => $tag->id])}}">Edit</a>
                        <form action="{{route('admin.tags.destroy',['tag'=>$tag->id])}}" method="POST">
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