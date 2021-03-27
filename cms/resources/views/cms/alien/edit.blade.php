@extends('layouts.app')

@section('content')
    <h1>{{$alien->name}} -> планета {{$planet->name}}</h1>
    <div>
        <img src="#" alt="Image of the аlien...">
    </div>

   @include('cms.alien.new', ["action" => "/cms/planet/$planet->id/alien/$alien->id"])
    <a href="/cms/planet/{{$planet->id}}/aliens"><- Назад</a>
@endsection
