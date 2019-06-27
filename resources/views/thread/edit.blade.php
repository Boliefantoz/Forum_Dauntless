@extends('layouts.front')

@section('heading')
    <h4>Bewerk Thread</h4>
@endsection

@section('content')

    @include('layouts.partials.error')

    @include('layouts.partials.success')

    <div class="row">
        <div class=" well">
            <form class="form-vertical" action="{{route('thread.update',$thread->id)}}" method="post" role="form"
                  id="create-thread-form">
                {{csrf_field()}}
                {{method_field('put')}}
                <div class="form-group">
                    <label for="subject">Onderwerp</label>
                    <input type="text" class="form-control" name="subject" id="" placeholder="Input..."
                           value="{{$thread->subject}}">
                </div>

                <div class="form-group">
                    <label for="type">Type Thread</label>
                    <input type="text" class="form-control" name="type" id="" placeholder="iets"
                           value="{{$thread->type}}">
                </div>

                <div class="form-group">
                    <label for="thread">Thread</label>
                    <textarea class="form-control" name="thread" id="" placeholder="iets"> {{$thread->thread}} </textarea>
                </div>

                <button type="submit" class="btn btn-info">Verstuur</button>
            </form>
        </div>
    </div>

@endsection