<?php


include("./header.php");

?>

<div class="box">



<?php 

$output = null;
exec("cat style.css", $output);
foreach ($output as $value)
{
	echo($value);
}	


?>

</div>			

<?php

include("./footer.php");

?>

