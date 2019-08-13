<?php

// check if cookie with name= "visitor_count" is set
if(isset($_COOKIE['visitor_count'])){

//get the cookie value using super global cookie variable
$visitor_count=$_COOKIE['visitor_count'];
//increment the cookie value by one
$visitor_count++;
//set the new cookie value with the same name = "visitor_count"
setcookie('visitor_count',$visitor_count, time()+3600);
}else{
    setcookie('visitor_count',1,time()+3600);
}
// if the cookie="visitor_count" is not set, then create a new cookie 
//with value = 1

//display the cookie value as "You have visited this page x times"
echo "You have visited this page ".$_COOKIE['visitor_count'].' times';