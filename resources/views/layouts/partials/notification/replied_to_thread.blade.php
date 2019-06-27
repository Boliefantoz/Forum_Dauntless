

<a href="{{route('thread.show',$notification->data['thread']['id'])}}">

    {{$notification->data['user']['name']}} Heeft gereageerd op <strong> {{$notification->data['thread']['subject']}}</strong>
</a>

