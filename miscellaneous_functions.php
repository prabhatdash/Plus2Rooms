<?php
/**
 * Created by PhpStorm.
 * User: prabhatdas
 * Date: 2019-02-25
 * Time: 01:01
 */


/** function to represent ratings */

function rating($b)
{
    $c="checked";
    for($a=0;$a<5;$a++)
    {
        if($a<$b)
        {
            echo"<span class='fa fa-star $c'></span>";
        }
        else
        {
            echo"<span id='fa' class='fa fa-star-o'></span>";
        }
    }
}

function amenities($room)
{
    if(($room['livingRoom'])=="true")
    {
        echo " 
                 <div style=\"width:100px !important;margin-right: 1%;margin-left: 1%;margin-top: 2%\" >
                                    <div align=\"center\"  class=\"card\">
                                        <div align=\"center\" class=\"card-body\">
                                            <i id=\"amenities\" class=\"fa fa-bed\" aria-hidden=\"true\"></i>
                                            <br>
                                            <span style=\"font-size: 13px;\" id=\"amenities_name\">Lounge</span>
                                        </div>
                                    </div>
                            </div>

                ";
    }
    if(($room['tv'])=="true")
    {
        echo "
                   <div style=\"width:100px !important;margin-right: 1%;margin-left: 1%;margin-top: 2%\" >
                                    <div align=\"center\"  class=\"card\">
                                        <div align=\"center\" class=\"card-body\">
                                            <i id=\"amenities\" class=\"fa fa-television\" aria-hidden=\"true\"></i>
                                            <br>
                                            <span style=\"font-size: 13px;\" id=\"amenities_name\">TV</span>
                                        </div>
                                    </div>
                            </div>
                ";
    }
    if(($room['wifi'])=="true")
    {
        echo "
                    <div style=\"width:100px !important;margin-right: 1%;margin-left: 1%;margin-top: 2%\" >
                                    <div align=\"center\"  class=\"card\">
                                        <div align=\"center\" class=\"card-body\">
                                            <i id=\"amenities\" class=\"fa fa-wifi\" aria-hidden=\"true\"></i>
                                            <br>
                                            <span style=\"font-size: 13px;\" id=\"amenities_name\">Wi-Fi</span>
                                        </div>
                                    </div>
                            </div>
                ";
    }
    if(($room['service24x7'])=="true")
    {
        echo "           
                 <div style=\"width:100px !important;margin-right: 1%;margin-left: 1%;margin-top: 2%\" >
                                    <div align=\"center\"  class=\"card\">
                                        <div align=\"center\" class=\"card-body\">
                                            <i id=\"amenities\" class=\"fa fa-life-ring\" aria-hidden=\"true\"></i>
                                            <br>
                                            <span style=\"font-size: 13px;\" id=\"amenities_name\">Support</span>
                                        </div>
                                    </div>
                            </div>
                ";
    }
    if(($room['cctv'])=="true")
    {
        echo "
                  <div style=\"width:100px !important;margin-right: 1%;margin-left: 1%;margin-top: 2%\" >
                                    <div align=\"center\"  class=\"card\">
                                        <div align=\"center\" class=\"card-body\">
                                            <i id=\"amenities\" class=\"fa fa-video-camera\" aria-hidden=\"true\"></i>
                                            <br>
                                            <span style=\"font-size: 13px;\" id=\"amenities_name\">CCTV</span>
                                        </div>
                                    </div>
                            </div>
                ";
    }
    if(($room['parking'])=="true")
    {
        echo "
                 <div style=\"width:100px !important;margin-right: 1%;margin-left: 1%;margin-top: 2%\" >
                                    <div align=\"center\"  class=\"card\">
                                        <div align=\"center\" class=\"card-body\">
                                            <i id=\"amenities\" class=\"fa fa-car\" aria-hidden=\"true\"></i>
                                            <br>
                                            <span style=\"font-size: 13px;\" id=\"amenities_name\">Parking</span>
                                        </div>
                                    </div>
                            </div>
                ";
    }
    if(($room['dining'])=="true")
    {
        echo "
                            <div style=\"width:100px !important;margin-right: 1%;margin-left: 1%;margin-top: 2%\" >
                                    <div align=\"center\"  class=\"card\">
                                        <div align=\"center\" class=\"card-body\">
                                            <i id=\"amenities\" class=\"fa fa-cutlery\" aria-hidden=\"true\"></i>
                                            <br>
                                            <span style=\"font-size: 13px;\" id=\"amenities_name\">Dining</span>
                                        </div>
                                    </div>
                            </div>
                ";
    }
    if(($room['heater'])=="true")
    {
        echo "
                    <div style=\"width:100px !important;margin-right: 1%;margin-left: 1%;margin-top: 2%\" >
                                    <div align=\"center\"  class=\"card\">
                                        <div align=\"center\" class=\"card-body\">
                                            <i id=\"amenities\" class=\"fa fa-thermometer-three-quarters\" aria-hidden=\"true\"></i>
                                            <br>
                                            <span style=\"font-size: 13px;\" id=\"amenities_name\">Heater</span>
                                        </div>
                                    </div>
                            </div>
                ";
    }
    if(($room['miniFridge'])=="true")
    {
        echo "
                 <div style=\"width:100px !important;margin-right: 1%;margin-left: 1%;margin-top: 2%\" >
                                    <div align=\"center\"  class=\"card\">
                                        <div align=\"center\" class=\"card-body\">
                                            <i id=\"amenities\" class=\"fa fa-archive\" aria-hidden=\"true\"></i>
                                            <br>
                                            <span style=\"font-size: 13px;\" id=\"amenities_name\">Fridge</span>
                                        </div>
                                    </div>
                            </div>
                ";
    }
    if(($room['ac'])=="true")
    {
        echo "
                <div style=\"width:100px !important;margin-right: 1%;margin-left: 1%;margin-top: 2%\" >
                                    <div align=\"center\"  class=\"card\">
                                        <div align=\"center\" class=\"card-body\">
                                            <i id=\"amenities\" class=\"fa fa-snowflake-o\" aria-hidden=\"true\"></i>
                                            <br>
                                            <span style=\"font-size: 13px;\" id=\"amenities_name\">A/C</span>
                                        </div>
                                    </div>
                            </div>
                ";
    }
}