<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Shop Homepage - Start Bootstrap Template</title>

        <!-- Bootstrap Core CSS -->
        <!-- jqueryLoading -  -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/bootstrap.min.css">
        <!-- Theme CSS -->
        <link href="<?php echo base_url(); ?>assets/dist/css/freelancer.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/dist/css/half-slider.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/shop-homepage.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/shop-item.css">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>assets/dist/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body style="background-image: url(assets/images/fondo.jpg);" >


        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#page-top">Traslados Cataratas</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="#">Inicio</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#portfolio">Sobre Nosotros</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Excusiones <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li ><a style="color: #1c1a1a;" href="#">Cataratas Argentinas</li>
                                <li><a style="color: #1c1a1a;"href="#">La Aripuca</a></li>
                                <li><a style="color: #1c1a1a;"href="#">Güira Oga </a></li>
                                <li><a style="color: #1c1a1a;"href="#">Biocentro</a></li>
                                <li><a style="color: #1c1a1a;"href="#">Selva Viva</a></li>
                                <li><a style="color: #1c1a1a;"href="#">Espiritus de la selva</a></li>
                                <li><a style="color: #1c1a1a;"href="#">Jardín de Picaflores</a></li>


                                <li role="separator" class="divider"></li>
                                <li><a style="color: #1c1a1a;"href="#">Bar de Hielo</a></li>
                                <li><a style="color: #1c1a1a;"href="#">Catamaran por el Rio Parana</a></li>
                                <li  role="separator" class="divider"></li>
                                <li><a style="color: #1c1a1a;"href="#">Iguazu Forest</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Traslados <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li ><a style="color: #1c1a1a;" href="#">Minas de Wanda y Ruinas de San Ignacio</li>
                                <li><a style="color: #1c1a1a;"href="#">Excuriones Tres Paises</a></li>
                                <li><a style="color: #1c1a1a;"href="#">Minas de Wanda </a></li>                           
                                <li role="separator" class="divider"></li>
                                <li><a style="color: #1c1a1a;"href="#">Cataratas Brasileras</a></li>
                                <li><a style="color: #1c1a1a;"href="#">Parque de Aves</a></li>
                                <li><a style="color: #1c1a1a;"href="#">Represa Hidroelectrica Itaipu</a></li>
                              <li  role="separator" class="divider"></li>
                               <li><a style="color: #1c1a1a;"href="#">Compras en Ciudad del Este</a></li>
                             
                            </ul>
                        </li>
                        <li class="page-scroll">
                            <a href="#about">Info Util</a>
                        </li>
                        <li class="page-scroll">
                            <a href="index.php/Contact">Contacto</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>


        <!--
             Navigation 
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                     Brand and toggle get grouped for better mobile display 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Traslados Iguazu</a>
                    </div>
                     Collect the nav links, forms, and other content for toggling 
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">Sobre Nosotros</a>
                            </li>
                            <li>
                                <a href="#">Traslados</a>
                            </li>
                            <li>
                                <a href="#">Contacto</a>
                            </li>
                        </ul>
                    </div>
                     /.navbar-collapse 
                </div>
                 /.container 
            </nav>-->