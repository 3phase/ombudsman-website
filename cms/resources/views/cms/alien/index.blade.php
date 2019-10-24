@extends('layouts.app')

@section('content')
<h1>Извънземни за планета {{$planet->name}}</h1>
<div>
    @forelse($aliens as $alien)
        <p>
            <a href="/cms/planet/{{$planet->id}}/alien/{{$alien->id}}/missions">{{$alien->name}}</a>
            <a href="/cms/planet/{{$planet->id}}/alien/{{$alien->id}}">Редактирай</a>
            <form action="/cms/planet/{{$planet->id}}/alien/{{$alien->id}}/delete" method="POST">
                @csrf
                @method('POST')
                <button type="submit">Изтрий</button>
            </form>
        </p>
    @empty
        <p>Няма извънземни в базата!</p>
    @endforelse
    
</div>
<p>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseAddAlien" aria-expanded="false" aria-controls="collapseAddAlien">
        Създай извънземно
    </button>
</p>
<div class="collapse" id="collapseAddAlien">
   @include('cms.alien.new', ["action" => "/cms/planet/{{$planet->id}}/alien"])
</div>

<a href="/cms"><- Към планетите</a>

@endsection
