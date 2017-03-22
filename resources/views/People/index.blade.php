@extends('layouts.people')

@section('title', 'People Page')


@section('content')



<div class="row">
    @foreach($peoples as $person)


    <div class="col-md-3">
        <div class="row ">

                <div class="col-md-12">
                    <div class="userImage">
                        <a href="{{url('/people/Dashboard/person/')}}/{{$person->id}}">
                            <img src="/upload/avatars/{{$person->foto}}" alt="User pictures" width="100%">
                        </a>
                    </div>
                </div>

                <div class="col-md-12 ">
                    <div class="PersonProfileAll">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 style="text-align: center">{{$person->id}}</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2">
                                <p>Emri</p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    {{$person->Emri}}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2">
                                <p>Mbiemri</p>
                            </div>
                            <div class="col-md-6">
                                <p>{{$person->Mbiemri}}</p>
                            </div>
                        </div>
                    </div>

                    </div>



        </div>
    </div>
    @endforeach
</div>
<div class="col-md-12 ">
    {{$peoples->render()}}
</div>




@endsection