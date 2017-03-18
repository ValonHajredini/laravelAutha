@extends('layouts.client')

@section('title', 'Page Title')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 paddingat"></div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div>
                    <!-- Nav tabs -->

                    <!-- Tab panes -->

                    <div class="row">
                        <div class="col-md-11">
                            <div class="comments">

                                <div class=" media">
                                    @foreach($messages as $msg):
                                    <div class="row ">
                                        <div class="col-md-2 col-sm-3 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
                                            <div class="profile-pic">
                                                <img src="images/avatar.png" alt="" class="media-object">
                                                <div class="stars" style="font-size: 12px;">
                                                    @for($i=0; $i < $msg->ratting; $i++)★ @endfor
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                            <h1 style="font-size: 20px; ">{{$msg->name}}</h1>
                                            <p class="comment_text">
                                            {{$msg->comment}}
                                            </p>
                                            <data value="" class="data-time">  <i class="fa fa-calendar"> </i> {{$msg->created_at->format('Y-m-d') }} </data>
                                            <hr>
                                        </div>

                                    </div>
                                    @endforeach
                                </div>


                            </div>
                        </div>

                        <div class="col-md-11">
                            <div class="comment_forma">

                                <form class="form-horizontal form" action="/createFeetback" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="text" name="name" value="" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="comment" rows="3" cols="40" class="form-control txt-area" placeholder="Your comment here..."></textarea>
                                    </div>
                                    <div class="">

                                        <div class="rating">
                                            <div id="s1" class="rat" style="color: rgb(92, 184, 92);">☆ <input type="hidden" value="0" name="rating"></div>
                                            <div id="s2" class="rat" style="color: rgb(92, 184, 92);">☆</div>
                                            <div id="s3" class="rat" style="color: rgb(92, 184, 92);">☆</div>
                                            <div id="s4" class="rat" style="color: rgb(92, 184, 92);">☆</div>
                                            <div id="s5" class="rat" style="color: rgb(92, 184, 92);">☆</div>
                                        </div>
                                        <input type="submit" name="submit" value="Add feedback" style="float:right; margin-bottom: 20px;" class="btn btn-success coment_button">
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <form>
                {{csrf_field()}}
                <div>
                    <label for="email"></label>
                    <input type="email" id="email" placeholder="Enter email" style="display: none">
                </div>
                <div>
                    <label for="pwd"></label>
                    <input type="password" id="pwd" placeholder="Enter password" autocapitalize="sentences" style="display: none">
                </div>

                <button type="submit" style="display: none">Submit</button>
            </form>
            <div class=" col-lg-4 col-md-4 col-sm-10  col-sm-12">

                <div class="total_rating">
                    <table>
                        <tbody><tr>
                            <td></td><td colspan="5"><div class="stars" style="font-size: 22px;text-align: center;">Rating {{$star['total']}} ★</div>  </td>
                        </tr>
                        <tr>
                            <td>{{$star['p5']}} People </td>
                            <td colspan="2" class="progresbar_width">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="" style="width:{{$star['s5']}}%">

                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="stars">★ ★ ★ ★ ★</div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{$star['p4']}} People </td>
                            <td colspan="2" class="progresbar_width">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:{{$star['s4']}}%">

                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="stars">★ ★ ★ ★ ☆</div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{$star['p3']}} People </td>
                            <td colspan="2" class="progresbar_width">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:{{$star['s3']}}%">

                                    </div>
                                </div>
                            </td><td>
                                <div class="stars">★ ★ ★ ☆ ☆</div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{$star['p2']}} People </td>
                            <td colspan="2" class="progresbar_width">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:{{$star['s2']}}%">
                                    </div>
                                </div>
                            </td>
                            <td><div class="stars">★ ★ ☆ ☆ ☆</div></td>
                        </tr>
                        <tr>
                            <td>{{$star['p1']}} People </td>
                            <td colspan="2" class="progresbar_width">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:{{$star['s1']}}%">

                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="stars">★ ☆ ☆ ☆ ☆</div>
                            </td>
                        </tr>

                        </tbody></table>
                </div>                            <div class="cols-sm-12 paddingat"></div>
            </div>
        </div>
    </div>
@endsection