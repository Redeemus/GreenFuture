<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Green Future</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="bootstrap/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bootstrap/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Green Future</a>
            </div>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="accueil.php">Accueil</a>
                    </li>
                    <li>
                        <a href="presentation.php">Présentation</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Application <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="eolienne.php">Eolienne</a>
                            </li>
                            <li>
                                <a href="solaire.php">Panneau solaire</a>
                            </li>
                            <li>
                                <a href="eau.php">Récupération d'eaux de puie</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                            <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Notre outil non-polluant
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <a href="outil.html">outil</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Sélectionner votre région</label>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Dimension</label>
                        <select multiple class="form-control">
                            <option>Petite éolienne</option>
                            <option>Grande éolienne</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Quelle période ?</label>
                        <select class="form-control">
                            <option>Hier</option>
                            <option>Depuis 2 semaines</option>
                            <option>Depuis 1 mois</option>
                            <option>Depuis 6 mois</option>
                            <option>Depuis 1 an</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Formes des résultats</label>
                        <select multiple class="form-control">
                            <option>Graphiques</option>
                            <option>Tableaux</option>
                            <option>Graphiques et tableaux</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-default">Submit Button</button>
                <button type="reset" class="btn btn-default">Reset Button</button>
                

                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="bootstrap/js/plugins/morris/raphael.min.js"></script>
    <script src="bootstrap/js/plugins/morris/morris.min.js"></script>
    <script src="bootstrap/js/plugins/morris/morris-data.js"></script>

</body>

</html>

