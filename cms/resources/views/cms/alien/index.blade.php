@extends('layouts.app')

@section('content')
<h1>Извънземни за планета {{$planet->name}}</h1>
<div>
    @forelse($aliens as $alien)
        <p>
            <a href="/cms/planet/{{$planet->id}}/alien/{{$alien->id}}/missions">{{$alien->name}}</a>
            <a href="/cms/planet/{{$planet->id}}/alien/{{$alien->id}}">Редактирай</a>
            <form action="/cms/planet/{{$planet->id}}/alien/{{$alien->id}}" method="DELETE"> <button>Изтрий</button></form>
        </p>
    @empty
        <p>Няма извънземни в базата!</p>
    @endforelse
</div>
@endsection
