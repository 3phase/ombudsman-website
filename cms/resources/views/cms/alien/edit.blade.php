@extends('layouts.app')

@section('content')
    <h1>{{$alien->name}} -> планета {{$planet->name}}</h1>
    <div>
        <img src="#" alt="Image of the аlien...">
    </div>

    <div>
        <form action="/cms/planet/{{$planet->id}}/alien/{{$alien->id}}" method="POST">
            @csrf
            @method('POST')
            <input type="text" name="name" placeholder="Name">
            <input type="submit">
        </form>
    </div>


    <a href="/cms/planet/{{$planet->id}}/aliens"><- Назад</a>
@endsection
