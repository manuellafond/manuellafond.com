<?php

header('Content-Type: text/html; charset=iso-8859-1');

$lang = "en";
if (isset($_GET['lang']))
  $lang = $_GET['lang'];

include("langterms.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Axiom
Description: A two-column, fixed-width design with a bright color scheme.
Version    : 1.0
Released   : 20120729
-->
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="<?= $lang ?>" lang="<?= $lang ?>">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    
    <meta name="keywords" lang="<?= $lang ?>" content="<?= getTerm("page_keywords") ?>" /> 
    <meta name="description" lang="fr" content="<?= getTerm("page_desc") ?>" />


    <title><?= getTerm("page_title") ?></title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="style.css?d=20180404-2" />
    
    

    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@4/tex-mml-chtml.js"></script>
  
        <script type="text/x-mathjax-config">
    window.MathJax = {
  tex: {
    inlineMath: [['$', '$'], ['\\(', '\\)']],
    displayMath: [['$$', '$$'], ['\\[', '\\]']]
  }
};
    });
    </script>
  
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <div id="logo">
          <h1><a href="index.php">Manuel Lafond</a></h1>
          <div class='note'><?= getTerm("index_title") ?></div>
        </div>
        
        <div id='langchoice' style='position:absolute;right:0px;'>
          <?php
          if ($lang == "en")
          {
          ?>
            <a href='index.php?lang=fr'>Fran&ccedil;ais</a> | 
            English
          <?php
          }
          else
          {
          ?>
            Fran&ccedil;ais | 
            <a href='index.php'>English</a>
            
          <?php
          }
          ?>
          
        </div>
        
        <div id="menu">
          <ul>
            <li class="first current_page_item"><a href="index.php<?= ($lang == "fr" ? "?lang=fr" : "") ?>"><?= getTerm("home") ?></a></li>
            <li><a href="publications.php<?= ($lang == "fr" ? "?lang=fr" : "") ?>"><?= getTerm("publications") ?></a></li>

            <li>
              <a href="people.php<?= ($lang == "fr" ? "?lang=fr" : "") ?>"><?= getTerm("people") ?></a>
            </li>
            
            <li>
              <a href="teaching.php<?= ($lang == "fr" ? "?lang=fr" : "") ?>"><?= getTerm("teaching") ?></a>
            </li>
            
            <li><a href="software.php<?= ($lang == "fr" ? "?lang=fr" : "") ?>">Software</a></li>

            <li><a href="slides.php<?= ($lang == "fr" ? "?lang=fr" : "") ?>"><?= "Slides" ?></a></li>
            
            
            <!-- li><a href="IFT187">IFT187</a></li>
            <li><a href="IFT339">IFT339</a></li>
            <li><a href="IFT436">IFT436</a></li>
            <li><a href="BIN702">BIN702</a></li>
            <li><a href="IFT800">IFT800</a></li -->
            <!-- li><a href="problems.php"><?= getTerm("problem_moment") ?></a></li -->
            <li><a href="contact.php<?= ($lang == "fr" ? "?lang=fr" : "") ?>"><?= getTerm("contact") ?></a></li>
          </ul>
          <br class="clearfix" />
        </div>
        <div id='langmenu'>
          <?php
          $curfile = $_SERVER['REQUEST_URI'];
          $pos = strrpos($curfile, "/");
          
          if ($pos !== false)
          {
            $curfile = substr($curfile, $pos + 1);
          }
          
          if ($curfile == "")
            $curfile = "index.php";
          
          
        
          ?>
          
        </div>
      </div>
      <div id="inner">
         
        <div id="page">
          <div id="content">

          
          <!-- div style='margin:10px 0px; padding:10px; background-color:#ededed; font-size:13px;text-align:center;border:2px solid red;'>
            <a href='projet_reconciliation_MSc_PhD.pdf'>*** Position de MSc ou PhD disponible / MSc or PhD position available ***</a>
          </div -->
          

          <?php
          
          if ($curfile == "index.php" || $curfile == "")
          {
          ?>
          <div style='margin:10px 0px; padding:10px; background-color:#ededed; font-size:13px;text-align:center;border:2px solid red;'>
            <a href='https://mlafond.recherche.usherbrooke.ca/MAT115/'>Cliquez-ici pour acc&eacute;der &agrave; la page du cours MAT115</a>
          </div>
          <?php
          }
          ?>
          
