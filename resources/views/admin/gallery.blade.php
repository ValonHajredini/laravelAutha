@extends('layouts.admin')

@section('title', 'Admin Gallery')


@section('content')

    <style>
        .cropit-preview {
            background-color: #f8f8f8;
            background-size: cover;
            border: 5px solid #ccc;
            border-radius: 3px;
            margin-top: 7px;
            width: 800px;
            height: 500px;
        }

        .cropit-preview-image-container {
            cursor: move;
        }

        .cropit-preview-background {
            opacity: .2;
            cursor: auto;
        }

        .image-size-label {
            margin-top: 10px;
        }

        input, .export {
            /* Use relative position to prevent from being covered by image background */
            position: relative;
            z-index: 10;
            display: block;
        }

        button {
            margin-top: 10px;
        }
    </style>

    <div class="row">
        <div class="col-lg-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
            <h2 id="nav-tabs"><i class="fa fa-picture-o" aria-hidden="true"></i> Gallery</h2>
            <div class="bs-example">
                <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                    <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Uploaded Images</a></li>
                    <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Upload new <i class="fa fa-plus" aria-hidden="true"></i></a></li>

                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <div class="container">
                            <div class="row">
                                @foreach($gallery as $g)

                                    <div class="col-md-4 col-sm-6 col-xs-6">

                                        <a href="/admin/dashboard/Gallery/{{$g->id}}" class="pull-right" style="margin-right: 20px;font-size:18px ;" onclick="return confirm('Do you realy delete this Picture?')"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                        <a href="/upload/original/{{$g->url}}" data-title="{{$g->photoName}}" data-title="{{ $g->photoName }}" data-lightbox="U-&amp;-U-Constraction-Ltd">
                                            <img src="/upload/thumbnails/{{$g->thumbnailUrl}}" class="img-thumbnail" style="width:300px; height:200px; margin:12px">
                                        </a>

                                        <hr>

                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                                    {{$gallery->render()}}
                                </div>
                            </div>
                            <!-- End of slide -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <div class="row">
                            <div class="col-lg-12">

                                <form action="{{url('admin/dashboard/createGallery')}}" enctype="multipart/form-data" method="post">
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
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/js/uploadImage/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/uploadImage/jquery.cropit.js') }}"></script>
    <script>
        $(function() {
            $('.image-editor').cropit({
                exportZoom: 2.45,
                imageBackground: true,
                imageBackgroundBorderWidth: 80,
//                imageState: {
//                    src: 'http://lorempixel.com/500/400/',
//                },
            });

            $('.rotate-cw').click(function() {
                $('.image-editor').cropit('rotateCW');
                return false;

            });
            $('.rotate-ccw').click(function() {
                $('.image-editor').cropit('rotateCCW');
                return false;
            });

            $('.export').click(function() {
                var imageData = $('.image-editor').cropit('export');
//                window.open(imageData);
                $("#cropImage").val(imageData);
                return false;
            });
        });

    </script>
@endsection