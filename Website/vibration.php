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

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

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
                $bdd = new PDO('mysql:host=localhost;dbname=btwoone','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
                          
                    $requete = $bdd->prepare("SELECT valeur_vibration FROM vibration ORDER BY id_vibration DESC LIMIT 10");
                    $requete->execute();
                    $resultat = $requete->fetchAll();

                    $bde = new PDO('mysql:host=localhost;dbname=btwoone','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

                    $temp = $bde->prepare("SELECT date_vibration FROM vibration ORDER BY id_vibration DESC LIMIT 10");
                    $temp->execute();
                    $resultattemp = $temp->fetchAll();

                    $bda = new PDO('mysql:host=localhost;dbname=btwoone','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

                    $heure = $bde->prepare("SELECT heure_vibration FROM vibration ORDER BY id_vibration DESC LIMIT 10");
                    $heure->execute();
                    $resultatheure = $heure->fetchAll();


                                    
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
                    <li class="active">
                        <a href="vibration.php"><i class="fa fa-fw fa-bar-chart-o"></i> Vibration</a>
                    </li>
                    <li>
                        <a href="hall.php"><i class="fa fa-fw fa-bar-chart-o"></i> Hall</a>
                    </li>
                    <!--
                    <li>
                        <a href="controles.php"><i class="fa fa-fw fa-bar-chart-o"></i> Controles</a>
                    </li>
                    -->
                    <li>
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
                            Vibration
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-bar-chart-o"></i> Vibration
                            </li>
                        </ol>
                    </div>
                </div>
            -->
                <!-- /.row -->

               
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>Graphique Vibration</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-vib"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                   
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Tableau Vibration</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                
                                                <th>Date</th>
                                                <th>Heure</th>
                                                <th>Vibration</th>
                                            </tr>
                                        </thead>
                                       <tbody>
                                            <tr>
                                                
                                                <td><?php echo($resultattemp[0][0]) ?></td>
                                                <td><?php echo($resultatheure[0][0]) ?></td>
                                                <td><?php echo($resultat[0][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemp[1][0]) ?></td>
                                                <td><?php echo($resultatheure[1][0]) ?></td>
                                                <td><?php echo($resultat[1][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemp[2][0]) ?></td>
                                                <td><?php echo($resultatheure[2][0]) ?></td>
                                                <td><?php echo($resultat[2][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemp[3][0]) ?></td>
                                                <td><?php echo($resultatheure[3][0]) ?></td>
                                                <td><?php echo($resultat[3][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemp[4][0]) ?></td>
                                                <td><?php echo($resultatheure[4][0]) ?></td>
                                                <td><?php echo($resultat[4][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemp[5][0]) ?></td>
                                                <td><?php echo($resultatheure[5][0]) ?></td>
                                                <td><?php echo($resultat[5][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemp[6][0]) ?></td>
                                                <td><?php echo($resultatheure[6][0]) ?></td>
                                                <td><?php echo($resultat[6][0]) ?> Hz</td>
                                            </tr>
                                            <tr>
                                                
                                                <td><?php echo($resultattemp[7][0]) ?></td>
                                                <td><?php echo($resultatheure[7][0]) ?></td>
                                                <td><?php echo($resultat[7][0]) ?> Hz</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script type = "text/javascript">


    $(function () {

    var vibration1 = '<?PHP echo $resultat[0][0];?>';
    var vibration2 = '<?PHP echo $resultat[1][0];?>';
    var vibration3 = '<?PHP echo $resultat[2][0];?>';
    var vibration4 = '<?PHP echo $resultat[3][0];?>';
    var vibration5 = '<?PHP echo $resultat[4][0];?>';
    var vibration6 = '<?PHP echo $resultat[5][0];?>';
    var DateAujour = new Date();
    var DateAujour1 = DateAujour.getTime() - 5 * 60 * 1000;
    var DateAujour2 = DateAujour.getTime() - 4 * 60 * 1000;
    var DateAujour3 = DateAujour.getTime() - 3 * 60 * 1000;
    var DateAujour4 = DateAujour.getTime() - 2 * 60 * 1000;
    var DateAujour5 = DateAujour.getTime() - 60 * 1000;
    var DateAujour6 = DateAujour.getTime();

    // Area Chart
    new Morris.Line({
        element: 'morris-area-vib',
        data: [{
            period: DateAujour1,
            Vibmax: 50,
            Vibration: vibration6,
            Vibmin: 15
        }, {
            period: DateAujour2,
            Vibmax: 50,
            Vibration: vibration5,
            Vibmin: 15
        }, {
            period: DateAujour3,
            Vibmax: 50,
            Vibration: vibration4,
            Vibmin: 15
        }, {
            period: DateAujour4,
            Vibmax: 50,
            Vibration: vibration3,
            Vibmin: 15
        }, {
            period: DateAujour5,
            Vibmax: 50,
            Vibration: vibration2,
            Vibmin: 15
        }, {
            period: DateAujour6,
            Vibmax: 50,
            Vibration: vibration1,
            Vibmin: 15


        }],
        xkey: 'period',
        ykeys: ['Vibmax','Vibration','Vibmin'],
        labels: ['Vibmax','Vibration','Vibmin'],
        xLabels: ['minutes'],
        pointSize: 2,
        lineColors: ['#ff0000', '#999999', '#0000CC'],
        hideHover: 'auto',
        //parseTime: false,
        resize: true
    });

    });

</script>

</body>

</html>
