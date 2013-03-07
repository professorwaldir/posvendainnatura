/*
* Este procedimento de login requer os seguintes arquivo para ser executado corretamente!!!
*
*       <script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script>
*       <script type='text/javascript' src='http://www.telecontrol.com.br/login/bootstrap.js'></script>
*
* 	�?derson Sandre <ederson.sandre@telecontrol.com.br> 
* 	Telecontrol - 05 de outubro de 2012
*/

$('document').ready(function(){
	// chamada da função
	auth();
});

function auth(){
	// Quando clicar no botão executa
	$("#autentica").bind('click', function(){
		login();
	});
}

function getHost(){
	var host 	= window.location.host;
	var server  = ''; 
        
        switch(host){
		case 'ww2.telecontrol.com.br':
			server = "http://ww2.telecontrol.com.br/assist/";
		break;

		case 'jacto.telecontrol.com.br':
			server = "http://jacto.telecontrol.com.br/";
		break;

		case 'localhost':
		case 'urano.telecontrol.com.br' :
			server = '';
		break;

		default:
		  	server = 'http://posvenda.telecontrol.com.br/assist/';
	}

	server = server + (window.location.pathname.indexOf('externos')) ? '../' : '';
        
	return server;
}

function login(){
	$('.error').removeClass('error');
	$("#errologin").fadeOut();
	$("#brw").fadeOut();
	var box_login = $('#box_login').html();
	var url_local = getHost();
       
	//if(window.location.host != '192.168.0.199'  && window.location.host != 'urano.telecontrol.com.br')
	//	url_local = 'http://posvenda.telecontrol.com.br/assist/';
	
	var user = checkEntries();
  	if(user){
		//var server = 'http://192.168.0.199/~ederson/assist/index.php';
		var server = 'includes/autentica.php?acao=validar&ajax=sim'
  		var params = user;

  		$.ajax({
  			url: server,
  			type: "POST",
  			data: {login:user['login'], senha:user['senha'],btnAcao:'entrar'},
  			cache: false,
  			success: function(data) {
  				if(data){
  					var response = data.split('|');

                                        if(response[1].length > 0){
  						var codigo 	= response[0];
  						var mensagem 	= response[1];
						var admin       = (response[2] == undefined) ? '':response[2];
  						validaError(box_login, codigo, mensagem, admin);
  					}
  				}
  			}
  		});
  	}
}

function checkEntries(){
	var login = $("#login").val();
	var senha 	= $("#senha").val();
	var error 	= '';

	if(login.length == 0){
		// $("label[for='login']").parent().addClass('error');// 
		$("#errologin").html("Usu&aacute;rio Inv&aacute;lido!");
		$("#errologin").css('display','block');
		fadeError();

		return false;
	}

	if(senha.length == 0){
		// $("label[for='senha']").parent().addClass('error');
		$("#errologin").html("Senha Inv&aacute;lida!");
		$("#errologin").css('display','block');
		fadeError();

		return false;
	}

	var user = new Array();
	user['login'] = login;
	user['senha'] = senha;

	//console.log(user);
	return user;

}

function fadeError(){
	$("#errologin").delay('5000').fadeOut('1000');
}

function loginDestroyLogged(admin) {
        var url_local = getHost();

	//Destroy todo o acesso do admin
	if (admin != '') {
		//var server = "http://192.168.0.199/~ederson/assist/login_destroy_logged.php";
		var server = url_local+"login_destroy_logged.php";
		var post= "admin="+admin;
  		$.ajax({
  			url: server,
  			type: "POST",
  			data: post,
  			cache: false,
  			success: function(data) { 
  				login();
  			}
  		});
	}
}

function validaError(box_login, codigo, mensagem, admin){ 
	       
        //if(window.location.host != '192.168.0.199' && window.location.host != 'urano.telecontrol.com.br')
        //        url_local = 'http://posvenda.telecontrol.com.br/assist/';

	switch(codigo){
		case 'ko': 
			$('#errologin').html(mensagem);
			$("#errologin").css('display','block');
			fadeError();
		break; 	

		case '1': 
			$('#errologin').html(mensagem);
			$("#errologin").css('display','block');
			fadeError();
		break; 	

		case 'ambiguous': 
			$("#popover").popover({
			 	title: mensagem,
				html: true,
			 	content: "Deseja bloquear o acesso deste usu&aacute;rio?<br /><a href = 'javascript: void(0);' onclick=\"loginDestroyLogged("+admin+");$('#popover').popover('hide');\"><b>Clique aqui!</b></a>",
			 	placement: 'bottom',
			});
			
			$("#popover").popover('show');
		break; 	

		//MLG - We need time... :P
		case 'time':
			url_local = 'http://ww2.telecontrol.com.br/';
			//no-break.... :)
		case 'ok': 
			window.parent.location = mensagem;
		break; 	

		default:
  			$('#errologin').html("<div class='alert alert-error'>"+mensagem+"</div>");
  			$("#errologin").css('display','block');
  			fadeError();
	}		
}