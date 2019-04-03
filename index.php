<?php

  // Please configure here
  
  $apikey = "XXX"; // Key from 3Scale e.g. "b80a92d47738d47d6ca7b35b62092e29"
  $url = "XXX"; // URL from 3Scale without / at the end. e.g. "https://api-2445582274375.staging.gw.apicast.io:443/api/robot"
 
  // Don't change the functions

  function getpower(string $url, string $apikey) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url."/power?user_key=".$apikey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        echo $output;
  }

  function getdistance(string $url, string $apikey) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url."/distance?user_key=".$apikey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        echo $output;
  }

  function getstatus(string $url, string $apikey) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url."/status?user_key=".$apikey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        echo $output;
  }

  function getremotestatus(string $url, string $apikey) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url."/remote_status?user_key=".$apikey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        echo $output;
  }

  function forward(string $url, string $apikey, string $length) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url."/forward/".$length."?user_key=".$apikey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "length_in_cm=".$length);
        $output = curl_exec($ch);
        curl_close($ch);
        echo $output;
  }

  function backward(string $url, string $apikey, string $length) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url."/backward/".$length."?user_key=".$apikey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "length_in_cm=".$length);
        $output = curl_exec($ch);
        curl_close($ch);
        echo $output;
  }

  function turnright(string $url, string $apikey, string $degrees) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url."/right/".$degrees."?user_key=".$apikey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "degrees".$degrees);
        $output = curl_exec($ch);
        curl_close($ch);
        echo $output;
  }

  function turnleft(string $url, string $apikey, string $degrees) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url."/left/".$degrees."?user_key=".$apikey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "degrees".$degrees);
        $output = curl_exec($ch);
        curl_close($ch);
        echo $output;
  }

// Your code here:
//
// $ausgabe = turnleft($url, $apikey,90);
// echo $ausgabe;

?>
