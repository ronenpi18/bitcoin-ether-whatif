<div class="mastfoot">
    <div class="inner">
        <p>&copy <a href="<?php echo $site_config['website_url']; ?>"><?php echo $page_info['title']; ?></a> כל הזכויות שמורות לישראלים שבנו את זה </p>
    </div>
</div>

</div>

</div>

</div>


<!-- Faucet Modal -->
<div id="faucetModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content faucet-modal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Get free cryptocurrency</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <table class="table table-striped">
                        <thead> <tr> <th>Faucet Name</th> <th>Currency</th> <th>Reward</th> <th style="width: 100px;">Visit</th></tr> </thead>
                        <tbody>
                        <?php
                        foreach($faucets as $faucet) {
                            echo '<tr class="srow"><td><strong class="name"><a href="https://faucetlist.me/go/' . $faucet['id'] . '/' . $ref[$faucet['currency']] . '" target="_blank">' . $faucet['name'] . '</a></strong></td><td>' . $faucet['currency'] . '</td><td>' . $faucet['reward'] . '</td><td><a href="https://faucetlist.me/go/' . $faucet['id'] . '/' . $ref[$faucet['currency']] . '" target="_blank" class="btn btn-xs btn-faucet btn-block">Visit</a></td>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo $site_config['website_url']; ?>/assets/js/bootstrap.min.js"></script>

</body>
</html>

