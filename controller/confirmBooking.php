<?php

require_once('../model/connect.php') ;
require_once('../model/query.php');

session_start();
date_default_timezone_set('Asia/Dhaka');
$day = date("Y-m-d");
$confirm = true;

if($_SERVER['REQUEST_METHOD']=="POST"){

    $username = $_POST['id'];
    $classType = $_POST['classType'];
    $course = $_POST['course'];
    $room = $_POST['class'];
    $eTime = $sTime = array();
    $eTime =$_SESSION['endTime'];
    $sTime =$_SESSION['startTime'];

    $res = getUser($username);
    $userId = $res['id'];

    $res = getClassId($room);
    $classId = $res['id'];

    $res = getCourseId($course);
    $courseId = $res['id'];



    for ($i =0; $i < count($sTime); $i++) {
        if (addNewBooking($userId, $courseId, $classId, $day, $sTime[$i], $eTime[$i])) {
            $confirm = true;
        } else {

            $confirm = false;
            echo $confirm;
        }
    }

    if($confirm){
         $res = getUser($username);
         $type = $res['type'];

         if($type==1) {
             header('Location:../adminhome.html');
         }else{
             header('Location:../facultyhome.php');
         }
    }else{

        echo "<h1>Something went wrong!!!</h1>";

    }

}


?>