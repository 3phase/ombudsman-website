 <h1>{{$alien->name}} -> планета {{$planet->name}}</h1>
<div>
    <img src="#" alt="Image of the аlien...">
</div>

<div>
    <form action="{{$action}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="alienName">Име</label>
            <input type="text" class="form-control" id="alienName" Name="name">
        </div>
        <button type="submit" class="btn btn-primary">Създай</button>
    </form>
</div>