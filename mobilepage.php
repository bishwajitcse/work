
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DevPrecise</title>


    <style>
        .uparrow {
            background: url('img/uparrow.png');
            cursor: pointer;
            width: 66px;
            height: 67px;
            position: fixed;
            bottom: 30px;
            right:30px;
            display:none;
        }
    </style>
</head>
<body>
<!-- header content -->

<!-- The Main wrapper div starts -->
<div class="container">

    <?php include("header.php");?>


    <!-- Slideshow 1 -->
    <div class="rslides_container">
        <ul class="rslides" id="slider1">
            <li><img src="img/1.jpg" width="100%" alt=""></li>
            <li><img src="img/2.jpg" alt=""></li>
            <li><img src="img/3.jpg" alt=""></li>
        </ul>
    </div>



<!-----1 mobile apps------>
    <div class= "divmargin">
        <div class="leftmargin">
                <a class="brand">Bussiness Application</a>
           </div>
    </div>
    <!-- Content Sections -->
    <div class="row" style="padding: 50px">
        <!-- Left Side Vertical Bar -->
        <div class="span4">
            <img src="img/dsignature.png"/>
        </div>
        <!-- Right side Content Vertical Area -->
        <div class="span8">
            <h3>Digital Signature</h3>
            <p>A digital signature is a mathematical scheme for demonstrating the authenticity of a digital message or document. Digital signatures are commonly used for software distribution, financial transactions, and in other cases where it is important to detect forgery or tampering.
                </br>
                Features:<br>
                1. Without using a pen with realistic pen effects.<br>
                2. Send Signature on you Mail Address.<br>
                3. Erase you wrong signature easily.
                </br>
            </p>
            <h3><a href="#" ><img src="img/android.png"></a></h3>
        </div>

    </div>

    <!-----2 mobile apps------>
    <div class= "divmargin">
        <div class="leftmargin">
            <a class="brand">Comunication Application</a>
        </div>
    </div>    <!-- Content Sections -->
    <div class="row" style="padding:50px">

        <!-- Right side Content Vertical Area -->
        <div class="span8" style="margin-left: 45px">
            <h3>Digital Signature</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            <h3><a href="#" ><img src="img/android.png"></a></h3>
        </div>
        <!-- Left Side Vertical Bar -->
        <div class="span4">
            <img src="img/platform.png"/>
        </div>
    </div>



    <!-----3 mobile apps------>
    <div class= "divmargin">
        <div class="leftmargin">
            <a class="brand">Game Application</a>
        </div>
    </div>    <!-- Content Sections -->
    <div class="row" style="padding: 50px">
        <!-- Left Side Vertical Bar -->
        <div class="span4">
            <img src="img/platform.png"/>
        </div>
        <!-- Right side Content Vertical Area -->
        <div class="span8">
            <h3>Digital Signature</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            <h3><a href="#" ><img src="img/android.png" height="10"></a></h3>
        </div>
    </div>


    <div class="uparrow" id="uparrow"></div>


    <?php include "footer.php" ;?>

</div>


<script type="text/javascript">
    $(document).ready(function(){
        // fade in and fade out
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('#uparrow').fadeIn();
                } else {
                    $('#uparrow').fadeOut();
                }
            });

            // scroll body to 0px on click
            $('#uparrow').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });

    });
</script>

<script>

    document.getElementById("mobilepage").className = "active";

</script>

</body>
</html>