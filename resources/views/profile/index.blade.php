@extends('layouts.front')

@section('category')
    <div class="col-md-3 " >
    <div class="dp">
    <img src="https://i.redd.it/2f1u5ti5l5211.png" class="img-rounded" alt="Foto Profiel">
    </div>
        <h3 class="text-success">
           Gebruikersnaam: {{$user->name}}
        </h3>

    </div>

@endsection

@section('content')
<div class="well-lg border-0 bg-info">
    
    <h3>{{$user->name}}'s laatste Threads</h3>

    @forelse($threads as $thread)
        <h5>{{$thread->subject}}</h5>

    @empty
        <h5>Nog geen Threads (Gemaakt)</h5>

    @endforelse
    <br>
    <hr>

    <h3>{{$user->name}}'s Laatste Reactie</h3>

    @forelse($comments as $comment)
        <h5>{{$user->name}} Reageert op <a href="{{route('thread.show',$comment->commentable->id)}}">{{$comment->commentable->subject}}</a>  {{$comment->created_at->diffForHumans()}}</h5>
    @empty
    <h5>Geen Reacties</h5>
    @endforelse
</div>

@endsection

<style>
    body{
        background-image: url("https://www.pcgamesn.com/wp-content/uploads/2018/08/Dauntless-Behemoths-Koshai.png");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>