@extends('layouts.client')

@section('title', 'Page Title')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success" style="display: none"><strong><span class="glyphicon glyphicon-send"></span> Success! Message sent. (If form ok!)</strong></div>
                <div class="alert alert-danger" style="display: none"><span class="glyphicon glyphicon-alert"></span><strong> Error! Please check the inputs. (If form error!)</strong></div>
            </div>

            <div class="col-lg-6">
                <h4 style="color:#9db668;"></h4>
                <form role="form" action="{{url('/Contact/sendEmail')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="InputName">Your Name</label>
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required="">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Your Email</label>
                        <input type="email" class="form-control form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required="">
                        <input type="hidden" id="msgSent" name="msgSent" value=" <i class=&quot;fa fa-check&quot;></i> message was sent successfully!">
                    </div>
                    <div class="form-group">
                        <label for="InputMessage">Message</label>
                        <textarea name="InputMessage" id="InputMessage" class="form-control txt-area" rows="5" required="" placeholder="Enter message"></textarea>
                    </div>
                    <div class="form-group">

                        <div class="input-group">
                        </div>
                    </div>
                    <input type="submit" name="submit" id="submit" value="Send Email" class="btn btn-success pull-right">
                </form>
            </div>


            <hr class="featurette-divider hidden-lg">
            <div class="col-lg-5 col-md-push-1">
                <address>
                    <h3>U &amp; U Constraction LTD</h3>
                    <p>We are here to <b>HELP</b> with all inquires</p>
                    <p>Please use the contact form to email us or simply contact us by telephone</p>
                    <p><b>Opening Hours</b></p>
                    <p>MONDAY TO SATURDAY </p>
                    <p><b>Mailing Address:</b></p>
                    <p>3 Anchor close</p>
                    <p>Cheshunt</p>
                    <p>Waltham cross</p>
                    <p>EN8 0PJ</p>
                    <p><b>Contact:</b></p>
                    <p><i class="fa fa-phone"></i> Office: 01992302917</p>
                    <p><i class="fa fa-phone"></i> Direct:  07592723507 /  07904747198 </p>
                    <p><i class="fa fa-envelope-o"></i> Email: info@uucltd.co.uk</p>
                </address>
            </div>
        </div>

    </div>
@endsection