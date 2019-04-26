@extends('layouts.app')
@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="well">
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" style="width: 150px; height: 130px" src="{{$post->image}}">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">{{$post->title}}</h4>

                    <p>{{$post->description}}</p>

                </div>
            </div>
        </div>
    @endforeach

</div>
</div>
</div>
@stop

