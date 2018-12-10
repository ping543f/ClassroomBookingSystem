<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <style >
        a{text-decoration: none;
        }
    </style>
    <meta charset="utf-8">
    <title>CBS</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="_css/main.css">
    <link rel="stylesheet" href="_css/base.css">
    <script src="_js/modernizr.js"></script>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body id="top">
<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:index.html");
}
?>
<header class="s-header header">

    <div class="header__logo">
        <a class="logo" href="facultyhome.php">
            <img src="images/logo.svg" alt="Homepage">
        </a>
    </div>



    <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
    <nav class="header__nav-wrap">

        <h2 class="header__nav-heading h6">Navigate to</h2>

        <ul class="header__nav">
            <li class="current"><a href="facultyhome.php" title="">Home</a></li>
            <li class="has-children">
                <a href="#0" title="">Bookings</a>
                <ul class="sub-menu">
                    <li><a href="facultynewbookings.php">New Booking</a></li>
                    <li><a href="cancelbookings.html">Cancel Booking</a></li>
                </ul>
            </li>
            <li><a href="facultybookinglog.html" title="">Booking Log</a></li>
            <li><a href="facultyprofile.html" title="">Profile</a></li>
            <li><a href="controller/logout.php" title="">Log Out</a></li>
        </ul>

        <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

    </nav>

</header>



<section class="s-extra s-content s-content--top-padding s-content--narrow" style="background-image: url('images/bg-01.jpg');"">
<div class="login101-form">
    <p>Date/Time: <span id="datetime"></span></p>

    <script >
        var dt = new Date();
        document.getElementById("datetime").innerHTML = dt.toLocaleString();
    </script>
</div>
<br><br><br>
<div class="row login102-form">
    <p><h1>WELCOME TO THE CLASS BOOKING SYSTEM</h1></p>
</div>
<br><br><br>

<div class="row login100-form">

    <div class="col-seven md-six tab-full popular">
        <h3>Today</h3>


    </div>

</div>
<br><br><br>
<div class="row login100-form">

    <div class="col-seven md-six tab-full popular">
        <h3>Upcoming</h3>


    </div>

</div>
</section>
<footer class="s-footer">

    <div class="row">
        <div class="col-six tab-full s-footer__about">

            <h4>ABOUT CBS</h4>

            <p style="color: #58905f">It is a class booking system</p>

        </div>
        <div class="col-six tab-full s-footer__subscribe ">

            <h4>DEVOLOPED BY</h4>

            <p ><h5 style="color: #58905f">TANJIMA NASREEN JENIA(16-31237-1)</h5></p>
            <p><h5 style="color: #58905f">MD. TAREQ(16-31181-1)<h5> </p>
        </div>
    </div>
</footer>



</body>

</html>