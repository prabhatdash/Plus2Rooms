function pre_validation1 ()
{

    if((document.getElementById("fname").value==""))
    {
        document.getElementById("fname_label").style.color="red";
    }
    else{
        document.getElementById("fname_label").style.color="#000a38";
    }
}
function pre_validation2 ()
{

    if((document.getElementById("lname").value==""))
    {
        document.getElementById("lname_label").style.color="red";
    }
    else{
        document.getElementById("lname_label").style.color="#000a38";
    }
}

function pre_validation3 ()
{

    if((document.getElementById("email").value==""))
    {
        document.getElementById("email_label").style.color="red";
    }
    else{
        document.getElementById("email_label").style.color="#000a38";
    }
}

function pre_validation4 ()
{

    if((document.getElementById("phone").value==""))
    {
        document.getElementById("phone_label").style.color="red";
    }
    else{
        document.getElementById("phone_label").style.color="#000a38";
    }
}
function pre_validation5 ()
{

    if((document.getElementById("pass").value==""))
    {
        document.getElementById("pass_label").style.color="red";
    }
    else{
        document.getElementById("pass_label").style.color="#000a38";
    }
}
function pre_validation6 ()
{
    if((document.getElementById("pass").value)!=(document.getElementById("cpass").value))
    {
        document.getElementById("cpass_label").style.color="red";
    }
    else
    {
        document.getElementById("cpass_label").style.color="#000a38";
    }
}
function final_validate() {

    if((document.getElementById("pass").value)!=(document.getElementById("cpass").value))
    {
        alert("Password and Confirm Password don't match !");
        return false;
    }
}