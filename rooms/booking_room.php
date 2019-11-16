<?php
/**
 * Created by PhpStorm.
 * User: prabhatdas
 * Date: 2019-03-13
 * Time: 16:48
 */

include_once "../config.php";

session_start();
$userData=$_SESSION['user_data'];
$room=$_SESSION['room'];

$promoCodeAmount=0;
$walleMoneyAmount=0;
$discountAmount=$room['discountPrint'];
$totalPayableAmount=$room['price'];


$bookedFor=$_POST['fname'].' '.$_POST['lname'];
$Email=$_POST['email'];
$Phone=$_POST['phone'];
$countryCode='+91';
$feedbackStatus='NOT_GIVEN';
$paymentStatus='PENDING';

$fromTime=$_POST['setTodaysDate1'].'T'.'12:00:00';
$uptoTime=$_POST['setTodaysDate2'].'T'.'11:00:00';
$notes=$_POST['notes'];
$status='ACTIVE';



$WalletMoneyUsed="";
$PromoCodeAmountUsed="";
$businessGstin=$_POST['businessGSTIN'];
$businessName=$_POST['businessName'];


if($businessName!=NULL){
    $businessTrip='true';
    $businessGstin=$_POST['businessGSTIN'];
    $businessName=$_POST['businessName'];
}
else{
    $businessTrip='false';
    $businessGstin="";
    $businessName="";
}


$booking=array();
$booking=[

    'room'=>$room,
    'user'=>$userData,
    'fromTime'=>$fromTime,
    'uptoTime'=>$uptoTime,
    'status'=>$status,
    'bookedFor'=>$bookedFor,
    'countryCode'=>$countryCode,
    'phone'=>$Phone,
    'email'=>$Email,
    'specialNote'=>$notes,
    'price'=>$totalPayableAmount,
    'discountAmount'=>$discountAmount,
    'feedbackStatus'=>$feedbackStatus,
    'paymentStatus'=>$paymentStatus,
    'walletMoneyUsed'=>$walleMoneyAmount,
    'promoCodeAmountUsed'=>$promoCodeAmount,
    'businessTrip'=>$businessTrip,
    'gstin'=>$businessGstin,
    'legalName'=>$businessName
];

include_once "../UrlHandler.php";
$obj = new UrlHandler();
$obj->bookRoom($baseURL,$booking);