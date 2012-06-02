
               <form method="post" action="" name="f1" id="f1">
               <div class="row donations" style="width:460px;background:red;float:left;overflow:hidden">

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
                        <input type="radio" name="sum" value="50" id="sum50" selected="selected" class="predef" />
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
                        <input type="text" name="othersum" value="<?= $t->t('other_placeholder') ?>" id="othersum"  style="width:90px"/>
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

    <!-- donation form -->

