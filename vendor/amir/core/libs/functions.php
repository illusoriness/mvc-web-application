<?php

function debug($arr){
    echo '<pre>' . print_r($arr, true) . '</pre>';
}
function myecho ($string) {
    echo " " . print_r($string) . " ";
}


function console($value) {
    echo "<script> console.log('Log \$value = $value');  </script>";
}
function consoleJson ($value) {
      \console(json_encode($value));
}
function alert($value) {
    echo "<script> alert('Alert \$value = $value') </script>";
}

function makeDate($string) {
    $months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    $datetime = explode(' ',$string);
    $date = explode('-', $datetime[0]);
    $time = explode('.',$datetime[1]);
    $realtime = $time[0];
    $result= $date[2] . " " . $months[$date[1]-1] . " " . $date[0] . " " . $realtime . " GMT+06:00";
    return $result;
}

function reverseDate($string) {
    $months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    $date = explode('-',$string);
    $month = str_replace('0','',$date[1]-1);
    $result = $months[$month] . " " . $date[2] . " " . $date[0];
    return $result;
}

function redirect($http = false) {
    /**
     * HTTP_REFERER - previous location
     */
    if ($http) {
        $redirect = $http;
    } else {
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location:$redirect");
    exit;
}
