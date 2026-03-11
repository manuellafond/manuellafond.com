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
		
		<meta name="keywords" lang="fr" content="MAT115, Logique et mathématiques discrètes, Université de Sherbrooke" /> 
		<meta name="description" lang="fr" content="MAT115 - Logique et mathématiques discrètes" />

		<link rel='shortcut icon' type='image/x-icon' href='dbicon.ico' />

		<title>MAT115 - Logique et mathématiques discrètes.  Université de Sherbrooke</title>
		
	
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				MAT115 - Logique et mathématiques discrètes
			</div>
			<div id="subheader">
				Hiver 2023 - Manuel Lafond
				<br>
				Courriel: manuel.lafond@USherbrooke.ca  &nbsp;&nbsp;&nbsp;&nbsp;    Local: D4-2010
				
				<!-- br>
				Disponibilités: prenez rendez-vous par courriel -->
				<br>
				<br>
				<b>Horaire: </b><br>
				Théorie: mardi de 10h30 à 12h20 au D3-2040<br>
				Exercices: mercredi de 10h30 à 11h20 au D3-2035<br>
				Labo: mercredi de 11h30 à 12h20 au D4-1023/D4-1017/D4-0023 <br>
			</div>
			<div id="content">
			
				<div class="section">
					<div class="section_title">
						
					</div>
					<ul>
						<li>
							<a href='MAT115-planH23.pdf'>Plan de cours</a> 
						</li>
						<li>
							<a href='intro.pdf'>Diapos d'introduction</a> 
						</li>
						
					</ul>
				</div>
				
				
				<div class="section">
					<div class="section_title">
						Devoirs
					</div>
					<ul>
						<li>
							<a href='MAT115-Devoir1.pdf'>Devoir 1</a><br>
							-- <a href='MAT115-Devoir1-solutions.pdf'>Mes solutions</a>
						</li>
						<li>
							<a href='MAT115-Devoir2-v2.pdf'>Devoir 2</a>  (V2, mis à jour le 31 janvier) <br>
							-- <a href='MAT115-Devoir2-solutions.pdf'>Mes solutions</a>
							
						</li>
						<li>
							<a href='MAT115-Devoir3.pdf'>Devoir 3</a> <br>
							-- <a href='dev3-plan.mch'>devoir3-plan.mch</a> (fichier exemple pour ProB)<br>
							-- <a href='MAT115-Devoir3-solutions.pdf'>Mes solutions (sur papier)</a> <br>
							-- <a href='dev3-plan-sol.mch'>Mes solutions (ProB)</a> <br>
						</li>
						<li>
							<a href='MAT115-Devoir4.pdf'>Devoir 4</a> <br>
							-- <a href='MAT115-Devoir4-solutions.pdf?x=1'>Mes solutions</a> (mis à jour le 11 avril)
						</li>
						<li>
							<a href='MAT115-Devoir5.pdf'>Devoir 5</a> <br>
							-- <a href='Devoir5-Solutions-dessins.pdf'>Mes solutions</a> (dessins pour Q1, Q2.a,b,c) <br>
							-- <a href='Devoir5-Solutions-preuves.pdf'>Mes solutions</a> (preuves pour Q2.d et Q3)
							
						</li>
					</ul>
					
					<a href='https://turnin.dinf.usherbrooke.ca/'>Lien turnin pour les remises</a>
				</div>
				
				
				
				<div class="section">
					<div class="section_title">
						Notes de cours
					</div>
					<ul>
						<li>
							<a href='MAT115-notes-cours.pdf'>Notes de cours</a> (écrites par Marc Frappier) <br>
							-- <a href='notes/logique-solution.pdf'>avec solutions</a>
						</li>
						<li>
							<a href='notes/tables-lois-logique.pdf'>Tableaux des lois de la logique</a><br>
						</li>
						<li>
							<a href='notes/regles-deduction-sequent.pdf'>Règles de déductions </a> (pour arbres de preuve) <br>
						</li>
						
						
						<li>
							<a href='notes/tables-syntaxe-prob.pdf'>Tables des syntaxes avec ProB</a> <br>
						</li>
					</ul>
				</div>
				
				
				<div class="section">
					<div class="section_title">
						Export des cours magistraux
					</div>
					<ul>
						<li>
							<a href='notes/logique-prop.pdf?x=1'>Logique propositionnelle et du premier ordre</a> (mis à jour le 18 janvier)<br>
						</li>
						<li>
							<a href='notes/sat-modeles.pdf'>Modèles, satisfaisabilité, et autres</a> (24 janvier)<br>
						</li>
						<li>
							<a href='notes/arbres-preuve.pdf?x=1'>Arbres de preuve</a> (31 janvier)<br>
						</li>
						<li>
							<a href='notes/ensembles.pdf?x=3'>Ensembles</a> (14 février)<br>
						</li>
						<li>
							<a href='notes/fcts.pdf?x=3'>Fonctions</a> (14 février)<br>
						</li>
						<li>
							<a href='notes/preuves-maths-discretes.pdf?x=6'>Techniques de preuve</a> (mis à jour le 21 mars)<br>
						</li>
						<li>
							<a href='notes/ineg.pdf?x=6'>Preuves avec inégalités</a><br>
						</li>
						<li>
							<a href='notes/automates.pdf?x=8'>Automates</a> (mis à jour le 11 avril)<br>
							<a href='notes/minimiser.pdf?x=7'>Automates partie II : minimisation</a> (mis à jour le 11 avril)<br>
							
						</li>
						<li>
							<a href='notes/contenu_final.pdf?x=7'>Contenu du final</a><br>
							
						</li>
					</ul>
				</div>
				
				
				
				<div class="section">
					<div class="section_title">
						Exercices
					</div>
					<ul>
						<li>
							<a href='exos/MAT115-exos-tarski.pdf'>Exercices avec Tarski-UdeS</a><br>
							-- <a href='exos/exos1.json?x=1'>Solutions</a> (format json, à importer dans Tarski-UdeS) <br>
							-- ERRATUM: il y a une erreur au numéro 6 des solutions, ce devrait être "not (SameCol(x, y) & SameRow(x, y))" <br>
							-- merci à la personne qui me l'a signalé!
						</li>
					</ul>
					
					<ul>
						<li>
							<a href='exos/MAT115-exos-premier-ordre.pdf?x=1'>Exercices en logique propositionnelle et premier ordre</a> (mis à jour le 17 janvier à 14h25)<br>
							-- <a href='exos/MAT115-exos-premier-ordre_solutions.pdf?x=2'>Mes solutions</a> (#2,3,4, mises à jour le 19 janvier)
						</li>
					</ul>
					
					
					<ul>
						<li>
							<a href='exos/MAT115-exos-preuves-modeles.pdf?x=2'>Exercices sur les modèles et arbres de preuve</a><br>
							-- <a href='exos/MAT115-exos-preuves-modeles-solutions.pdf?x=2'>Solutions</a>
						</li>
					</ul>
					
					
					<ul>
						<li>
							<a href='exos/MAT115-exos-ensembles-v2.pdf?x=2'>Exercices sur les ensembles et relations</a>  [v2, mis à jour le 14 février]<br>
							-- <a href='exos/exos-famille.mch'>exos-famille.mch</a> (fichier .mch pour ProB)<br>
							-- <a href='exos/MAT115-exos-ensembles-v2-solutions.pdf?x=2'>Solutions sur papier</a> [v2, mis à jour le 14 février]<br>
							-- <a href='exos/exos-famille-solution.mch'>Solutions ProB</a>
						</li>
					</ul>
					
					<ul>
						<li>
							<a href='exos/MAT115-exos-preuves.pdf?x=7'>Exercices sur les preuves en maths discrètes</a> (mis à jour le 21 mars, inégalités) <br>
							-- <a href='exos/MAT115-exos-preuves-solutions.pdf?x=8'>Solutions</a> (mises à jour le 21 mars)
						</li>
					</ul>
					
					
					<ul>
						<li>
							<a href='exos/MAT115-exos-automates.pdf?x=7'>Exercices sur automates</a><br>
							-- <a href='exos/MAT115-exos-automates-solutions.pdf'>Solutions partielles</a> <br>
							-- Je vous laisse les questions à défi, venez me voir si vous voulez les solutions.  <br>
							-- Pour la déterminisation et la minimisation, voir les notes de Marc)
							
						</li>
					</ul>
				</div>
				
				
				
				
				
				<div class="section">
					<div class="section_title">
						Examen intra
					</div>
					<ul>
						<li>
							<a href='MAT115-intraH23.pdf'>Énoncé de l'intra</a> <br>
							-- <a href='MAT115-intraH23-solutions.pdf'>Mes solutions</a> 
						</li>
						
						
						
					</ul>
					
					
					<div class="section_title">
						Examen final
					</div>
					<ul>
						<li>
							<a href='MAT115-final.pdf'>Énoncé du final</a> <br>
							-- <a href='finalsols.pdf'>Mes solutions</a> 
						</li>
						
						
						
					</ul>
				</div>
				
				
				
				
				<div class="section">
					<div class="section_title">
						Logiciels et autres
					</div>
					<ul>
						<li>
							<a href='https://info.usherbrooke.ca/mfrappier/mat115/logiciels/tarskiUdeS/'>Tarski-UdeS</a> 
						</li>
						<li>
							<a href='panda/panda.zip'>Panda</a><br>
							-- <a href='panda/Installation-de-Panda.txt'>Installation de panda</a> (fichier texte, téléchargez puis ouvrez pour voir les accents) <br>
							-- <a href='panda/notes-utilisation-panda.txt'>Notes d'utilisation</a> (fichier texte) <br>
						</li>
						
						<li>
							ProB et ses dépendences: <br>
							Installez d'abord Active Tcl: <a href='https://www.activestate.com/products/tcl/'>Installation</a> <br>
							Puis ProB: <a href='https://prob.hhu.de/w/index.php?title=Download'>Installation</a>   <br>
							 
							
						</li>
						
						<li>
							<a href='symboles.docs'>Symboles logique en Word</a>
						</li>
						<!--
						here!
						((p imply (q imply r)) imply ((p and q) imply r))
						-->
					</ul>
				</div>
				
			
			</div>
		</div>
	</body>
</html>