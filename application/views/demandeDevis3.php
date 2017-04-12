<?php include('include/head.php'); ?>
<body>

    <div class="gtco-loader"></div>

    <div id="page">


        <div class="page-inner">
            <?php include('include/navigation.php'); ?>
            <?php include('include/headerDevis3.php'); ?>



            <div id="gtco-features" class="border-bottom">
                <div class="gtco-container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                            <h2>Demandez votre devis (3/3)</h2>
                            <p>Merci de remplire le formulaire par les informations qui conviennent </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box">

                            <h3>Informations de paiement</h3>

                            <p>Ici le formulaire de paiement</p>

                            <div class="form-group">
                                <a href="<?php echo base_url() . "index.php/home/devis/2" ?>" class="btn btn-primary pull-left">Précédent</a>
                                <a href="#" class="btn btn-primary pull-right">Envoyer</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


            <?php include('include/subscribe.php'); ?>

            <?php include('include/footer.php'); ?>


        </div>

    </div>

    <?php include('include/footerScriptJs.php'); ?>
                                     

