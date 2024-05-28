<?php

function imagemoverectangle($im, $tlx, $tly, $brx, $bry, $ntlx, $ntly) {
	for($x = $tlx; $x <= $brx; $x++) {
		for($y = $tly; $y <= $bry; $y++) {
			$nx = $ntlx + $x - $tlx;
			$ny = $ntly + $y - $tly;

			$color = imagecolorat($im, $x, $y);
			$color_2 = imagecolorat($im, $nx, $ny);

			imagesetpixel($im, $nx, $ny, $color);
			imagesetpixel($im, $x, $y, $color_2);
		}
	}
}

$im = imagecreatefromjpeg('chloe.jpg');
imagemoverectangle($im, 155, 510, 290, 615, 50, 75);
header("Content-Type: image/jpg");
imagejpeg($im);
imagedestroy($im);
