@extends('layouts.frontend')
@section('content')
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide mt-2" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="">
            <!--First slide-->
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('files/imagesWEB/titan.jpg')}}"
                     alt="First slide">
                <div class="carousel-caption">
                    <h3>Titan</h3>
                    <p>Simple but elegant</p>
                </div>
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('files/imagesWEB/redjuta.jpg')}}"
                     alt="Second slide">
                <div class="carousel-caption">
                    <h3>Nike</h3>
                    <p>Live in fashion</p>
                </div>
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
                <img class="d-block w-100"  src="{{asset('files/imagesWEB/bluejuta.jpg')}}"
                     alt="Third slide">
                <div class="carousel-caption">
                    <h3>Vans</h3>
                    <p>Following the wing</p>
                </div>
            </div>
            <!--/Third slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->


    <!-----Cat service start---->
    <div class="col-md-12 mt-3 mb-3" style="border-bottom: 1px solid whitesmoke">
        <h5 class="text-center text-primary mt-2 text-uppercase" style="padding: 5px"><span style="background-color: #fed03d;color: navy">Cat Service</span></h5>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="square"></div>
                        <h5 class="card-title">Cat User</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Pick your product</h6>
                        <p class="card-text">Here Cat users choose their product and buy it.</p>
                        <a href="#!" class="card-link">link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="triangle-up"></div>
                        <h5 class="card-title">Cat Admin</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Seek help to Admin</h6>
                        <p class="card-text">Cat Admins are always support users to make inquiry about their product.</p>
                        <a href="#!" class="card-link">link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="square"></div>
                        <h5 class="card-title">Cat Business</h5>
                        <h6 class="card-subtitle mb-2 text-muted">subtitle</h6>
                        <p class="card-text">Some quick example text to build on the title and make up the bulk of the content.</p>
                        <a href="#!" class="card-link">link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-----/Cat service end---->

    <!-----Login/registration start----->
    <div class="container mt-2">
        <h5 class="text-center text-primary mt-2 text-uppercase" style="padding: 5px"><span style="background-color: #ffebcc">Sign Up/Login</span></h5>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 col-md-offset-4" style="border: 1px solid wheat">
        <div class="form-body">
            @if($errors->any())
                @foreach($errors->all() as $err)
                    <div class="alert alert-danger text-center">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>{{$err}}</strong>
                    </div>
                @endforeach
            @endif
            <ul class="nav nav-tabs final-login">
                <li id="tab1" class="active bg-warning login-shadow" style="padding: 5px"><a data-toggle="tab" href="#sectionA"><b>Sign In</b></a></li>
                <li id="tab2" class="bg-info " style="padding: 5px"><a data-toggle="tab" href="#sectionB"><b style="color: black">Join us!</b></a></li>
            </ul>
            <div class="tab-content">
                <div id="sectionA" class="tab-pane active">
                    <div class="innter-form">
                        <form class="sa-innate-form" method="post" action="{{ route('login') }}">
                            @csrf
                            <label>Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <label>Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <button type="submit">Sign In</button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </form>
                    </div>
                    <div class="col">
                        <a href="#" class="fb btnn">
                            <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                        </a>
                        <a href="#" class="twitter btnn">
                            <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                        </a>
                        <a href="#" class="google btnn"><i class="fa fa-google fa-fw">
                            </i> Login with Google+
                        </a>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <div id="sectionB" class="tab-pane fade">
                    <div class="innter-form">
                        <form class="sa-innate-form" method="post" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <label>Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <label>Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <label>Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                            <label>Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                            <button type="submit">Join now</button>
                            <p>By clicking Join now, you agree to Cat Dealer User Agreement, Privacy Policy, and Cookie Policy.</p>
                        </form>
                    </div>
                    <div class="col">
                        <a href="#" class="fb btnn">
                            <i class="fa fa-facebook fa-fw"></i> SignUp with Facebook
                        </a>
                        <a href="#" class="twitter btnn">
                            <i class="fa fa-twitter fa-fw"></i> SignUp with Twitter
                        </a>
                        <a href="#" class="google btnn"><i class="fa fa-google fa-fw">
                            </i> SignUp with Google+
                        </a>
                    </div>
                </div>
            </div>
        </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <!-----Login/registration end----->
@endsection
