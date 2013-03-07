<div id="topbar" class="clearfix">

	<a href="<?php echo $login_fabrica_site?>" target='_blank' <?=$logo_action?> class="logo round-all">
		<img src="<?php echo $url_logo?>"  <?php echo $logo_attr?> alt="" />AAAAA<?php echo $url_logo?>
	</a>

	<div class="user_box dark_box clearfix" rel='tooltip' data-html='true' title='Informa��es do usu�rio.<br />Clique na imagem para ver seu perfil!'
		 data-placement='left' data-html='true'>
		<img src='<?php echo $usuario_imagem?>' id='adm_foto' width="55" class="img-rounded" alt="Profile Pic" onClick='toggleCustomizePopUp("admCfgFrm")' />
		<h2><?php echo $usuario_nome ?></h2>
		<h3><a class="text_shadow bold" href="#"><?php echo $login_login?></a></h3>
		<ul>
			<li><a href='javascript:toggleCustomizePopUp("admCfgFrm")' rel='tooltip' data-placement='bottom' title='Seu perfil de usu�rio'>Perfil</a><span class="divider">|</span></li>
			<li><a href="admin_senha_n.php?mostrar=so_usuario" rel='tooltip' data-placement='bottom' title='Permiss�es e dados do cadastro'>Cadastro</a><span class="divider">|</span></li>
			<!-- <li><a href="logout.php" class="dialog_button" rel='tooltip' data-placement='bottom' title='Encerrar sess�o.'>Sair</a></li> -->
		</ul>
	</div><!-- #user_box -->
</div><!-- #topbar -->
