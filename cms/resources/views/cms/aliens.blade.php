@extends('layouts.app')

@section('content')
<h1>Извънземни за планета {{$planet->name}}</h1>
<div>
    @foreach($aliens as $alien)
        <p>
            <a href="/cms/planet/{{$planet->id}}/alien/{{$alien->id}}">{{$alien->name}}</a>
            <a href="/cms/planet/{{$planet->id}}/alien/{{$alien->id}}/edit">Редактирай</a>
            <!-- <a href="/cms/planet/{{$planet->id}}/alien/{{$alien->id}}/delete">Изтрий</a> -->
            <button id='{{$alien->id}}'>Изтрий</button>
        </p>
    @endforeach
</div>
@endsection
