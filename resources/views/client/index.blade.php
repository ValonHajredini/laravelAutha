
@extends('layouts.client')

@section('title', 'U&U Construction LTD')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php
                        $cnt = 0;
                        $act = "active";
                        ?>
                        @for($i = 0; $i< count($slide); $i++ )
                            <?php
                                if($cnt == 0){
                                    ?>
                                <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class="active"></li>
                                    <?php
                                }else {
                                    ?>
                                <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class=""></li>
                                <?php
                                }
                            ?>
                            <?php $cnt = $cnt + 1?>
                        @endfor


                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $active = 'active';
                            $counter = 0;
                        ?>
                        @foreach($slide as $sldURL)
                            <?php
                                if($counter == 0){
                                ?>
                                <div class="item {{$active}}">
                                    <img src="/upload/slide/thumbnails/{{$sldURL->url}}" alt="..." style="margin:0px auto">
                                    <div class="carousel-caption"></div>
                                </div>
                                <?php
                            }else {
                                    ?>
                                <div class="item">
                                    <img src="/upload/slide/thumbnails/{{$sldURL->url}}" alt="..." style="margin:0px auto">
                                    <div class="carousel-caption"></div>
                                </div>
                                    <?php
                                }
                            ?>

                            <?php
                                $counter  = $counter +1;
                            ?>
                        @endforeach
                        {{--<div class="item">--}}
                            {{--<img src="images/001.jpg" alt="..." style="margin:0px auto">--}}
                            {{--<div class="carousel-caption"></div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<img src="images/002.jpg" alt="..." style="margin:0px auto">--}}
                            {{--<div class="carousel-caption"></div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<img src="images/003.jpg" alt="..." style="margin:0px auto">--}}
                            {{--<div class="carousel-caption"></div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<img src="images/004.jpg" alt="..." style="margin:0px auto">--}}
                            {{--<div class="carousel-caption"></div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<img src="images/005.jpg" alt="..." style="margin:0px auto">--}}
                            {{--<div class="carousel-caption"></div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<img src="images/006.jpg" alt="..." style="margin:0px auto">--}}
                            {{--<div class="carousel-caption"></div>--}}
                        {{--</div>--}}
                        {{--<div class="item active">--}}
                            {{--<img src="images/007.jpg" alt="..." style="margin:0px auto">--}}
                            {{--<div class="carousel-caption"></div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<img src="images/008.jpg" alt="..." style="margin:0px auto">--}}
                            {{--<div class="carousel-caption"></div>--}}
                        {{--</div>div--}}
                        {{--<div class="item">--}}
                            {{--<img src="images/010.jpg" alt="..." style="margin:0px auto">--}}
                            {{--<div class="carousel-caption"></div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<img src="images/011.jpg" alt="..." style="margin:0px auto">--}}
                            {{--<div class="carousel-caption"></div>--}}
                        {{--</div>--}}
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="false" style="color:black; opacity: 1;"></span>
                        <span class="glyphicon glyphicon-chevron-left" style="color:black; opacity: 1;"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color:black; opacity: 1;"></span>
                        <span class="sr-only" style="color:black; opacity: 1;"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End of slide -->
    </div>
    <div class="container">
        <div class="row">
            <div class="cols-sm-12 paddingat"></div>
            <div class="cols-sm-12">
                <div class="media">
                    <div class="media-left ">
                        <p class="home_text">
                            <img src="images/logo.png" alt="" style="float:left" class="media-object">
                            All of us at<strong> U &amp; U Construction Ltd </strong>, wish you a warm welcome.<br>
                            We specialise in all aspects of construction work, bringing old properties back into shape and newer properties up to date.<br>
                            We are completely dedicated to our work and customers, and because of our experience and dedication to the task, our customers are always left feeling satisfied and happy.<br>
                            Around 50 % of our customers are from rated people.  You can find us on rated people by clicking here: <a href="http://www.ratedpeople.com/profile/sefe-beqaj/"> Rated People website</a><br>
                            You will be able to view our customer ratings and comments.<br>
                            We have several years experience in the construction industry, and we offer excellent customer service.  We have a fantastic team who will ensure that our customers are kept up to date with what is happening at all times.<br>
                            If you are interested in a quotation for some work that you are considering, then we would be only too pleased to visit you and discuss with your requirements.<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="cols-sm-12 paddingat"></div>
        </div>
    </div>
@endsection