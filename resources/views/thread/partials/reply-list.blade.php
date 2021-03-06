<div class="small well text-info reply-list" style="margin-left: 43px">
    <p>{{$reply->body}}</p>
    <lead> by {{$reply->user->name}}</lead>

    <div class="actions">
        {{--<a href="{{route('thread.edit',$thread->id)}}" class="btn btn-info btn-xs">Edit</a>--}}

        <a class="btn btn-info btn-xs" data-toggle="modal" href="#{{$reply->id}}">Bewerken</a>
        <div class="modal fade" id="{{$reply->id}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                        </button>
                        <h4 class="modal-title">Modal titel</h4>
                    </div>
                    <div class="modal-body">
                        <div class="comment-form">

                            <form action="{{route('comment.update',$reply->id)}}" method="post" role="form">
                                {{csrf_field()}}
                                {{method_field('put')}}
                                <legend>Bewerk Reactie</legend>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="body" id=""
                                           placeholder="Input..." value="{{$reply->body}}">
                                </div>


                                <button type="submit" class="btn btn-info">Reageer</button>
                            </form>

                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        {{--//delete form--}}
        <form action="{{route('comment.destroy',$reply->id)}}" method="POST" class="inline-it">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input class="btn btn-xs btn-danger" type="submit" value="Verwijder">
        </form>

    </div>
</div>