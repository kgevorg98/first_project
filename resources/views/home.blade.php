@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="post" enctype="multipart/form-data" action="{{route('create_post')}}">
                            {{csrf_field()}}
                            <input type="text" name="title">Title
                            <br><br>
                            <input type="text" name="description">Description
                            <br><br>
                            <input type="file" name="file">image
                            <br><br>
                            <input type="submit" value="add">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
