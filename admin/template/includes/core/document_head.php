<!DOCTYPE HTML>
<!--[if lt IE 7]> <html lang="en-us" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en-us" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en-us" class="no-js ie8"> <![endif]-->
<!--[if IE 9]>    <html lang="en-us" class="no-js ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="iso-8859-1">

		<title><?php echo $title ?></title>

  		<meta name="description" content="http://themeforest.net/item/adminica-the-professional-admin-template/160638">
  		<meta name="author" content="Oisin Lavery - Tricycle Labs">

	<!-- iPhone, iPad and Android specific settings -->

		<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1;">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<link href="template/images/interface/iOS_icon.png" rel="apple-touch-icon">

	<!-- Styles -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

		<link rel="stylesheet" href="<?=$cache_s3['css']?>/adminica/main.css">
		<link rel="stylesheet" href="<?=$cache_s3['css']?>/adminica/grid.css">
		<link rel="stylesheet" href="<?=$cache_s3['css']?>/adminica/mobile.css">

		<link rel="stylesheet" href="<?=$cache_s3['css']?>/plugins/bootstrap/bootstrap.css">


		<!-- Style Switcher

		The following stylesheet links are used by the styleswitcher to allow for dynamically changing the Adminica layout, nav, skin, theme and background.
		Styleswitcher documentation: http://style-switcher.webfactoryltd.com/documentation/

		layout_switcher.php	: layout - fluid by default.								(eg. <?=$cache_s3['css']?>/themes/layout_switcher.php?default=layout_fixed.css)
		nav_switcher.php	: header and sidebar nav  positioning - sidebar by default.	(eg. <?=$cache_s3['css']?>/themes/nav_switcher.php?default=header_top.css)
		skin_switcher.php 	: Adminica skin - dark by default.							(eg. <?=$cache_s3['css']?>/themes/skin_switcher.php?default=theme_light.css)
		theme_switcher.php 	: colour theme - black/grey by default.						(eg. <?=$cache_s3['css']?>/themes/theme_switcher.php?default=theme_red.css)
		bg_switcher.php 	: background image - dark boxes by default.					(eg. <?=$cache_s3['css']?>/themes/bg_switcher.php?default=bg_honeycomb.css)	-->

		<link rel="stylesheet" href="<?=$cache_s3['css']?>/themes/layout_fluid.css" >
		<!-- <link rel="stylesheet" href="<?=$cache_s3['css']?>/themes/nav_switcher.php?default=switcher" > -->
		<link rel="stylesheet" href="<?=$cache_s3['css']?>/themes/skin_light.css" >
		<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/start/jquery-ui.css">
		<link rel="stylesheet" href="<?=$cache_s3['css']?>/themes/<?php echo $color_theme?>" >
		<link rel="stylesheet" href="<?=$cache_s3['css']?>/themes/nav_top.css" >

		<link rel="stylesheet" href="<?=$cache_s3['css']?>/themes/switcher.css"> <!-- Styles for the styleswitcher bar  -->
		<link rel="stylesheet" href="<?=$cache_s3['css']?>/adminica/colours.css"> <!-- this file overrides the theme's default colour scheme, allowing more colour combinations (see layout example page) -->


		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<!-- <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js" type="text/javascript"></script> -->
		<script src="<?=$cache_s3['js']?>/prefixfree/prefixfree.js"></script>
		<script src="<?=$cache_s3['bootstrap']?>/js/bootstrap.min.js"></script>
		<!-- <script src="menus/bootstrap.min.js" type="text/javascript"></script> -->

		<!-- <script src="<?=$cache_s3['js']?>/adminica/adminica_ui.js"></script> -->
		<script src="template/scripts/adminica/adminica_ui.js" type="text/javascript"></script>
		<script src="<?=$cache_s3['js']?>/adminica/adminica_mobile.js"></script>
		<script src="<?=$cache_s3['js']?>/adminica/adminica_load.js"></script>

		<style type="text/css">
		/* Estilos que modificam o padrão do Bootstrap/tema */
			@font-face {
			  font-family: 'DigiFace';
			  font-style: normal;
			  font-weight: normal;
			  src: url("http://192.168.0.199/chamados/s3/admin/menus/digiface.ttf") format("truetype");
			}
			a.brand img {
				height: 28px;
				float: left;
				position: relative;
				top: -3px;
				margin-right: 1ex;
			}
			#topbar a.logo {
				display: inline-block;
				background: white url() !important;
				line-height: 70px;
				margin: 1ex auto auto 1em;
				border: 4px solid white;
				border-radius: 8px;
				box-shadow: 0 0 4px black;
				background-color: white!important;
				width: 220px;
				height: 72px;
				text-align: center;
				padding: 0;
			}
			#date_time_bar_applet {
				font-size: 15px;
				font-family: Digiface;
				margin: auto 0.5ex !important;
				/* Relógio verde tradicional... */
				color: lightGreen;
				text-shadow: 0 0 4px #afa;
				/* Relógio branco, mais acorde com o layout */
				color: white;
				text-shadow: 0 0 3px #fff;
				text-align: center;
				line-height: 36px;
				vertical-align: middle;
				display: inline-block;
			}
			_img {max-width:inherit}
			*img {max-width:inherit}
			table.table td code {
				background-color: white;
				color:            #444;
				white-space:      nowrap;
			}
			div#logosTech img {
				height: 15px;
				margin-right:3px;
				-webkit-transition: height 0.2s ease-out 0.1s;
				line-height: 32px;
				vertical-align: bottom;
			}
			div#logosTech img:hover {
				height: 30px;
			}
		</style>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>script>
    <![endif]-->

		<script type="text/javascript">
		var days = {
			'pt_BR': {0:'Dom', 1:'Seg', 2:'Ter', 3:'Qua', 4:'Qui', 5:'Sex', 6:'Sab'},
			'es':    {0:'Dom', 1:'Lun', 2:'Mar', 3:'Mie', 4:'Jue', 5:'Vie', 6:'Sab'},
			'en':    {0:'Sun', 1:'Mon', 2:'Tue', 3:'Wed', 4:'Thu', 5:'Fri', 6:'Sat'}
		}
		/*****************************************************************
		Nome da Função : displayText
				Apresenta em um campo as informações de ajuda de onde
				o cursor estiver posicionado.
		******************************************************************/
		function displayText( sText ) {

			if (document.getElementById("displayArea")) {
				document.getElementById("displayArea").innerHTML = sText;
			}

		}

		function atualiza_dado(admin) {

			window.open('atualiza_dado.php?admin='+admin, 'ouverture', 'toolbar=no, status=yes, scrollbars=yes, resizable=no, width=400, height=500');

		}

		function toggleCustomizePopUp(iFrameID) {
			var popUp = document.getElementById(iFrameID);
			$("#"+iFrameID).toggle('fast');
		}

		document.relogio = function(){
			function timeUpdate(){
				var timeDate = new Date();
				var diaSem = days.pt_BR[timeDate.getDay()];
				var data = timeDate.toISOString().replace(/\d{4}.(\d{2}).(\d{2}).*/, "$2 do $1");
				var hora = timeDate.toTimeString().substr(0,8);
				//document.getElementById('date_time_bar_applet').innerHTML = diaSem + ' ' + data + "<br />" + hora;
				document.getElementById('date_time_bar_applet').innerHTML =  hora;
				document.getElementById('date_time_bar_applet').title = diaSem + ', ' + data;
			}
			var t = window.setInterval(timeUpdate, 1000);
		}

		</script>

		<? if (in_array($login_fabrica,array(14,43,66))) { ?>
		<script type="text/javascript">
		function setCookie(c_name,value,path,expiredays)
		{
			var exdate=new Date();
			exdate.setDate(exdate.getDate()+expiredays);
			var expireDate = (expiredays==null) ? "" : ";expires="+exdate.toGMTString();
			var c_path     = (path == null) ? "" : ";path="+path;
			document.cookie=c_name+ "=" +escape(value)+c_path;
			window.location.reload();
		}

		function trocaFabrica(novoLogin) {
			login = novoLogin.split("|");
			setCookie("cook_admin",login[0]);
			setCookie("cook_fabrica",login[1]);
		}
		<?}?>

		</script>
	</head>
	<body>
