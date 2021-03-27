@extends('layouts.app')

@section('content')
    <h1>{{$planet->name}} -> {{$planet->level}} ниво</h1>
    <div>
        <img src="#" alt="Image of the planet...">
    </div>

    <div>
        <form action="/cms/planet/{{$planet->id}}" method="POST">
            @csrf
            @method('POST')
            <input type="text" name="name" placeholder="Name">
            <input type="number" name="level" placeholder="Level">
            <input type="submit">
        </form>
    </div>
@endsection
