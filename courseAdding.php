<!DOCTYPE html>
<html class="no-js" lang="en"  >
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
        <a class="logo" href="adminhome.html">
            <img src="images/logo.svg" alt="Homepage">
        </a>
    </div>



    <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
    <nav class="header__nav-wrap">

        <h2 class="header__nav-heading h6">Navigate to</h2>

        <ul class="header__nav">
            <li class="current"><a href="adminhome.html" title="">Home</a></li>


            <li><a href="adminnewbookings.html">New Booking</a></li>


            <li class="has-children">
                <a href="#0" title="">Adding</a>
                <ul class="sub-menu">
                    <li><a href="departmentAdding.html">Department</a></li>
                    <li><a href="courseAdding.php">Course</a></li>
                </ul>
            </li>
            <li><a href="adminbookinglog.html" title="">Booking Log</a></li>
            <li class="has-children">
                <a href="#0" title="">Adding</a>
                <ul class="sub-menu">
                    <li><a href="departmentAdding.html"">Department</a></li>
                    <li><a href="courseAdding.php">Course</a></li>
                </ul>
            </li>
            <li><a href="adminprofile.php" title="">Profile</a></li>
            <li><a href="controller/logout.php" title="">Log Out</a></li>
        </ul>

        <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

    </nav>



</header>
<section class="s-content s-content--top-padding s-content--narrow" style="background-image: url('images/bg-01.jpg');">

    <div class="limiter">
        <div class="container-login100" >
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    New COURSE
                    <br><br>
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5">
                    <div >
                        <select class="input102">
                            <option>DEPARMENT</option>
                            <option value="month">CSE</option>
                            <option value="week">EEE</option>
                            <option value="faculty">BBA</option>
                        </select>
                    </div>
                    <div >
                        <input class="input100" type="text" name="coursename" placeholder="Course Name">
                    </div>


                </form>
                <br><br>
                <div class="container-login100-form-btn m-t-32" >
                    <button class="login100-form-btn">
                        <a href="">CONFIRM<a>
                    </button>
                </div>
            </div>
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

<script src="_js/jquery-3.2.1.min.js"></script>
<script src="_js/main.js"></script>

</body>

</html>