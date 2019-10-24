@extends('layouts.app')

@section('content')
   @include('cms.alien.new', ["action" => "/cms/planet/$planet->id/alien/$alien->id"])
    <a href="/cms/planet/{{$planet->id}}/aliens"><- Назад</a>
@endsection
