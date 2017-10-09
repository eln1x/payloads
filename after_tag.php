<?php
for($i >0; $i < 255; $i++) {
	$character =chr($i);
	echo '<div><a'.$character.' href="http://www.google.com/">'.'char'. $i. chr($i).'</a></div>'; 
}
?>
