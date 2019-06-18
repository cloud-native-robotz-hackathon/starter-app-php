<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title>Robocontrol PHP-Module</title>
</head>
<center>
<h1 class="display-4">Robocontrol PHP-Module</h1>
<?php
   include("config.php");
   echo '<h4>Team '.$apikey.'</h4>';
?>
<body>
   <br><br>
<table>
<tr>
   <th><b><h5>Commands :</h5></b></th>
   <th> </th>
</tr> 
<tr>
           <th>Show power in volt</th>
           <th>: getpower();</th>
</tr>
<tr>
           <th>Show distance in mm</th>
           <th>: getdistance();</th>
</tr>
<tr>
           <th>Show status</th>
           <th>: getstatus();</th>
</tr>
<tr>
           <th>Show remote_status</th>
           <th>: getremotestatus();</th>
</tr>
<tr>
           <th>Go forward in cm</th>
           <th>: forward("length in cm");</th>
</tr>
<tr>
           <th>Go backward in cm</th>
           <th>: backward("length in cm");</th>
</tr>
<tr>
           <th>Turn left in degrees</th>
           <th>: turnleft("degrees");</th>
</tr>
<tr>
           <th>Turn right in degrees</th>
           <th>: turnright("degrees");</th>
</tr>
<tr>
           <th>Turn head between 0-180 degrees</th>
           <th>: head("0-180 degrees");</th>
</tr>
</table>
<table>
<form action="" method="post">
<tr>
   <th>&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;</th>
   <th>&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;</th>
   <th>&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;</th>
</tr>
<tr>
   <th><input class="btn btn-lg btn-block btn-primary" type="submit" name="getpower" value="&#9889;&#10;getpower();"/></th>
   <th><input class="btn btn-lg btn-block btn-primary" type="submit" name="forward" value="&#8593;&#10;forward(5);"/></th>
   <th><input class="btn btn-lg btn-block btn-primary" type="submit" name="getdistance" value="&#8616;&#10;getdistance();"/></th> 
</tr>
<tr>
   <th><input class="btn btn-lg btn-block btn-primary" type="submit" name="turnleft" value="&#8592;&#10;turnleft(90);"/></th>
   <th><input class="btn btn-lg btn-block btn-primary" type="submit" name="backward" value="&#8595;&#10;backward(5);"/></th>
   <th><input class="btn btn-lg btn-block btn-primary" type="submit" name="turnright" value="&#8594;&#10;turnright(90);"/></th>
</tr>   
<tr>
   <th><input class="btn btn-lg btn-block btn-primary" type="submit" name="head45" value="&#8598;&#10;head(45);"/></th> 
   <th><input class="btn btn-lg btn-block btn-primary" type="submit" name="head90" value="&#8593;&#10;head(90);"/></th>
   <th><input class="btn btn-lg btn-block btn-primary" type="submit" name="head135" value="&#8599;&#10;head(135);"/></th>
</tr>
<tr>
   <th>&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;</th>
   <th>&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;</th>
   <th>&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;</th>
</tr>
<tr>
   <th>Start your code from run.php:</th>
   <th><input class="btn btn-lg btn-block btn-primary" type="submit" name="run" value="&#x23FB;&#10;Run"/></th>
   <th> </th>   
</tr>
<tr>
   <th>&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;</th>
   <th>&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;</th>
   <th>&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;</th>
</tr>
</form>
</table>
</body>
</html>

<?php

  include("config.php");
  include("callapi.php");

  if(isset($_POST["forward"])) {
    forward(5);
    $date = date('H:i:s');
    echo " | ".$date;
  }
  if(isset($_POST["backward"])) {
    backward(5);
    $date = date('H:i:s');
    echo " | ".$date;
  }
  if(isset($_POST["turnleft"])) {
    turnleft(90);
    $date = date('H:i:s');
    echo " | ".$date;
  }
  if(isset($_POST["turnright"])) { 
    turnright(90);
    $date = date('H:i:s');
    echo " | ".$date;
  }
  if(isset($_POST["head45"])) { 
    head(45);
    $date = date('H:i:s');
    echo " | ".$date;
  }
  if(isset($_POST["head90"])) { 
    head(90);
    $date = date('H:i:s');
    echo " | ".$date;
  }
  if(isset($_POST["head135"])) { 
    head(135);
    $date = date('H:i:s');
    echo " | ".$date;
  }
  if(isset($_POST["getpower"]))  {
    $output = getpower();
    $date = date('H:i:s');
    echo " | ".$date;
  }
  if(isset($_POST["getdistance"])) { 
    $output = getdistance();
    $date = date('H:i:s');
    echo " | ".$date;
  }
  if(isset($_POST["run"])) {
    include("run.php"); 
  }

?>
 </center>
