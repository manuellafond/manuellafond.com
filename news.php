<style type='text/css'>
.newsheader
{
   background-color:#fffacd;
   padding:2px;
   font-size:14px;
   font-weight:bold;
   margin-top:12px;
}


.newsitem
{
   display: list-item;                                            
    list-style-type: disc;      
    list-style-position: outside;
margin-left: 1.3em;
}

.newsitem_header
{
   /*background-color:#ededed;*/
   text-decoration: underline;
   font-style:italic;
}

.newsitem_body
{

}

</style>


<div class='newsheader'>
News
</div>



<?php

$news = array();

array_push($news, array( "title" => "2018-04-02 :  Accepted paper at the ISMB conference", 
                                     "body" => "Our paper \"Accurate prediction of orthologs in the presence of divergence after duplication\", with <i>Mona Meghdari Miardan</i> and <i>David Sankoff</i>, has been accepted for publication at the ISMB 2018 conference.<br>
<a href='https://www.biorxiv.org/content/early/2018/04/04/294405'>Click here for the preprint on bioRxiv</a>") );



foreach ($news as $newsitem)
{
?>
<div class='newsitem'>
   <div class='newsitem_header'>
      <?= $newsitem['title'] ?>
   </div>
   <div class='newsitem_body'>
      <?= $newsitem['body'] ?>
   </div>
   
</div>
<?php
}
?>