<?php


$myname = "Md Ripon Mia"; //Gobal Scope
$fb_name = "MD Ripon";

// echo $myname;

function personname(){
    $myname = "Md Ripon Mia"; //local scope
    $fb_name = "MD Ripon"; //local scope
    echo $myname ;
    echo $fb_name;
}
personname();



