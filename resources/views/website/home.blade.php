@extends('layout.header+footer')
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
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg"
                     alt="First slide">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
                     alt="Second slide">
                <div class="carousel-caption">
                    <h3>Newyork</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
                     alt="Third slide">
                <div class="carousel-caption">
                    <h3>washington</h3>
                    <p>We had such a great time in LA!</p>
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
        <h5 class="text-center text-primary mt-2 text-uppercase" style="padding: 5px"><span style="background-color: #ffebcc">Cat Service</span></h5>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="square"></div>
                        <h5 class="card-title">Cat WholeSale</h5>
                        <h6 class="card-subtitle mb-2 text-muted">subtitle</h6>
                        <p class="card-text">Some quick example text to build on the title and make up the bulk of the content.</p>
                        <a href="#!" class="card-link">link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="triangle-up"></div>
                        <h5 class="card-title">Cat BuYer</h5>
                        <h6 class="card-subtitle mb-2 text-muted">subtitle</h6>
                        <p class="card-text">Some quick example text to build on the title and make up the bulk of the content.</p>
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
    <div class="col-md-12 mt-2" style="border:1px solid yellow">
        <h5 class="text-center text-primary mt-2 text-uppercase" style="padding: 5px"><span style="background-color: #ffebcc">Sign Up/Login</span></h5>
        <div class="form-body">
            <ul class="nav nav-tabs final-login">
                <li class="active bg-warning" style="padding: 5px"><a data-toggle="tab" href="#sectionA"><b>Sign In</b></a></li>
                <li class="bg-info" style="padding: 5px"><a data-toggle="tab" href="#sectionB"><b style="color: black">Join us!</b></a></li>
            </ul>
            <div class="tab-content">
                <div id="sectionA" class="tab-pane active">
                    <div class="innter-form">
                        <form class="sa-innate-form" method="post">
                            <label>Email Address</label>
                            <input type="text" name="username">
                            <label>Password</label>
                            <input type="password" name="password">
                            <button type="submit">Sign In</button>
                            <a href="">Forgot Password?</a>
                        </form>
                    </div>
                    <div class="social-login">
                        <p>- - - - - - - - - - - - - Sign In With - - - - - - - - - - - - - </p>
                        <ul>
                            <li><a href=""><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i> Google+</a></li>
                            <li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="sectionB" class="tab-pane fade">
                    <div class="innter-form">
                        <form class="sa-innate-form" method="post">
                            <label>Name</label>
                            <input type="text" name="username">
                            <label>Email Address</label>
                            <input type="text" name="username">
                            <label>Password</label>
                            <input type="password" name="password">
                            <button type="submit">Join now</button>
                            <p>By clicking Join now, you agree to hifriends's User Agreement, Privacy Policy, and Cookie Policy.</p>
                        </form>
                    </div>
                    <div class="social-login">
                        <p>- - - - - - - - - - - - - Register With - - - - - - - - - - - - - </p>
                        <ul>
                            <li><a href=""><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i> Google+</a></li>
                            <li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-----Login/registration end----->
@endsection
