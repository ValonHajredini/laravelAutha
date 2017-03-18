<!document html>
<html>
<head>
    <title>Galery</title>
</head>
<body>
<div class="container">
    <form action="{{url('insertPost')}}" method="POST" enctype="multipart/form-data" id="upload">
        {{csrf_field()}}
        <div class="form-group">
            <label for="email">photoName:</label>
            <input type="text" class="form-control" id="photoName" name="photoName">
        </div>
        <div class="form-group">
            <label for="file">Url:</label>
            <input type="text" class="form-control" id="url" name="url" multiple>
        </div>
        <div class="form-group">
            <label for="email">thumbnailUrl:</label>
            <input type="file" class="form-control" id="thumbnailUrl" name="thumbnailUrl">
        </div>

        <button type="submit" class="btn btn-default" name="submit">Save</button>
    </form>
</div>
<div class="container">
    <div class="row">
        @foreach($gallery as $gallery)

            <div class="col-md-12">
            <ul>
                <li>{{$gallery->photoName}}</li>
                <li>{{$gallery->url}}</li>
                <li>{{$gallery->thumbnailUrl}}</li>
            </ul>
            </div>

        @endforeach
    </div>
</div>
{{--<script>--}}
    {{--var form = document.getElementById('upload');--}}
    {{--var request = new XMLHttpRequest();--}}
    {{--form.addEventListener('submit',function(e){--}}
        {{--e.preventDefault();--}}
        {{--var formData = new FormData(form);--}}
        {{--request.open('post', '/insert');--}}

        {{--request.addEventListener("load", transferComplete)--}}

        {{--request.send(formData);--}}
    {{--});--}}
    {{--function transferComplete(data){--}}
        {{--console.log(data.currentTarget.response);--}}
    {{--}--}}
{{--</script>--}}
</body>
</html>