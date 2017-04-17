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
                         <?php echo form_open('home/load_second_form'); ?>
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label for="titre">Vous êtes un</label>
                                    </div>
                                    <div class="col-md-8">
                                      
                                       <select  name="titre" class="form-control" >
                                           <option value="particulier">Particulier</option>
                                           <option value="professionnel">Professionnel</option>
                                           <option value="association">Association</option>
                                           <option value="ONG">ONG</option>
                                           <option value="autres">Autres</option>
                                       </select>
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label  for="destination">Destination</label>
                                    </div>
                                     <div class="col-md-8">
                                        <input type="text" name="destination" class="form-control" placeholder="Pays, Ville">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label  for="fret">Type de Fret</label>
                                        </div>
                                     <div class="col-md-8">

                                        <select  name="fret" class="form-control" >
                                           <option value="">--Séléctionnez un type--</option>
                                           <option value="Aérien">Aérien</option>
                                           <option value="Portuaire">Portuaire</option>

                                       </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label  for="produit">Type de produit</label>
                                    </div>
                                     <div class="col-md-8">
                                         <select  id="produit" name="produit" class="form-control" >
                                           <option value="">--Séléctionnez un produit--</option>
                                           <option value="voiture">Voiture</option>
                                           <option value="camion">Camion</option>
                                           <option value="camionnette">Camionnette</option>
                                           <option value="engin">Engin</option>
                                           <option value="tracteur">Tracteur</option>
                                           <option value="benne">Benne</option>
                                           <option value="moto">Moto</option>
                                           <option value="avion">Avion</option>
                                           <option value="bateau">Bateau</option>
                                           <option value="valise">Valise</option>
                                           <option value="colis">Colis</option>
                                           <option value="groupage">Groupage</option>
                                           <option value="container">Container</option>
                                           <option value="autres">Autres</option>

                                       </select>
                                        
                                    </div>
                                </div>
                            
                                <div id="marque" class="row form-group">
                                    <div class="col-md-4">
                                        <label   for="marque">Marque </label>
                                        </div>
                                     <div class="col-md-8">
                                       <select  name="marque" class="form-control" >
                                           
                                           <option value="">--Séléctionnez une marque--</option>
                                          

                                       </select>
                                        
                                    </div>
                                </div>
                            
                            <div id="model" class="row form-group">
                                    <div class="col-md-4">
                                        <label   for="model">Model</label>
                                        </div>
                                     <div class="col-md-8">
                                       <select  name="model" class="form-control" >
                                           
                                           <option value="">--Séléctionnez un model--</option>
                                           

                                       </select>
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label  for="valeur">Valeur</label>
                                        </div>
                                     <div class="col-md-8">
                                        <input type="text" name="valeur" class="form-control" placeholder="Valeur de votre produit">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label  for="facture">Avez vous une facture d'achat</label>
                                        </div>
                                     <div class="col-md-8">
                                       <select  name="facture" class="form-control" >
                                           
                                           <option value="0">Non</option>
                                           <option value="1">Oui</option>

                                       </select>
                                        
                                    </div>

                                </div>

                                <div id="circulation" class="row form-group">
                                    <div class="col-md-4">
                                         <label  for="circulation">Date de première mise en circulation</label>
                                    </div>
                                     <div class="col-md-8">
                                         <input type="date" name="circulation" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4">
                                         <label  for="serial">N de série</label>
                                         </div>
                                     <div class="col-md-8">
                                        <input type="text" name="serial" class="form-control" placeholder="Numéro de série du produit">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4">
                                         <label  for="file">Fichier</label>
                                         </div>
                                     <div class="col-md-8">
                                        <input type="file" name="file" class="form-control" >
                                        Téléchargement des documents ici. vous avez la possibilité de nous transmettre ces documents par whatsapp suivie de votre code client a nos
                                        service.
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label for="contenu">Contenu de votre élément</label>
                                        </div>
                                     <div class="col-md-8">
                                        <input type="file" name="contenu" class="form-control" >
                                        Vous avez la possibilité de nous transmettre ces documents par whatsapp suivie de votre code
                                        client a nos service.
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label  for="photo">Photos du bien</label>
                                        </div>
                                     <div class="col-md-8">
                                        <input type="file" name="photo" class="form-control" placeholder="Photos du bien : vous avez la possibilité de nous transmettre ces documents par whatsapp suivie de votre code client a nos service.">
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label   for="transitaire">Avez vous un transitaire</label>
                                        </div>
                                     <div class="col-md-8">
                                       <select  name="transitaire" class="form-control" >
                                           
                                           <option value="0">Non</option>
                                           <option value="1">Oui</option>

                                       </select>
                                        
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label   for="relationPart">Voulez vous une mise en relation avec un de nos partenaires</label>
                                        </div>
                                     <div class="col-md-8">
                                         <select  name="relationPart" class="form-control" >
                                           
                                           <option value="0">Non</option>
                                           <option value="1">Oui</option>

                                       </select>
                                        
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label  for="declarant">Avez vous un déclarant</label>
                                        
                                        </div>
                                     <div class="col-md-8">
                                         <select id="declarant" name="declarant" class="form-control" >
                                           
                                           <option value="0">Non</option>
                                           <option value="1">Oui</option>

                                       </select>
                                      
                                    </div>
                                </div>
                            <div id="adresseDeclarant" class="row form-group">
                                    <div class="col-md-4">
                                        <label  for="adresseDeclarant">Adresse et contact du déclarant</label>
                                        
                                        </div>
                                     <div class="col-md-8">

                                        <input type="text"  name="adresseDeclarant" class="form-control" placeholder="adresse et contact renseignement, non obligatoire">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label   for="relPartDec">Voulez vous une mise en relation avec un de nos partenaires déclarant</label>
                                        </div>
                                     <div class="col-md-8">
                                         <select name="relPartDec" class="form-control" >
                                           
                                           <option value="0">Non</option>
                                           <option value="1">Oui</option>

                                       </select>
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label  for="cle">souhaitez vous une solution clé en main (prise en charge auprès de la douane et livraison)</label>
                                        </div>
                                     <div class="col-md-8">
                                       <select name="cle" class="form-control" >
                                           
                                           <option value="0">Non</option>
                                           <option value="1">Oui</option>

                                       </select>
                                       
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
                               
                                    <input type="submit" id="step2" class="btn btn-primary pull-right" value="Suivant">
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