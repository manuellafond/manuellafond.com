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
        Hiver 2026 - Manuel Lafond
        <br>
        Courriel: manuel.lafond@USherbrooke.ca  &nbsp;&nbsp;&nbsp;&nbsp;    Local: D4-2010
        <br>
        Auxiliaire d'enseignement: Théo Lacoste (pour contacter: nom.prenom@USherbrooke.ca)


        <br>
        <br>

      </div>
      <div id="content">
      
        <div class="section">
          <div class="section_title">
            
          </div>
          <ul>
            <li>
              <a href='MAT115-1-H2026.pdf'>Plan de cours</a> 
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
              <a href='MAT115-devoir1.pdf'>Devoir 1</a><br>
              -- <a href='devoir1-sols.pdf'>Mes solutions</a><br>
             
            </li>
            
            <li>
              <a href='MAT115-devoir2.pdf'>Devoir 2</a><br>
              -- <a href='devoir2-sols.pdf'>Mes solutions</a><br>
             
            </li>
            
            <li>
              <a href='MAT115-devoir3.pdf'>Devoir 3</a><br>
              -- <a href='dev3-plan.mch'>dev3-plan.mch</a>
              <br>
              Mes solutions<br>
              -- <a href='devoir3-sols.pdf'>Réponses sur papier</a><br>
              -- <a href='dev3-plan-sol.mch'>dev3-plan-sol.mch</a><br>
                
            </li>
            
          </ul>
              
              Lien turnin pour les remises: <a href='https://turnin.dinf.usherbrooke.ca/'>https://turnin.dinf.usherbrooke.ca/</a>
        </div>
        
        
        
        <div class="section">
          <div class="section_title">
            Notes de cours
          </div>
          <ul>
            <li>
              <a href='https://marcfrappierudes.github.io/mat115/logique.pdf'>Notes de cours</a> (écrites par Marc Frappier) 
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
            Export de mes notes
          </div>
          Partie logique<br>
          <ul>
            <li>
              <a href='notes/logique-prop-1.pdf?x=2'>Logique propositionnelle et du premier ordre</a><br>
            </li>
            <li>
              <a href='notes/satmodeles.pdf?x=2'>Satisfaisabilité, cohérence et autres</a><br>
            </li>
            
            <li>
              <a href='notes/arbres-preuve.pdf?x=2'>Arbres de preuve</a><br>
            </li>
            
            <li>
              <a href='notes/ensembles.pdf?x=3'>Ensembles et relations</a><br>
            </li>
            
            
            <li style='margin-top:16px'>
              <a href='notes/slides-ens-rel-fct.pdf'>Diapos sur les notations - Ensembles, relations, fonctions</a><br>
            </li>
            
            
            <li style='margin-top:16px'>
              <a href='notes/slides-ens-rel-fct.pdf'>Diapos sur les notations - Ensembles, relations, fonctions</a><br>
            </li>
          </ul>
          
          Partie maths discrètes<br>
          
          <ul>
          <li>
              <a href='notes/maths-discretes-preuves.pdf'>Preuves en maths discrètes</a><br>
          </li>
          </ul>
           
        </div>
        
        
        
        
        
        <div class="section">
          <div class="section_title">
            Exercices
          </div>
          <ul>
            <li>
              1. <a href='exos/MAT115-exos-tarski.pdf'>Exercices avec Tarski-UdeS</a><br>
              -- <a href='exos/exos1.json?x=1'>Mes solutions</a> (format json, à importer dans Tarski-UdeS) <br>
            </li>
          </ul>
          
          
          <ul>
            <li>
              2. <a href='exos/MAT115-exos-premier-ordre.pdf?x=1'>Exercices en logique propositionnelle et premier ordre</a><br>
              -- <a href='exos/MAT115-exos-premier-ordre_solutions.pdf'>Mes solutions</a><br>
            </li>
          </ul>
          
          <ul>
            <li>
              3. <a href='exos/MAT115-exos-sat.pdf?x=1'>Exercices sur la satisfaisabilité et premier ordre</a><br>
              -- <a href='exos/MAT115-exos-sat-solutions.pdf'>Mes solutions</a><br>              
            </li>
          </ul>
          
          
          <ul>
            <li>
              4. <a href='exos/exos-arbres-preuves.pdf?x=1'>Exercices sur les arbres de preuve</a><br>
              -- <a href='exos/exos-arbres-preuves-solutions.pdf'>Mes solutions</a>     (partielles)    <br>      
            </li>
          </ul>
          
          
          <ul>
            <li>
              5. <a href='exos/exos-ensembles.pdf?x=1'>Exercices sur les ensembles, relations et fonctions</a>  [mis à jour le 12 février, ajout du numéro 4]<br>
              -- <a href='exos/exos-famille.mch'>exos-famille.mch</a> (fichier .mch pour ProB)<br>
              -- <a href='exos/exos-ensembles-solutions.pdf?x=2'>Solutions sur papier</a><br>
              -- <a href='exos/exos-famille-solution.mch'>Solutions ProB</a>
            </li>
         </ul>
         
         
         
         <ul>  
            <li>
              6. <a href='exos/exos-maths-discretes.pdf?x=1'>Exercices sur les preuves en maths discrètes</a><br>
              
                <a href='exos/exos-maths-discretes-solutions.pdf'>Mes solutions</a> <br> 
            </li>
            
          </ul>
          
          
          
          
        </div>
        
        
        
        
        
        
        <div class="section">
          <div class="section_title">
            Logiciels et autres
          </div>
          <ul>
            <li>
              <a href='https://github.com/MarcFrappierUdeS/mat115/tree/main/logiciels'>Tarski-UdeS</a><br>
              -- <a href='video/demo-tarski.mp4'>Démo d'utilisation</a> (format mp4)
            </li>
            <li>
              <a href='panda/panda.zip'>Panda</a><br>
              -- <a href='panda/Installation-de-Panda.txt'>Installation de panda</a> (fichier texte, téléchargez puis ouvrez pour voir les accents) <br>
              -- <a href='panda/notes-utilisation-panda.txt'>Notes d'utilisation</a> (fichier texte) <br>
              -- Capsules vidéo d'utilisation: 
              <a href='video/panda1.mp4'>panda1</a> | 
              <a href='video/panda2.mp4'>panda2</a> | 
              <a href='video/panda3.mp4'>panda3</a> | 
              <a href='video/panda4.mp4'>panda4</a> | 
              <a href='video/panda5.mp4'>panda5</a><br>
            </li>
            
            <li>
              ProB et ses dépendences: <br>
              Il faut d'abord installer les librairies Active Tcl: <a href='prob/ActiveTcl-8.6.13.0000-MSWin32-x64-559160e0.msi.zip'>Téléchargez ici (pour Windows)</a>
              &nbsp;&nbsp;&nbsp; <a href='prob/ActiveTcl-8.6.9.8609.2-macosx10.9-x86_64-93b04018.pkg.zip'>(fichier .pkg pour MacOS)</a> <br>
              Puis installer ProB: <a href='prob/ProB.windows64.zip'> Téléchargez ici</a><br>
              <br>
              Pages officielles de ces logiciels: <a href='https://www.activestate.com/products/tcl/'>Active Tcl</a> | 
              <a href='https://prob.hhu.de/w/index.php?title=Download'>ProB</a>   <br>
               
              <br>
              -- Capsules vidéos d'utilisation: <a href='https://youtu.be/wWtmh_ftqy8'>Installation</a> | <a href='https://youtu.be/uNtUz9VYG6k'>Utilisation sur exercices</a>
              
            </li>
            
            <li>
              <a href='symboles.docs'>Symboles logique en Word</a>
            </li>
            
            
            <li>
                <a href='https://www.usherbrooke.ca/informatique/etudiants-actuels/centre-entraide-informatique'>Centre entraide informatique</a>
            </li>
            
          </ul>
        </div>
        
      
      </div>
    </div>
  </body>
</html>