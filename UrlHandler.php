<?php
/**
 * Created by PhpStorm.
 * User: prabhatdas
 * Date: 2019-03-05
 * Time: 16:20
 */
include_once 'config.php';
require_once 'vendor/autoload.php';
use GuzzleHttp\Exception\ClientException;

class UrlHandler
{
    //user_authentication function
    function userAuth($url,$password,$redirect_url){
        $clientObject= new GuzzleHttp\Client();
        try{
            $request=$clientObject->request('GET',$url);
            $json_data = $request->getBody();
            $user_data = json_decode($json_data,TRUE);
            if($user_data['password'] == $password) {
                $_SESSION['user_data'] = $user_data;
                header("Location: ".$redirect_url);
                die();
            }
            else{
                echo '
                <script type="application/javascript">
                window.location.href = "'.$redirect_url.'";
                alert("Wrong Password !"); 
                </script>
                ';
            }
        }
        catch(ClientException $e)
        {
            $err_code= $e->getCode();
            if($err_code==404) {
                echo '
                <script type="application/javascript">
                window.location.href = "'.$redirect_url.'";
                alert("User not found !"); 
                </script>
                ';
            }
        }
    }

    function fetchContents($url){
        $clientObject= new GuzzleHttp\Client();

        try{
            $request=$clientObject->request('GET',$url);
            $json_data = $request->getBody();
            $data = json_decode($json_data,TRUE);
            return $data;
        }
        catch(ClientException $e)
        {
            $err_code= $e->getCode();
            if($err_code==404) {

                return $err_code;
            }
        }
    }

    function validateUrl($url){
        $clientObject = new GuzzleHttp\Client();

        try{
            $clientObject->request('GET',$url);
        }
        catch (ClientException $e){
            $err_code= $e->getCode();
            if($err_code==404) {
                return $err_code;
            }
        }
    }

    function updateUser($url,$user_data){
        $clientObject= new GuzzleHttp\Client();

        try{
            $clientObject->request('PUT',$url,['Content-Type'=>'application/json','json'=>$user_data]);
            $requestUpdatedData= $clientObject->request('GET',$url);
            $json_data=$requestUpdatedData->getBody();
            $newUpdatedData=json_decode($json_data,TRUE);
            $_SESSION['user_data']=$newUpdatedData;


            echo"
            <script>
            alert('Updation successful !');
            window.location.href='".$_SESSION['redirect_url'].'user/my_profile.php'."';
            </script>
            ";
        }
        catch (ClientException $e){
            echo "<br>";
            echo $e->getMessage();
            echo "<br>";
            echo $e->getCode();
        }
    }
    function registerUser($baseURL,$user_data,$referralCode){
        $clientObject= new GuzzleHttp\Client();
        $url=$baseURL.'/users/'.$referralCode;
        try{
            $clientObject->request('POST',$url,['Content-Type'=>'application/json','json'=>$user_data]);

            echo"
            <script>
            alert('Updation successful !');
            window.location.href='".$_SESSION['redirect_url'].'user/my_profile.php'."';
            </script>
            ";
        }
        catch (ClientException $e){
            echo "<br>";
            echo $e->getMessage();
            echo "<br>";
            echo $e->getCode();
        }
    }

    function bookRoom($baseURL,$booking){
        $clientObject= new GuzzleHttp\Client();
        $url=$baseURL.'/booking';
        try{
            $clientObject->request('POST',$url,['Content-Type'=>'application/json','json'=>$booking]);

            echo"
            <script>
            alert('Updation successful !');
            window.location.href='".$_SESSION['redirect_url'].'user/my_booking.php'."';
            </script>
            ";
        }
        catch (ClientException $e){
            echo "<br>";
            echo $e->getMessage();
            echo "<br>";
            echo $e->getCode();
        }
    }
}