<style type='text/css'>

.problem
{
	margin-bottom: 30px;
	color:black;
}

.problem_title
{
	text-decoation:underline;
	font-size:18px;
	font-weight:bold;
	margin-top:8px;
	border-bottom:1px solid black;
}

</style>

<?php

include("./header.php");

?>

<div class='box' style='margin-top:5px;'>
	<!-- h2>Some problems I couldn't solve</h2 -->
	<h2>Quelques probl&egrave;mes non-r&eacute;solus</h2>

	<?php
	$xml=simplexml_load_file("openproblems_fr.xml") or die("Error: Cannot create object");
	
	$cpt = 1;
	foreach ($xml->children() as $problems)
	{
		foreach ($problems->children() as $problem)
		{
			?>
			<div class='problem'>
				<div class='problem_title'>
					<?= htmlentities($problem->TITLE, 0, "UTF-8") ?>
				</div>
				<?
				if ($problem->IMAGE)
				{
					echo("<img style='float:right;' width='" . $problem->IMAGEW . "' height='" . $problem->IMAGEH . "' src='" . $problem->IMAGE . "' />");
				}
				?>
				<?= str_replace("\n", "<br>", htmlentities($problem->TEXT, 0, "UTF-8")) ?>
				
		
			</div>
			<?
			
			$cpt++;
		}
	
	}
	
	?>

<?php

include("footer.php");

?>
