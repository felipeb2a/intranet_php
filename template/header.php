<?php
	require_once('includes/session.php');
/*
	
    if(! $logado){
        header('location:login.php');
        die('Você não tem permissão para acessar essa página!');
    }
  */  

?>

<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	    <title><?=$titleHeader?></title>
	    <link rel="shortcut icon" href="assets/img/header/icon.png" />
	    <link rel="stylesheet" href="assets/css/style.css">
	    <?php include 'functions/function-csv.php'; ?>	    
	</head>

	<body>
	     <nav class="autohide navbar navbar-light navbar-expand-lg bg-white clean-navbar">
		    <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
		        <ul class="navbar-nav ml-auto text-center">

		            <li class="nav-item dropdown" role="presentation" >
		            	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">APACHE</a>
		                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="top: auto;">
		                	<a class="dropdown-item" href="#" target="_blank">Site 1</a>
		                	<a class="dropdown-item" href="#" target="_blank">Site 2</a>
		                	<a class="dropdown-item" href="#" target="_blank">Site 3</a>
		                </div>
		            </li>


		            <li class="nav-item dropdown" role="presentation" >
		            	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">IIS</a>
		                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="top: auto;">
		                	
		                	<a class="dropdown-item" href="#" target="_blank">Site 1</a>
		                	<a class="dropdown-item" href="#" target="_blank">Site 2</a>
		                	<a class="dropdown-item" href="#" target="_blank">Site 3</a>

		                </div>
		            </li>
		            <li class="nav-item dropdown" role="presentation" >
		            	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Rotinas</a>
		                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="top: auto;">
		                	<a class="dropdown-item" href="#" target="_blank">Plantão Final de Semana</a>
		                </div>
		            </li> 
	                <li class="nav-item dropdown" role="presentation" >
		            	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">NAS</a>
		                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="top: auto;">
		                	<a class="dropdown-item" href="#" target="_blank">NAS-01</a>
		                	<a class="dropdown-item" href="#" target="_blank">NAS-02</a>
		                	<a class="dropdown-item" href="#" target="_blank">NAS-03</a>
		                </div>
		            </li>
		            <li class="nav-item" role="presentation">
	                	<a class="nav-link" target="_blank" href="#">GLPI</a>
	                </li>

	                <li class="nav-item dropdown" role="presentation" >
		            	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Monitoramento</a>
		                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="top: auto;">
		                	<a class="dropdown-item" href="#" target="_blank">Zabbix</a>
		                	<a class="dropdown-item" href="#" target="_blank">24x7</a>
		                </div>
		            </li>
		        </ul>
		    </div>
		    <div class="mx-auto my-2 order-0 order-md-1 position-relative">
		        <a class="mx-auto" href="index.php">
		            <img src="assets/img/header/logo.png" width="120" height="auto" class="rounded-circle" loading="lazy" />
		        </a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
		            <span class="navbar-toggler-icon"></span>
		        </button>
		    </div>
		    <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
		        <ul class="navbar-nav mr-auto text-center">
		            <li class="nav-item dropdown" role="presentation" style="padding-left: 2rem;">
		            	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Firewall</a>
		                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="top: auto;">
		                	<a class="dropdown-item" href="#" target="_blank">250</a>
		                	<a class="dropdown-item" href="#" target="_blank">2.240</a>
		                </div>
		            </li>

	                <li class="nav-item dropdown" role="presentation" >
		            	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Info</a>
		                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="top: auto;">
	                		<a class="dropdown-item" href="cemig.php">Cemig</a>
	                		<a class="dropdown-item" href="infointernet.php">Links Internet</a>
	                		<a class="dropdown-item" href="siteshttps.php">Sites HTTPS</a>
	                		<a class="dropdown-item" href="sitesuteis.php">Sites Uteis</a>
	                		<a class="dropdown-item" href="comandosrasp.php">Comandos RASP</a>
	                		<a class="dropdown-item" href="comandoscmd.php">Comandos CMD</a>
	                		<a class="dropdown-item" href="https://teams.live.com/" target="_blank">Teams</a>
	                		<a class="dropdown-item" href="#" target="_blank">ADSELF</a>
		                </div>
		            </li>


		            <li class="nav-item" role="presentation">
	                	<a class="nav-link" href="idracs.php">IDRACs</a>
	                </li>

	                <li class="nav-item dropdown" role="presentation" >
		            	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">PROXYS</a>
		                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="top: auto;">
		                	<a class="dropdown-item" href="proxys.modens.php">MODENS</a>
		                </div>
		            </li>

		            <li class="nav-item dropdown" role="presentation" >
		            	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">E-mails</a>
		                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="top: auto;">
		                	
		                	<h6 class="dropdown-header">Servidores de E-mail</h6>
		                	<a class="dropdown-item" href="#" target="_blank">Servidor 1</a>
		                	<a class="dropdown-item" href="#" target="_blank">Servidor 2</a>

		                	<div class="dropdown-divider"></div>
		                	<h6 class="dropdown-header">Check Blacklist</h6>
		                	<a class="dropdown-item" href="https://mxtoolbox.com/SuperTool.aspx" target="_blank">MX Tool Box</a>

		                	<div class="dropdown-divider"></div>
		                	<a class="dropdown-item" href="https://www.whatsmydns.net/" target="_blank">WhatsMyDns</a>
		                </div>
		            </li>
		            <li class="nav-item" role="presentation">
	                	<a class="nav-link" href="manuais.php">Manuais</a>
	                </li>
		        </ul>
		    </div>
		</nav>

	    <main class="page landing-page">