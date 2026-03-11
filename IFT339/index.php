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
    
    <meta name="keywords" lang="fr" content="IFT339, Structures de données, Université de Sherbrooke" />
    <meta name="description" lang="fr" content="IFT339 - Structures de données" />

    <link rel='shortcut icon' type='image/x-icon' href='dbicon.ico' />

    <title>IFT339 - Structures de données.  Université de Sherbrooke</title>
    
  
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        IFT339 - Structures de données
      </div>
      <div id="subheader">
        Automne 2025 - Manuel Lafond
        <br>
        Courriel: manuel.lafond@USherbrooke.ca  &nbsp;&nbsp;&nbsp;&nbsp;    Local: D4-2010
        <br><br>
       <!--  Auxiliaire: Francis Sarrazin<br>
       Correcteur: À déterminer <br> -->
        
        <br>

      </div>
      <div id="content">
      
        <div class="section">
          <div class="section_title">
            
          </div>
          <ul>
            <li>
              <a href='IFT339-1-A2025.pdf'>Plan de cours</a>
            </li>

            
          </ul>
        </div>
        
        
        <div class="section">
          <div class="section_title">
            Devoirs
          </div>
          <ul>
            <li>
              Devoir 1: <a href='devoir1/IFT339-devoir1.pdf'>Énoncé du devoir</a><br>
              -- <a href='devoir1/matrice.h'>matrice.h</a> | <a href='devoir1/main.cpp'>main.cpp</a> | <a href='devoir1/masortie.txt'>Ma sortie</a><br>
              -- Ma solution: <a href='devoir1/sol/matrice.h'>matrice.h</a> | <a href='devoir1/sol/main.cpp'>main.cpp</a><br>
            </li>
            
            
            <li>
              Devoir 2: <a href='devoir2/IFT339-devoir2.pdf'>Énoncé du devoir</a><br>
              -- <a href='devoir2/deque.h'>deque.h</a> | <a href='devoir2/main.cpp'>main.cpp</a> | <a href='devoir2/masortie_dev2.txt'>Ma sortie</a><br>
              -- Ma solution: <a href='devoir2/sol/deque.h'>deque.h</a> | <a href='devoir2/sol/main.cpp'>main.cpp</a><br>
            </li>
            
            
            
            <li>
              Devoir 3: <a href='devoir3/IFT339-devoir3.pdf?x=1'>Énoncé du devoir</a> [mis à jour le 7 octobre (modif sur la figure)]<br>
              -- <a href='devoir3/listchain.h?x=1'>listchain.h</a> | <a href='devoir3/main.cpp?x=1'>main.cpp</a> | <a href='devoir3/masortie_dev3.txt'>Ma sortie</a><br>
              -- Ma solution: <a href='devoir3/solution/listchain.h'>listchain.h</a>
            </li>
            
            
            
            
            <li style='margin-top:10px;'>
              Devoir 4: <a href='devoir4/IFT339-devoir4.pdf?x=3'>Énoncé du devoir</a><br>
              -- <a href='devoir4/arbrelexico.h?x=1'>arbrelexico.h</a> | <a href='devoir4/main.cpp?x=1'>main.cpp</a> | <a href='devoir4/masortie.txt'>Ma sortie</a><br>
              -- Ma solution: <a href='devoir4/solution/arbre_lexico.h'>arbre_lexico.h</a>
            </li>
            
            
            <li style='margin-top:10px;'>
              Devoir 5: <a href='devoir5/IFT339-devoir5.pdf?x=3'>Énoncé du devoir</a><br>
              -- <a href='devoir5/hashdict.h'>hashdict.h</a> | <a href='devoir5/main.cpp?x=2'>main.cpp</a> | <a href='devoir5/masortie.txt'>Ma sortie</a><br>
              -- Ma solution: <a href='devoir5/solution/hashdict.h'>hashdict.h</a> | <a href='devoir5/solution/main.cpp'>main.cpp</a>
            </li>
            
            
            
            <li style='margin-top:12px;'>
              Note: les devoirs peuvent se faire en équipe de 1 ou 2.<br>
              Lien turnin pour les remises: <a href='https://turnin.dinf.usherbrooke.ca/'>https://turnin.dinf.usherbrooke.ca/</a>
            </li>
            
          </ul>
        </div>
        
        
        
        
        
        <div class="section">
          <div class="section_title">
            Exercices
          </div>
          
          <ul>
            <li>
              Série 1: <a href='exos/exos1.pdf'>Exercices sur les classes</a> <br>
              -- Mes solutions: <a href='exos/exos1_sols.pdf'>exos1_sols.pdf</a> <br>
              -- Ma solution à l'exercice 1: <a href='exos/main_pointxd.cpp'>main_pointxd.cpp</a><br>
              -- Ma solution à l'exercice 2: 
              <a href='exos/main_tableau.cpp'>main_tableau.cpp</a> 
            </li>
            
          
        
          
            <li>
              Série 2: <a href='exos/exos_vec_grandO.pdf'>Exercices sur la complexité O et les vecteurs</a><br>
              -- <a href='exos/exos_vec_grandO_sols.pdf?x=3'>Mes solutions</a>
            </li>
            
            <li>
              Série 3: <a href='exos/exos_dicho_tri_listes.pdf'>Exercices sur la fouille dichotomique, le tri, les tableaux, et autres</a><br>
              -- <a href='exos/exos_dicho_tri_listes_sols.pdf?x=3'>Mes solutions</a>
            </li>
            
            <li>
              Série 4: <a href='exos/exos_chainee.pdf'>Exercices sur les listes chaînées et ses types abstraits</a><br>
              -- <a href='exos/exos_chainee_sols.pdf?x=3'>Mes solutions</a> 
            </li>
            
            </ul>
            
            <div style='font-size:18px;'>
              <b>Post-intra</b>
            </div>
            
          <ul>
            
            <li>
              Série 5: <a href='exos/exos_arbres.pdf?x=3'>Exercices sur les arbres et ses SDD</a><br>
              -- <a href='exos/exos_arbres_solutions.pdf?x=3'>Mes solutions</a>
            </li>
            
            
            <li>
              Série 6: <a href='exos/exos_monceaux.pdf?x=3'>Exercices sur les monceaux</a><br>
              -- <a href='exos/exos_monceaux_solutions.pdf?x=3'>Mes solutions</a>
            </li>
            
            <li>
              Série 7: <a href='exos/exos_hash_graphes.pdf?x=3'>Exercices sur le hachage et les graphes</a><br>
              -- <a href='exos/exos_hash_graphes_solutions.pdf?x=3'>Mes solutions</a>

            </li>
            
            
            
          </ul>
          
          
        </div>
        
        
        
        
       
        
        
        <div class="section">
          <div class="section_title">
            Introduction au cours
          </div>
          <ul>
            <li>
              <a href='IFT339-intro.pdf'>Diapos d'introduction</a>
            </li>
            <li>
                <a href='https://youtu.be/ojlHlJoBTGc'>Vidéo d'introduction</a>
            </li>
            <li>
              Code C++ vector vs set, et tableaux: <a href='src/main_cours1.cpp'>main_cours1.cpp</a>
            </li>

            
          </ul>
        </div>
        
        
        
        <div class="section">
          <div class="section_title">
            Classes en C++
          </div>
          <ul>
            <li>
              <a href='IFT339-classes.pdf'>Diapos sur les classes</a>
            </li>
            <li>
                <a href='https://youtu.be/SuMON3NmoHQ'>Vidéo du cours</a>
            </li>
            <li>
              Ma classe Point (après nettoyage): <a href='src/main_point.cpp'>main_point.cpp</a>
            </li>

            
          </ul>
        </div>
        
        
        
        
        
        <div class="section">
          <div class="section_title">
            Toutes mes notes
          </div>
          <ul>
            
            <li>
                <a href='notes/notes-pointeurs.pdf'>Mes notes sur les pointeurs</a>
            </li>
            <li>
              <a href='notes/aide-memoire-pointeurs.pdf'>Aide-mémoire sur les pointeurs</a>
            </li>
            
            <li>
                <a href='notes/notes_vector.pdf'>Mes notes sur les vecteurs</a>
            </li>
            <li>
                <a href='notes/notes_grandO.pdf'>Analyse grand-O</a>
            </li>
            <li>
                <a href='notes/notes_it.pdf'>Les itérateurs</a> <br>
                -- <a href='notes/vector.h'>vector.h</a> | <a href='notes/main.cpp'>main.cpp</a> <br>
                -- Voir section commentée dans le bas de vector.h pour un itérateur avec un TYPE*
            </li>
            <li>
                <a href='notes/listes_chainees.pdf'>Listes avec listes chaînées</a>
            </li>
            <li>
                <a href='notes/trees.pdf'>Les arbres</a>
            </li>
            <li>
                <a href='notes/ensabr.pdf'>Ensembles et arbres binaires de recherche</a><br>
                <a href='notes/arbresavl.pdf'>Arbres AVL</a> <br>
                <a href='notes/btree.pdf'>Arbres-B</a> (B-Tree)
            </li>
            <li>
                <a href='notes/monceau.pdf'>Files de priorité et monceaux</a><br>
            </li>
            <li>
              <a href='notes/hash.pdf?x=2'>Tables de hachage</a><br>
            </li>
            <li>
              <a href='notes/notes-graphes.pdf'>Notes formelles sur les graphes</a><br>
              <a href='notes/graphes.pdf?x=3'>Notes manuscrites sur les graphes</a> (remarque, un graphe complet sur 7 sommets a 21 arêtes, pas 26)<br>
            </li>
            
          </ul>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        <div class="section">
          <div class="section_title">
            Informations
          </div>
          <ul>
            <li>
              Pour vous procurer les notes de cours: aller au service d'imprimerie de la Faculté de Gestion, au K1-1004 (coût=$13,97).
              <br>
              Voir: <a href='https://www.usherbrooke.ca/ecole-gestion/contact#acc-4778-880'>https://www.usherbrooke.ca/ecole-gestion/contact#acc-4778-880</a>
            </li>

            
          </ul>
        </div>
        
        
        
      
      </div>
    </div>
  </body>
</html>