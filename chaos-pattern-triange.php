<?php

// Set image size and type
$png = imagecreatetruecolor(1100, 1100);
imagesavealpha($png, true);
$colour = imagecolorallocatealpha($png, 255, 255, 255, 0);
imagefill($png, 0, 0, $colour);

// Define colors used
$black = imagecolorallocate($png, 0, 0, 0);
$red = imagecolorallocate($png, 255, 0, 0);
$blue = imagecolorallocate($png, 0, 0, 255);

// Define and draw apexes of shape
$apex[1] = array('x' =>  550, 'y' =>  50);
$apex[2] = array('x' =>   50, 'y' => 916.025);
$apex[3] = array('x' => 1050, 'y' => 916.025);

for ($i = 1; $i <= count($apex); $i++) {
   imagefilledellipse($png, round($apex[$i]['x']), round($apex[$i]['y']), 5, 5, $black);
}

// Define and draw start point
$orig_x = 550;
$orig_y = 627.350;

imagefilledellipse($png, round($orig_x), round($orig_y), 5, 5, $black);

// Main loop
for ($i = 1; $i <= 1000000; $i++) {
	$point = rand(1, 3);
	$dest_x = $apex[$point]['x'];
	$dest_y = $apex[$point]['y'];

	$coord_x = ($orig_x + $dest_x) / 2;
	$coord_y = ($orig_y + $dest_y) / 2;

	$orig_x = $coord_x;
	$orig_y = $coord_y;

//	imagesetpixel($png, round($coord_x), round($coord_y), $red);
	imagefilledellipse($png, round($coord_x), round($coord_y), 2, 2, $red);
}

// Output image
header('Content-Type: image/png');
imagepng($png);

?>
