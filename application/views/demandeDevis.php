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
                            <?php echo form_open('home/load_first_form'); ?>
                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label  for="nom">Nom</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="nom" class="form-control" required="required" placeholder="Nom">
                                </div>

                            </div>

                            <div class="row form-group">

                                <div class="col-md-3">
                                    <label  for="prenom">Prénom</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="prenom" class="form-control" required="required" placeholder="Prénom">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label  for="adresse">Adresse</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="adresse" class="form-control" required="required" placeholder="Adresse">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label  for="tel">Téléphone</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="tel" class="form-control" required="required" placeholder="Téléphone">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label  for="email">E-mail</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control" required="required" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label for="reEmail">vérification E-mail</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="email" name="reEmail" class="form-control" required="required" placeholder="vérification E-mail">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label  for="passwd">Mot de passe</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="password" name="passwd" class="form-control" required="required" placeholder="passwd">
                                </div>

                            </div>

                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label  for="rePasswd">vérification mot de passe</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="password" name="rePasswd" class="form-control" required="required" placeholder="vérification mot de passe">
                                </div>
                            </div>
                            <div class="row form-group">

                                <div class="form-group">
                                    <input type="submit" id="step1" class="btn btn-primary pull-right" value="Suivant">
                                </div>
                            </div>

                            <?php echo form_close(); ?>



                        </div>
                    </div>

                </div>
            </div>


            <?php include('include/subscribe.php'); ?>

            <?php include('include/footer.php'); ?>
        </div>

    </div>


    <?php include('include/footerScriptJs.php'); ?>
</body>
</html>


