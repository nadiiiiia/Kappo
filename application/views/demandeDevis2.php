<?php include('include/head.php'); ?>
<body>

    <div class="gtco-loader"></div>

    <div id="page">


        <div class="page-inner">
            <?php include('include/navigation.php'); ?>

            <?php include('include/headerDevis2.php'); ?>


            <div id="gtco-features" class="border-bottom">
                <div class="gtco-container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                            <h2>Demandez votre devis (2/3)</h2>
                            <p>Merci de remplire le formulaire par les informations qui conviennent </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box">

                            <h3>Informations de devis</h3>
                            <form action="#">
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="titre">Titre</label>
                                        <input type="text" id="titre" class="form-control" placeholder="Vous êtes un : particulier, professionnel, association, ONG, Autres">
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="destination">Destination</label>
                                        <input type="text" id="destination" class="form-control" placeholder="Destination : pays, ville">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="Fret">fret</label>
                                        <input type="text" id="fret" class="form-control" placeholder="Type de Fret : Aérien, Portuaire">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="produit">Produit</label>
                                        <input type="text" id="produit" class="form-control" placeholder="Type de produit : voiture, camion, camionnette, engin, tracteur, benne, moto, avion, bateau, valise, colis, groupage, container, autres">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="Valeur">Valeur</label>
                                        <input type="text" id="subject" class="form-control" placeholder="Valeur de votre produit">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="facture">Facture</label>
                                        <input type="text" id="facture" class="form-control" placeholder="Avez vous une facture d’achat : oui, non">
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">

                                        <input type="text" id="circulation" class="form-control" placeholder="Date de première mise en circulation quand il s’agit de : voiture, camion, camionnette, engin, tracteur, benne, moto, avion, bateau, autres">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">

                                        <input type="text" id="serial" class="form-control" placeholder="Numéro de série du produit">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">

                                        <input type="file" id="file" class="form-control" >
                                        Téléchargement des documents ici. vous avez la possibilité de nous transmettre ces documents par whatsapp suivie de votre code client a nos
                                        service.
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="Valeur">Valeur</label>
                                        <input type="text" id="contenu" class="form-control" placeholder="Contenu de votre élément : photos et texte libre.">
                                        Vous avez la possibilité de nous transmettre ces documents par whatsapp suivie de votre code
                                        client a nos service.
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="titre">Titre</label>
                                        <input type="text" id="photos" class="form-control" placeholder="Photos du bien : vous avez la possibilité de nous transmettre ces documents par whatsapp suivie de votre code client a nos service.">
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="destination">Destination</label>
                                        <input type="text" id="transitaire" class="form-control" placeholder="Avez vous un transitaire : oui, non">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="Fret">fret</label>
                                        <input type="text" id="relationPart" class="form-control" placeholder="Voulez vous une mise en relation avec un de nos partenaires : oui non">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="produit">Produit</label>
                                        <input type="text" id="déclarant" class="form-control" placeholder="Avez vous un déclarant : oui, non. Si oui (adresse et contact renseignement, non obligatoire)">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="Valeur">Valeur</label>
                                        <input type="text" id="subject" class="form-control" placeholder="Voulez vous une mise en relation avec un de nos partenaires déclarant: oui, non">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="Valeur">Valeur</label>
                                        <input type="text" id="cle" class="form-control" placeholder="souhaitez vous une solution clé en main (prise en charge auprès de la douane et livraison) oui, non">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="">Je déclare que toutes mes informations sont exactes et complètes, toutes modifications donnera lieu d’une nouvelle estimation de la valeur douanière.</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <a href="<?php echo base_url() . "index.php/home/devis/1" ?>" class="btn btn-primary pull-left">Précédent</a>
                                    <a href="<?php echo base_url() . "index.php/home/devis/3" ?>" class="btn btn-primary pull-right">Suivant</a>
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

