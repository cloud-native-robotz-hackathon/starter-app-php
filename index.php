    <?php
    
      $apikey = "XXX"; // Key from 3Scale e.g. "b80392ca7738d47d6cb7b35b62192e29"
      $url = "XXX"; // URL from 3Scale e.g. "https://api-2445582274375.staging.gw.apicast.io:443/api/robot"
     
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


    // Your code here:

      $ausgabe = getdistance($url, $apikey);
      echo $ausgabe;

    ?>
