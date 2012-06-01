<?php
    error_reporting(E_ALL);
    ini_set("display_errors", true);
    
include("lang/translator.php");

  $lang = 'fr';
  require_once(dirname(__FILE__) . "/lang/$lang/campaign.lang.php");
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
  <head>
    <title><?= $t->t("meta_title") ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $t->t("meta_desc")?>">
    <meta name="author" content="la Quadrature du Net">
    <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/campaign.css"/>
    <link type="text/css" rel="stylesheet" href="jquery-ui-1.8.20.custom/css/custom-theme/jquery-ui-1.8.20.custom.css"/>
    <script  type="text/javascript" src="jquery-ui-1.8.20.custom/js/jquery-1.7.2.min.js"></script>
    <script  type="text/javascript" src="jquery-ui-1.8.20.custom/js/jquery-ui-1.8.20.custom.min.js"></script>
    <script  type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>

    <div class="container-wrapper" id="header">
        <div class="container" >
            <div class="row">
                <div class="span2">
                    <img src="images/header.png">
                </div>
                <div class="offset1 span9">
                    <h1><?= $t->t("header_title") ?> </h1>
                    <p><?= $t->t("header_desc") ?> </p>

                </div>


            </div>
        </div>
    </div>

    <div class="container-wrapper" id="anime">
        <div class="container" >
            <div class="row">
                <div class="span3 panel_acta">
                    <h2><?= $t->t("acta_title") ?></h2>
                    <dl class="bulletpoints">
                        <?php $id = 1 ?>
                        <?php foreach($t->t("acta_points") as $point => $details ): ?>
                            
                            <dt>
                                <a href="javascript:void(0)" class="anime_point btn  btn-large" rel="item_acta_<?= $id; $id++ ?>">
                                    <?= $point ?>
                                </a>
                            </dt>
                            <dl class="anime_details" style="display:none">
                                <?= $details ?>
                            </dl>
                        <?php endforeach ?>
                    </dl>
                </div>
                <div class="span6">
                   &nbsp;
                    <div class="anime_display " style="display:none;">
                        <!-- content assigned through js switchAnime() -->
                        <div id="anime_figure"></div>
                        <div id="anime_text"></div>
                    </div>
                </div>
                <div class="span3 panel_beyond">
                    <h2><?= $t->t("beyond_title") ?></h2>
                    <dl class="bulletpoints">
                        <?php $id = 1 ?>
                        <?php foreach($t->t("beyond_points") as $point => $details ): ?>
                            <dt>
                                <a href="javascript:void(0)" class="anime_point btn  btn-large" rel="item_beyond_<?= $id; $id++ ?>">
                                    <?= $point ?>
                                </a>
                            </dt>
                            <dl class="anime_details " style="display:none">
                                <?= $details ?>
                            </dl>
                        <?php endforeach ?>
                    </dl>
                </div>
                <div id="panel_rollover">
                    <?= $t->t("panel_rollover")?>
                </div>
            </div>
        </div>
    </div>


    <div class="container-wrapper" id="progress">
        <div class="container" >
            <div class="row">
                <div class="span2">
                    <h3><?= $t->t("current_progress") ?></h3>
                </div>
                <div class="span10">
                    <div id="progress_bar"></div>
                    <div class="progress_indices">
                        <div class="steps">
                            <div class="step step_f">|</div>
                            <div class="step">|</div>
                            <div class="step">|</div>
                            <div class="step">|</div>
                            <div class="step step_l">|</div>
                            
                        </div>
                        <div class="marks">
                            <div class="start">0&euro;</div>
                            <div class="middle">50 000&euro;</div>
                            <div class="end">100 000&euro;</div>
                        </div>
                    </div>
                </div>
<!--
                <div class="span6">
                    <?php 
                        // return # days until dayArray
                        $dayArray = Array(0,0,0,10,31,2012);
                        function daysRemaining($dA){
                            $future = mktime( $dA[0],$dA[1],$dA[2],$dA[3],$dA[4],$dA[5]);
                            $today  = time();
                            $diff   = ( $future - $today ) / 60 / 60 / 24 ;
                            return( $diff < 0 ? "0" : floor($diff));
                            
                        }
                       
                    ?>
                    <h3><?= daysRemaining($dayArray) ." ". $t->t("days_remaining") ?> </h3>
                    <h4><?= $t->t("generous_donators") ?></h4>
                    <p id="donator-container"></p>
                    <?php
                        // fetch from api
                        $donatorsList = '[["jean",100],["ahmed",1000],["simone",15],["ganesh",50]]';
                    ?>
                    <script type="text/javascript">
                        var donator_id = 0;
                        var donatorsList;
                        function switchDonators(  ){
                            var l = donatorsList.length;
                            donator_id = ( donator_id == l - 1)? 0: donator_id + 1;
                            $("#donator-container").html(
                                donatorsList[donator_id][0]
                                + "<?= $t->t("path_separator") ?>"
                                + donatorsList[donator_id][1]+"&euro;"
                            )
                        }
                        (function(){
                            donatorsList    = <?= $donatorsList ?>;
                            switchDonators()
                            setInterval("switchDonators()",3000)
                        })()
                    </script>
                </div>
-->

            </div>
        </div>
    </div>
      
    <div class="container-wrapper" id="support">
                    <form method="post" action="" name="f1" id="f1">
        <div class="container" >
            <div class="row donations">

                <div class="span2">
                    <h3>
                    <?= $t->t('support_us') ?>
                    </h3>
                </div>
                <div class="span1 amounts_holder">
                        <input type="radio" name="sum" value="10" id="sum10" class="predef"  />
                        <label for="sum10">10&nbsp;&euro;</label>
                        
                        <div class="alert" id="piplome_pdf" style="display:none">
                            <p class="cadeaux"><img src="images/upiplomepdf.png"></p>
                            <p>En remerciement de votre don, vous recevrez 1 000 décimales de π 
                                dans un certificat personnalisé, envoyé <strong>par courriel au format PDF</strong>.</p>
                        </div>
                </div>
                <div class="span1 amounts_holder">
                        <input type="radio" name="sum" value="25" id="sum25" class="predef" />
                        <label for="sum25">25&nbsp;&euro;</label>
                        <div class="alert" id="piplome_pdf" style="display:none">
                            <p class="cadeaux"><img src="images/upiplomepdf.png"></p>
                            <p>En remerciement de votre don, vous recevrez 1 000 décimales de π 
                                dans un certificat personnalisé, envoyé <strong>par courriel au format PDF</strong>.</p>
                        </div>
                </div>
                <div class="span1 amounts_holder">
                        <input type="radio" name="sum" value="50" id="sum50" checked="checked" class="predef" />
                        <label for="sum50">50&nbsp;&euro;</label>
                        <div class="alert " id="piplome" style="display:none">
                            <p class="cadeaux"><img src="images/upiplome.png"></p>
                            <p>En remerciement de votre don, vous recevrez 1 000 décimales de π 
                                dans un certificat personnalisé, envoyé <strong>par courriel au format PDF 
                                    + un  tirage original de qualité supérieure</strong>.
                            </p>
                        </div>    
                </div>
                <div class="span1 amounts_holder">
                        <input type="radio" name="sum" value="100" id="sum100" class="predef" />
                        <label for="sum100">100&nbsp;&euro;</label>
                        <div class="alert " id="piplome_ts"  style="display:none">
                            <p class="cadeaux"><img src="images/upiplome.png">
                                <span class="plus">+</span><img src="images/upishirt.png"></p>
                            <p>En remerciement de votre don, vous recevrez 1 000 
                                décimales de π dans un certificat personnalisé, 
                                envoyé par courriel au format PDF + un  
                                tirage original de qualité supérieure + un 
                                'pi-shirt' portant le logo de La Quadrature 
                                du Net !</p></div>    
                </div>
                <div class="span1 amounts_holder">
                        <input type="radio" name="sum" value="250" id="sum250" class="predef" />
                        <label for="sum250">250&nbsp;&euro;</label>
                        <div class="alert " id="piplome_ts"  style="display:none">
                            <p class="cadeaux"><img src="images/upiplome.png">
                                <span class="plus">+</span><img src="images/upishirt.png"></p>
                            <p>En remerciement de votre don, vous recevrez 1 000 
                                décimales de π dans un certificat personnalisé, 
                                envoyé par courriel au format PDF + un  
                                tirage original de qualité supérieure + un 
                                'pi-shirt' portant le logo de La Quadrature 
                                du Net !</p></div>    
                </div>
                <div class="span2 amounts_holder">
                        <input type="radio" name="sum" value="-1" id="sum1" />
                        <input type="text" name="othersum" value="<?= $t->t('other_placeholder') ?>" size="4" id="othersum" />
                        <label for="sum1">&nbsp;&euro;</label>
                        <div class="alert " id="nocado5" style="display:none">
                            Nous ne pouvons pas accepter les soutiens 
                            inf&eacute;rieurs &agrave; 5&nbsp;&euro; 
                            (frais bancaires trop importants). 
                            Vous pouvez toujours nous aider par 
                            <a href="/fr/participer">votre action</a>&nbsp;!
                        </div>
                </div>
                <div class="span3" style="position:relative">
                    <div class="giftContainer" style="display:none;"></div>
                </div>
            </div>
            <div class="row">
                
                
                <div class="span3 offset2">
                        <input type="checkbox" id="monthly" name="monthly"/> <label for="monthly"><?= $t->t('recurent_donation') ?></label>
                </div>
                <div class="span3 ">
                    <p>
                        <input type="checkbox" id="monthly" name="monthly"/> <label for="monthly"><?= $t->t('in_donors_list') ?></label>
                    </p>
                    <p>
                        <label for="monthly"><?= $t->t('firstname_lastname') ?></label> <input type="text" id="monthly" name="monthly" size="60"/> 
                    </p>
                </div>
                <div class="span3 ">
                </div>
            </div>
                    
                    
            <div class="row">
                <div class="span10 offset2">
                    </p>
                        <input type="submit" class="btn btn-large btn-inverse" value="Je soutiens La Quadrature du Net"/>
                 </div>

            </div>
        </div>
        </form>
    </div>
      
    <div class="container-wrapper" id="facts">
        <div class="container" >
            <div class="row">
                <div class="span2">
                    <h3>
                        FAQ 
                        
                    </h3>
                </div>


                <div class="span10">
                    <h2><?= $t->t("faq_title") ?></h2>
                    <div class="pane-content faq">
                        <div id="blockfaqsoutien">
                        <script type="text/javascript">
                            jQuery().ready(function(){
                                    $('#blockfaqsoutien').accordion({ header: 'h4', autoheight: false });
                            });
                            </script>
                        <h4 id="faq-budget" class="selected"><a href="#">À quoi servira mon don&nbsp;?</a></h4>
                        <div style="display: block; height: auto; overflow: hidden;"><img src="/images/pichart2011.png">
                        <p>Budget prévisionnel total 2011&nbsp;: 147&nbsp;K&nbsp;€</p>
                        <p>Un compte rendu de l'exercice 2010 ainsi que d'autres éléments d'information sur le financement de La Quadrature du Net sont disponibles <a href="http://blog.fdn.fr/post/2011/03/09/Les-finances-de-La-Quadrature">sur cet article du blog de FDN</a>.
                        </p></div>
                        <h4 id="faq-nomoney" class=""><a href="#faq-participer">Je n'ai pas d'argent, comment puis-je soutenir La Quadrature&nbsp;?</a></h4>
                        <div style="display: none; height: auto; overflow: hidden;">
                        <p>
                        Vous pouvez propager cet appel, le relayer sur votre blog ou sur les réseaux sociaux, en parler autour de vous et expliquer l'importance des actions de la Quadrature du Net. Ce soutien est primordial, la Quadrature n'existe que par les gens qui partagent ses convictions.</p>
                        <p>Jour après jour, vous pouvez soutenir La Quadrature du Net en <a href="http://laquadrature.net/fr/participer">participant à ses actions</a>.</p>
                        <p>Les dons financiers aident la Quadrature à agir quotidiennement en payant ses financés, les frais induits par son activité et les défraiements, mais la Quadrature ne serait rien sans les personnes qui donnent de leur temps, leurs compétences et leur énergie pour porter ses actions et en faire les leurs.</p>
                        <p>Vous pouvez nous aider en vous <a href="fr/dossiers">informant</a> sur les sujets qui nous préoccupent et en relayant nos messages, en informant les gens autour de vous, et de bien d'autres façons.<br>
                        N'hésitez pas à entrer en <a href="http://www.laquadrature.net/fr/contact">contact</a> avec nous pour trouver une façon d'aider qui vous corresponde !
                        </p></div>
                        <h4 id="faq-who"><a href="#faq-who">Qui sont les soutiens de La Quadrature du Net&nbsp;?</a></h4>
                        <div style="display: none;">
                        <p>
                        Outre les <a href="http://www.laquadrature.net/fr/ils-soutiennent-la-quadrature-du-net">associations soutenant La Quadrature</a>, vous pouvez consulter une liste des <a href="http://www.laquadrature.net/fr/liste-des-soutiens">individus ayant fait un don</a> et souhaitant apparaître publiquement.
                        </p></div>
                        <h4 id="faq-paypal"><a href="#faq-paypal">Puis-je faire un don par PayPal&nbsp;?</a></h4>
                        <div style="display: none;">
                        <p>Nous recommandons de ne pas privilégier les dons par PayPal, pour des raisons éthiques (leurs actions contre WikiLeaks entre autres) ainsi qu'en raison des frais outranciers que cela engendre. Toutefois, si c'est la seule solution pour vous, vous pouvez utiliser le compte suivant&nbsp;: <a href="mailto:paypal@laquadrature.net">paypal@laquadrature.net</a>.
                        </p>
                        </div>
                        <h4 id="faq-cheque"><a href="#faq-cheque">Puis-je faire un don ponctuel par chèque&nbsp;?</a></h4>
                        <div style="display: none;">
                        <p>
                        Oui bien sûr ! dans ce cas, arrêtez-vous juste après avoir posté le formulaire <br> <br>
                        (ne cliquez pas sur le bouton 'Proceder au paiement') <br> <br>
                        et envoyez votre chèque comme suit&nbsp;:  </p>
                        <table class="formv">
                        <tbody><tr>
                        <td><i>Ordre&nbsp;: </i></td>
                        <td> FDNN</td>
                        </tr>
                        <tr>
                        <td><i>Adresse&nbsp;: </i></td>
                        <td> FDNN, 16 rue de Cachy, 80090 Amiens</td>
                        </tr>
                        <tr>
                        <td><b>Note importante&nbsp;: </b></td>
                        <td>Si vous souhaitez obtenir vos cadeaux de remerciement, envoyez un mail à <a href="mailto:contact@laquadrature.net">contact@laquadrature.net</a> indiquant votre nom, le montant de votre don ainsi que l'adresse à laquelle vous souhaitez recevoir ces cadeaux.</td>
                        </tr>
                        </tbody></table>
                        <p>(FDNN est le Fonds de Défense de la Net Neutralité, association qui se consacre au soutien d'actions en faveur de la neutralité du Net et plus généralement de la liberté d'expression sur Internet. FDNN garantit que les fonds versés pour la Quadrature du Net sont utilisés pour ses seules activités)
                        </p>
                        </div>
                        <h4 id="faq-virement-transfert"><a href="#faq-virement-transfert">Puis-je faire un don ponctuel par virement&nbsp;?</a> </h4>
                        <div id="faq0" style="display: none;">
                        Bien évidemment&nbsp;! Il vous suffit de faire votre virement sur le compte bancaire de l'association FDNN, chargée de gérer les finances de La Quadrature du Net, dont voici le <a href="http://www.laquadrature.net/images/RIB_FDNN.pdf">RIB</a>. <br> <br>
                        <strong>Pensez à indiquer quelque chose comme «&#8239;DON LQDN&#8239;»  comme commentaire du virement, et si vous souhaitez obtenir vos cadeaux de remerciement, envoyez un mail à <a href="mailto:contact@laquadrature.net">contact@laquadrature.net</a> indiquant votre nom, le montant de votre don ainsi que l'adresse à laquelle vous souhaitez recevoir ces cadeaux.</strong>
                        </div>
                        <h4 id="faq-bitcoin"><a href="#faq-bitcoin">Puis-je faire un don en Bitcoins&nbsp;?</a> </h4>
                        <div id="faq9" style="display: none;">
                        Oui&nbsp;! La Quadrature disposant d'un portefeuille Bitcoin, vous pouvez faire un don en utilisant cette monnaie électronique décentralisée. Pour ce faire, arrêtez-vous juste après avoir posté le formulaire.<br>
                        (ne cliquez pas sur le bouton 'Proceder au paiement') 
                        <p>L'identifiant du portefeuille de la Quadrature est&nbsp;: <strong>126gkjYAmg2Tq7P3MFmBGnCsrnZytYwJEc</strong></p>
                        <p>Étant donné la rareté de ce type de don (à l'heure actuelle), notre système ne prend pas en compte le calcul d'éventuel goodies associés à votre don. </p>
                        <p>Contactez-nous par e-mail pour nous prévenir de votre don et nous communiquer votre numéro de don, nous essayerons de vous envoyer quelques autocollants si votre don approche des 10&nbsp;BC. (Étant donné la volatilité du Bitcoin, cette somme peut changer, le plus simple est de nous envoyer un mail après votre don.)
                        </p></div>
                        <h4 id="faq-flattr"><a href="#faq-flattr">Puis-je faire un don par Flattr&nbsp;?</a> </h4>
                        <div id="faq10" style="display: none;">
                        Oui&nbsp;! Si vous souhaitez soutenir la Quadrature via Flattr, il vous suffit de flatter cette page ou l'un des articles du sites.
                        <p>Flattr est une bonne façon de nous soutenir, mais la portée d'un simple Flattr étant moindre, n'hésitez pas à flatter nos articles autant qu'il vous plaira.</p>
                        <p><a href="http://flattr.com/thing/129127/La-Quadrature-du-Net"><img alt="flattr" title="Flattr this" src="/images/flattr-compact.png"></a></p>
                        <p>Flattr offre également la possibilité de procéder à un don plus important, du montant de votre choix, ce qui offre une alternative intéressante à PayPal.<br>Pour faire un don à La Quadrature du Net par Flattr, utilisez <a href="https://flattr.com/donation/give/to/laquadrature">le formulaire sur cette page</a>. Les dons étant anonymes avec ce système, il ne nous sera pas possible de vous envoyer vos goodies, sauf à nous prévenir en amont par email (contact_at_laquadrature.net) du montant de votre don Flattr, par exemple.<br></p>
                        </div>
                        <h4 id="faq-no-news-cheque"><a href="#faq-no-news-cheque">J'ai envoyé mon chèque il y a quelques jours et je n'ai pas de nouvelles.</a></h4>
                        <div id="faq3" style="display: none;">
                        Ne vous inquiétez pas ! Nous traitons les soutiens par chèque par lot, afin de ne pas y passer trop de temps. Vous recevrez logiquement vos décimales de π (et autres selon votre soutien) dans quelques jours, si vous les avez demandées.
                        </div>
                        <h4 id="faq-limited-t-shirts"><a href="#faq-buy-t-shirts">Peut-on vous soutenir en achetant des t-shirts de La Quadrature du Net&nbsp;?</a> </h4>
                        <p style="display: none;">La Quadrature du Net ne vend pas de t-shirts. Le seul moyen (financier) de soutenir la Quadrature du Net est de faire un don. Bien sûr il est aussi possible de soutenir/aider le collectif autrement (notamment en apportant son aide). Vendre des tee-shirt nécessiterait un investissement en temps important (et probablement l'embauche d'une personne à temps partiel pour s'en occuper pour un gain minimal). Ce n'est pas souhaitable. Les pi-shirts ne sont qu'un (modeste) cadeau de remerciement qui marque la reconnaissance et la gratitude du collectif à ses plus généreux soutiens.

                        </p><h4 id="faq-limited-t-shirts"><a href="#faq-limited-t-shirts">Je veux un des deux fantastiques t-shirts collectors, comment faire&nbsp;?</a> </h4>
                        <div id="faq8" style="display: none;">
                        Les tshirts collectors seront «&nbsp;débloqués&nbsp;» lorsqu'un un certain nombre de dons auront été atteints&nbsp;: 150 dons de plus de 100€ pour l'un, et 100 dons récurrents de plus de 15€/mois pour l'autre. Lorsque ces chiffres seront atteints, les généreux donateurs recevront leur t-shirt édité en série limitée.</div>
                        <h4 id="faq-when-t-shirts"><a href="#faq-when-t-shirts">Quand recevrai-je mon t-shirt&nbsp;?</a> </h4>
                        <div id="faq7" style="display: none;">
                        Les t-shirts étant envoyés par lot pour des raisons logistiques, les délais peuvent aller jusqu'à plusieurs mois.</div>
                        <h4 id="faq-more-t-shirts"><a href="#faq-more-t-shirts">J'ai une autre question au sujet du pi-shirt&nbsp;?</a> </h4>
                        <div id="faq4" style="display: none;">
                        Contactez-nous par courrier électronique (contact arobase laquadrature.net) pour toute demande particulière relative à la taille ou la découpe du textile.</div>
                        <h4 id="faq-tax"><a href="#faq-tax">Puis-je déduire le soutien de mes impôts&nbsp;?</a> </h4>
                        <div id="faq5" style="display: none;">
                        A priori non. Nous nous renseignons sur les possibilités en la matière, mais vos dons ne sont pas déductibles à ce jour. </div><p></p>
                        <!-- Probablement, mais nous n'en connaissons pas encore les conditions exactes.  --><!-- Probablement, mais nous n'en connaissons pas encore les conditions exactes.  -->
                        <h4 id="faq-recu"><a href="#faq-recu">J'ai besoin d'un reçu, ou d'une facture pour mon soutien.</a> </h4>
                        <div id="faq6" style="display: none;">
                        Vous trouverez un reçu généré automatiquement dans votre interface utilisateur sur le site de FDNN (fdn2.org), qui gère la partie financière de la Quadrature. Si vous avez besoin d'aide, contactez-nous par mail à <a href="mailto:contact@laquadrature.net">contact@laquadrature.net</a>)
                        </div>


                        </div>

                  </div>
                </div>

            </div>
        </div>
    </div>
      
      

    <div class="container-wrapper" id="share">
        <div class="container" >
            <div class="row">
                <div class="span2">
                    <h2>
                        <?= $t->t('share_title') ?>
                    </h2>
                    <ul>
                        <li>
                            <a class="btn-mini" href="http://twitter.com">Twitter</a>
                        </li>
                        <li>
                            <a class="btn-mini" href="http://identi.ca">Identi.ca</a>
                        </li>
                        <li>
                            <a class="btn-mini" href="mailto:?subject=<?= quoted_printable_encode($t->t("meta_title"))?>&body=<?= $t->t("meta_title")?>">Email</a>
                        </li>
                    </ul>
                </div>

                <div class="span10">
                    <h2>
                        <?= $t->t('bloggers_title') ?>
                    </h2>
                    <div class="blog_images row">
                        <div class="span2">
                            <img src="images/blog-1.jpg" \>
                        </div>
                        <div class="span2">
                            <img src="images/blog-2.jpg" \>
                        </div>
                        <div class="span2">
                            <img src="images/blog-3.jpg" \>
                        </div>
                        <div class="span2">
                            <img src="images/blog-4.jpg" \>
                        </div>
                        <div class="span2">
                            <img src="images/blog-5.jpg" \>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">
    (function(){
        
        
        // switches text and figure
        function switchAnime( domElement ){
            
            var text            = domElement.parent().next().html()
            var figure_class    = domElement.attr('rel')
            var panel           = $(".anime_display")
            var panel_text      = $(panel).find("#anime_text")
            var panel_figure    = $(panel).find("#anime_figure")
            panel_text.html(text);
            panel_figure.removeClass().addClass(figure_class);
            panel.show();
            
        }
        
        // mouseOver
        $("a.anime_point").mouseover(function(){
            
            $(window).data("last", $(this).html())
            console.log( $(window).data("last" ) )
            switchAnime( $(this));
        });
        
        // click
        $("a.anime_point").click(function(){
            
            var state       = $(window).data('state')
            var last        = $(window).data('last')
            
            // Hide only if last click was on the same item 
            if( "active" == state && last == $(this).html() ){
                $(window).data("state","inactive")
                $(window).data("last", "")
                var panel   = $(".anime_display");
                panel.hide();
            }else{
                $(window).data("state","active")
                $(window).data("last",$(this).html())
                switchAnime( $(this));
            }
        });
        
        // mouseOut
        $("a.anime_point").mouseout(function(){
            var state      = $(window).data('state')
            if( undefined == state || "inactive" == state ){
                var panel = $(".anime_display");
                panel.hide();
            }
        }); 
        
        // gifts
        $(".amounts_holder input").click(function(e){
            var src = $(this).parent("div").find(".alert")
            var tgt = $(".giftContainer")
            tgt.show().html(src.html())
        })
	// Sets the progress bar
        $( "#progress_bar" ).progressbar({
                value: 37
        });
    })()
    </script>
      
 


  </body>
</html>
