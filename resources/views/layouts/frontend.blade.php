@include('include.header')
<body>

<div class="container">

    <!---Header start --->
    <nav class="navbar navbar-expand-sm navbar-light bg-warning">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Cat Deal</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!---Header end --->

@yield('content')

<!-- Footer -->
@include('include.footer')
    <!-- Footer -->
</div>
<!--/div.container----->
<script>
    $('#tab1').on('click' , function(){
        $('#tab1').addClass('login-shadow');
        $('#tab2').removeClass('signup-shadow');
    });

    $('#tab2').on('click' , function(){
        $('#tab2').addClass('signup-shadow');
        $('#tab1').removeClass('login-shadow');


    });
</script>

</body>
</html>
