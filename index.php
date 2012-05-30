<?php
require_once("all.php");
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
  <head>
    <title><?= $t->t("meta_title") ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $t->t("meta_desc")?>">
    <meta name="author" content="la Quadrature du Net">
    <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="css/campaign.css"/>
    <link type="text/css" rel="stylesheet" href="jquery-ui-1.8.20.custom/css/custom-theme/jquery-ui-1.8.20.custom.css"/>
    <script  type="text/javascript" src="jquery-ui-1.8.20.custom/js/jquery-1.7.2.min.js"></script>
    <script  type="text/javascript" src="jquery-ui-1.8.20.custom/js/jquery-ui-1.8.20.custom.min.js"></script>
    <script  type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>

  <?php include(dirname(__FILE__) . "/10_topheader.php"); ?>

  <?php include( dirname(__FILE__) . "/20_dark_blue_rollover.php"); ?>

  <?php include(dirname(__FILE__) . "/40_progress_bar.php"); ?>
      
  <?php include(dirname(__FILE__) . "/30_donation_form.php"); ?>

  <?php include(dirname(__FILE__) . "/50_faq.php"); ?>      
      
  <?php include(dirname(__FILE__) . "/60_footer.php"); ?>

  <script type="text/javascript" src="js/campaign.js"></script>
  
  </body>
</html>
