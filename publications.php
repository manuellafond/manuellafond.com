<?php

include("./header.php");

?>

<div class='box'>
	<h2>Publications</h2>

	<?php if ($lang == "en")
	{ 
	?>
	I have failed to maintain this page up-to-date.  I invite the interested visitor to visit my <a href='https://scholar.google.ca/citations?hl=en&user=KcFi0swAAAAJ&view_op=list_works&sortby=pubdate' target='_blank'>Google Scholar page</a>
	<br>
	

	<?php 
	}
	else
	{ 
	?>
	
	Je n'arrive pas &agrave; maintenir cette page.  J'ai abandonn&eacute; et je vous renvoie plut&ocirc;t 
	vers une de ces pages : <br><br>
	
	<a href='http://scholar.google.ca/citations?user=KcFi0swAAAAJ'>Google Scholar</a>
	<br><br>
	<a href='http://www.informatik.uni-trier.de/~ley/pers/hy/l/Lafond:Manuel.html'>DBLP</a>
	
	
	
	<?php 
	} 
	?>


<?php

include("footer.php");

?>