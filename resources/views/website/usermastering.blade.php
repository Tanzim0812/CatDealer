<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="{{asset('files/admin/ckeditor/ckeditor.js')}}"></script>

    <!----Datatable-->

    <!--toggle-->
    <!--toggle-->
    <style>
        * {box-sizing: border-box;}

        input[type=text],select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        input[type=number] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=file] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .coontainer {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .containeer{margin-top:20px;
        background: #fff;
        }


        .senden-img{
            width:50px;
            height:50px;
        }

        .btn-compose-email {
            padding: 10px 0px;
            margin-bottom: 20px;
        }

        .btn-danger {
            background-color: #E9573F;
            border-color: #E9573F;
            color: white;
        }

        .panel-teal .panel-heading {
            background-color: #37BC9B;
            border: 1px solid #36b898;
            color: white;
        }

        .panel .panel-heading {
            padding: 5px;
            border-top-right-radius: 3px;
            border-top-left-radius: 3px;
            border-bottom: 1px solid #DDD;
            -moz-border-radius: 0px;
            -webkit-border-radius: 0px;
            border-radius: 0px;
        }

        .panel .panel-heading .panel-title {
            padding: 10px;
            font-size: 17px;
        }

        form .form-group {
            position: relative;
            margin-left: 0px !important;
            margin-right: 0px !important;
        }

        .inner-all {
            padding: 10px;
        }
        @import url('https://fonts.googleapis.com/css?family=Cookie');
        .envelope {
            margin: auto;
            position: relative;
            width: 100%;
            padding: 15px;
            background: linear-gradient(45deg, rgba(64, 112, 155, 1) 13%, rgba(255, 255, 255, 1) 13%, rgba(255, 255, 255, 1) 25%, rgba(254, 0, 1, 1) 25%, rgba(254, 0, 1, 1) 37%, rgba(255, 255, 255, 1) 37%, rgba(255, 255, 255, 1) 50%, rgba(64, 112, 155, 1) 50%, rgba(64, 112, 155, 1) 63%, rgba(255, 255, 255, 1) 63%, rgba(255, 255, 255, 1) 75%, rgba(254, 0, 1, 1) 75%, rgba(254, 0, 1, 1) 87%, rgba(255, 255, 255, 1) 87%);
            background-size: 100px 100px;
        }

        .envelope .inner {
            background: #fff;
            padding: 20px;
            background-image: url('http://publicdomainvectors.org/photos/uroesch-Air-Mail-Postage-Stamp.png');
            background-position: top right;
            background-repeat: no-repeat;
            background-size: 25% 25%;
        }
        /* ========================================================================
         * MAIL
         * ======================================================================== */
        .nav-email > li:first-child + li:active {
            margin-top: 0px;
        }
        .nav-email > li + li {
            margin-top: 1px;
        }
        .nav-email li {
            background-color: white;
        }
        .nav-email li.active {
            background-color: transparent;
        }
        .nav-email li.active .label {
            background-color: white;
            color: black;
        }
        .nav-email li a {
            color: black;
            -moz-border-radius: 0px;
            -webkit-border-radius: 0px;
            border-radius: 0px;
        }
        .nav-email li a:hover {
            background-color: #EEEEEE;
        }
        .nav-email li a i {
            margin-right: 5px;
        }
        .nav-email li a .label {
            margin-top: -1px;
        }

        .table-email tr:first-child td {
            border-top: none;
        }
        .table-email tr td {
            vertical-align: top !important;
        }
        .table-email tr td:first-child, .table-email tr td:nth-child(2) {
            text-align: center;
            width: 35px;
        }
        .table-email tr.unread, .table-email tr.selected {
            background-color: #EEEEEE;
        }
        .table-email .media {
            margin: 0px;
            padding: 0px;
            position: relative;
        }
        .table-email .media h4 {
            margin: 0px;
            font-size: 14px;
            line-height: normal;
        }
        .table-email .media-object {
            width: 35px;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
        }
        .table-email .media-meta, .table-email .media-attach {
            font-size: 11px;
            color: #999;
            position: absolute;
            right: 10px;
        }
        .table-email .media-meta {
            top: 0px;
        }
        .table-email .media-attach {
            bottom: 0px;
        }
        .table-email .media-attach i {
            margin-right: 10px;
        }
        .table-email .media-attach i:last-child {
            margin-right: 0px;
        }
        .table-email .email-summary {
            margin: 0px 110px 0px 0px;
        }
        .table-email .email-summary strong {
            color: #333;
        }
        .table-email .email-summary span {
            line-height: 1;
        }
        .table-email .email-summary span.label {
            padding: 1px 5px 2px;
        }
        .table-email .ckbox {
            line-height: 0px;
            margin-left: 8px;
        }
        .table-email .star {
            margin-left: 6px;
        }
        .table-email .star.star-checked i {
            color: goldenrod;
        }

        .nav-email-subtitle {
            font-size: 15px;
            text-transform: uppercase;
            color: #333;
            margin-bottom: 15px;
            margin-top: 30px;
        }

        .compose-mail {
            position: relative;
            padding: 15px;
        }
        .compose-mail textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #DDD;
        }

        .view-mail {
            padding: 10px;
            font-weight: 300;
        }

        .attachment-mail {
            padding: 10px;
            width: 100%;
            display: inline-block;
            margin: 20px 0px;
            border-top: 1px solid #EFF2F7;
        }
        .attachment-mail p {
            margin-bottom: 0px;
        }
        .attachment-mail a {
            color: #32323A;
        }
        .attachment-mail ul {
            padding: 0px;
        }
        .attachment-mail ul li {
            float: left;
            width: 200px;
            margin-right: 15px;
            margin-top: 15px;
            list-style: none;
        }
        .attachment-mail ul li a.atch-thumb img {
            width: 200px;
            margin-bottom: 10px;
        }
        .attachment-mail ul li a.name span {
            float: right;
            color: #767676;
        }

        @media (max-width: 640px) {
            .compose-mail-wrapper .compose-mail {
                padding: 0px;
            }
        }
        @media (max-width: 360px) {
            .mail-wrapper .panel-sub-heading {
                text-align: center;
            }
            .mail-wrapper .panel-sub-heading .pull-left, .mail-wrapper .panel-sub-heading .pull-right {
                float: none !important;
                display: block;
            }
            .mail-wrapper .panel-sub-heading .pull-right {
                margin-top: 10px;
            }
            .mail-wrapper .panel-sub-heading img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 10px;
            }
            .mail-wrapper .panel-footer {
                text-align: center;
            }
            .mail-wrapper .panel-footer .pull-right {
                float: none !important;
                margin-left: auto;
                margin-right: auto;
            }
            .mail-wrapper .attachment-mail ul {
                padding: 0px;
            }
            .mail-wrapper .attachment-mail ul li {
                width: 100%;
            }
            .mail-wrapper .attachment-mail ul li a.atch-thumb img {
                width: 100% !important;
            }
            .mail-wrapper .attachment-mail ul li .links {
                margin-bottom: 20px;
            }

            .compose-mail-wrapper .search-mail input {
                width: 130px;
            }
            .compose-mail-wrapper .panel-sub-heading {
                padding: 10px 7px;
            }
        }

        #bodytab{
            padding:20px 20px;
            box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
        }

        .results tr[visible='false'],
        .no-result{
            display:none;
        }

        .results tr[visible='true']{
            display:table-row;
        }


        .open-button {
            background-color: black;
            color: gold;
            padding: 16px 20px;
            border: 1px solid gold;
            border-radius: 10%;
            cursor: pointer;
            position: fixed;
            bottom: 23px;
            right: 28px;
            width: 280px;
        }
        #boody {
            margin: 0 auto;
            max-width: 800px;
            padding: 0 20px;
        }

        .containerr {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            color: black;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        .darker {
            border-color: #ccc;
            background-color: #ddd;
        }

        .containerr::after {
            content: "";
            clear: both;
            display: table;
        }
        .time-right {
            float: right;
            color: #999;
        }


    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">

        <ul class="nav navbar-nav">
            <li class="active"><a href="{{route('userdashboard')}}">User dashboard</a></li>
            <li><a href="{{route('usermessage')}}">My Message</a></li>
            <li><a href="">My Order</a></li>
            <li><a href="">My Credit</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{{\Illuminate\Support\Facades\Auth::user()->name}} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('userprofile')}}" title="Userprofile"><i class="fa fa-user" aria-hidden="true"></i> Your Profile</a>
                    </li>
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
    CKEDITOR.replace('editor1');
</script>
</body>
</html>
