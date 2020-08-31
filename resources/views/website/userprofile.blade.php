<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!----Datatable-->

    <!--toggle-->

    <style>

    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">

        <ul class="nav navbar-nav">
            <li class="active"><a>User Profile</a></li>
            <li><a href="">My Account</a></li>
            <li><a href="">My Order</a></li>
            <li><a href="">My Credit</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{{\Illuminate\Support\Facades\Auth::user()->name}} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-toggle="tooltip" data-placement="left" title="Logout"><i class="fa fa-sign-out log-out" aria-hidden="true"></i> Logout</a>
                        <form method="post" action="{{route('logout')}}" id="logout-form" style="display: none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<main class="py-4">
    <div class="container">
        <h3 class="alert alert-success">User Profile</h3>

        <div class="col-md-8" style="border-right: 1px solid lightgreen">
            <form class="form-group" method="post"
                @csrf
                <input type="hidden" name="id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" id="name">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input class="form-control" type="email" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" id="email">
                    @error('email')
                    <strong class="text-bold text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input class="form-control" type="text" name="phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" id="phone">
                </div>



                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
        <div class="col-md-4" >
            <p class="clearfix">hihiahsiahsih i iashiahsi hiashi</p>

        </div>

    </div>
</main>



</body>
</html>

