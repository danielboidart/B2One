<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Controles SPECTASONIC</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="css/css.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

 <?php 
        try 
            {
                $bda = new PDO('mysql:host=localhost;dbname=btwoone','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
                   
/*Humidite */

                    $requetehumidite = $bda->prepare("SELECT pourcent_humidite FROM humidite ORDER BY id_humidite DESC LIMIT 15");
                    $requetehumidite->execute();
                    $resultathumidite = $requetehumidite->fetchAll();

                    $bdb = new PDO('mysql:host=localhost;dbname=btwoone','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

                    $temphumidite = $bdb->prepare("SELECT date_humidite FROM humidite ORDER BY id_humidite DESC LIMIT 15");
                    $temphumidite->execute();
                    $resultattemphumidite = $temphumidite->fetchAll();

                    $bdc = new PDO('mysql:host=localhost;dbname=btwoone','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

                    $heurehumidite = $bdc->prepare("SELECT heure_humidite FROM humidite ORDER BY id_humidite DESC LIMIT 15");
                    $heurehumidite->execute();
                    $resultatheurehumidite = $heurehumidite->fetchAll();
/*Temperature */
                    $bdd = new PDO('mysql:host=localhost;dbname=btwoone','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

                    $requetetemperature = $bdd->prepare("SELECT celsius_temperature FROM temperature ORDER BY id_temperature DESC LIMIT 15");
                    $requetetemperature->execute();
                    $resultattemperature = $requetetemperature->fetchAll();

                    $bde = new PDO('mysql:host=localhost;dbname=btwoone','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

                    $temptemperature = $bde->prepare("SELECT date_temperature FROM temperature ORDER BY id_temperature DESC LIMIT 15");
                    $temptemperature->execute();
                    $resultattemptemperature = $temptemperature->fetchAll();

                    $bdf = new PDO('mysql:host=localhost;dbname=btwoone','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

                    $heuretemperature = $bdf->prepare("SELECT heure_temperature FROM temperature ORDER BY id_temperature DESC LIMIT 15");
                    $heuretemperature->execute();
                    $resultatheuretemperature = $heuretemperature->fetchAll();
/*Vibration */  
                    $bdg = new PDO('mysql:host=localhost;dbname=btwoone','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

                    $requetevibration = $bdg->prepare("SELECT valeur_vibration FROM vibration ORDER BY id_vibration DESC LIMIT 15");
                    $requetevibration->execute();
                    $resultatvibration = $requetevibration->fetchAll();

                    $bdh = new PDO('mysql:host=localhost;dbname=btwoone','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

                    $tempvibration = $bdh->prepare("SELECT date_vibration FROM vibration ORDER BY id_vibration DESC LIMIT 15");
                    $tempvibration->execute();
                    $resultattempvibration = $tempvibration->fetchAll();

                    $bdi = new PDO('mysql:host=localhost;dbname=btwoone','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

                    $heurevibration = $bdi->prepare("SELECT heure_vibration FROM vibration ORDER BY id_vibration DESC LIMIT 15");
                    $heurevibration->execute();
                    $resultatheurevibration = $heurevibration->fetchAll();
/*Hall */
                    $bdj = new PDO('mysql:host=localhost;dbname=btwoone','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

                    $requetehall = $bdj->prepare("SELECT valeur_hall FROM hall ORDER BY id_hall DESC LIMIT 15");
                    $requetehall->execute();
                    $resultathall = $requetehall->fetchAll();

                    $bdk = new PDO('mysql:host=localhost;dbname=btwoone','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

                    $temphall = $bdk->prepare("SELECT date_hall FROM hall ORDER BY id_hall DESC LIMIT 15");
                    $temphall->execute();
                    $resultattemphall = $temphall->fetchAll();

                    $bdl = new PDO('mysql:host=localhost;dbname=btwoone','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

                    $heurehall = $bdl->prepare("SELECT heure_hall FROM hall ORDER BY id_hall DESC LIMIT 15");
                    $heurehall->execute();
                    $resultatheurehall = $heurehall->fetchAll();




            } 

        catch (PDOException $e) 
            {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }
    ?>
    


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
                <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo" id="logo"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Mon Compte <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                    <!--
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                    -->
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                <div class ="navbar-brand"> <img src="img/bouton.png" id="bouton"> </div>
                <li class ="volumeimg">
                        <img src="http://culturesciencesphysique.ens-lyon.fr/icones/son.png" alt="son" />   
                    </li>
                        <div class="volume" title="Set volume"> <span class="volumeBar"></span></div>                    
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-bar-chart-o"></i> Température</a>
                    </li>
                    <li>
                        <a href="humidite.php"><i class="fa fa-fw fa-bar-chart-o"></i> Humidité</a>
                    </li>
                    <li>
                        <a href="vibration.php"><i class="fa fa-fw fa-bar-chart-o"></i> Vibration</a>
                    </li>
                    <li>
                        <a href="hall.php"><i class="fa fa-fw fa-bar-chart-o"></i> Hall</a>
                    </li>
                    <!--<li>
                        <a href="controles.php"><i class="fa fa-fw fa-bar-chart-o"></i> Controles</a>
                    </li>-->
                    <li class="active">
                        <a href="historique.php"><i class="fa fa-fw fa-table"></i> Historique
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <!--
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Historique
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-fw fa-bar-chart-os"></i>Historique
                            </li>
                        </ol>
                    </div>
                </div>
                -->
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h2>Température</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                            <tr>
                                                
                                                <th>Date</th>
                                                <th>Heure</th>
                                                <th>Température</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td><?php echo($resultattemptemperature[0][0]) ?></td>
                                                <td><?php echo($resultatheuretemperature[0][0]) ?></td>
                                                <td><?php echo($resultattemperature[0][0]) ?> °C</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemptemperature[1][0]) ?></td>
                                                <td><?php echo($resultatheuretemperature[1][0]) ?></td>
                                                <td><?php echo($resultattemperature[1][0]) ?> °C</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemptemperature[2][0]) ?></td>
                                                <td><?php echo($resultatheuretemperature[2][0]) ?></td>
                                                <td><?php echo($resultattemperature[2][0]) ?> °C</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemptemperature[3][0]) ?></td>
                                                <td><?php echo($resultatheuretemperature[3][0]) ?></td>
                                                <td><?php echo($resultattemperature[3][0]) ?> °C</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemptemperature[4][0]) ?></td>
                                                <td><?php echo($resultatheuretemperature[4][0]) ?></td>
                                                <td><?php echo($resultattemperature[4][0]) ?> °C</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemptemperature[5][0]) ?></td>
                                                <td><?php echo($resultatheuretemperature[5][0]) ?></td>
                                                <td><?php echo($resultattemperature[5][0]) ?> °C</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemptemperature[6][0]) ?></td>
                                                <td><?php echo($resultatheuretemperature[6][0]) ?></td>
                                                <td><?php echo($resultattemperature[6][0]) ?> °C</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemptemperature[7][0]) ?></td>
                                                <td><?php echo($resultatheuretemperature[7][0]) ?></td>
                                                <td><?php echo($resultattemperature[7][0]) ?> °C</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemptemperature[8][0]) ?></td>
                                                <td><?php echo($resultatheuretemperature[8][0]) ?></td>
                                                <td><?php echo($resultattemperature[8][0]) ?> °C</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemptemperature[9][0]) ?></td>
                                                <td><?php echo($resultatheuretemperature[9][0]) ?></td>
                                                <td><?php echo($resultattemperature[9][0]) ?> °C</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemptemperature[10][0]) ?></td>
                                                <td><?php echo($resultatheuretemperature[10][0]) ?></td>
                                                <td><?php echo($resultattemperature[10][0]) ?> °C</td>
                                            </tr>
                                        </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2>Humidité</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                            <tr>
                                                
                                                <th>Date</th>
                                                <th>Heure</th>
                                                <th>Température</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphumidite[0][0]) ?></td>
                                                <td><?php echo($resultatheurehumidite[0][0]) ?></td>
                                                <td><?php echo($resultathumidite[0][0]) ?> %</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphumidite[1][0]) ?></td>
                                                <td><?php echo($resultatheurehumidite[1][0]) ?></td>
                                                <td><?php echo($resultathumidite[1][0]) ?> %</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphumidite[2][0]) ?></td>
                                                <td><?php echo($resultatheurehumidite[2][0]) ?></td>
                                                <td><?php echo($resultathumidite[2][0]) ?> %</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphumidite[3][0]) ?></td>
                                                <td><?php echo($resultatheurehumidite[3][0]) ?></td>
                                                <td><?php echo($resultathumidite[3][0]) ?> %</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphumidite[4][0]) ?></td>
                                                <td><?php echo($resultatheurehumidite[4][0]) ?></td>
                                                <td><?php echo($resultathumidite[4][0]) ?> %</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphumidite[5][0]) ?></td>
                                                <td><?php echo($resultatheurehumidite[5][0]) ?></td>
                                                <td><?php echo($resultathumidite[5][0]) ?> %</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphumidite[6][0]) ?></td>
                                                <td><?php echo($resultatheurehumidite[6][0]) ?></td>
                                                <td><?php echo($resultathumidite[6][0]) ?> %</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphumidite[7][0]) ?></td>
                                                <td><?php echo($resultatheurehumidite[7][0]) ?></td>
                                                <td><?php echo($resultathumidite[7][0]) ?> %</td>
                                            </tr>

                                            <tr>
                                                
                                                <td><?php echo($resultattemphumidite[8][0]) ?></td>
                                                <td><?php echo($resultatheurehumidite[8][0]) ?></td>
                                                <td><?php echo($resultathumidite[8][0]) ?> %</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphumidite[9][0]) ?></td>
                                                <td><?php echo($resultatheurehumidite[9][0]) ?></td>
                                                <td><?php echo($resultathumidite[9][0]) ?> %</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphumidite[10][0]) ?></td>
                                                <td><?php echo($resultatheurehumidite[10][0]) ?></td>
                                                <td><?php echo($resultathumidite[10][0]) ?> %</td>
                                            </tr>
                                        </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h2>Vibration</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                            <tr>
                                                
                                                <th>Date</th>
                                                <th>Heure</th>
                                                <th>Température</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td><?php echo($resultattempvibration[0][0]) ?></td>
                                                <td><?php echo($resultatheurevibration[0][0]) ?></td>
                                                <td><?php echo($resultatvibration[0][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattempvibration[1][0]) ?></td>
                                                <td><?php echo($resultatheurevibration[1][0]) ?></td>
                                                <td><?php echo($resultatvibration[1][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattempvibration[2][0]) ?></td>
                                                <td><?php echo($resultatheurevibration[2][0]) ?></td>
                                                <td><?php echo($resultatvibration[2][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattempvibration[3][0]) ?></td>
                                                <td><?php echo($resultatheurevibration[3][0]) ?></td>
                                                <td><?php echo($resultatvibration[3][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattempvibration[4][0]) ?></td>
                                                <td><?php echo($resultatheurevibration[4][0]) ?></td>
                                                <td><?php echo($resultatvibration[4][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattempvibration[5][0]) ?></td>
                                                <td><?php echo($resultatheurevibration[5][0]) ?></td>
                                                <td><?php echo($resultatvibration[5][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattempvibration[6][0]) ?></td>
                                                <td><?php echo($resultatheurevibration[6][0]) ?></td>
                                                <td><?php echo($resultatvibration[6][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattempvibration[7][0]) ?></td>
                                                <td><?php echo($resultatheurevibration[7][0]) ?></td>
                                                <td><?php echo($resultatvibration[7][0]) ?> Hz</td>
                                            </tr>

                                            <tr>
                                                
                                                <td><?php echo($resultattempvibration[8][0]) ?></td>
                                                <td><?php echo($resultatheurevibration[8][0]) ?></td>
                                                <td><?php echo($resultatvibration[8][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattempvibration[9][0]) ?></td>
                                                <td><?php echo($resultatheurevibration[9][0]) ?></td>
                                                <td><?php echo($resultatvibration[9][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattempvibration[10][0]) ?></td>
                                                <td><?php echo($resultatheurevibration[10][0]) ?></td>
                                                <td><?php echo($resultatvibration[10][0]) ?> Hz</td>
                                            </tr>

                                        </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-6">
                        <h2>Hall</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                            <tr>
                                                
                                                <th>Date</th>
                                                <th>Heure</th>
                                                <th>Température</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphall[0][0]) ?></td>
                                                <td><?php echo($resultatheurehall[0][0]) ?></td>
                                                <td><?php echo($resultathall[0][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphall[1][0]) ?></td>
                                                <td><?php echo($resultatheurehall[1][0]) ?></td>
                                                <td><?php echo($resultathall[1][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphall[2][0]) ?></td>
                                                <td><?php echo($resultatheurehall[2][0]) ?></td>
                                                <td><?php echo($resultathall[2][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphall[3][0]) ?></td>
                                                <td><?php echo($resultatheurehall[3][0]) ?></td>
                                                <td><?php echo($resultathall[3][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphall[4][0]) ?></td>
                                                <td><?php echo($resultatheurehall[4][0]) ?></td>
                                                <td><?php echo($resultathall[4][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphall[5][0]) ?></td>
                                                <td><?php echo($resultatheurehall[5][0]) ?></td>
                                                <td><?php echo($resultathall[5][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphall[6][0]) ?></td>
                                                <td><?php echo($resultatheurehall[6][0]) ?></td>
                                                <td><?php echo($resultathall[6][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphall[7][0]) ?></td>
                                                <td><?php echo($resultatheurehall[7][0]) ?></td>
                                                <td><?php echo($resultathall[7][0]) ?> Hz</td>
                                            </tr>
                                             <tr>
                                                
                                                <td><?php echo($resultattemphall[8][0]) ?></td>
                                                <td><?php echo($resultatheurehall[8][0]) ?></td>
                                                <td><?php echo($resultathall[8][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphall[9][0]) ?></td>
                                                <td><?php echo($resultatheurehall[9][0]) ?></td>
                                                <td><?php echo($resultathall[9][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemphall[10][0]) ?></td>
                                                <td><?php echo($resultatheurehall[10][0]) ?></td>
                                                <td><?php echo($resultathall[10][0]) ?> Hz</td>
                                            </tr>
                                        </tbody>
                            </table>
                        </div>
                    </div>
                <!-- /.row -->
<!--
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Controles</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Page</th>
                                        <th>Visits</th>
                                        <th>% New Visits</th>
                                        <th>Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="active">
                                        <td>/index.html</td>
                                        <td>1265</td>
                                        <td>32.3%</td>
                                        <td>$321.33</td>
                                    </tr>
                                    <tr class="success">
                                        <td>/about.html</td>
                                        <td>261</td>
                                        <td>33.3%</td>
                                        <td>$234.12</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>/sales.html</td>
                                        <td>665</td>
                                        <td>21.3%</td>
                                        <td>$16.34</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>/blog.html</td>
                                        <td>9516</td>
                                        <td>89.3%</td>
                                        <td>$1644.43</td>
                                    </tr>
                                    <tr>
                                        <td>/404.html</td>
                                        <td>23</td>
                                        <td>34.3%</td>
                                        <td>$23.52</td>
                                    </tr>
                                    <tr>
                                        <td>/services.html</td>
                                        <td>421</td>
                                        <td>60.3%</td>
                                        <td>$724.32</td>
                                    </tr>
                                    <tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
                                        <td>$126.34</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                -->
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
