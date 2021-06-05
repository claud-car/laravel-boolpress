@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12 card-header row justify-content-center">     
            <h5 class=text-align-center>Tag: {{$tag->name}}</h5>
        </div>
        <a href="{{route('admin.tags.index')}}">-Indietro</a>
    </div>


@endsection