<?php


include("./header.php");

?>

<div class="box">


<div class='row'>
        <div class='info_column'>
             
    <?php
    //previously manuel_lafond.png
    ?>
       <img class="image alignleft" src="Lafond_Manuel_pro_look.png" alt="Manuel Lafond" />
             
<div>
<a href='https://scholar.google.com/citations?hl=en&user=O2xit3MAAAAJ&sortby=pubdate' target='_blank'><?= 
        ($lang == "en" ? "Google Scholar page" : "Page Google Scholar")
      ?></a>
<br />
manuel.lafond at USherbrooke.ca <br>
+1 819-821-8000 ext. 62034
  
  <div style='margin-right:16px;margin-top:20px;'>
  <?php if ($lang == "en"){ ?>
      That picture is getting old.  If you must know how I am aging, 
      see <a href='manu-bearded-balding.png'>this picture</a>, or <a href='manu-bearded-bald.png'>this picture</a>.
  <?php } else { ?>
      L'image &agrave; commence &agrave; dater.  Si vous avez vraiment besoin de voir comment je vieillis, voir 
      <a href='manu-bearded-bald.png'>cette image</a>, ou <a href='manu-bearded-balding.png'>cette image</a>.
  <?php } ?>
    </div>
</div>

        </div>

    <div class='details_column'>
      <?php if ($lang == "en"){ ?>
      
      I am an Associate Professor in the Department of Computer Science at Universit&eacute; de Sherbrooke.  
      <br><br>
      I work on the design of <b></b>algorithms in bioinformatics</b> with a focus on <b>phylogenetics and graph theory</b>.  
My research includes theoretical and practical approches for the reconstruction and comparison of evolutionary scenarios.  
While I have worked on Darwinian trees for some time, I have recently gained interest in <b>phylogenetic networks</b>, which allow non-tree-like scenarios such as lateral gene transfer and hybridization - while also allowing me to apply graph theory to computational biology.  I mainly develop algorithms for NP-hard problems, for example to compute edit distances between networks, using techniques from <b>parameterized complexity and approximation algorithms</b>.  
      <br><br>
      I am also an avid follower (and occasional contributor) of the <b>theory of algorithms</b>, and I enjoy applying the latest developments in parameterized and approximation algorithms to practical problems in computational biology.  Conversely, there are several biologically motivated problems that led to the development of novel techniques in algorithms, and there is more to be discovered with continued interactions between the fields.
      <br>
      <br>
      Prior to my current position, I was an NSERC postdoctoral fellow at the University of Ottawa with <a href='http://albuquerque.bioinformatics.uottawa.ca/' target='_blank'>David Sankoff</a> (2016-2018) and I obtained my PhD at the University of Montreal with <a href='http://www.iro.umontreal.ca/~mabrouk/' target='_blank'>Nadia El-Mabrouk</a> (2012-2016).
      
      <br><br>
      Some representative publications:
      <ul>
        
        <li>
        Lafond, Manuel. "<a href='https://epubs.siam.org/doi/abs/10.1137/1.9781611977073.58'>Recognizing k-leaf powers in polynomial time, for constant k</a>.", SODA 2022.
        </li>
        <li>
        Lafond, Manuel, Binhai Zhu, and Peng Zou. "<a href='https://epubs.siam.org/doi/10.1137/20M1356257'>Computing the Tandem Duplication Distance is NP-Hard</a>.", SIAM Journal on Discrete Mathematics (2022).
        </li>
        <li>
        Sanchez, Alitzel Lopez, and Manuel Lafond. "<a href='https://europepmc.org/article/med/34775924'>Colorful orthology clustering in bounded-degree similarity graphs</a>." Journal of Bioinformatics and Computational Biology (2021)
        </li>
        <li>
        Lafond, Manuel, Mona Meghdari Miardan, and David Sankoff. "<a href='https://academic.oup.com/bioinformatics/article/34/13/i366/5045804?login=true'>Accurate prediction of orthologs in the presence of divergence after duplication</a>.", Bioinformatics (2018).
        </li>
      </ul>


      <br><br>
      On a completely unrelated and unsollicited note, study shows that coding with generative AI has no significant impact on productivity, but has a +41% bug rate: 
      <a href='https://devops.com/study-finds-no-devops-productivity-gains-from-generative-ai/'>https://devops.com/study-finds-no-devops-productivity-gains-from-generative-ai/</a>
      
      <?php } else { ?>
      
      Je travaille sur la conception d’<b>algorithmes en bio-informatique</b>, avec un intérêt particulier pour la <b>phylogénétique et la théorie des graphes</b>.
Mes recherches incluent des approches théoriques et pratiques pour la reconstruction et la comparaison de scénarios évolutifs.
<br>
Après avoir travaillé pendant un certain temps sur les arbres darwiniens, je me suis récemment intéressé aux <b>réseaux phylogénétiques</b>, qui permettent de représenter des scénarios non arborescents tels que le transfert horizontal de gènes et l’hybridation — tout en me donnant l’occasion d’appliquer la théorie des graphes à la biologie computationnelle. Je développe principalement des algorithmes pour des problèmes NP-difficiles, par exemple pour calculer des distances d’édition entre réseaux, en utilisant des techniques issues de la <b>complexité paramétrée et des algorithmes d’approximation</b>
      
      <br>
      <br>
      
      Je suis &eacute;galement un adepte passionn&eacute; (et contributeur occasionnel) de la th&eacute;orie des algorithmes, et j'aime appliquer les derniers d&eacute;veloppements en mati&egrave;re d'<b>algorithmes d'approximation</b> et de <b>complexit&eacute; param&eacute;tr&eacute;e</b> (<i>fixed-parameter tractability</i>, ou FPT) &agrave; des probl&egrave;mes en biologie computationelle.
      
      <br>
      <br>
      
      
      
      
      Avant d'occuper ce poste, j'&eacute;tais stagiaire postdoctoral &agrave; l'Universit&eacute d'Ottawa avec <a href='http://albuquerque.bioinformatics.uottawa.ca/' target='_blank'>David Sankoff</a>, et j'ai obtenu mon PhD &agrave; l'Universit&eacute de Montr&eacute; en 2016 avec <a href='http://www.iro.umontreal.ca/~mabrouk/' target='_blank'>Nadia El-Mabrouk</a>.
      <?php } ?>


<?php
// include("./news.php");
?>

    </div>

  

<br class="clearfix" />



<style type='text/css'>

.mycv
{
    font-size:14px;
}

.mycv table td
{
  padding-bottom:8px;
}


.main_bigtitle
{
  margin-top:50px;
  font-size:20px;
  font-weight:bold;
  border-bottom:1px solid #444444;
}

.main_subtitle
{
  margin-top:20px;
  margin-bottom:8px;
  font-size:16px;
  font-weight:bold;
  text-decoration:underline;
}


.mycv ul, .mycv li
{
  
}


</style>


<div class='mycv'>

<div class='main_bigtitle'>
  <div><?= getTerm("cvsummary") ?></div>
</div>


<div>
  <?= getTerm("lastupdate_string") ?>
</div>



<div>
  <div class='main_subtitle'><?= getTerm("positions") ?></div>
  
  <table >
    <tr>
      <td width="100">2023-...</td>
      <td><?= getTerm("profassocstr") ?></td>
    </tr>
    <tr>
      <td width="100">2018-2023</td>
      <td><?= getTerm("profstr") ?></td>
    </tr>
    <tr>
      <td width="100">2016-2018</td>
      <td><?= getTerm("postdocstr") ?></td>
    </tr>

  
  </table>
</div>



<div>
  <div class='main_subtitle'><?= getTerm("education") ?></div>
  
  <table>
    <tr>
      <td width="100">2012-2016</td>
      <td><?= getTerm("phdstr") ?></td>
    </tr>
    <tr style='background-color:#fdfdfd'>
      <td>2011-2012</td>
      <td><?= getTerm("mscstr") ?></td>
    </tr>
    <tr>
      <td>2005-2010</td>
      <td><?= getTerm("bscstr") ?></td>
    </tr>
      
  
  </table>
</div>


<div>
  <div class='main_subtitle'><?= getTerm("committee") ?></div>
  
  <table>
    
    
    <tr><td>
      - <?= getTerm("pcmember") ?> WABI 2023, 2022, 2021, 2020, 2019
    </td></tr>
    <tr><td>
      - <?= getTerm("pcmember") ?> ISMB 2023, 2022, 2021, 2020, 2019, 2018
    </td></tr>
    <tr><td>
      - <?= getTerm("pcmember") ?> RECOMB-CG 2023, 2022, 2021, 2020, 2019, 2018
    </td></tr>
    <tr><td>
      - <?= getTerm("pcmember") ?> IWOCA 2023
    </td></tr>
    <tr><td>
      - <?= getTerm("pcmember") ?> APBC 2023, 2022, 2021, 2020, 2019
    </tr></td>
    
    <tr><td>
      - <?= getTerm("pcmember") ?> ISBRA 2023, 2022
    </td></tr>
    
    <tr><td>
      - <?= getTerm("pcmember") ?> SOFSEM 2020, 2019 (computational biology session, upcoming)
    </td></tr>
    <tr><td>
    
    <tr><td>
      - <?= getTerm("pcmember") ?> ICCABS 2021, 2020, 2019, 2018, 2017
    </td></tr>
    
    <tr><td>
      - <?= getTerm("orgcomm") ?> RECOMB-CG 2018
    </td></tr>
    
    <tr><td>
      - <?= getTerm("orgcomm") ?> RECOMB-CG 2016
    </td></tr>

   

    
    
  </table>
  
</div>





<div>
  <div class='main_subtitle'><?= getTerm("awards") ?></div>
  
  <table>
  
    
    
    
    <tr>
      <td width="100" valign="top">2022-2025</td>  
      <td>NOVA - FRQNT-NSERC PROGRAM for junior researchers<br>
      Novel Metrics for the Comparison of Phylogenetic Networks, $225K</td>
    </tr>

    
    <tr>
      <td width="100" valign="top">2019-2025</td>  
      <td>NSERC - Discovery<br>
      Accurate prediction and classication of orthologs, $255K</td>
    </tr>

    
    <tr>
      <td width="100" valign="top">2022-2023</td>  
      <td>NSERC - Alliance Catalyst International<br>
      A Bioinformatics Framework to Understand the Fate of Duplicated Genes, $25K</td>
    </tr>

      <tr>
      <td width="100" valign="top">2021-2023</td>  <td>FRQS - financements de la recherche intersectorielle sur le Vieillissement<br>
      Analyse de r&eacute;seaux pour resserrer le filet social autour des personnes &acirc;g&eacute;es, $86K</td>
    </tr>
    
    <tr>
      <td width="100" valign="top">2021-2022</td>  <td>FRQNT - Research support for new academics<br>
      Reconciliation between gene and species trees in the era of phylogenomics, $60K</td>
    </tr>

    
    

    
    <tr>
      <td width="100">2016-2018</td>  <td>NSERC Postdoctoral Scholarship</td>
    </tr>
    <tr>
      <td>2016</td><td>Mitacs Globalink Campus France Award <?= getTerm("collabocs") ?></td>
    </tr>
    <tr>
      <td>2015</td><td>Hydro-Qu&eacute;bec Excellence Award</td>
    </tr>
    
    <tr>
      <td>2014</td><td>DIRO Excellence Award (University of Montreal)</td>
    </tr>
    <tr>
      <td>2014-2016</td><td>FRQNT Doctoral Scholarship</td>
    </tr>
    <tr>
      <td>2012-2013</td><td>FRQNT Masters Scholarship</td>
    </tr>
  </table>
  
</div>


<!-- 
<div>
  <div class='main_subtitle'><?= getTerm("teaching") ?></div>
  
  <table>
    <tr><td>
      H2019-H2020:  IFT339 - Structures de donn&eacute;es   <i>(data structures)</i>
    </tr></td>
    <tr><td>
      A2019:  BIN702 - Algorithmes pour la bioinformatique   <i>(algorithms for bioinformatics)</i>
    </tr></td>
    <tr><td>
      E2019:  IFT436 - Algorithmes et structures de donn&eacute;es   <i>(algorithms and data structures)</i>
    </tr></td>
    
    <tr><td>
      H2019:  IFT187 - &Eacute;l&eacute;ments de bases de donn&eacute;es  <i>(databases)</i>
    </tr></td>
  </table>
  
</div>
-->

</div>  <!-- mycv -->



</div>


</div>      

<?php

include("./footer.php");

?>

