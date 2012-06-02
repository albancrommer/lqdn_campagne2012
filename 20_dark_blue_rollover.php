
    <div class="container-wrapper" id="anime"><!-- dark blue rollovers -->
        <div class="container" >
            <div class="row">
                <div class="span3 panel_acta">
                    <h2><?= $t->t("acta_title") ?></h2>
                    <dl class="bulletpoints">
                        <?php $id = 1 ?>
                        <?php foreach($t->t("acta_points") as $point => $details ): ?>
                            
                            <dt>
                                <a href="javascript:void(0)" class="anime_point btn btn-large" rel="item_acta_<?php echo $id; $id++ ?>">
                                   <?php echo $point ?>
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
                        <div id="anime_figure"><img src="images/perso_1.png"/></div>
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
    </div><!-- /dark blue rollovers -->

