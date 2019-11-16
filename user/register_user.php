<?php
/**
 * Created by PhpStorm.
 * User: prabhatdas
 * Date: 2019-03-08
 * Time: 01:02
 */


include_once ("../config.php");



session_start();

if(isset($_POST['verifiedotp'])){
    $fname=$_POST['fname'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $pass=$_POST['pass'];
    $countryCode="+91";
    $active='true';
    date_default_timezone_set('Asia/Kolkata');
    $dateTime = date('Y-m-d H:i:s a', time());
    $date=substr($dateTime,0,10);
    $time=substr($dateTime,11,8);
    $createDateTime=$date.'T'.$time;
    $pincode='0';
    $address=array($pincode);
    $referralCode='nocode';
    if($gender=='Male'){
        $imageLink="https://openclipart.org/image/2400px/svg_to_png/277084/Male-Avatar-3.png";

    }
    if($gender=='Female'){
        $imageLink="https://openclipart.org/image/2400px/svg_to_png/277084/Male-Avatar-3.png";

    }

    $user_data=array();
    $user_data=[
        'name'=>$fname,
        'dateOfBirth'=>$dob,
        'gender'=>$gender,
        'email'=>$email,
        'phone'=>$phone,
        'password'=>$pass,
        'countryCode'=>$countryCode,
        'active'=>$active,
        'AccountCreationTime'=>$createDateTime,
         'address'=>array(
             'pincode'=>'0'
         ),
        'imageLink'=>$imageLink
    ];

    include_once "../UrlHandler.php";
    $obj = new UrlHandler();
    $obj->registerUser($baseURL,$user_data,$referralCode);
}
else{




    echo"
    <script>
    window.location.href='../';
    </script>
    ";
}

