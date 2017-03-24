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
                        <a data-toggle="tab" href="#stats" aria-expanded="true">Social Information</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" href="#report" aria-expanded="false">Contact Information</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" href="#dropdown1" aria-expanded="false">Profesional Information</a>
                    </li>
                </ul>
            </header>
            <div class="body tab-content">
                <div class="tab-pane clearfix active" id="stats">
                    <h5 class="tab-header"><i class="fa fa-calendar-o fa-2x"></i> {{$person->Emri}} {{$person->Mbiemri}}'s social media links</h5>
                    <ul class="news-list">
                        @foreach($person->socialInformation as $socialInfo)
                            <li>
                                @if($socialInfo->socialType == 'facebook')
                                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                @elseif($socialInfo->socialType == 'twitter')
                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                @elseif($socialInfo->socialType == 'instagram')
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                @elseif($socialInfo->socialType == 'github')
                                    <i class="fa fa-github-square" aria-hidden="true"></i>
                                @elseif($socialInfo->socialType == 'linkedin')
                                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                                @endif
                                {{$socialInfo->socialProperty}}

                            <div class="news-item-info">
                                <div class="name"><a href="{{$socialInfo->socialContent}}">{{$socialInfo->socialContent}}</a></div>

                            </div>
                        </li>

                        @endforeach

                    </ul>
                </div>
                <div class="tab-pane" id="report">
                    <h5 class="tab-header"><i class="fa fa-star fa-2x"></i>Private Contact</h5>
                    <ul class="news-list news-list-no-hover">
                        @foreach($person->contactInformation as $personContact)
                        <li>
                            <i class="fa fa-user fa-4x pull-left"></i>
                            <div class="news-item-info">
                                <div class="name"><a href="#">{{$personContact->contactContent}}</a></div>
                                <div class="options">
                                    @if($personContact->contactType == 'mobile' )

                                        <a href="tel:{{$personContact->contactContent}}" class="btn btn-xs btn-success">
                                            <i class="fa fa-phone"></i>
                                            Call
                                        </a>
                                    @elseif($personContact->contactType == 'email')
                                        <a href="mailto:{{$personContact->contactContent}}" class="btn btn-xs btn-warning">
                                            <i class="fa fa-envelope-o"></i>
                                            Message
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="tab-pane" id="dropdown1">
                    @foreach($person->profesionalInformation as $work)
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Profesion: <strong>{{$work->profesionalType}}</strong></h5>
                            </div>
                            <div class="col-xs-6">
                                <p>Company Name</p>
                            </div>
                            <div class="col-xs-6">
                                <p><strong>{{$work->companyName}}</strong></p>
                            </div>
                            <div class="col-xs-6">
                                <p>Work Type</p>
                            </div>
                            <div class="col-xs-6">
                                <p>{{$work->profesionalContent}}</p>
                            </div>
                            <div class="col-xs-6">
                                <p>From</p>

                            </div>

                            <div class="col-xs-6">
                                <p><strong>{{$work->startWork}}</strong></p>

                            </div>
                            <div class="col-xs-6">
                                <p>To</p>
                            </div>
                            <div class="col-xs-6">
                                <p><strong>{{$work->endWork}}</strong></p>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">

        <div class="col-xs-12">
            <ul class="timeline">
                <li>
                    <div class="timeline-badge info"><i class="fa fa-unlock"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">User Logged in</h4>
                            <span><i class="fa fa-clock-o fa-2x"></i>1 hour 20 minutes ago</span>
                            <hr>
                        </div>
                        <div class="timeline-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge success"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title"> Work Experiences</h4>
                            {{--<span></span>--}}
                            <hr>
                        </div>
                        <div class="timeline-body">
                            @foreach($person->profesionalInformation as $work)
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>Profesion: <strong>{{$work->profesionalType}}</strong></h5>
                                     </div>
                                    <div class="col-xs-6">
                                        <p>Company Name</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p><strong>{{$work->companyName}}</strong></p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p>Work Type</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p>{{$work->profesionalContent}}</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p>From</p>

                                    </div>

                                    <div class="col-xs-6">
                                        <p><strong>{{$work->startWork}}</strong></p>

                                    </div>
                                    <div class="col-xs-6">
                                        <p>To</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p><strong>{{$work->endWork}}</strong></p>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
@endsection