<?php include('include/head.php'); ?>
<body>

    <div class="gtco-loader"></div>

    <div id="page">


        <div class="page-inner">
            <?php include('include/navigation.php'); ?>
            <?php include('include/headerDossiers.php'); ?>


            <div id="gtco-features" class="border-bottom">
                <div class="gtco-container">


                    <div class="row">
                        <div class="col-md-12 animate-box ">

                            <!-- Table -->

                            <div class="panel panel-primary filterable">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Dossiers</h3>
                                    <div class="pull-right">
                                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtre</button>
                                    </div>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr class="filters">
                                            <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                                            <th><input type="text" class="form-control" placeholder="Nom" disabled></th>
                                            <th><input type="text" class="form-control" placeholder="E-mail" disabled></th>
                                            <th><input type="text" class="form-control" placeholder="Username" disabled></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>



                            <!-- End Table -->
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
                                               
											   

