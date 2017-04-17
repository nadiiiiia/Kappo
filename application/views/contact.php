<?php include('include/head.php'); ?>
<body>

    <div class="gtco-loader"></div>

    <div id="page">


        <div class="page-inner">
            <?php include('include/navigation.php'); ?>

            <?php include('include/headerContact.php'); ?>






            <div class="gtco-section border-bottom">
                <div class="gtco-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6 animate-box">
                                <h3>Contactez-nous</h3>
                                <form action="#">
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="sr-only" for="name">Nom</label>
                                            <input type="text" id="name" class="form-control" placeholder="Nom">
                                        </div>

                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="sr-only" for="email">E-mail</label>
                                            <input type="text" id="email" class="form-control" placeholder="E-mail">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="sr-only" for="subject">Objet</label>
                                            <input type="text" id="subject" class="form-control" placeholder="Objet">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="sr-only" for="message">Message</label>
                                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Votre message ici"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Envoyer" class="btn btn-primary">
                                    </div>

                                </form>		
                            </div>
                            <div class="col-md-5 col-md-push-1 animate-box">

                                <div class="gtco-contact-info">
                                    <h3>Informations de Contact</h3>
                                    <ul>
                                        <li class="address">198 Route de Mpopi, <br> Douala</li>
                                        <li class="phone"><a href="tel://+ 237 691989767">+ 237 691989767</a>  </li>
										 <li class="phone "><a href="tel://+ 237 691989767">+ 237 691989767</a> (WhatsApp) </li>
                                        <li class="email"><a href="mailto:contact@kappo.fr">contact@kappo.fr</a></li>
                                        <li class="url"><a href="http://www.kappo.fr  ">www.kappo.fr  </a></li>
                                    </ul>
                                </div>


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
	</body>
</html>



