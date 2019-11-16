<?php
/**
 * Created by PhpStorm.
 * User: prabhatdas
 * Date: 2019-03-08
 * Time: 11:34
 */

if(isset($_POST['updateprofile'])){

    include_once '../UrlHandler.php';
    include_once '../config.php';

    session_start();
    $user_data=$_SESSION['user_data'];

    $user_data['name']=$_POST['fullName'];
    $user_data['email']=$_POST['email'];
    $user_data['phone']=$_POST['phone'];
    $user_data['age']=$_POST['age'];
    $user_data['gender']=$_POST['ritem'];

    $url=$baseURL.'/users/'.$user_data['email'];
    $obj = new UrlHandler();
    $obj->updateUser($url,$user_data);

}
else{

    echo"
    
    <script>
        window.location.href='../';
    </script>
    
    ";

}