@extends('layouts.people')

@section('title', 'People Page')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="PersonProfile">
                <img src="http://s3.amazonaws.com/37assets/svn/765-default-avatar.png" width="100%" alt="Person profil image">
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-4">Emri</div>
                <div class="col-md-4">Mbiemri</div>
                <div class="col-md-4">Numri Personal</div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3>
                        {{$person->Emri}}
                    </h3>
                </div>
                <div class="col-md-4">
                    <h3>
                        {{$person->Mbiemri}}
                    </h3>
                </div>
                <div class="col-md-4">
                    <h3>
                        {{$person->numerpersonal}}
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection