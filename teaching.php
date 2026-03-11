<?php

include("./header.php");

?>

<div class='box'>

  <h2><?= getTerm("teaching") ?></h2>

  <?= getTerm("mycourses") ?>
  
  <ul>
  <li>
  <a href='https://mlafond.recherche.usherbrooke.ca/IFT800/'>IFT800 - <?= ($lang == "en" ? "Advanced algorithms" : "Algorithmique") ?></a><br>
  <?= ($lang == "en" ? 
  "Approximation algorithms (combinatorial and LP-based approaches) and parameterized algorithms (branching, kernelization, treewidth algorithms)"
  :
  "Algorithmes d'approximation (combinatoire et LP) et algorithmes paramétrés (branchement, kernelisation, treewidth)"
  )?>
  </li>
  
  <li>
  <a href='https://mlafond.recherche.usherbrooke.ca/BIN702/'>BIN702 - <?= ($lang == "en" ? "Algorithms in bioinformatics" : "Algorithmes pour la bioinformatique") ?></a><br>
  <?= ($lang == "en" ? 
  "Sequence alignment, motif searching, phylogenetics, sequencing, RNA structure prediction, genomic rearrangements"
  :
  "Alignement, recherche de motifs, phylogénétique, séquençage, structure 2D d'ARN, réarrangements"
  )?>
  </li>
  
  <li>
  IFT503/IFT711 - <?= ($lang == "en" ? "Theory of computation" : "Théorie du calcul") ?><br>
  <?= ($lang == "en" ? 
  "Team teaching with Michael Blondin and Dave Touchette.  <br>
  Content that I have covered: P vs NP, hardness of approximation via PCP theorems, space complexity, exponential time hypothesis"
  :
  "Team teaching avec Michael Blondin et Date Touchette.  <br>
  Contenu que j'ai couvert: P vs NP, théorèmes PCP et approximation, complexité en espace, ETH et SETH"
  )?>
  </li>
  
  <li>
  IFT436 - <?= ($lang == "en" ? "Algorithms and data structures" : "Algorithmes et structures de données") ?><br>
  <?= ($lang == "en" ? 
  "Algorithms analysis, divide-and-conquer, dynamic programming, greedy algorithms, probabilistic algorithms.  Theory course, no programming."
  :
  "Analyse d'algorithmes, diviser-pour-régner, programmation dynamique, algorithmes gloutons, algorithmes probabilisites.  Cours théorique, pas de programmation."
  )?>
  </li>
  <li>
  <a href='https://mlafond.recherche.usherbrooke.ca/IFT339/'>IFT339 - <?= ($lang == "en" ? "Data structures" : "Structures de données") ?></a><br>
  <?= ($lang == "en" ? 
  "C++, list, queues, stacks, heaps, balanced search trees, hash tables"
  :
  "C++, listes, files, piles, tas, arbres de recherche balancés, tables de hachage"
  )?>
  </li>
  
  <li>
  IFT187 - <?= ($lang == "en" ? "Introduction to databases" : "éléments de bases de données") ?><br>
  <?= ($lang == "en" ? 
  "Database conception and SQL language"
  :
  "Conception de BD, langage SQL"
  )?>
  </li>
  
  
  </ul>

</div>

<?

include("./footer.php");

?>