<div id="topbar" class="clearfix">

	<a href="<?php echo $login_fabrica_site?>" target='_blank' <?=$logo_action?> class="logo round-all">
		<img src="<?php echo $url_logo?>"  <?php echo $logo_attr?> alt="" />
	</a>




	<div class="user_box dark_box clearfix" rel='tooltip' data-html='true' title='Informações do usuário.<br />Clique na imagem para ver seu perfil!'
		 data-placement='left' data-html='true'>
		<img src='<?php echo $usuario_imagem?>' id='adm_foto' width="55" class="img-rounded" alt="Profile Pic" onClick='toggleCustomizePopUp("admCfgFrm")' />
		<h2><?php echo $usuario_nome ?></h2>
		<h3><a class="text_shadow bold" href="#"><?php echo $login_login?></a></h3>
		<ul>
			<li><a href='javascript:toggleCustomizePopUp("admCfgFrm")' rel='tooltip' data-placement='bottom' title='Seu perfil de usuário'>Perfil</a><span class="divider">|</span></li>
			<li><a href="admin_senha_n.php?mostrar=so_usuario" rel='tooltip' data-placement='bottom' title='Permissões e dados do cadastro'>Cadastro</a><span class="divider">|</span></li>
			<!-- <li><a href="logout.php" class="dialog_button" rel='tooltip' data-placement='bottom' title='Encerrar sessão.'>Sair</a></li> -->
		</ul>
	</div><!-- #user_box -->
<? if  (!$sem_menu) {?>
	<iframe src="<?=BI_BACK?>admin_personaliza.php" id='admCfgFrm' frameborder="0"
		  style='width:555px;height:280px;background:transparent;overflow:hide;display:none;' class='pull-right'></iframe>
<?php 
}
if  ($altera_logo_TcNet) {?>
	<iframe src="<?=BI_BACK?>logo_tcnet.php" id='admLogoTCNet' frameborder="0"
		  style='width:666px;height:456px;background:transparent;overflow:hide;display:none;' class='pull-left'></iframe>
<?php 
}?>
</div><!-- #topbar -->
