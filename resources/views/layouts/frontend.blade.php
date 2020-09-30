@include('include.header')
<body>

<div class="container">

    <!---Header start --->
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #ffc107">
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
                    <a class="nav-link" href="{{route('register')}}">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
            </ul>
            <div class="containe">
            <form class="searchbar">
                <input type="search" placeholder="Search here.." name="search" class="searchbar-input" onkeyup="buttonUp();" required>
                 <input type="submit" class="searchbar-submit" value="GO">
                <span class="searchbar-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
            </form>
            </div>
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
<script language="javascript" type="text/javascript">
    function clearText(field)
    {
        if (field.defaultValue == field.value) field.value = '';
        else if (field.value == '') field.value = field.defaultValue;
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('files/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>

<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
            effect:'random',
            slices:10,
            animSpeed:500,
            pauseTime:2200,
            startSlide:0, //Set starting Slide (0 index)
            directionNav:false,
            directionNavHide:false, //Only show on hover
            controlNav:false, //1,2,3...
            controlNavThumbs:false, //Use thumbnails for Control Nav
            pauseOnHover:true, //Stop animation while hovering
            manualAdvance:false, //Force manual transitions
            captionOpacity:0.8, //Universal caption opacity
            beforeChange: function(){},
            afterChange: function(){},
            slideshowEnd: function(){} //Triggers after all slides have been shown
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
 var submitIcon = $('.searchbar-icon');
 var inputBox = $('.searchbar-input');
 var searchbar = $('.searchbar');
 var isOpen = false;
 submitIcon.click(function(){
 if(isOpen == false){
 searchbar.addClass('searchbar-open');
 inputBox.focus();
 isOpen = true;
 } else {
 searchbar.removeClass('searchbar-open');
 inputBox.focusout();
 isOpen = false;
 }
 });
 submitIcon.mouseup(function(){
 return false;
 });
 searchbar.mouseup(function(){
 return false;
 });
 $(document).mouseup(function(){
 if(isOpen == true){
 $('.searchbar-icon').css('display','block');
 submitIcon.click();
 }
 });
 });
 function buttonUp(){
 var inputVal = $('.searchbar-input').val();
 inputVal = $.trim(inputVal).length;
 if( inputVal !== 0){
 $('.searchbar-icon').css('display','none');
 } else {
 $('.searchbar-input').val('');
 $('.searchbar-icon').css('display','block');
 }
 }

</script>

</body>
</html>
