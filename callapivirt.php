<?php

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

?>