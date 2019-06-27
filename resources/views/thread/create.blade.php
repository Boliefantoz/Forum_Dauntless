@extends('layouts.front')

@section('heading',"Create Thread")

@section('content')


    <div class="row">
        <div class=" well">
            <form class="form-vertical" action="{{route('thread.store')}}" method="post" role="form"
                  id="create-thread-form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="subject">De Onderwerpen</label>
                    <input type="text" class="form-control" name="subject" id="" placeholder="typ iets..."
                           value="{{old('subject')}}">
                </div>

                <div class="form-group">
                    <label for="tag">De Onderwerpen</label>
                    <select name="tags[]" multiple id="tag">
                        {{-- todo add from db--}}
                        @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="thread">Thread</label>
                    <textarea class="form-control" name="thread" id="" placeholder="Iets"
                    > {{old('thread')}}</textarea>
                </div>

                {{--  <div class="form-group">
                   {!! app('captcha')->display() !!}
                </div>  --}}

                <button type="submit" class="btn btn-info">Verstuur</button>
            </form>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.4/js/standalone/selectize.min.js"></script>

    <script>

        $(function () {
            $('#tag').selectize();
        })
    </script>
@endsection