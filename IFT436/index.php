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
      
    </style>
  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <meta name="keywords" lang="fr" content="IFT187, Bases de données, Université de Sherbrooke" /> 
    <meta name="description" lang="fr" content="IFT187 - Éléments de bases de données" />

    <link rel='shortcut icon' type='image/x-icon' href='dbicon.ico' />

    <title>IFT436 - Algorithmes et structures de données.  Université de Sherbrooke</title>
    
  
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        IFT436 - Algorithmes et structures de données
      </div>
      <div id="subheader">
        Été 2022 - Manuel Lafond
        <br>
        Courriel: manuel.lafond@USherbrooke.ca
        <br><br>
        Mon bureau: D4-2010
        <br>
        Disponibilités: mardi de 13h30 à 17h, ou sur rendez-vous
        <br>
        Correcteur : Alitzel Lopez, courriel: alitzel.lopez.sanchez@usherbrooke.ca
      </div>
      <div id="content">
      
      
      
        
        
      
      
        <div class="section">
          <ul>
            <li>
              <a href='IFT436-plan-de-cours-E22.pdf'>Plan de cours (pdf)</a>
            </li>
            
            <li>
              <a href='IFT436-intro.pdf?x=1'>Introduction (pdf)</a>
            </li>
            
            
          </ul>
        </div>
        
        
        
        
        
        
        
        
        <div class="section">
          <div class="section_title">
            <div class='section_title_text'>
              Notes de cours
            </div>
          </div>
          <ul>
            <li>
              <a href='notes-cours/IFT436_notes_cours_Manuel_Lafond_V1.8.1.pdf'>Notes de cours</a> 
              <ul>
                <li> Version 1.8.1 : mise à jour 30 juillet (modif de l'algo de Dijkstra) </li>
                <li> Version 1.8 : mise à jour 19 juillet (ajout du chapitre 7 + revue de la prog dynamique) </li>
                <li>Si vous détectez des erreurs, typos, etc, envoyez-moi un courriel.</li>
                <li>
                Ces notes couvrent les grandes lignes des sujets vus en classes.  Elles doivent être complémentées d'exercices, de présence en classe et de lectures de livre(s).
                </li>
                
                
              </ul>
            </li>
            
          </ul>
        
        </div>
        
        
        
        
        
        <div class='section'>
          <div class="section_title">
            <div class='section_title_text'>
              Devoirs
            </div>
          </div>
          <ul>
            <li>
              <a href='IFT436-Devoir1.pdf?x=1'>Devoir 1</a> [à remettre le 20 mai avant 23h59]<br>
              -- <a href='notes-cours-ali/Devoir1-Solutions.pdf'>** SOLUTIONS **</a> 
            </li>
            <li>
              <a href='IFT436-Devoir2.pdf?x=1'>Devoir 2</a> [à remettre le mardi 7 juin avant 23h59]<br>
              -- <a href='notes-cours-ali/Devoir2-Solutions.pdf'>** SOLUTIONS **</a> 
            </li>
            <li>
              <a href='IFT436-Devoir3.pdf?x=1'>Devoir 3</a> [remises le 17 juin et le 28 juin]<br>
              -- <a href='notes-cours-ali/Devoir3-Solutions1.pdf'>** SOLUTIONS **</a> (numéros 1 et 2)
              
            </li>
            <li>
              <a href='IFT436-Devoir4.pdf?x=1'>Devoir 4</a><br>  
              -- <a href='notes-cours/devoir4_solutions.pdf'>** SOLUTIONS **</a>
            </li>
            <li>
              <a href='IFT436-Devoir5.pdf?x=1'>Devoir 5</a><br>              
              -- <a href='notes-cours/devoir5_solutions.pdf?x=3'>** SOLUTIONS **</a>
            </li>
            
          </ul>
          
          <a href='https://turnin.dinf.usherbrooke.ca/'>Lien turnin pour les remises</a>
          
        </div>
        
        
        
        
        
        <div class='section'>
          <div class="section_title">
            <div class='section_title_text'>
              Exercices
            </div>
          </div>
          <ul>
            <li>
              <a href='notes-cours/exos_serie1_v2.pdf?x=2'>Exercices série 1</a> [Notions maths, mis à jour le 14 mai]<br>
              -- <a href='notes-cours/exos_serie1_solutions.pdf'>** SOLUTIONS </a>
            </li>
            <li>
              <a href='notes-cours/exos_serie2.pdf?x=2'>Exercices série 2</a> [Notation asymptotique]<br>
              -- <a href='notes-cours/exos_serie2_solutions.pdf'>** SOLUTIONS </a>
            </li>
            <li>
              <a href='notes-cours/exos_serie3.pdf?x=2'>Exercices série 3</a> [Tri]<br>
              -- <a href='notes-cours/exos_serie3_solutions.pdf?x=2'>** SOLUTIONS </a>
            </li>
            <li>
              <a href='notes-cours/exos_serie4.pdf?x=2'>Exercices série 4</a> [graphes]<br>
              -- <a href='notes-cours/exos_serie4_solutions.pdf?x=2'>** SOLUTIONS </a>
            </li>
            
            <li>
              <a href='notes-cours/exos_serie5.pdf?x=2'>Exercices série 5</a> [algos gloutons]<br>
              -- <a href='notes-cours/exos_serie5_solutions.pdf?x=2'>** SOLUTIONS </a>
            </li>
            
            <li>
              <a href='notes-cours/exos_serie6.pdf?x=2'>Exercices série 6</a> [diviser-pour-régner]<br>
              -- <a href='notes-cours/exos_serie6_solutions.pdf?x=5'>** SOLUTIONS </a>  [mises à jour le 15 juillet (ensemble indépendant)
            </li>
            
            <li>
              <a href='notes-cours/exos_serie7.pdf?x=2'>Exercices série 7</a> [prog dynamique]<br>
              -- <a href='notes-cours/exos_serie7_solutions.pdf?x=5'>** SOLUTIONS </a>  
              
            </li>
            
            
          </ul>
        </div>
        
        
        
        
        
        
        
        <div class='section'>
          <div class="section_title">
            <div class='section_title_text'>
              Export des notes de cours
            </div>
          </div>
          <ul>
            <li>
              <a href='notes-cours/notions-maths.pdf'>Notions mathématiques</a> (cours 6-10 mai)<br>
              <a href='notes-cours/preuves.pdf'>Techniques de preuve</a> (cours 10 mai)<br>
              <a href='notes-cours/preuves-recursion.pdf'>Preuves sur algos récursifs</a> (cours 17 mai)<br>
              <a href='notes-cours/analyse-asymptotique-v3.pdf'>Analyse asymptotique (v3)</a> (cours 17-24-27 mai, mises à jour le 27 mai)<br>
              <a href='notes-cours/tri.pdf?x=2'>Algos de tri</a> (cours 31 mai et 2 juin, mises à jour le 2 juin)<br>
              <a href='notes-cours/graphes3.pdf?x=2'>Graphes</a> (cours 7, 10, 14 juin, mises à jour le 14 juin)<br>
              <a href='notes-cours/graphes4.pdf?x=2'>Graphes II (tri topo + arbre couvrant minimum)</a> (cours 14-17 juin, mises à jour le 17 juin)<br><br>
              <a href='notes-cours/a-reviser.pdf?x=2'>À réviser pour l'examen</a>
              
              <br><br>
              
              <a href='notes-cours/gloutons.pdf?x=2'>Algorithmes gloutons</a> (incluant Prim) <br>
              <a href='notes-cours/dpr.pdf?x=2'>Diviser-pour-régner</a><br>
              <a href='notes-cours/algosexponentiels.pdf?x=2'>Algos exponentiels récursifs</a><br>
              -- <a href='notes-cours/exosexpo.pdf?x=2'>Exercices sur les algorithmes exponentiels récursifs</a><br>
              <a href='notes-cours/progdyn.pdf?x=3'>Programmation dynamique</a> [mises à jour le 19 juillet]  <br> 
              -- <a href='notes-cours/exosprogdyn.pdf?x=2'>Exercices sur la prog dynamique</a><br>
              <a href='notes-cours/dists.pdf?x=3'>Distances dans les graphes par prog dynamique</a>  [mises à jour le 26 juillet]   <br>  
              <a href='notes-cours/proba_final.pdf?x=3'>Algorithmes probabilistes</a>  [mises à jour le 29 juillet] <br>
              <br>
              <a href='notes-cours/themes-du-final.pdf'>Thèmes du final</a><br>
              <a href='notes-cours/revision-final-2019.pdf'>Ma révision du final 2019</a><br>
              
            </li>
            
          </ul>
          
          
        </div>
        
        
        
        <div class='section'>
          <div class="section_title">
            <div class='section_title_text'>
              Export des séances d'exercices (Alitzel)
            </div>
          </div>
          <ul>
            <li>
              <a href='notes-cours-ali/IFT436_Exos1.pdf'>Exercices série 1</a> (rappels mathématiques)
            </li>
            <li>
              <a href='notes-cours-ali/IFT436_Exos2.pdf'>Exercices série 2</a> (grand-O, Omega, Theta)
            </li>
            <li>
              <a href='notes-cours-ali/IFT436-Exos3_Tri.pdf'>Exercices série 3</a> (tri)
            </li>
            <li>
              <a href='notes-cours-ali/IFT436-Exos4_Graphes.pdf'>Exercices série 4</a> (graphes)
            </li>
            
            <li>
              <a href='notes-cours-ali/exos_6_divconquer.pdf'>Exercices série 6</a> (diviser-pour-régner)
            </li>
          </ul>
        </div>
        
        
        
        
        
        <div class='section'>
          <div class="section_title">
            <div class='section_title_text'>
              Anciens examens
            </div>
          </div>
          <ul>
            <li>
              <a href='notes-cours/intra-E19.pdf'>Intra Été 2019</a> <br>
              -- <a href='notes-cours/intra_solutions.pdf'>** Solutions</a> <br>
              -- <a href='notes-cours/intra-E19-annotations.pdf'>** Mes annotations</a> (dans la séance de révision)<br>
            </li>
            <li>
              <a href='notes-cours/final-E19.pdf'>Final Été 2019</a> 
            </li>
            <li>
              <a href='notes-cours/final-algos-prob.pdf'>Questions du final 2020 sur les algos probabilistes</a> 
            </li>
            
          </ul>
        </div>
        
        
        
        
        <div class='section'>
          <div class="section_title">
            <div class='section_title_text'>
              Cours en ligne
            </div>
          </div>
          <ul>
            <li>
              <a href='https://www.youtube.com/watch?v=gvceRStdm9g'>Cours du 31 mai</a> [algos de tri]
            </li>
            <li>
              <a href='https://www.canva.com/design/DAFCawdsBAY/OGNejERzL2uwXaaQ-US9uA/watch?utm_content=DAFCawdsBAY&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink'>Cours du 3 juin</a> [algos de tri] + Exercices Alitzel
              <br>
              -- <a href='notes-cours/tri.pdf?x=2'>Notes de Manuel</a><br>
              -- <a href='notes-cours-ali/IFT436-Exos3_Tri.pdf'>Notes d'Alitzel</a><br>
            </li>
          </ul>
        </div>
        
        
        
        
        <div class='section'>
          <div class="section_title">
            <div class='section_title_text'>
              Contenu supplémentaire
            </div>
          </div>
          
          
          
          Enregistrement des cours Été 2020 : <a href='https://www.youtube.com/playlist?list=PLd4_sssuiumtShvnUn9K12CRGCKXw3a2K'>Cliquez-ici</a>
          
          <br><br>
          
          
          <!-- 
          Induction sur algorithmes récursifs:
          <ul>
            <li>
              <a href='https://www.di.ens.fr/~busic/cours/LI325/coursCAAC1_1112.pdf'>Notes de cours de Sorbonne : analyse détaillée du triFusion</a><br>
              -- Voir pages 4 à 7.  C'est VRAIMENT détaillé!
            </li>
            <li>
              <a href='https://who.rocq.inria.fr/Simon.Cruanes/enseignement/diviser_pour_regner.pdf'>Notes de S. Cruanes : complexité du tri fusion</a><br>
              -- Voir section 2.2
            </li>
            <li>
              <a href='https://cseweb.ucsd.edu/classes/sp16/cse21-bd/howtorec.pdf'>Notes de cours UCSD : prouver qu'un algorithme récursif fonctionne</a> (en ANGLAIS)
            </li>
            <li>
              <a href='https://leptinerd.wordpress.com/2017/07/16/introduction-a-la-preuve-dalgorithme-22/'>Blog leptitnerd : prouver qu'un algorithme récursif fonctionne</a>
            </li>
            <li>
              <a href='http://www2.ift.ulaval.ca/~dadub100/cours/H09/22257/ntsRecurr.pdf'>Notes de F. Laviolette : résoudre des récurrences par induction</a><br>
              -- Voir Exemple R.1.5 La suite de Fibonacci à la page 7
            </li>
          </ul>
          -->
        </div>
        
        
        
        
        
        
        
      
      </div>
      
    </div>
  </body>
</html>
