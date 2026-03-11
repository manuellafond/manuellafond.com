<?php

include("./header.php");

?>

<div class='box'>

  <h2><?= getTerm("labmembers") ?></h2>
  
  <?php 
   if ($lang == "en")
	echo("Sorted by grade, then by last name");
   else 
	echo("Triés en grade, puis en nom de famille");
  ?>
  <br>
  
  <ul>
    <li>
		Ibrahim Chegrane, postdoc
	</li>
	<li>
		Reza Kalhor, PhD student
	</li>
	<li>
		Alitzel Lopez Sanchez, PhD student
	</li>
	<li>
		Weidong Luo, PhD student
	</li>
	<li>
		Luc Bugingo, MSc student
	</li>
	<li>
		Julien Corriveau-Trudel, MSc student
	</li>
	<li>
		Zakia Yanes, masters intern
	</li>
  
  </ul>
  
  
  <h2><?= getTerm("alumni") ?></h2>
  
  <ul>
    <li>
		Alitzel Lopez Sanchez, MSc student<br>
		(now a PhD student in the above list)
	</li>
    <li>
		Andres Pastrana, MSc student<br>
	</li>
	<li>
		Garance Cordonnier, masters intern<br>
				
	</li>
	<li>
		Hugo Lamoureux, bachelors intern
	</li>
	<li>
		Simon Lévesque, bachelors intern
	</li>
	
  

</div>

<?

include("./footer.php");

?>