<?php
/**
 * Created by PhpStorm.
 * User: prabhatdas
 * Date: 2019-03-04
 * Time: 14:44
 */

include_once ("../config.php");



session_start();
if(isset($_POST['login_btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    include_once "../UrlHandler.php";


    $obj = new UrlHandler();
    $obj->userAuth($baseURL.'/users/'.$username,$password,$_SESSION['redirect_url']);
    echo "<br>".$baseURL.'/users/'.$username;
}
else{
    echo"
    <script>
    window.location.href='../';
    </script>
    ";
}
