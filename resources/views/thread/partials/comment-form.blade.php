<div class="comment-form">

    <form action="{{route('threadcomment.store',$thread->id)}}" method="post" role="form">
        {{csrf_field()}}
        <legend>Plaats reactie</legend>

        <div class="form-group">
            <input type="text" class="form-control" name="body" id="" placeholder="Zeg iets maar houd het netjes.">
        </div>
        <button type="submit" class="btn btn-info">Reageer</button>
    </form>

</div>