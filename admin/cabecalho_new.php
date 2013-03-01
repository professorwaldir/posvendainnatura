<?php
$cache_s3 = array(
				'css'=>'http://cache.kadabra.me/themes/adminica/styles',
				'bootstrap'=>'http://cache.kadabra.me/bootstrap',
				'js'=>'http://cache.kadabra.me/themes/adminica/scripts',
				'jquery'=>'http://cache.kadabra.me/jquery',
				'images'=>'http://cache.kadabra.me/themes/adminica/images'

			);

$layout_menu = "teste";
switch ($layout_menu){
	case "gerencia":
		$nav_position = 1; $color_theme = "theme_red.css";     break;
	case "callcenter":
		$nav_position = 2; $color_theme = "theme_blue.css";    break;
	case "cadastro":
		$nav_position = 3; $color_theme = "theme_navy.css";    break;
	case "tecnica":
		$nav_position = 4; $color_theme = "theme_magenta.css"; break;
	case "financeiro":
		$nav_position = 5; $color_theme = "theme_green.css";   break;
	case "auditoria":
		$nav_position = 6; $color_theme = "theme_brown.css";   break;

	default:
		$color_theme = "switcher.css"; break;
}

include_once 'menu.class.php';
$mm = new MenuPosvenda($menu);
$menuDir = "menus/";
/**
 * Link do Help-Desk
 **/
include 'template/includes/core/document_head.php';
?>
	<div id="wrapper" data-adminica-nav-top="<?php echo $nav_position;?>" data-adminica-side-top="5" data-adminica-side-inner="2" class='has_fixed_bar'>
		<?php include 'template/includes/components/topbar.php' ?>
		<?php include 'template/includes/components/navbar-fixed.php' ?>

	<script type="text/javascript">document.relogio();</script>
		<div class="main_container container_16">
			<?php include 'template/includes/components/navigation.php';?>
		</div>
		<div id="tcCal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Calendário Telecontrol 2013</h3>
		  </div>
		  <div class="modal-body">
			<img src='../imagens/calendario_telecontrol_completo.jpg' alt='Calendário 2013' />
		  </div>
		</div>
		<div id='tcCal'></div>
		<div id="main_container" class="main_container container_16">

