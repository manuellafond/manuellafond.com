 
<?php

include("./header.php");

?>

<div class='box'>
	<h2>Software</h2>

<h3>SuGeT (SuperGeneTree)</h3>

<p>
Given a set of gene trees and a species tree, this software finds a <i>supergenetree</i> of the input trees that minimizes the reconciliation cost with the species tree. 
A supergenetree is a tree that "contains" all the input gene trees.  The user can also specify to preserve the orthology/paralogy relations from the input trees.
The runtime is exponential in the number of input trees. See <a href='http://ieeexplore.ieee.org/abstract/document/7959594/' target='_blank'>this paper</a> for details.
</p>

<p>
<a href='https://github.com/UdeM-LBIT/SuGeT' target='_blank'>https://github.com/UdeM-LBIT/SuGeT</a>
</p>

<p>
To cite: M Lafond, C Chauve, N El-Mabrouk, A Ouangraoua, "Gene Tree Construction and Correction using SuperTree and Reconciliation", IEEE/ACM Transactions on Computational Biology and Bioinformatics, 2017
</p>

<hr />


	<h3>profileNJ</h3>
	
	<p>
		Given a <b>non-binary</b> gene tree, a species tree and an optional gene distance matrix, this software outputs a binarization of the gene tree
		that minimizes the duplication+loss score.  Since the number of solutions can easily get exponential,
		the algorithm can use a NJ distance criterion to join the 'nearest' subtrees first.
<br>
This software was used for the experimental studies in <a href='http://journals.plos.org/plosone/article?id=10.1371/journal.pone.0159559' target='_blank'>this paper</a>.
profileNJ extends the linear-time algorithm for gene tree resolution published in <a href='http://link.springer.com/chapter/10.1007%2F978-3-642-33122-0_9' target='_blank'>this paper</a> and can also handle weights on duplications and losses as seen in <a href='http://drops.dagstuhl.de/opus/volltexte/2016/6090/' target='_blank'>this paper</a>.  It is maintained by Emmanuel Noutahi.
	</p>

<p>
<a href='https://github.com/UdeM-LBIT/profileNJ'>https://github.com/UdeM-LBIT/profileNJ</a>
</p>

<p>
To cite:
E Noutahi, M Semeria, M Lafond, J Seguin, B Boussau, L Gueguen, N El-Mabrouk, E Tannier, "Efficient Gene Tree Correction Guided by Genome Evolution",
PLOS One (2016)
</p>
	

<hr/>
	<h3>OPCC (OrthoPara-ConstraintChecker)</h3>
      

	<p>
	  A python script that tests satisfiability/consistency with a species tree of a set of orthologies/paralogies/undecided.
	  In other words, given a set of genes and their partial orthology/paralogy relationships, can we build a gene tree that depicts these 
	  relationships ?  And, can we build such a gene tree that also agrees with a species tree ?
<br>
This script was extended by Mark Jones to check if the gene tree also agrees with <i>some</i> species tree. 
	</p>
	<p>
	  <a href='https://github.com/UdeM-LBIT/profileNJ' target='_blank'>https://github.com/UdeM-LBIT/profileNJ</a>
	</p>

	<p>
	 To cite: M Lafond, N El-Mabrouk, 
	  <a href='http://www.iro.umontreal.ca/~mabrouk/Publications/OrthologsAndParalogs.pdf' target='_blank'>"Orthology and Paralogy Constraints: Satisfiability and Consistency"</a>, BMC Genomics (2014) 
	
	</p>




<hr/>
	<h3>PolytomySolverNAD</h3>
      

	<p>
	  Given a rooted binary gene tree and species tree, corrects a NAD (Non-Apparent Duplication) of the gene tree by applying multifurcation.
	  User may specify a node to correct by appending the string "[CORRECT]" to the label of the node in the newick string.
	  If none specified, this program corrects the highest NAD.
	</p>
	<p>
	  <a href='./polysolver_soft/PolytomySolverNAD_0.1.zip'>Download the source code</a>
	</p>

	<p>
	As seen in the ECCB 2014 paper, 
	<i>"Polytomy Refinement for the Correction of Dubious Duplications in Gene Trees."</i> featuring Manuel Lafond, Cedric Chauve, Riccardo Dondi and Nadia El-Mabrouk. 
	<br><br>
	<b>Functionalities of this software are fairly limited.</b>  If you are seriously interested in this work, I suggest contacting me.
	</p>

<hr/>
	
	<a name='paralogycorrector'></a>
	<h3>ParalogyCorrector</h3>



	<p>
	  Given a gene tree, a species tree and a list of gene pairs that are required to be orthologs,
	  find a gene tree as close as possible to the original that satisfies these constraints under reconciliation.
	  As seen in <a href='http://link.springer.com/article/10.1186/1471-2105-14-S15-S5' target='_blank'>this paper</a>.
	</p>
	

	<p>
          <b>UPDATED VERSION ON GITHUB</b><br>
          <a href='https://github.com/UdeM-LBIT/paralogy-corrector'>https://github.com/UdeM-LBIT/paralogy-corrector</a>
          <br><br><br>

          <b>Old version </b>(that was used for the publication)<br>
	  <a href='./paralogy_corrector_soft/ParalogyCorrector.zip'>Download the source code (ParalogyCorrector.zip)</a><br>
	  
	  
	</p>

	

	<p>
	  To cite : 
	  M Lafond, M Semeria, K M Swenson, E Tannier, N El-Mabrouk : Gene tree correction guided by orthology
	  BMC Bioinformatics 14:S5I; 10.1186/1471-2105-14-S15-S5-T, 2013.
	</p>
	

<hr/>

	<h3>PolytomySolver</h3>



	<p>
	  Given a non-binary gene tree and a binary species tree, this set of C++ classes finds
	  an optimal binary resolution of the gene tree such that the number of duplications + losses is minimized.
	  It is an implementation of what appeared in <a href='http://link.springer.com/chapter/10.1007%2F978-3-642-33122-0_9' target='_blank'>this paper</a>.
	</p>
	
	<p>
	  This version is obsolete - please use profileNJ above, which does the same tasks and more! 
	</p>

	<p>
	  <a href='./polysolver_soft/polysolver_0.1_090913.zip'>Download the source code (polysolver_0.1_090913.zip)</a><br>
	  <a href='./polysolver_soft/polysolver_docs/index.html' target='_blank'>DOCUMENTATION</a>
	</p>


	<p>
	  To cite : <br>
	  Lafond M, Swenson KM, El-Mabrouk N: An optimal reconciliation
	  algorithm for gene trees with polytomies. <br>
	  In WABI, volume 7534 of
	  LNBI/LNBI; 2012:106-122.
	</p>
	

	
	
</div>

<?php

include("footer.php");

?>
