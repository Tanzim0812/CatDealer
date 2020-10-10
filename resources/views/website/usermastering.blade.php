<!doctype html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <!-- /include summernote css/js -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="https://thdoan.github.io/bootstrap-select/css/bootstrap-select.css">
    <script src="https://thdoan.github.io/bootstrap-select/js/bootstrap-select.js"></script>

<link rel="stylesheet" href="{{asset('files/userstyle.css')}}">
    <!----Datatable-->

    <!--toggle-->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!--toggle-->

    <!--- alertifyjs--->
    <!------ Include the above in your HEAD tag ---------->
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <!--- /alertifyjs--->
    <style>
.dot{
    height: 20px;
    width: 20px;
    background-color: orangered;color: whitesmoke;
    border-radius: 50%;
    display: inline-block;text-align: center;
}
video {
    width: 100%;
    height: auto;
}


/* 1st example
inspired from :
- http://stackoverflow.com/questions/25573562/wrapping-a-youtube-video-in-a-static-image-frame-and-maintain-responsive-resiz
- http://jsfiddle.net/4g9e3ywy/ */
div.laptop-wrapper {
    position: relative;
    padding-top: 25px;
    padding-bottom: 67.5%;
    height: 0;
}
div.laptop-wrapper iframe {
    box-sizing: border-box;
    background: url(https://i.stack.imgur.com/zZNgk.png) center center no-repeat;
    background-size: contain;
    padding: 11.9% 15.5% 14.8%;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

/* 2nd example :  BACKGROUND IMAGE */
div.desktop-wrapper {
    position: relative;
    padding-top: 25px;
    padding-bottom: 67.5%;
    height: 0;
}
div.desktop-wrapper iframe {
    box-sizing: border-box;
    background: url(http://img01.deviantart.net/05b6/i/2011/030/8/5/apple_led_cinema_screen_by_fisshy94-d38e3o5.png) center center no-repeat;
    background-size: contain;
    padding: 3.4% 10.8% 18.6%;/* 11.9% 15.5% 14.8% */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}


.header-unit {
    height: 150px;
    border: 2px solid #000;
    border-right:none;
    border-left: none;
    position: relative;
    padding: 20px;
}
#video-conntainer {
    position: absolute;
}
#video-conntainer {
    top:0%;
    left:0%;
    height:100%;
    width:100%;
    overflow: hidden;
}
.video {
    position:absolute;
    z-index:0;
}
.video .fillWidth {
    width: 100%;
}
/* hourglass */

.glass {
    height: 100%;
    background-image: url({{asset('files/imagesWEB/sandglass.png')}});
    background-repeat: no-repeat;
    background-size: contain;
}
.get-hourglass{
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}
.container-glass {
    position: relative;
    height: 500px;
    width: 500px;
    left: 300px;
}
.txt-center {
    text-align: center;

}
</style>

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">

        <ul class="nav navbar-nav">
            <li @if (url()->current() == url('/userdashboard'))
                class="active"
                @endif><a href="{{route('userdashboard')}}">Dashboard</a></li>
            <li @if (url()->current() == url('/usermessage'))
                class="active"
                @endif><a href="{{route('usermessage')}}">Inquiries</a></li>
            <li><a href="">Orders</a></li>
            <li><a href="">Credits</a></li>
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

            @yield('content')
    </div>
</main>



<script>
/* userdashboard table */
$(document).ready(function() {
    $(".search").keyup(function () {
        var searchTerm = $(".search").val();
        var listItem = $('.results tbody').children('tr');
        var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

        $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
                return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
            }
        });

        $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
            $(this).attr('visible','false');
        });

        $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
            $(this).attr('visible','true');
        });

        var jobCount = $('.results tbody tr[visible="true"]').length;
        $('.counter').text(jobCount + ' item');

        if(jobCount == '0') {$('.no-result').show();}
        else {$('.no-result').hide();}
    });
});

/* contact us form */
const checkbox = document.querySelector('.my-form input[type="checkbox"]');
const btns = document.querySelectorAll(".my-form button");

checkbox.addEventListener("change", function() {
    const checked = this.checked;
    for (const btn of btns) {
        checked ? (btn.disabled = false) : (btn.disabled = true);
    }
});
</script>
<script>
    $('#summernote').summernote({
        placeholder: 'Type your message here..',
        tabsize: 2,
        height: 100
    });
</script>

<script>


</script>
<script type="text/javascript">

        $('#singlebox').selectator();

</script>
<script>
    var timer;

    var compareDate = new Date();
    compareDate.setDate(compareDate.getDate() + 2); //just for this demo today + 7 days

    timer = setInterval(function() {
        timeBetweenDates(compareDate);
    }, 1000);

    function timeBetweenDates(toDate) {
        var dateEntered = toDate;
        var now = new Date();
        var difference = dateEntered.getTime() - now.getTime();

        if (difference <= 0) {

            // Timer done
            clearInterval(timer);

        } else {

            var seconds = Math.floor(difference / 1000);
            var minutes = Math.floor(seconds / 60);
            var hours = Math.floor(minutes / 60);
            var days = Math.floor(hours / 24);

            hours %= 24;
            minutes %= 60;
            seconds %= 60;

            $("#days").text(days);
            $("#hours").text(hours);
            $("#minutes").text(minutes);
            $("#seconds").text(seconds);
        }
    }
</script>
<script>
    //change status of user
    $('body').on('change', '#seen_status', function () {
        var id = $(this).attr('data-id');
        if (this.checked) {
            var seen_status = 1;
        } else {
            var seen_status = 0;
        }
        $.ajax({
            url: '/seen-status/' + id + '/' + seen_status,
            method: 'get',
            success: function (result) {
                alertify.set('notifier','position', 'bottom-right');
                alertify.success('Message Status change');

            }
        });

    });
</script>
<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>
<!---Hourglass js --->
<script>
    var timeleft = 20;
    var downloadTimer = setInterval(function(){
        timeleft--;
        document.getElementById("time").textContent = timeleft == 0 ? 'Done' : timeleft+' Seconds';
        if(timeleft <= 0)
            clearInterval(downloadTimer);
    },1000);
</script>
</body>
</html>
