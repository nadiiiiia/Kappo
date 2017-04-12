<?php include('include/head.php'); ?>

<body>

    <div class="gtco-loader"></div>

    <div id="page">


        <div class="page-inner">
            <?php include('include/navigation.php'); ?>

            <?php include('include/headerDevis1.php'); ?>


            <div id="gtco-features" class="border-bottom">
                <div class="gtco-container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                            <h2>Demandez votre devis (1/3)</h2>
                            <p>Merci de remplire le formulaire par les informations qui conviennent </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box">

                            <h3>Informations personnels</h3>
                            <form action="#">
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="nom">Nom</label>
                                        <input type="text" id="nom" class="form-control" placeholder="Nom">
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="prenom">Prénom</label>
                                        <input type="text" id="prenom" class="form-control" placeholder="PrÃ©nom">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="adresse">Adresse</label>
                                        <input type="text" id="adresse" class="form-control" placeholder="Adresse">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="tel">Téléphone</label>
                                        <input type="text" id="tel" class="form-control" placeholder="TÃ©lÃ©phone">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="e-mail">E-mail</label>
                                        <input type="text" id="e-mail" class="form-control" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="login">Login</label>
                                        <input type="text" id="login" class="form-control" placeholder="Login">
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="passwd">Mot de passe</label>
                                        <input type="text" id="passwd" class="form-control" placeholder="Mot de passe">
                                    </div>
                                </div>
                                <div class="row form-group">

                                    <div class="form-group">
                                        <a href="<?php echo base_url() . "index.php/home/devis/2" ?>" class="btn btn-primary pull-right">Suivant</a>
                                    </div>

                            </form>		


                        </div>
                    </div>

                </div>
            </div>


            <?php include('include/subscribe.php'); ?>

            <?php include('include/footer.php'); ?>
        </div>

    </div>


    <?php include('include/footerScriptJs.php'); ?>


