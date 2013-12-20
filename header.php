<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/docs.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" href="css/responsiveslides.css">
<link rel="stylesheet" href="css/themes.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">

<style>
    .bottom {
        background: url("img/bottom_bar.jpg") ;

        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        width: 100%;
        height: 100%;
        clear: both;

        height: 15px;
    }
</style>


<img src="img/logo.png" style="margin-left: 20px; margin-top: 5px">
<p class="pull-right">
    <a title="" href="" class=""><img onMouseOver="this.src='img/facebook2.png' " onMouseOut="this.src='img/facebook.png'" alt="" src="img/facebook.png"></a>
    <a title="" href="" class=""><img onMouseOver="this.src='img/in2.png' " onMouseOut="this.src='img/in.png'" alt="" src="img/in.png"></a>
    <a title="" href="" class=""><img onMouseOver="this.src='img/twitter2.png' " onMouseOut="this.src='img/twitter.png'" alt="" src="img/twitter.png"></a>
</p>

<!-- Navigation -->
<div class="navbar">


    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="">
                        <a href="#">Home</a>
                    </li>
                    <li class="">
                        <a href="#">Service</a>
                    </li>
                    <li id="webapplication">
                        <a href="webapplication.php">Web Application</a>
                    </li>
                    <li id="mobilepage">
                        <a href="./mobilepage.php">Mobile Application</a>
                    </li>
                    <li class="">
                        <a href="#">Outsorucing</a>
                    </li>
                    <li class="">
                        <a href="#">Contact US</a>
                    </li>

                </ul>

            </div>

        </div>
    </div>
    <div class="bottom"></div>
</div>




<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/bootstrap-carousel.js"></script>
<script src="js/bootstrap-typeahead.js"></script>

<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {

        // Slideshow 1
        $("#slider1").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,

            namespace: "centered-btns"
        });


    });
</script>