
@extends('layouts.app')

@section('title', 'U&U Construction LTD')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><img src="/upload/avatars/{{$user->avatar}}" alt="" style="width: 150px; height: 150px; border-radius: 100%; "><p>{{$user->name}}' Profile</p></div>

                    <div class="panel-body">
                        <form action="{{url('uploadAvatar')}}" enctype="multipart/form-data" method="post">
                            {{csrf_field()}}
                            <label for="avatar">Upload Your profile Image</label>
                            <input type="file" name="avatar" id="avatar" >
                            <input type="submit" class="btn btn-primary pull-right" value="Upload">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection