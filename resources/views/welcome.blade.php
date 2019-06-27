@extends('layouts.front')

@section('banner')
        <div class="container  bg-info">
            <h1>Dauntless Forum</h1>
            <p>Welkom! Op het Dauntless Forum</p>
            <img class="img-rounded" src="https://cdn2.unrealengine.com/Diesel%2Fproduct%2Fdauntless%2Fhome%2FDauntless_LibraryCrop-2580x1162-8daf032d92f89507d55298e7ecb42e10ab3633e2.jpg" width="500">
            <br><br>
        </div>
@endsection
@section('heading',"Threads")
@section('content')
    @include('thread.partials.thread-list')
@endsection