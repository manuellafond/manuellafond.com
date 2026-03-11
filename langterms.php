<?php

$langterms = array();

addTerm("page_keywords", "Manuel Lafond, Lafond, Bioinformatique, Biologie computationnelle, Complexite, Algorithmes, DIRO, LBIT, Universite de Sherrooke, University of Ottawa, Universite de Montreal", 
          "Manuel Lafond, Lafond, Bioinformatics, Computational biology, Distributed computing, Parallel computing, Phylogeny, Gene tree species tree reconciliation, Approximation Algorithms, Fixed-Parameter Tractability, DIRO, LBIT, Graph Theory, University of Ottawa, David Sankoff, University of Montreal, Nadia El-Mabrouk");
          
addTerm("page_desc", "Page de Manuel Lafond, Professeur Agrégé, Universit&eacute; de Sherbrooke", 
           "Page of Manuel Lafond, Associate Professor, Universit&eacute; de Sherbrooke");


addTerm("index_title", "Professeur Agrégé, Universit&eacute; de Sherbrooke", "Associate Professor, Universit&eacute; de Sherbrooke");

addTerm("page_title", "Manuel Lafond - Universit&eacute; de Sherbrooke", "Manuel Lafond - Universit&eacute; de Sherbrooke");

addTerm("home", "Accueil", "Home");
addTerm("publications", "Publications", "Publications");
addTerm("courses", "Cours", "Courses");
addTerm("contact", "Contact", "Contact");

addTerm("lastupdate_string", "Dernière mise à jour : septembre 2023 (ce qui n'est pas trop loin dans le passé, j'espère)", "Last update : September 2023 (which is hopefully not too far in the past)");



addTerm("cvsummary", "CV Sommaire", "CV Summary");
addTerm("education", "Éducation", "Education");
addTerm("positions", "Postes", "Positions");
addTerm("phdstr", "PhD en informatique, Université de Montréal.  <i>Superviseur:  Nadia El-Mabrouk</i><br>
            <a href='https://papyrus.bib.umontreal.ca/xmlui/handle/1866/16026'>Thèse</a> jugée <i>Exceptionnelle</i>, sur la liste d'honneur du Doyen, 4.3/4.3 GPA", 
           "PhD in Computer Science, University of Montreal.  <i>Advisor: Nadia El-Mabrouk</i><br>
            <a href='https://papyrus.bib.umontreal.ca/xmlui/handle/1866/16026'>Thesis</a> ranked <i>Exceptional</i>, on the Dean's list of honor, 4.3/4.3 GPA");
addTerm("mscstr", "MSc en informatique, Université de Montréal.  (passage accéléré au doctorat)", "MSc in Computer Science, University of Montreal.  (fast-track to PhD)");
addTerm("bscstr", "BSc en informatique et génie logiciel (programme avec stages Co-op), UQAM.", "BSc in Computer Science and Software Engineering (internship program), UQAM.");
              

addTerm("committee", "Comités et évaluations", "Committee Participation and Reviewing");

addTerm("committeeact", "Activités sur des comités", "Committee Activities");

addTerm("pcmember", "Comité de programme: ", "PC Member of");
addTerm("reviewer", "Évaluation d'articles: ", "Reviewer for");
addTerm("orgcomm", "Comité d'organisation: ", "Organizing Committee of");


addTerm("awards", "Prix et financement", "Awards and Financing");

addTerm("teaching", "Enseignement", "Teaching");

addTerm("people", "Labo", "People");

addTerm("labmembers", "Membres du laboratoire", "Current lab members");
addTerm("alumni", "Alumni", "Alumni");

addTerm("collabocs", " (pour une collaboration de 5 mois avec Dre. Celine Scornavacca)", " (for a 5 months collaboration with Dr. Celine Scornavacca)");

addTerm("profstr", "Professeur adjoint à l'Université de Sherbrooke", "Assistant Professor, Université de Sherbrooke");
addTerm("profassocstr", "Professeur agrégé à l'Université de Sherbrooke", "Associate Professor, Université de Sherbrooke");
  
addTerm("postdocstr", "Postdoctorat à l'Université d'Ottawa (avec Dr. David Sankoff)", "Postdoctoral fellow at the University of Ottawa (with Dr. David Sankoff)");

addTerm("mycourses", "Cours que j'enseigne ou que j'ai enseignés", "Courses that I am teaching/have taught");

function addTerm($key, $fr, $en)
{
  global $langterms;
  $langterms[$key] = array("fr" => $fr, "en" => $en); 
}

function getTerm($key, $_lang = null)
{
  global $lang;
  global $langterms;
  
  if (!$_lang)
    $_lang = $lang;
    
  $repl = array("é" => "&eacute;", "è" => "&egrave;", "ê" => "&ecirc;", "à" => "&agrave;", "É" => "&Eacute;");
    
  return strtr($langterms[$key][$_lang], $repl);
}

?>