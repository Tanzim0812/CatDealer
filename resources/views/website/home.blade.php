@extends('layouts.frontend')
@section('content')
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide" style="border-top: 2px solid grey" data-ride="carousel">
        <div id="tooplate_middle">
            <div id="slider">
                <a href="#"><img src="{{asset('files/images/slideshow/01.jpg')}}"  alt="nature 1" title="Suspendisse quis velit ac nisl ultrices tristique a eu velit." /></a>
                <a href="#"><img src="{{asset('files/images/slideshow/02.jpg')}}" alt="nature 2" title="Fusce eget tellus eget felis ultrices volutpat et vitae mauris." /></a>
                <a href="#"><img src="{{asset('files/images/slideshow/03.jpg')}}" alt="nature 3" title="Duis non est nec dui tincidunt pulvinar lacinia vel quam." /></a>
                <a href="#"><img src="{{asset('files/images/slideshow/04.jpg')}}" alt="nature 4" title="Phasellus in orci eget neque tristique semper ut ac lacus." /></a>
            </div>
        </div>
    </div>
    <!--/.Carousel Wrapper-->


    <!-----Cat service start---->
    <div class="col-md-12 mt-3 mb-3" style="border-bottom: 1px solid whitesmoke">
        <section class="services-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="section-title text-center">

                            <h3 id="example3">Cat Services</h3>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-serviecs-block">
                            <i class="fas fa-user"></i>
                            <h3><a href="services-details.html">Cat Consumer</a></h3>
                            <p style="font-size: 13px">Seek help to Admin</p>
                            <p class="clearfix">Here Cat users choose their product and make inquiry about his/her product. Our Admin panel is here for you.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="single-serviecs-block">
                            <i class="far fa-lightbulb"></i>
                            <h3><a href="services-details.html">Cat Administrator</a></h3>
                            <p style="font-size: 13px">24/7 Consumer support</p>
                            <p class="clearfix">Cat Admins are always support users by supplying them details about their selective product. They make everything clear to about their inquiries.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-serviecs-block">
                            <i class="fas fa-briefcase"></i>
                            <h3><a href="services-details.html">Cat Business</a></h3>
                            <p style="font-size: 13px">Business to Consumers</p>
                            <p class="clearfix">B2C is selling products and services directly between a business and consumers. We sell directly to consumers by E-commerce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/Services Area-->
    </div>
    <!-----/Cat service end---->

    <!-----Login/registration start----->
    <div class="container mt-5">

        <div class="row">

            <div class="col-md-8">
                <div class="section-title text-center">
                    <h3 id="example3">Join Us!</h3>
                </div>
                <div class="form-body" id="example4">
                    @if($errors->any())
                        @foreach($errors->all() as $err)
                            <div class="alert alert-danger text-center">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>{{$err}}</strong>
                            </div>
                        @endforeach
                    @endif
                    <ul class="nav nav-tabs final-login">
                        <li id="tab1" class="login-shadow" style="padding: 5px;background-color: #e0e0eb"><a data-toggle="tab" href="#sectionA"><b style="color:navy">Sign In</b></a></li>
                        <li id="tab2" class="" style="padding: 5px;background-color: #c2c2d6"><a data-toggle="tab" href="#sectionB"><b style="color: black">Sign Up</b></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sectionA" class="tab-pane active">
                            <div class="innter-form">
                                <form class="sa-innate-form" method="post" action="{{route('login') }}">
                                    @csrf
                                    <label>Email Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">


                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">


                                    <button type="submit">Sign In</button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link float-right" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </form>
                               <br>
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-google"></a>
                                <a href="#" class="fa fa-linkedin"></a>
                            </div>


                            <div class="clearfix"></div>
                        </div>
                        <div id="sectionB" class="tab-pane fade">
                            <div class="innter-form">
                                <form class="sa-innate-form" method="post" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <label>Name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" >

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label>Email Address</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" >

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label>Why you do Register?</label>
                                    <select class="form-control" name="issueofreg">
                                        <option class="alert-danger" disabled="true" selected="true">-Select-</option>
                                        <option value="Have_Company">I have a Company</option>
                                        <option value="Have_business">For Business issue</option>
                                    </select>
                                    @error('issueofreg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <label>Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                    <label>Your Avatar</label>
                                    <input type="file" class="form-control" name="image" accept="image/*">


                                    <button type="submit">Join now</button>
                                    <p>By clicking Join now, you agree to Cat Dealer User Agreement, Privacy Policy, and Cookie Policy.</p>
                                </form>
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-google"></a>
                                <a href="#" class="fa fa-linkedin"></a>

                            </div>


                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="section-title text-center">
                    <h3 id="example3">Check Our Videos</h3>
                </div>

                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0OxCzqd_JPQ" allowfullscreen></iframe>
                </div>

                <div class="row" style="margin-left: 1px">
                    <iframe src="https://www.youtube.com/embed/cSkNzJN6hE8" width="168" height="145" frameborder="0" allowfullscreen style="margin-right: 2px;margin-top: 3px"></iframe>

                    <iframe src="https://www.youtube.com/embed/LUpQSaKuVD0" width="168" height="145" frameborder="0" allowfullscreen style="margin-left: : 2px;margin-top: 3px"></iframe>
                </div>



            </div>
        </div>

    </div>
    <!-----Login/registration end----->
@endsection
