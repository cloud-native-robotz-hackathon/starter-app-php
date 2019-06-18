<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title>Robocontrol PHP-Module</title>
</head>
<h1 class="display-4">Robocontrol PHP-Module</h1>
<body>
<pre>
<code>
Commands:

Show power in volt              : getpower();  
Show distance in mm             : getdistance();  
Show status                     : getstatus();
Show remote_status              : getremotestatus();
Go forward in cm                : forward("length in cm");  
Go backward in cm               : backward("length in cm");  
Turn left in degrees            : turnleft("degrees");  
Turn right in degrees           : turnright("degrees");
Turn head between 0-180 degrees : head("0-180 degrees");

</code>
</pre>
<table>
<form action="" method="post">
<tr>
   <th><input class="btn btn-primary btn-lg" type="submit" name="getpower" value="getpower();"/></th>
   <th><input class="btn btn-primary btn-lg" type="submit" name="forward" value="forward(5);"/></th>
   <th><input class="btn btn-primary btn-lg" type="submit" name="getdistance" value="getdistance();"/></th> 
</tr>
<tr>
   <th><input class="btn btn-primary btn-lg" type="submit" name="turnleft" value="turnleft(90);"/></th>
   <th><input class="btn btn-primary btn-lg" type="submit" name="head90" value="head(90);"/></th>
   <th><input class="btn btn-primary btn-lg" type="submit" name="turnright" value="turnright(90);"/></th>
</tr>   
<tr>
   <th><input class="btn btn-primary btn-lg" type="submit" name="backward" value="backward(5);"/></th>
   <th><input class="btn btn-primary btn-lg" type="submit" name="head45" value="head(45);"/></th>
   <th><input class="btn btn-primary btn-lg" type="submit" name="head135" value="head(135);"/></th>
</tr>
</form>
</table>
<br><br>
Start your code from run.php :<br><br>
<form action="" method="post">
   <input class="btn btn-primary btn-lg" type="submit" name="run" value="Run"/>
</form>
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
