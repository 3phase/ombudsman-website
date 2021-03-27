@extends('layouts.app')

@section('content')
<h1>Избери планета: </h1>
<div>
    @forelse($planets as $planet)
        <h4 style="margin-top: 30px;">-> {{$planet->name}}</h4>
        <p>
            <a href="/cms/planet/{{$planet->id}}/aliens">Извънземни</a>
        </p>
    @empty
        <p>Няма планети в базата!</p>
    @endforelse
</div>
@endsection
