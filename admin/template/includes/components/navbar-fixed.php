<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">
      <button type="button"class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <ul class="nav pull-left">
	  	<li>
			  <a class="brand" href="http://www.telecontrol.com.br" target="_blank" style="">
					<img src="../logos/logo_tc_2009_pq.gif" alt="Telecontrol"> - Gestão de Pós Venda</a>
	  	</li>
	  </ul>
      <ul class="nav pull-right">
        <li class="active dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void()"><strong>Telecontrol recomenda:</strong><b class="caret"></b></a>
			    <ul class="dropdown-menu">
			<li><a href="http://www.mozilla.org/firefox/" target="_blank"><img src="../imagens/wb-firefox.gif" alt="FireFox" /><br />Firefox v6.0+</a></li>
			<li><a href="http://chrome.google.com/"		  target="_blank"><img src="../imagens/wb-chrome.gif"  alt="Chrome"  /><br />Chrome v14.0+</a></li>
			<li><a href="http://www.apple.com/safari/"	  target="_blank"><img src="../imagens/wb-safari.gif"  alt="Safari"  /><br />Safari 4.0+</a></li>
			<li><a href="http://www.opera.com/"			  target="_blank"><img src="../imagens/wb-opera.gif"   alt="Opera"   /><br />Opera 11.6+</a></li>
			<li><a href="http://ie.microsoft.com/"		  target="_blank"><img src="../imagens/wb-ie8.gif"     alt="IE"	    /><br />Internet Explorer 8</a></li>
			    </ul>
		</li>
		<li class="divider-vertical"></li>
		<li><span rel='popover' data-toggle="modal" data-target='#tcCal'><i class='icon-calendar icon-white'></i>&nbsp;<span id='date_time_bar_applet'>00:00:00</span></span></li>
		<li class="divider-vertical"></li>
		<li>
			<button type='button' onclick='window.open("<?php echo $hd_link;?>", "helpDesk");'
				   class='btn btn-small btn-<?php echo $hd_alert_status?>'
				   style='font-size:12px;' id='helpdesk-btn'>
				<i class='icon-white icon-<?php echo $hd_status_icon?>'></i>&nbsp;HelpDesk</button>
		</li>
		<li class="divider-vertical"></li>
        <li>
          <a target="_blank" href="http://twitter.github.com/bootstrap/">MANUAL</a>
          <!-- <a target="_blank" href="http://192.168.0.199/chamados/api/doc/posvenda/restful">Api Documentation</a> -->
        </li>
        <li class="divider-vertical"></li>
        <li>
          <a href="logout.php">Logout</a>
        </li>
      </ul>
     </div>
  </div>
</div>
