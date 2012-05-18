<?php
  $lang = 'fr';
  require_once(dirname(__FILE__) . "/lang/$lang/campaign.lang.php");
?>
<html>
  <head>
    <title><?= $lang_title ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="css/campaign.css"/>
    <link type="text/css" rel="stylesheet" href="css/lqdn_base.css"/>
    <link rel="text/javascript" href="js/campaign.js"/>
    <link rel="text/javascript" href="js/jquery.js" />
  </head>
  <body>

     <div id="modal_bg">

     </div>
     <div id="header">
      <div id="faq">
       <a href="">F.A.Q</a>
      </div>
    </div>
    <div id="pane_container">
      <div id="acta_pane">
         <div style="padding:15px">
           <h1><?= $lang_acta_title ?></h1>
           <?= $lang_acta_points ?>
           <a href="Javascript:showMore()"><?= $lang_readmore ?></a>
          <div id="sub_acta_pane">
            <?= $lang_acta_points_extra ?>
          </div>
        </div>
      </div>
      <div id="beyond_pane">
        <div style="padding:15px">
          <h1><?= $lang_beyond_title ?></h1>
          <?= $lang_beyond_points ?>
          <a href="Javascript:showMore()"><?= $lang_readmore ?></a>
          <div id="sub_beyond_pane">
            <?= $lang_beyond_points_extra ?>
          </div>
        </div>
      </div>
    </div>
    <div id="form_ct" style="width:1000px;margin-top:30px">
      <div id="campaign_form">
        <form method="post" action="" name="f1" id="f1">

  <ul class="donvalist">
    <li class="sum">
      <input type="radio" name="sum" value="10" id="sum10" class="predef" />
      <label for="sum10">10&nbsp;&euro;</label>
    </li>
    <li class="sum">
      <input type="radio" name="sum" value="25" id="sum25" class="predef" />
      <label for="sum25">25&nbsp;&euro;</label>

    </li>
    <li class="sum active">
      <input type="radio" name="sum" value="50" id="sum50" checked="checked" class="predef" />
      <label for="sum50">50&nbsp;&euro;</label>
    </li>
    <li class="sum">
      <input type="radio" name="sum" value="100" id="sum100" class="predef" />
      <label for="sum100">100&nbsp;&euro;</label>

    </li>
    <li class="sum">
      <input type="radio" name="sum" value="250" id="sum250" class="predef" />
      <label for="sum250">250&nbsp;&euro;</label>
    </li>    <li class="sum othersum" >
      <input type="radio" name="sum" value="-1" id="sum1" /><input type="text" name="othersum" value="Autre" id="othersum" /><label for="sum1">&nbsp;&euro;</label></li>
  </ul>
  <p class="monthlychoice">

    <input style="float:right;width:230px" type="submit" value="Je soutiens La Quadrature du Net"/><input type="checkbox" id="monthly" name="monthly"/> <label for="monthly">Je souhaite faire ce don tous les mois.</label></p><ul id="alerts"><li class="alert $active" id="piplome_pdf"><p class="cadeaux"><img src="/sites/all/modules/lqdn_support/images/upiplomepdf.png"></p><p>En remerciement de votre don, vous recevrez 1 000 décimales de π dans un certificat personnalisé, envoyé <strong>par courriel au format PDF</strong>.</p></li><li class="alert $active" id="piplome"><p class="cadeaux"><img src="/sites/all/modules/lqdn_support/images/upiplome.png"></p><p>En remerciement de votre don, vous recevrez 1 000 décimales de π dans un certificat personnalisé, envoyé <strong>par courriel au format PDF + un  tirage original de qualité supérieure</strong>.</p></li>    <li class="alert " id="piplome_ts">
      <p class="cadeaux"><img src="/sites/all/modules/lqdn_support/images/upiplome.png"><span class="plus">+</span><img src="/sites/all/modules/lqdn_support/images/upishirt.png"></p><p>En remerciement de votre don, vous recevrez 1 000 décimales de π dans un certificat personnalisé, envoyé <strong>par courriel au format PDF + un  tirage original de qualité supérieure + un 'pi-shirt' portant le logo de La Quadrature du Net !</strong></p></li>    <li class="alert " id="piplome_ts_surprise">

      <p class="cadeaux"><img src="/sites/all/modules/lqdn_support/images/upiplome.png"><span class="plus">+</span><img src="/sites/all/modules/lqdn_support/images/upishirt.png"></p><p>En remerciement de votre don, vous recevrez 1 000 décimales de π dans un certificat personnalisé, envoyé par courriel au format PDF + un  tirage original de qualité supérieure + un 'pi-shirt' portant le logo de La Quadrature du Net + un mystérieux cadeau surprise&nbsp;!</p></li><li class="alert $active" id="nocado5">Nous ne pouvons pas accepter les soutiens inf&eacute;rieurs &agrave; 5&nbsp;&euro; (frais bancaires trop importants). Vous pouvez toujours nous aider par <a href="/fr/participer">votre action</a>&nbsp;!</li></ul></form>
      </div>
 
     <div id="graphic" style="background:red;width:300px">
       <img style="width:300px" src="images/pichart2011.png"/>
     </div>

     </div>

     <div id="banners">
 
      <h1><?= $lang_banners_title ?> </h1>

     </div>



  </body>
</html>
