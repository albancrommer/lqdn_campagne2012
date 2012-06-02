
    <div class="container-wrapper" id="progress"><!-- progress bar -->
        <div class="container" >
            <div class="row">
                <div class="span2">
                    <h3><?= $t->t("current_progress") ?></h3>
                </div>
                <div class="span10">
                    <div id="progress_bar"></div>
                    <div class="progress_indices">
                        <div class="marks">
                            <div class="start"">0&euro;</div>
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
    </div><!-- progress bar -->
