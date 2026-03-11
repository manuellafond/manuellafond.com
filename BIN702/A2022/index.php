<?
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="fr" lang="fr">
	<head>
	
		<style type='text/css'>
			body
			{
				background: #F4F5F5;
				font-family: "Open Sans", sans-serif;
			}
		
			#header
			{
				font-size: 2.5em;
				text-align:center;
				margin-top:60px;
			}
			
			#subheader
			{
				text-align:center;
				margin-top:8px;
				font-size:1.5em;
			}
		
			#content
			{
				
				width:900px;
				margin-left:auto;
				margin-right:auto;		
				margin-top:30px;
				margin-bottom:100px;
				padding:35px;
				
				background: #fff;
				border-radius: 5px;
				box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
				border: solid 1px #D4D5D5;
			}
			
			.section
			{
				line-height:28px;
				margin-top:40px;
			}
			
			.section_title
			{
				font-size:1.2em;
				border-bottom:1px solid #949494;
				margin-bottom:8px;
			}
			
			a, a:visited
			{
				color:blue;
				text-decoration:none;
			}
			
			a:hover
			{
				text-decoration:underline;
			}
			
			.courssection, .tpsection
			{
				background-color:#f2f2f2;
				padding-left:20px;
				padding-top:10px;
				padding-bottom:2px;
			}
			
			.tpsection
			{
				background-color:#e2fae2;
				
			}
			
			ul
			{
				margin-top:1px;
				padding-left:24px;
			}
			
			.subsection_title
			{
				font-size:18px;
			}
			
			
			a[href*="youtu.be/"], a[href*="youtube.com/"] {
				background:url(yticon.png) no-repeat left center;
				padding-left:24px;
				}
			
			a[href*=".pdf"] {
				background:url(pdficon.png?x=1) no-repeat left center;
				padding-left:24px;
				}
			
			.subtitle{
				text-decoration: underline;
			}
			
		</style>
	
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<meta name="keywords" lang="fr" content="BIN702 - Algorithmes pour la bioinformatique" /> 
		<meta name="description" lang="fr" content="BIN702 - Algorithmes pour la bioinformatique" />

		<link rel='shortcut icon' type='image/x-icon' href='dbicon.ico' />

		<title>BIN702 - Algorithmes pour la bioinformatique.  Université de Sherbrooke</title>
		
	
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				BIN702 - Algorithmes pour la bioinformatique
			</div>
			<div id="subheader">
				Automne 2022 - Manuel Lafond
				<br>
				Courriel: manuel.lafond@USherbrooke.ca
				<br><br>
				Local: D4-2010
				<br>
				Disponibilités: écrivez-moi un courriel
			</div>
			<div id="content">
			
			
				
				
			
				<div class="section">
					<!-- div class="section_title">
						EXAMEN INTRA
					</div>
					<ul>
						<li>
							<a href='exams/BIN702-intra.pdf'>Énoncé de l'examen intra</a> 
						</li>
						<li style='margin-top:10px;'>
							<a href='exams/BIN702-intra-EN.pdf'>(English version)</a> 
						</li>
						
						
					</ul -->
					
					
					<div class="section_title">
						EXAMEN FINAL
					</div>
					<ul>
						<li>
							<a href='final/BIN702_final_a22.pdf'>Énoncé de l'examen FINAL</a> 
						</li>
						<li style='margin-top:10px;'>
							<a href='final/BIN702 final_a22_English.pdf'>(English version)</a> 
						</li>
						
						
					</ul>
					
				</div>
				
				
			
			
				<div class="section">
					<div class="section_title">
						
					</div>
					<ul>
						<li>
							<a href='BIN702-planA22.pdf'>Plan de cours  (pdf)</a> 
						</li>
						<li>
							<a href='BIN702-Intro.pdf'>Introduction à BIN702 (pdf)</a> 
						</li>
						<li>
							<a href='BIN702-NotionsBio.pdf'>Notions de base en biologie (pdf)</a> 
						</li>
						
					</ul>
				</div>
				
				
				
				<div class="section">
					<div class="section_title">
						Projet de session
					</div>
					<ul>
						<li>
							<a href='projets_enonce.pdf'>Énoncé du projet de session</a> 
						</li>
						<li>
							<a href='projets_idees.pdf'>Quelques idées de projet</a> 
						</li>						
					</ul>
				</div>
				
				
				
				
				
				
				<div class="section">
					<div class="section_title">
						1. Distance d'édition / alignement de séquences
					</div>
					
					<u>Notes de cours</u>
					<ul>
						<li>
							Alignement global et local: <a href='notes/align.pdf?x=2'>Export de mes notes</a> (mis à jour le 9 septembre)
						</li>
						<li>
							Extensions sur l'alignement: <a href='notes/align-extensions.pdf?x=3'>Export de mes notes</a> (mis à jour le 14 septembre)
						</li>
						<li>
							Heuristiques FASTA et BLAST: <a href='notes/fasta-blast.pdf?x=4'>Export de mes notes</a> (mis à jour le 19 septembre)
						</li>
					</ul>
					
					
					<u>Exercices</u>
					<ul>
						<li>
							<a href='exos_alignement.pdf?v=3'>** Série d'exercices 1:  l'alignement (pdf) **</a>
							<br>
							---- <a href='exos_alignement_solutions.pdf?x=2'>** SOLUTIONS (pdf) **</a>
						</li>
						<li>
							<a href='exos_fasta_blast.pdf?v=3'>** Série d'exercices 2:  FASTA et BLAST (pdf) **</a> 
							<br>
							---- <a href='exos_fasta_blast_solutions.pdf?x=2'>** SOLUTIONS (pdf) **</a -->
							
						</li>
					</ul>
					
					<div class='subtitle'>
						Pour en savoir plus sur l'alignement
					</div>
					<ul>	
					
						<li>
							<a href='http://rna.informatik.uni-freiburg.de/Teaching/index.jsp?toolName=Needleman-Wunsch'>Needleman-Wunsch: alignement global en ligne</a>
							<br>
							<a href='http://rna.informatik.uni-freiburg.de/Teaching/index.jsp?toolName=Smith-Waterman'>Smith-Waterman: alignement local en ligne</a>
						</li>
					
						<li style='margin-top:8px;'>
							Voir les excellentes présentations de Wing-Kin Sung (Chapitres 2 pour l'alignement, Chapitre 5 pour BLAST) : 
							<br>
							<a href='https://www.comp.nus.edu.sg/~ksung/algo_in_bioinfo/'>https://www.comp.nus.edu.sg/~ksung/algo_in_bioinfo/</a> 
						</li>
						
						<li>
							<a href='https://en.wikipedia.org/wiki/BLOSUM'>Matrices BLOSUM</a> | <a href='https://en.wikipedia.org/wiki/Point_accepted_mutation'>Matrices PAM</a>
						</li>
						
						
						
						
						
						
					</ul>
					
					
					
					
					
					
					
					
					<!-- div class='subtitle'>
						Pour en savoir plus sur BLAST (optionnel)
					</div>
					
					
					
					<ul>
						<li>
							Voir le Chapitre 5 de <a href='https://www.comp.nus.edu.sg/~ksung/algo_in_bioinfo/'>https://www.comp.nus.edu.sg/~ksung/algo_in_bioinfo/</a> 
						</li>
						
						
						<li>
							Voir aussi: <a href='https://ab.inf.uni-tuebingen.de/teaching/ws06/albi1/script/BLAST_slides.pdf'>https://ab.inf.uni-tuebingen.de/teaching/ws06/albi1/script/BLAST_slides.pdf</a>
						</li>
						
						<li>
							<a href='https://blast.ncbi.nlm.nih.gov/Blast.cgi'>Essayer BLAST</a> (sur base de données NCBI)
						</li>
						
						<li>
							<a href='http://myerslab.mpi-cbg.de/wp-content/uploads/2014/06/behind.blast_.pdf'>What's behind BLAST</a>: article de Gene Myers, un des inventeurs de BLAST
						</li>
						
					</ul -->
				</div>
				
				
				
				
				<div class="section">
					<div class="section_title">
						2. Arbres de suffixes
					</div>
					
					<u>Notes de cours</u>
					<ul>
						<li>
							Arbres de suffixes: <a href='notes/suffixtree.pdf?x=4'>Export de mes notes</a> (mis à jour le 28 septembre)
						</li>
						
					</ul>
					
					
					<u>Exercices</u>
					<ul>
						<li>
							<a href='exos_arbre_suffixe.pdf?v=4'>** Série d'exercices 3:  les arbres de suffixes (pdf) **</a>
							<br>
							<a href='exos_arbre_suffixe_solutions.pdf?x=2'>** SOLUTIONS (pdf) **</a>
						</li>
						
					</ul>
					
					<div class='subtitle'>
						Pour en savoir plus sur les arbres de suffixes
					</div>
					<ul>	
						<li>
							<a href='https://visualgo.net/en/suffixtree'>Visualisation d'arbre de suffixes en ligne</a>
						</li>
						<li>
							Voir le Chapitre 3 de <a href='https://www.comp.nus.edu.sg/~ksung/algo_in_bioinfo/'>https://www.comp.nus.edu.sg/~ksung/algo_in_bioinfo/</a> 
						</li>

						<li>
							Algorithme de Ukkonen
							<br>
							<a href='https://web.stanford.edu/~mjkay/gusfield.pdf'>Description haut-niveau par D. Gusfield</a> | <a href='https://www.cs.helsinki.fi/u/ukkonen/SuffixT1withFigs.pdf'>Article original</a> | 
							<a href='https://stackoverflow.com/questions/9452701/ukkonens-suffix-tree-algorithm-in-plain-english'>Explications avec exemples sur Stackoverflow</a>
						</li>
						
						
						<li>
							Algorithme de Farach-Colton
							<br>
							<a href='https://www.researchgate.net/profile/Martin_Farach-Colton/publication/220431862_On_the_sorting-complexity_of_suffix_tree_construction/links/0912f512ac6d9969b2000000.pdf'>Article original</a> | Voir <a href='https://www.comp.nus.edu.sg/~ksung/algo_in_bioinfo/'>Chapitre 3 de WK Sung</a>
						</li>
						
						<li>
							
							<a href='http://u.cs.biu.ac.il/~amir/DS/w13_LCA.ppt'>Prétraitement simplifié pour LCA en O(1) sur arbres binaires et hauteur bornée</a>
						</li>
						
						
						
						
						
					</ul>
					
					
					
					
					
	
				</div>
				
				
				
				
				
				
				
				<div class="section">
					<div class="section_title">
						3. Séquençage
					</div>
					
					<u>Notes de cours</u>
					<ul>
						<li>
							Séquençage Sanger: <a href='notes/seqsanger.pdf?x=4'>Export de mes notes</a> (mis à jour le 5 octobre)
						</li>
						<li>
							Algorithmes d'assemblage de reads: <a href='notes/seqalgo.pdf?x=5'>Export de mes notes</a> (mis à jour le 7 octobre)
						</li>
						
					</ul>
					
					
					<u>Exercices</u>
					<ul>
						<li>
							<a href='exos_sequencage.pdf?v=4'>** Série d'exercices 4:  l'assemblage de séquences **</a>
							<br>
							<a href='exos_sequencage_solutions.pdf?x=2'>** SOLUTIONS (pdf) **</a>
						</li>
						
					</ul>
					
					<div class='subtitle'>
						Pour en savoir plus sur le séquençage
					</div>
					<ul>	
						<li>
							<a href='https://www.cs.jhu.edu/~langmea/resources/lecture_notes/assembly_dbg.pdf'>Présentation sur les graphes de De Brujin (par Ben Langmead, en anglais)</a>
						</li>
						
						<li>
							<a href='https://www.youtube.com/watch?v=uKreghMwLLE'>Recherche exacte dans transformée Burrows-Wheeler (vidéo en anglais)</a>
						</li>
					</ul>
					
					
					
					
					
	
				</div>
				
				
				
				
				
				<div class="section">
					<div class="section_title">
						4. Annotation de génomes avec HMM
					</div>
					
					<u>Notes de cours</u>
					<ul>
						<li>
							HMM: <a href='notes/hmm.pdf?x=5'>Export de mes notes</a> (mis à jour le 17 octobre)
						</li>
						
					</ul>
					
					
					<u>Exercices</u>
					<ul>
						<li>
							<a href='exos_hmm.pdf?v=4'>** Série d'exercices 5:  l'annotation avec HMM **</a>
							<br>
							<a href='exos_hmm_solutions.pdf?x=2'>** SOLUTIONS (pdf) **</a>
							
						</li>
						
					</ul>
					
					<div class='subtitle'>
						Pour en savoir plus sur les HMM en bioinformatique
					</div>
					<ul>	
						<li>
							<a href='http://www.cs.hunter.cuny.edu/~saad/courses/compbio/lectures/lecture9.pdf'>Résumé sur les HMM (par Saad Mneimneh, en anglais)</a>
						</li>
						
						<li>
							<a href='https://cgi.luddy.indiana.edu/~yye/i529/lectures/ProfileHMM.pdf'>HMM Profiles (en anglais)</a>
						</li>
					</ul>
					
				</div>
				
				
				
				
				
				<div class="section">
					<div class="section_title">
						5. Alignement multiple
					</div>
					
					
					<u>Notes de cours</u>
					<ul>
						<li>
							Alignement multiple: <a href='notes/alignmultiple.pdf?x=6'>Export de mes notes</a> (mis à jour le 4 novembre)
						</li>
						
					</ul>
					
					<u>Exercices</u>
					<ul>
						<li>
							<a href='exos_align_multiple.pdf?x=1'>** Série d'exercices 6 : l'alignement multiple (pdf) **</a> (mis à jour le 19 novembre)<br>
							<a href='exos_align_multiple_solutions.pdf'>** SOLUTIONS (pdf) **</a>
							
						</li>
					</ul -->
					
					
					<div class='subtitle'>
						Pour en savoir plus sur l'alignement multiple
					</div>
					<ul>
						<li>
							Chapitre 6 dans: <a href='https://www.comp.nus.edu.sg/~ksung/algo_in_bioinfo/'>https://www.comp.nus.edu.sg/~ksung/algo_in_bioinfo/</a> 
							<br>
						</li>
						
						
						
						<li>
							Articles d'autres aligneurs non-discutés: <a href='https://www.ncbi.nlm.nih.gov/pmc/articles/PMC546535/'>ProbCONS</a> | <a href='https://www.ncbi.nlm.nih.gov/pmc/articles/PMC135756/'>MAFFT</a> | <a href='http://www.tcoffee.org/Publications/Pdf/tcoffee.pdf'>T-COFFEE</a>
						</li>
					</ul>
					
					
				</div>
				
				
				
				
				
				
				
				
				<div class="section">
					<div class="section_title">
						6. Phylogénétique
					</div>
					
					
					<u>Notes de cours</u>
					<ul>
						<li>
							Phylogénétique: <a href='notes/phylo-19nov.pdf?x=8'>Export de mes notes</a> (mis à jour le 19 novembre) <br>
							Inférence statistique: <a href='notes/phylo-vraisemblance.pdf?x=7'>Export de mes notes</a> (mis à jour le 19 novembre) <br>
						</li>
						
					</ul>
					
					
					<u>Exercices</u>
					<ul>
						<li>
							<a href='exos_phylo.pdf?v=3'>** Série d'exercices 7:  la phylogénétique **</a> (mis à jour le 19 novembre) <br>
							<a href='exos_phylo_solutions.pdf'>** SOLUTIONS (pdf) **</a>
				
						</li>
					</ul>
					
					
					
					
					<div class='subtitle'>
						Pour en savoir plus sur la phylogénétique
					</div>
					<ul>	
						<li style='margin-top:8px;'>
							<a href='http://www.iro.umontreal.ca/~mabrouk/IFT3295/Inf-Phylogenie.pdf'>Slides de Nadia El-Mabrouk (UdeMontreal)</a> pour les méthodes par distance et par caractère
						</li>
						<li>
							Chapitre 7 dans: <a href='https://www.comp.nus.edu.sg/~ksung/algo_in_bioinfo/'>https://www.comp.nus.edu.sg/~ksung/algo_in_bioinfo/</a> 
						</li>
					</ul>
				</div>
				
				
				
				
				
				<div class="section">
					<div class="section_title">
						7. Prédiction de structure d'ARN
					</div>
					
					
					<u>Notes de cours</u>
					<ul>
						<li>
							<a href='notes/BIN702-structureARN.pdf'>Intro à la prédiction de structure d'ARN</a>  (<a href='notes/BIN702-structureARN.pptx'>version .pptx</a>)
						</li>
						<li>
							Algo de Nussinov: <a href='notes/arn.pdf?x=2'>Export de mes notes</a> (mise à jour le 30 novembre)<br>
						</li>
						
					</ul>
					
					
					<u>Exercices</u>
					<ul>
						<li>
							<a href='exos_arn.pdf?v=3'>** Série d'exercices 8:  structure d'ARN **</a><br>
							<a href='exos_arn_solutions.pdf'>** SOLUTIONS (pdf) **</a>
							
				
						</li>
					</ul>
					
					<div class='subtitle'>
						Pour en savoir plus sur la prédiction de structure d'ARN
					</div>
					<ul>	
						<li>
							Chapitre 11 dans: <a href='https://www.comp.nus.edu.sg/~ksung/algo_in_bioinfo/'>https://www.comp.nus.edu.sg/~ksung/algo_in_bioinfo/</a> 
						</li>
						<li>
							<a href='https://math.mit.edu/classes/18.417/Slides/rna-prediction-zuker.pdf'>Détails sur l'algorithme de Zuker et les multi-boucles</a>
						</li>

					</ul>
					
				</div>
				
				
				<div class="section">
					<div class="section_title">
						8. Distances de réarrangement
					</div>
					
					
					<u>Notes de cours</u>
					<ul>
						<li>
							<a href='notes/rearrange.pdf?x=2'>Export de mes notes</a>  (mis à jour le 9 décembre)
						</li>
						
						<u>Exercices</u>
					<ul>
						<li>
							<a href='exos_rearrange.pdf?v=3'>** Série d'exercices 9:  distances de réarrangement **</a><br>
							<a href='exos_rearrange_solutions.pdf'>** SOLUTIONS (pdf) **</a>
							
				
						</li>
					</ul>
						
						
					</ul>
					
					
					
					<div class='subtitle'>
						Pour en savoir plus sur les réarrangements
					</div>
					<ul>	
						<li>
							Chapitre 9 dans: <a href='https://www.comp.nus.edu.sg/~ksung/algo_in_bioinfo/'>https://www.comp.nus.edu.sg/~ksung/algo_in_bioinfo/</a> 
						</li>
					

					</ul>
					
				</div>
				
				
				
				
				
				
				
				
				
				<div class="section">
					<div class="section_title">
						Révision
					</div>
					
					
					<ul>
						<li>
							<a href='notes/sujetsintra.pdf'>Sujets pour l'examen intra</a> 
						</li>
						<li>
							<a href='notes/sujetsfinal.pdf'>Sujets pour l'examen final</a> 
						</li>
						
						
					</ul>
				</div>
				
				
				
				<div class="section">
					<div class="section_title">
						Divers
					</div>
					
					Ci-bas, vous trouverez l'énoncé de projet ainsi que quelques idées que j'avais fournies en 2021.  Ces documents sont à titre indicatif seulement, l'énoncé officiel de l'automne 2022 aura précédence sur eux.
					<ul>
						<li>
							<a href='projets_enonce_H21.pdf'>Énoncé de projet, session Hiver 2021</a> 
						</li>
						<li>
							<a href='projets_idees_H21.pdf'>Idées de projet, session Hiver 2021</a> 
						</li>
						
						
					</ul>
				</div>
			
				
				
				
				
				
			</div>
			
			
			
			
			
			
			
		</div>
	</body>
</html>
