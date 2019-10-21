@extends('layouts.app')

@section('content')
<h1>So now it gets interesting!</h1>
<div>
    @forelse($planets as $planet)
        <p>
            <a href="/cms/planet/{{$planet->id}}/aliens">{{$planet->name}}</a>
            <a href="/cms/planet/{{$planet->id}}">Редактирай</a>
            <form action="/cms/planet/{{$planet->id}}" method="DELETE"> <button>Изтрий</button></form>
        </p>
    @empty
        <p>Няма планети в базата!</p>
    @endforelse

    <!-- <aR href="/cms/planet/"><button>+</button></a> -->
</div>
@endsection
