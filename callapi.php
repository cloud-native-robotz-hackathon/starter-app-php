<?php

          function getpower() {
                include("config.php");
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url."/power?user_key=".$apikey);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
                curl_close($ch);
                echo $output;
                return($output);
          }

          function getdistance() {
                include("config.php");
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url."/distance?user_key=".$apikey);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
                curl_close($ch);
                echo $output;
                return($output);
          }

          function getstatus() {
                include("config.php");
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url."/status?user_key=".$apikey);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
                curl_close($ch);
                echo $output;
                return($output);
          }

          function getremotestatus() {
                include("config.php");
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url."/remote_status?user_key=".$apikey);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
                curl_close($ch);
                echo $output;
                return($output);
          }

          function forward(string $length) {
                include("config.php");
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url."/forward/".$length."?user_key=".$apikey);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, "length_in_cm=".$length);
                $output = curl_exec($ch);
                curl_close($ch);
                echo $output;
                return($output);
          }

          function backward(string $length) {
                include("config.php");
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url."/backward/".$length."?user_key=".$apikey);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, "length_in_cm=".$length);
                $output = curl_exec($ch);
                curl_close($ch);
                echo $output;
                return($output);
          }

          function turnright(string $degrees) {
                include("config.php");
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url."/right/".$degrees."?user_key=".$apikey);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, "degrees".$degrees);
                $output = curl_exec($ch);
                curl_close($ch);
                echo $output;
                return($output);
          }

          function turnleft(string $degrees) {
                include("config.php");
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url."/left/".$degrees."?user_key=".$apikey);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, "degrees".$degrees);
                $output = curl_exec($ch);
                curl_close($ch);
                echo $output;    
                return($output);
          }

          function head(string $degrees) {
                include("config.php");
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url."/servo/".$degrees."?user_key=".$apikey);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, "degrees".$degrees);
                $output = curl_exec($ch);
                curl_close($ch);
                echo $output;    
                return($output);
          }

?>
