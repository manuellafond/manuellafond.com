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
        Automne 2024 - Manuel Lafond
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
              <a href='IFT339-1-A2024.pdf'>Plan de cours</a>
            </li>

            
          </ul>
        </div>
        
        
        
        <div class="section">
          <div class="section_title">
            Devoirs
          </div>
          <ul>
            <li>
              Devoir 1: <a href='d1/IFT339-devoir1.pdf'>Énoncé du devoir</a><br>
              -- <a href='d1/matrice.h'>matrice.h</a> | <a href='d1/main.cpp'>main.cpp</a> | <a href='d1/sortie1.txt'>Ma sortie</a><br>
              -- Ma solution: <a href='d1/dev1_sol/matrice.h'>matrice.h</a> | <a href='d1/dev1_sol/main.cpp'>main.cpp</a><br>
            </li>
            
            <li style='margin-top:12px;'>
              Devoir 2: <a href='d2/IFT339-devoir2.pdf'>Énoncé du devoir</a><br>
              -- <a href='d2/deque.h'>deque.h</a> | <a href='d2/main.cpp'>main.cpp</a>  | <a href='d2/sortie.txt'>Ma sortie</a><br>
              -- Note: j'ai mis une capacité initiale de 1 dans ma classe.  Votre sortie peut différer si vous faites un autre choix.<br>
              -- Ma solution: <a href='d2/solution/deque.h'>deque.h</a> | <a href='d2/solution/main.cpp'>main.cpp</a><br>
            </li>
            
            
            <li style='margin-top:12px;'>
              Devoir 3: <a href='d3/devoir3.pdf'>Énoncé du devoir</a><br>
              -- <a href='d3/listchain.h?x=2'>listchain.h</a> | <a href='d3/main.cpp'>main.cpp</a>  | <a href='d3/sortie.txt'>Ma sortie</a><br>
              -- Ma solution: <a href='d3/sol/listchain.h'>listchain.h</a><br>
            </li>
            
            
            
            <li style='margin-top:12px;'>
             
              Devoir 4: <a href='d4/devoir4.pdf'>Énoncé du devoir</a><br>
              -- <a href='d4/noeud.h'>noeud.h</a> | <a href='d4/main.cpp'>main.cpp</a>  | <a href='d4/sortie_attendue.txt'>Ma sortie</a><br>
              -- Ma solution: <a href='d4/solution/noeud.h'>noeud.h</a> | <a href='d4/solution/main.cpp'>main.cpp</a> <br>
            </li>
            
            
            
            
            <li style='margin-top:12px;'>
             
              Devoir 5: <a href='d5/devoir5.pdf'>Énoncé du devoir</a><br>
              -- <a href='d5/hashdict.h'>hashdict.h</a> | <a href='d5/main.cpp?x=1'>main.cpp</a> (mis à jour 30 novembre)  | <a href='d5/sortie_attendue.txt'>Ma sortie</a><br>
              -- Ma solution: <a href='d5/solution/hashdict.h'>hashdict.h</a> | <a href='d5/solution/main.cpp'>main.cpp</a> <br>
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
              -- Mes solutions: <a href='exos/exos1_sols.pdf'>exos1_sols.pdf</a> (mis à jour le 8 octobre)<br>
              -- Ma solution à l'exercice 1: <a href='exos/main_pointxd.cpp'>main_pointxd.cpp</a><br>
              -- Ma solution à l'exercice 2: <a href='exos/main_tableau.cpp'>main_tableau.cpp</a> | <a href='exos/tableau.h'>tableau.h</a><br>
            </li>
            
          
            <li>
              Série 2: <a href='exos/exos2.pdf?x=2'>Exercices sur tableaux et la gestion de mémoire</a><br>
              -- Fichiers d'exercice: <a href='exos/exos2/main.cpp?x=1'>main.cpp</a> | <a href='exos/exos2/tableau.h?x=1'>tableau.h</a><br>
              -- Solutions partielles: <a href='exos/exos2_sols/main.cpp?x=1'>main.cpp</a> | <a href='exos/exos2_sols/tableau.h?x=1'>tableau.h</a><br>
            </li>
            
          
            <li>
              Série 3: <a href='exos/exos3.pdf?x=3'>Exercices sur la complexité O et les vecteurs</a><br>
              -- <a href='exos/exos3_sols.pdf?x=3'>Mes solutions</a>
            </li>
            
            <li>
              Série 4: <a href='exos/exos4.pdf?x=3'>Exercices sur les tableaux, listes, files, et autres</a><br>
              -- <a href='exos/exos4_sols.pdf?x=3'>Mes solutions</a>
            </li>
            
            <li>
              Série 5: <a href='exos/exos5.pdf?x=3'>Exercices sur les listes chaînées et ses types abstraits</a><br>
              -- <a href='exos/exos5_sols.pdf?x=3'>Mes solutions</a> (mis à jour le 8 octobre)
            </li>
            </ul>
            
            <div style='font-size:18px;'>
              <b>Post-intra</b>
            </div>
            
          <ul>
            
            <li>
              Série 6: <a href='exos/exos_arbres.pdf?x=3'>Exercices sur les arbres</a><br>
              -- <a href='exos/exos_arbres_sols.pdf?x=3'>Mes solutions</a>
            </li>
            
            
            <li>
              Série 7: <a href='exos/exos_arbres2.pdf?x=3'>Exercices sur les arbres AVL, B-tree, monceaux</a><br>
              -- <a href='exos/exos_arbres2_sols-1.pdf?x=4'>Mes solutions</a> [mises à jour le 3 décembre, ex 4]
            </li>
            
            <li>
              Série 8: <a href='exos/exos_hachage.pdf?x=3'>Exercices sur le hachage et les graphes</a><br>
              -- <a href='exos/exos_hachage_sols.pdf?x=3'>Mes solutions</a>

            </li>
            
            
            <li>
              Solutionnaire de Francis: <a href='notes/Solutionnaire.pptx'>Solutionnaire.pptx</a><br>
            </li>
            
            
            
          </ul>
          
          
        </div>
        
        
        
        
        
        <div class="section">
          <div class="section_title">
            Introduction au cours
          </div>
          <ul>
            <li>
              Concepts introductifs: <a href='notes/notes_intro.pdf'>Export de mes notes</a>
            </li>
            <li>
              Code C++ vector vs set, et tableaux: <a href='notes/main_cours1.cpp'>main_cours1.cpp</a>
            </li>

            
          </ul>
        </div>
        
        
        
        <div class="section">
          <div class="section_title">
            Capsules vidéo - templates et pointeurs
          </div>
          Si youtube vous donne une mauvaise qualité, changez-la pour 720p.<br>
          <ul>
            <li>
              Capsule 1: <a href='https://youtu.be/IBfvJKY-UQg'>Templates de classe</a> (youtube)<br>
              -- <a href='notes/notes_classes_templates.pdf'>Mes notes de cours</a><br>
              -- Notez que je n'ai pas de fichier C++ pour la classe Point.
            </li>
            <li>
              Capsule 2: <a href='https://youtu.be/FdB3TdvW7-8'>Mémoire dynamique et pointeurs</a> (youtube)<br>
              -- Note: un peu long, je recommande fortement de regarder en deux sessions.<br>
              -- <a href='notes/notes_pointeurs.pdf'>Mes notes de cours</a><br>
            </li>
            <li>
              Capsule 3: <a href='https://youtu.be/tla0pqn-JJ8'>Classe pour tableau dynamique</a> (youtube)<br>
              -- <a href='notes/tableau.h'>tableau.h</a><br>
              -- NOTEZ BIEN: la classe n'est pas terminée - il reste à implémenter le constructeur par copie et l'affectateur =.
              Je laisse le fichier tel qu'implémenté dans la capsule.  Si vous voulez une solution complète du tableau, allez voir tableau.h
              dans les solutions aux exercices.  
              <br>
              
            </li>

            
          </ul>
        </div>
        
        
        
        
        
        <div class="section">
          <div class="section_title">
            Vecteurs
          </div>
          
          <ul>
            <li>
              <a href='notes/vecteurs.pdf'>Mes notes de cours sur vector</a> <br>
              -- <a href='notes/vector.h'>vector.h</a> | <a href='notes/main_vector.cpp'>main_vector.cpp</a><br>
            </li>
            
          </ul>
        
        </div>
        
        
        
        <div class="section">
          <div class="section_title">
            Intro à la complexité algorithmique
          </div>
          
          <ul>
            <li>
              <a href='notes/grand-O.pdf'>Mes notes de cours sur la notation grand-O</a> <br>
            </li>
            
          </ul>
        </div>
        
        
        
        <div class="section">
          <div class="section_title">
            Itérateurs
          </div>
          
          <ul>
            <li>
              <a href='notes/iterateurs.pdf'>Mes notes de cours sur les itérateurs</a> <br>
              -- Mon code d'itérateur de vector: <a href='notes/vector_it/main.cpp'>main.cpp</a> |  
                 <a href='notes/vector_it/vector.h'>vector.h</a> (avec iterator)<br>
            </li>
            
          </ul>
        </div>
        
        
        
        <div class="section">
          <div class="section_title">
            Listes, files et piles avec listes chaînées
          </div>
          
          <ul>
            <li>
              <a href='notes/listes_chainees.pdf?x=1'>Mes notes de cours sur TDA avec listes chaînées</a> <br>
            </li>
            <li>
              <a href='notes/revuesdd.pdf'>Revue des structures de données et leur complexité</a> <br>
            </li>
            
          </ul>
        </div>
        
        
        <div class="section">
          <div class="section_title">
            Arbres
          </div>
          
          <ul>
            <li>
              <a href='notes/trees.pdf?x=2'>Les arbres</a>  (mis à jour le 8 octobre)<br>
            </li>
            
          </ul>
        </div>
        
        
       
       
       <div class="section">
          <div class="section_title">
            Implémentations d'ensembles, dictionnaires et files de priorité avec arbres
          </div>
          
          <ul>
            <li>
              <a href='notes/ensabr.pdf?x=2'>Arbres binaires de recherche</a><br>
              <a href='notes/arbresavl.pdf?x=2'>Arbres AVL</a><br>
              <a href='notes/btree.pdf?x=2'>B-tree</a><br>
              <a href='notes/monceau.pdf?x=2'>Files de priorité et monceaux</a><br>
            </li>
            
          </ul>
        </div>
        
        
        <div class="section">
          <div class="section_title">
            Tables de hachage
          </div>
          
          <ul>
            <li>
              <a href='notes/hash.pdf?x=2'>Tables de hachage</a><br>
            </li>
            
          </ul>
        </div>
       
        <div class="section">
          <div class="section_title">
            Graphes
          </div>
          
          <ul>
            <li>
              <a href='notes/graphes.pdf?x=3'>Définitions et représentations des graphes</a><br>
            </li>
            
          </ul>
        </div>
        
        
        
        <div class="section">
          <div class="section_title">
            Sujets du final
          </div>
          
          <ul>
            <li>
              <a href='notes/sujets-final.pdf?x=3'>Sujets du final</a><br>
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