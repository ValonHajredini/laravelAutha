@extends('layouts.people')

@section('title', 'People Page')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="PersonProfile">
                <img src="/upload/avatars/{{$person->foto}}" width="100%" alt="Person profil image">
                <div class="row">

                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6">
                                <h3 class="text-center">{{$person->Emri}}</h3>
                            </div>
                            <div class="col-xs-6">
                                <h3 class="text-center">{{$person->Mbiemri}}</h3>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-6">
                        <h4 class="text-center">Numri personal</h4>
                    </div>
                    <div class="col-xs-6">
                        <h4 class="text-center">{{$person->id}}</h4>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <header>
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#stats" aria-expanded="true">Contact Information</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" href="#report" aria-expanded="false">Social Information</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" href="#dropdown1" aria-expanded="false">Profesional Information</a>
                    </li>
                </ul>
            </header>
            <div class="body tab-content">
                <div class="tab-pane clearfix active" id="stats">
                    <h5 class="tab-header"><i class="fa fa-calendar-o fa-2x"></i> Last logged-in users</h5>
                    <ul class="news-list">
                        <li>
                            <i class="fa fa-user fa-4x pull-left"></i>
                            <div class="news-item-info">
                                <div class="name"><a href="#">Ivan Gorge</a></div>
                                <div class="position">Software Engineer</div>
                                <div class="time">Last logged-in: Mar 12, 11:11</div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user fa-4x pull-left"></i>
                            <div class="news-item-info">
                                <div class="name"><a href="#">Roman Novak</a></div>
                                <div class="position">Product Designer</div>
                                <div class="time">Last logged-in: Mar 12, 19:02</div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user fa-4x pull-left"></i>
                            <div class="news-item-info">
                                <div class="name"><a href="#">Teras Uotul</a></div>
                                <div class="position">Chief Officer</div>
                                <div class="time">Last logged-in: Jun 16, 2:34</div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user fa-4x pull-left"></i>
                            <div class="news-item-info">
                                <div class="name"><a href="#">Deral Ferad</a></div>
                                <div class="position">Financial Assistant</div>
                                <div class="time">Last logged-in: Jun 18, 4:20</div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user fa-4x pull-left"></i>
                            <div class="news-item-info">
                                <div class="name"><a href="#">Konrad Polerd</a></div>
                                <div class="position">Sales Manager</div>
                                <div class="time">Last logged-in: Jun 18, 5:13</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="report">
                    <h5 class="tab-header"><i class="fa fa-star fa-2x"></i> Popular contacts</h5>
                    <ul class="news-list news-list-no-hover">
                        <li>
                            <i class="fa fa-user fa-4x pull-left"></i>
                            <div class="news-item-info">
                                <div class="name"><a href="#">Pol Johnsson</a></div>
                                <div class="options">
                                    <button class="btn btn-xs btn-success">
                                        <i class="fa fa-phone"></i>
                                        Call
                                    </button>
                                    <button class="btn btn-xs btn-warning">
                                        <i class="fa fa-envelope-o"></i>
                                        Message
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user fa-4x pull-left"></i>
                            <div class="news-item-info">
                                <div class="name"><a href="#">Terry Garel</a></div>
                                <div class="options">
                                    <button class="btn btn-xs btn-success">
                                        <i class="fa fa-phone"></i>
                                        Call
                                    </button>
                                    <button class="btn btn-xs btn-warning">
                                        <i class="fa fa-envelope-o"></i>
                                        Message
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user fa-4x pull-left"></i>
                            <div class="news-item-info">
                                <div class="name"><a href="#">Eruos Forkal</a></div>
                                <div class="options">
                                    <button class="btn btn-xs btn-success">
                                        <i class="fa fa-phone"></i>
                                        Call
                                    </button>
                                    <button class="btn btn-xs btn-warning">
                                        <i class="fa fa-envelope-o"></i>
                                        Message
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user fa-4x pull-left"></i>
                            <div class="news-item-info">
                                <div class="name"><a href="#">Remus Reier</a></div>
                                <div class="options">
                                    <button class="btn btn-xs btn-success">
                                        <i class="fa fa-phone"></i>
                                        Call
                                    </button>
                                    <button class="btn btn-xs btn-warning">
                                        <i class="fa fa-envelope-o"></i>
                                        Message
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user fa-4x pull-left"></i>
                            <div class="news-item-info">
                                <div class="name"><a href="#">Lover Lund</a></div>
                                <div class="options">
                                    <button class="btn btn-xs btn-success">
                                        <i class="fa fa-phone"></i>
                                        Call
                                    </button>
                                    <button class="btn btn-xs btn-warning">
                                        <i class="fa fa-envelope-o"></i>
                                        Message
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="dropdown1">
                    <h5 class="tab-header"><i class="fa fa-comments fa-2x"></i> Top Commenters</h5>
                    <ul class="news-list">
                        <li>
                            <i class="fa fa-user fa-4x pull-left"></i>
                            <div class="news-item-info">
                                <div class="name"><a href="#">Edin Garey</a></div>
                                <div class="comment">
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                    aut odit aut fugit,sed quia
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user fa-4x pull-left"></i>
                            <div class="news-item-info">
                                <div class="name"><a href="#">Firel Lund</a></div>
                                <div class="comment">
                                    Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat.
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user fa-4x pull-left"></i>
                            <div class="news-item-info">
                                <div class="name"><a href="#">Jessica Desingter</a></div>
                                <div class="comment">
                                    Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt.
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user fa-4x pull-left"></i>
                            <div class="news-item-info">
                                <div class="name"><a href="#">Novel Forel</a></div>
                                <div class="comment">
                                    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque.
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user fa-4x pull-left"></i>
                            <div class="news-item-info">
                                <div class="name"><a href="#">Wedol Reier</a></div>
                                <div class="comment">
                                    Laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis
                                    et quasi.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection