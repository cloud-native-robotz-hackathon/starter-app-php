<?php

// Partnerconference Robo Hackathon PHP Module
//
// Please enter your config in "config.php"
//
// Commands:
// Show power in volt    : getpower();  
// Show distance in mm   : getdistance();  
// Show status           : getstatus();
// Show remote_status    : getremotestatus();
// Go forward in cm      : forward("length in cm");  
// Go backward in cm     : backward("length in cm");  
// Turn left in degrees  : turnleft("degrees");  
// Turn right in degrees : turnright("degrees");

// Start coding here

header("Content-type: image/png");
$im = @imagecreate(50, 100)
      or die("Kann keinen neuen GD-Bild-Stream erzeugen");
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5, "Ein Test-String", $text_color);
imagepng($im);
imagedestroy($im);

?>
