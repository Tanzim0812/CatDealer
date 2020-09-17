<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="refresh" content="120" />
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
        .outerbg {
            width: 100%;
            max-width: 610px;
            margin: 20px;
            padding: 30px 0;
            margin: 0 auto;
            background: url('https://s24.postimg.org/63armx1h1/sahil_sahil_chatsbg.png');
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        .chatboxout {
            font-family: open sans;
            font-size: 12px;
            line-height: 17px;
            box-sizing: border-box;
            max-width: 400px;
            margin: 0 auto;
            padding: 10px;
            background: #fff;
            border-radius: 5px;
            -webkit-box-shadow: 4px 4px 20px -1px rgba(59, 59, 59, 0.6);
            -moz-box-shadow: 4px 4px 20px -1px rgba(59, 59, 59, 0.6);
            box-shadow: 4px 4px 20px -1px rgba(59, 59, 59, 0.6);
        }

        .chatboxin {
            box-sizing: border-box;
            border: 1px solid rgba(208, 208, 208, 1);
            border-radius: 5px;
            padding: 5px 15px;
        }

        .chat-sender.msg {
            -webkit-clip-path: polygon(12px 0, 100% 0, 100% 100%, 0 100%, 12px 70%);
            clip-path: polygon(12px 0, 100% 0, 100% 100%, 0 100%, 12px 70%);
            padding: 9px 9px;
            padding-left: 21px;

            font-size: 12px;
            font-family:"Malgun Gothic";
            box-sizing: border-box;
            width: calc(100% - 53px);
            margin-left: -9px;
        }

        .chatmsg {
            margin-top: 5px;
        }

        .chat-sender {
            display: inline-block;
            vertical-align: top;
        }

        .chat-container {
            margin-top: 15px;
            margin-bottom: 15px;
            animation: fadein 2s;
            -moz-animation: fadein 2s; /* Firefox */
            -webkit-animation: fadein 2s; /* Safari and Chrome */
            -o-animation: fadein 2s; /* Opera */
        }

        .chat-respond.msg {
            -webkit-clip-path: polygon(12px 0, 100% 0, 100% 100%, 0 100%, 12px 70%);
            clip-path: polygon(12px 0, 100% 0, 100% 100%, 0 100%, 12px 70%);
            padding: 9px 9px;
            padding-left: 21px;
            background-color: #E6E6E6;
            color: #333;
            box-sizing: border-box;
            width: calc(100% - 53px);
            margin-right: -9px;
            transform: scale(-1, 1);
            -moz-transform: scale(-1, 1);
            -webkit-transform: scale(-1, 1);
            -o-transform: scale(-1, 1);
            -ms-transform: scale(-1, 1);
        }

        .chat-respond.msg strong {
            color: #F48806;
        }

        .chat-respond {
            display: inline-block;
            vertical-align: top;
        }

        .flippd {
            width: 100%;
            transform: scale(-1, 1);
            -moz-transform: scale(-1, 1);
            -webkit-transform: scale(-1, 1);
            -o-transform: scale(-1, 1);
            -ms-transform: scale(-1, 1);
        }


        @keyframes fadein {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        @-moz-keyframes fadein { /* Firefox */
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        @-webkit-keyframes fadein { /* Safari and Chrome */
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        @-o-keyframes fadein { /* Opera */
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        .time-right {
            float: right;
            color: #aaa;
        }

        .time-left {
            float: left;
            color: #999;
        }
        #yo:nth-child(odd) {
            background: #E1EBED;
        }
        #yo:nth-child(even) {
            background: #C1D4D7;
            color: black;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">

        <ul class="nav navbar-nav">
            <li class="active"><a href="{{route('userprofile')}}">User Profile</a></li>
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
            @yield('content')
    </div>
</main>


<script>
    var timeleft = 120;
    var downloadTimer = setInterval(function(){
        if(timeleft <= 0){
            clearInterval(downloadTimer);
            document.getElementById("countdown").innerHTML = "Finished";
        } else {
            document.getElementById("countdown").innerHTML = "After<b> " + timeleft + " </b>seconds the page will automatically refresh";
        }
        timeleft -= 1;
    }, 1000);
</script>
</body>
</html>
