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

header ('Content-Type: image/png');
$im = @imagecreatetruecolor(120, 20)
      or die('Cannot Initialize new GD image stream');
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);
imagepng($im);
imagedestroy($im);

?>
