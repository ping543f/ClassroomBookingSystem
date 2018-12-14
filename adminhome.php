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
    <?php include ("controller/fetchList.php");?>
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
        <a class="logo" href="adminhome.php">
            <img src="images/logo.svg" alt="Homepage">
        </a>
    </div>


    <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
    <nav class="header__nav-wrap">

        <h2 class="header__nav-heading h6">Navigate to</h2>

        <ul class="header__nav">
            <li class="current"><a href="adminhome.php" title="">Home</a></li>

                       <li class="has-children">
                <a href="#0" title="">Booking</a>
                <ul class="sub-menu">
           <li><a href="adminnewbookings.php">New Booking</a></li>
            <li><a href="adminCancelBookings.php">Cancel Booking</a></li>
                </ul>
            </li>
            <li><a href="adminbookinglog.php" title="">Booking Log</a></li>
            <li class="has-children">
                <a href="#0" title="">Adding</a>
                <ul class="sub-menu">
                    <li><a href="departmentAdding.php"">Department</a></li>
                    <li><a href="courseAdding.php">Course</a></li>
                    <li><a href="roomAdding.php">Room</a></li>
                </ul>
            </li>
            <li><a href="adminprofile.php" title="">Profile</a></li>
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
    <p><h1>WELCOME TO THE CLASS BOOKING SYSTEM</h1>
    <?php
    $user = getUserInfo($_SESSION['username']);

    echo "<h2>".$user['fullname']."</h2>";
    ?>
    </p>
</div>
<br><br><br>

<div class="row login100-form">

    <div class="col-seven md-six tab-full popular">
        <h3>User Requests For Approval</h3>
        <div class="login104-form ">
            <table class="login100-form validate-form p-b-33 p-t-5">
                <tr>
                    <th>Full Name</th>
                    <th>User ID</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
                <?php
                $userList = getAllUserRequest();
                foreach ($userList as $b){?>
                        <tr>
                            <td><?php echo $b['fullname'];?></td>
                            <td><?php echo $b['username'];?></td>
                            <td><?php echo $b['email']; ?></td>
                            <td><?php echo $b['phone']; ?></td>
                            <td>
                                <form action="controller/confirmUserDetails.php" method="POST">
                                    <button class="login100-form-btn" type="submit" value="<?php echo $b['id'];?>" name="userId">
                                        CONFIRM
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php }?>
            </table>
        </div>

    </div>


</div>
<br>

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