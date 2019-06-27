<div class="col-md-3">
    
    <form method="get" action="/thread/search">

    </form>
    

    <a class="btn btn-info form-control"  href="{{route('thread.create')}}">Maak Thread</a> <br><br>
    <h4>De Categorieen</h4>
    <ul class="list-group">
        <a href="{{route('thread.index')}}" class="list-group-item active">
            <span class="badge"></span>
            Alle Categorieen
        </a>
        @foreach($tags as $tag)
        <a href="{{route('thread.index',['tags'=>$tag->id])}}" class="list-group-item list-group-item-info">
            <span class="badge"></span>
            {{$tag->name}}
    </a>
        @endforeach
        {{--<a href="#" class="list-group-item">--}}
            {{--<span class="badge">2</span>--}}
            {{--PHP--}}
        {{--</a>--}}
        {{--<a href="#" class="list-group-item">--}}
            {{--<span class="badge">1</span>--}}
            {{--Python--}}
        {{--</a>--}}
    </ul>
</div>