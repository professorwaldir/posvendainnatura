<?php
return array(
	array(
		'fabrica'	=> 3,
		'link'		=> 'devolucao_cadastro.php',
		'descr'		=> 'Cadastro de Notas de Devolução para postos que fazem encontro de contas',
		'titulo'	=> 'NFs Devolução',
	),
	array(
		'fabrica'	=> array(1,3),
		'link'		=> 'acerto_contas.php',
		'descr'		=> 'Encontro de Contas',
		'titulo'	=> 'Encontro de Contas',
	),
	'Extrato' => array(
		'itens'   => array(
			array(
				'fabrica_no'=> array(11,50,81,95),
				'link'		=> 'os_extrato.php',
				'descr'		=> 'Fechamento dos extratos',
				'titulo'	=> 'Fecha Extrato',
			),
			array(
				'fabrica'	=> array(11,50),
				'link'		=> 'os_extrato_por_posto.php',
				'descr'		=> 'Fechamento dos extratos',
				'titulo'	=> 'Fecha Extrato',
			),
			array(
				'link'		=> 'extrato_consulta.php',
				'descr'		=> 'Liberação e manutenção dos extratos já fechados',
				'titulo'	=> 'Libera Extrato',
			),
			array(
				'fabrica_no'=> array(20),//PARA A BOSCH SÓ LANÇA AVULSO NO EXTRATO
				'link'		=> 'extrato_avulso.php',
				'descr'		=> 'Lançamentos avulsos no extrato do posto',
				'titulo'	=> 'Extrato Avulso',
			),
		),
	),
);

