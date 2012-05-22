<?php
    error_reporting(E_ALL);
    ini_set("display_errors", true);
    
include("lang/translator.php");

  $lang = 'fr';
  require_once(dirname(__FILE__) . "/lang/$lang/campaign.lang.php");
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
  <head>
    <title><?= $t->t("meta_title") ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $t->t("meta_desc")?>">
    <meta name="author" content="la Quadrature du Net">
    <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/campaign.css"/>
    <script  type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script  type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>

    <div class="container-wrapper" id="header">
        <div class="container" >
            <div class="row">
                <div class="span2">
                    <img src="images/header.png">
                </div>

                <div class="span8">
                    <h1><?= $t->t("header_title") ?> </h1>
                    <p><?= $t->t("header_desc") ?> </p>

                </div>

                <div class="span2">
                    FAQ
                </div>

            </div>
        </div>
    </div>

    <div class="container-wrapper" id="anime">
        <div class="container" >
            <div class="row">
                <div class="span4 panel_acta">
                    <h1><?= $t->t("acta_title") ?></h1>
                    <dl class="bulletpoints">
                        <?php foreach($t->t("acta_points") as $point => $details ): ?>
                            <dt>
                                <a href="javascript:void(0)" class="anime_point btn btn-primary btn-large">
                                    <?php echo $point ?>
                                </a>
                            </dt>
                            <dl class="anime_details" style="display:none">
                                <?php echo $details ?>
                            </dl>
                        <?php endforeach ?>
                    </dl>
                </div>
                <div class="span4">
                   &nbsp;
                    <div class="anime_display btn  btn-large" style="display:none;">
                        
                    </div>
                </div>
                <div class="span4 panel_beyond">
                    <h1><?= $t->t("beyond_title") ?></h1>
                    <dl class="bulletpoints">
                        <?php foreach($t->t("beyond_points") as $point => $details ): ?>
                            <dt>
                                <a href="javascript:void(0)" class="anime_point btn btn-primary btn-large">
                                    <?php echo $point ?>
                                </a>
                            </dt>
                            <dl class="anime_details " style="display:none">
                                <?php echo $details ?>
                            </dl>
                        <?php endforeach ?>
                    </dl>
                </div>
                <div id="panel_rollover">
                    <?php echo $t->t("panel_rollover")?>
                </div>
            </div>
        </div>
    </div>


    <div class="container-wrapper" id="progress">
        <div class="container" >
            <div class="row">
                <div class="span6">
                    <h3> [Visual progress]</h3>
                </div>

                <div class="span6">
                    <h3>Delays and stuff</h3>
                </div>

            </div>
        </div>
    </div>
      
    <div class="container-wrapper" id="support">
        <div class="container" >
            <div class="row">
                <div class="span3">
                    <h2>
                        Support us
                    </h2>
                </div>

                <div class="span6">
                    
      <div id="form_ct">
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

    <input type="submit" value="Je soutiens La Quadrature du Net"/>
    <input type="checkbox" id="monthly" name="monthly"/> <label for="monthly">Je souhaite faire ce don tous les mois.</label>
  </p>
    <ul id="alerts" style="display:none;">
        <li class="alert <?php echo $t->t("active") ?>" id="piplome_pdf">
            <p class="cadeaux"><img src="images/upiplomepdf.png"></p>
            <p>En remerciement de votre don, vous recevrez 1 000 décimales de π 
                dans un certificat personnalisé, envoyé <strong>par courriel au format PDF</strong>.</p>
        </li>
        <li class="alert <?php echo $t->t("active") ?>" id="piplome">
            <p class="cadeaux"><img src="images/upiplome.png"></p>
            <p>En remerciement de votre don, vous recevrez 1 000 décimales de π 
                dans un certificat personnalisé, envoyé <strong>par courriel au format PDF 
                    + un  tirage original de qualité supérieure</strong>.
            </p>
        </li>    
        <li class="alert " id="piplome_ts">
            <p class="cadeaux"><img src="images/upiplome.png"><span class="plus">+</span><img src="images/upishirt.png"></p><p>En remerciement de votre don, vous recevrez 1 000 décimales de π dans un certificat personnalisé, envoyé <strong>par courriel au format PDF + un  tirage original de qualité supérieure + un 'pi-shirt' portant le logo de La Quadrature du Net !</strong></p></li>    
        <li class="alert " id="piplome_ts_surprise">
            <p class="cadeaux"><img src="images/upiplome.png"><span class="plus">+</span><img src="images/upishirt.png"></p><p>En remerciement de votre don, vous recevrez 1 000 décimales de π dans un certificat personnalisé, envoyé par courriel au format PDF + un  tirage original de qualité supérieure + un 'pi-shirt' portant le logo de La Quadrature du Net + un mystérieux cadeau surprise&nbsp;!</p></li><li class="alert <?php echo $t->t("active") ?>" id="nocado5">Nous ne pouvons pas accepter les soutiens inf&eacute;rieurs &agrave; 5&nbsp;&euro; (frais bancaires trop importants). Vous pouvez toujours nous aider par <a href="/fr/participer">votre action</a>&nbsp;!
        </li>
    </ul>
        </form>
      </div>
    </div>
    </div>

                <div class="span3">
                    FAQ
                </div>

            </div>
        </div>
    </div>
      

    <div class="container-wrapper" id="facts">
        <div class="container" >
            <div class="row">
                <div class="span6">
                    <h3>
                        Your support is greatly appreciated 
                        
                    </h3>
                </div>


                <div class="span6">
                    <img src="images/pichart2011.png"/>
                </div>

            </div>
        </div>
    </div>
      
      

    <div class="container-wrapper" id="share">
        <div class="container" >
            <div class="row">
                <div class="span4">
                    <h2>
                        Share
                    </h2>
                </div>

                <div class="span4">
                    <h2>
                        Bloggers material
                    </h2>
                    
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">
    (function(){
        $("a.anime_point").hover(function(){
            var text = $(this).parent().next().html();
            var panel = $(".anime_display");
            panel.html(text);
            panel.show();
            panel.height("0px");
            panel.height("auto");
            //panel.show();
        });
        $("a.anime_point").click(function(){
            var text = $(this).parent().next().html();
            var panel = $(".anime_display");
            panel.html(text);
            panel.show();
        });
        $("a.anime_point").mouseout(function(){
            var panel = $(".anime_display");
            panel.hide();
        }); 
    })()
    </script>
      
 


  </body>
</html>
