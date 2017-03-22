@extends('layouts.admin')

@section('title', 'Admin Gallery')


@section('content')

    {{--<a href="{{route('sendEmail')}}" class="btn btn-primary">Send me a email</a>--}}

    <style>
        .deleteLink {
            position: relative;
        }
        .deleteLink a {
            position: absolute;
            right: 4px;
            top: -3px;
            font-size: 26px;
        }
        .imgeForSlide {
            margin-bottom: 15px;
        }
    </style>

<div class="row">
    <div class="col-md-12">
        <h2>Add Slide</h2>
        <hr>
        <div class="col-lg-12">

            <form action="{{url('admin/dashboard/createSlider')}}" enctype="multipart/form-data" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email">Image Title:</label>
                    <input type="text" class="form-control" id="imgTitle" name="imgTitle">
                </div>

                <div class="form-group">
                    <label for="avatar">Image</label>
                    <input type="file" name="avatar" id="avatar" >
                </div>


                <input type="submit" class="btn btn-primary pull-right" value="Upload">
            </form>
        </div>
        <hr>

    </div>
</div>
    <hr>
<div class="row">
    @foreach($slide as $sl)
        <div class="col-md-3">
            <div class="imgeForSlide">
                <div class="deleteLink">
                    <a href="{{url('/admin/dashboard/Slide/')}}/{{$sl->id}}"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                </div>
                <img src="/upload/slide/thumbnails/{{$sl->url}}" width="100%" alt="">
            </div>
        </div>
        
        
    @endforeach
</div>

@endsection