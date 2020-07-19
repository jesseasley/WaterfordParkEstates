<script src="images/borders/glowFrame/glowFrame.js"></script>
<?php
$path = "images/blockparty201006";
?>
<div name=vpic id=vpic style="position: absolute;"></div>
<?php
include "includes/functions.php";
include "includes/header.php";

//define the path as relative
//using the opendir function
$dir_handle = @opendir($path) or die("Unable to open $path");

//running the while loop
while ($file = readdir($dir_handle)) 
{
	if (substr($file, (strlen($file) - 4)) == ".jpg")
	{
		$size = getimagesize($path . "/" . $file);
//	   echo "<a title='Click to enlarge' href='" . $path . "/" . $file . "' target=_empty>\n<img src='" . $path . "/small/" . substr($file, 0, (strlen($file) - 4)) . " (300x199).jpg' width=300 height=199></a>\n";
//	   echo "<a title=\"Click here to enlarge\" imagetitle=\"" . $file . "\" href=\"" . $path . "/" . $file . "\" rel=\"lightbox\">\n<img src='" . $path . "/" . $file . "' width=300 height=199></a>\n";
		echo "<a title=\"Click here to enlarge\" imagetitle=\"" . $file . "\" href=\"javascript:showimg('" . $path . "/" . $file . "','" . $size[0] . "','" . $size[1] . "');\">\n<img src='" . $path . "/" . $file . "' width=300 height=199></a>\n";
	}
}

//closing the directory
closedir($dir_handle);


include "includes/footer.php";
?>
