<?php

    require_once "dados.cfg";
    
/* 	Esta include conecta um banco de dados conforme parametros
	enviados
	Banco de Dados:	$dbbanco
	Nome do Banco:  $dbnome	
	Porta:		$dbport
	Usuario:	$dbusuario
	Senha:		$dbsenha
*/
	###################################################################
	############################# ATENCAO #############################
	###################################################################
	# N?O  COLOCAR NENHUMA CONEX?O COM O BANCO DEPOIS DA CONEX?O PADR?O
	# $con POIS SE O PROGRAMADOR ESQUECER DE INFORMAR A CONEX?O NO  CO-
	# MANDO pg_exec IR? OPERAR NO ?LTIMO BANCO QUE FOI CONECTADO

	global $con;
	global $conbi;

	if ($dbport == 0 OR $dbport == NULL) {
		$dbport 	= 5432;
	}

	if (strlen ($dbbanco) == 0) {
		$dbbanco 	= "postgres";
		$dbport         = 5432;
	}
        
	if ($dbbanco == "postgres") {
		$parametros = "host=$dbhost dbname=$dbnome port=$dbport user=$dbusuario password=$dbsenha";
		//echo $parametros;
		
		$erro_conexao = true ;
		for ($i == 0 ; $i < 10 ; $i++) {
			if ($con = @pg_connect($parametros)) {
				$erro_conexao = false ;
				break ;
			}
			sleep (5);
		}

		if ($erro_conexao == true) {	
				
			echo "erro ao conecetar netuno, postgres";
			
		}
	}
	
	$usuario = $PHP_AUTH_USER;

	###################################################################
	############################# ATENCAO #############################
	###################################################################
	# N?O  COLOCAR NENHUMA CONEX?O COM O BANCO DEPOIS DA CONEX?O PADR?O
	# $con POIS SE O PROGRAMADOR ESQUECER DE INFORMAR A CONEX?O NO  CO-
	# MANDO pg_exec IR? OPERAR NO ?LTIMO BANCO QUE FOI CONECTADO


    
    

?>