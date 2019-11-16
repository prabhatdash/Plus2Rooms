<?php
/**
 * Created by PhpStorm.
 * User: prabhatdas
 * Date: 2019-03-05
 * Time: 15:43
 */

session_start();
if(isset($_SESSION['user_data'])){
    unset($_SESSION['user_data']);
    header("Location:".$_SESSION['redirect_url']);
}
else{
    header("Location:../");
}
