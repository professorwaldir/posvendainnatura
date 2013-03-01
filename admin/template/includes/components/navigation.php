<div id="nav_top" class="dropdown_menu clearfix round_top">
	<ul class="clearfix">
		<li class="has_dropdown"><a href="menu_gerencia.php"><img src="<?=$cache_s3['images']?>/icons/small/grey/list.png"/><span>Gerência</span></a>
			<ul class="dropdown">
				<?php echo $mm->getDropDown(include("$menuDir/submenu_gerencia.php"))->getDropDownHTML();?>
			</ul>
		</li>
		<li class="has_dropdown"><a href="menu_callcenter.php"><img src="<?=$cache_s3['images']?>/icons/small/grey/list.png"/><span>Callcenter</span></a>
			<ul class="dropdown">
				<?php echo $mm->getDropDown(include("$menuDir/submenu_callcenter.php"))->getDropDownHTML();?>
			</ul>
	
		</li>
		<li class="has_dropdown"><a href="menu_cadastro.php"><img src="<?=$cache_s3['images']?>/icons/small/grey/list.png"/><span>Cadastro</span></a>
			<ul class="dropdown">
				<?php echo $mm->getDropDown(include("$menuDir/submenu_cadastro.php"))->getDropDownHTML();?>
			</ul>
		</li>
		<li class="has_dropdown"><a href="menu_tecnica.php"><img src="<?=$cache_s3['images']?>/icons/small/grey/list.png"/><span>Info Técnica</span></a>
			<ul class="dropdown">
				<?php echo $mm->getDropDown(include("$menuDir/submenu_tecnica.php"))->getDropDownHTML();?>
			</ul>
		</li>
		<li class="has_dropdown"><a href="menu_financeiro.php" style="cursor:pointer"><img src="<?=$cache_s3['images']?>/icons/small/grey/list.png"/><span>Financeiro</span></a>
			<ul class="dropdown">
			<?php echo $mm->getDropDown(include("$menuDir/submenu_financeiro.php"))->getDropDownHTML()?>
			</ul>
		</li>
		<li class="has_dropdown"><a href="menu_auditoria.php"><img src="<?=$cache_s3['images']?>/icons/small/grey/list.png"/><span>Auditoria</span></a>
			<ul class="dropdown">
				<?php echo $mm->getDropDown(include("$menuDir/submenu_auditoria.php"))->getDropDownHTML();?>
			</ul>
	
		</li>
	</ul>

	<div id="mobile_nav">
		<div class="main"></div>
		<div class="side"></div>
	</div>

</div><!-- #nav_top -->
