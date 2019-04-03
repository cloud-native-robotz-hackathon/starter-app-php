<html>
<h1>Robocontrol PHP-Module</h1>
<body>
<pre>
Commands:

Show power in volt    : getpower();  
Show distance in cm   : getdistance();  
Show status           : getstatus();
Show remote_status    : getremotestatus();
Go forward in cm      : forward("length in cm");  
Go backward in cm     : backward("length in cm");  
Turn left in degrees  : turnleft("degrees");  
Turn right in degrees : turnright("degrees");

</pre>
<form action="" method="post">
   <input type="submit" name="getpower" value="getpower();"/>
   <input type="submit" name="getdistance" value="getdistance();"/> 
   <br><br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" name="forward" value="forward(5);"/>
   <br><br>
   <input type="submit" name="turnleft" value="turnleft(90);"/>
   <input type="submit" name="turnright" value="turnright(90);"/>
   <br><br>
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" name="backward" value="backward(5);"/>
</form>
<br><br>
Start your code from run.php :<br><br>
<form action="" method="post">
   <input type="submit" name="run" value="Run"/>
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
