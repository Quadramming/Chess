<?php
$dir = scandir('.');
$files = '';
foreach ( $dir as $entery ) {
	if ( preg_match('/\.cpp$/', $entery) ) {
		$files .= "$entery ";
	}
}
system("g++ $files -o chess");
system("./chess");
?>
