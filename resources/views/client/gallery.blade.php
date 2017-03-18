@extends('layouts.client')

@section('title', 'U&U Gallery')


@section('content')

    {{--------------------------}}
<div class="container">
    <div class="row">
        @foreach($gallery as $g)

        <div class="col-md-4 col-sm-6 col-xs-6">
            <a href="/upload/original/{{$g->url}}" data-title="{{$g->photoName}}" data-title="{{ $g->photoName }}" data-lightbox="U-&amp;-U-Constraction-Ltd">
                <img src="/upload/thumbnails/{{$g->thumbnailUrl}}" class="img-thumbnail" style="width:300px; height:200px; margin:12px">
            </a>
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
@endsection