<?php
return array(
	'Call-Center' => array(
		'itens' => array(
			array(
				'fabrica'	=> 87,
				'link'		=> '#',
				'descr'		=> 'Abre um novo chamado no Callcenter',
				'titulo'	=> 'Abre Chamado',
			),
			array(
				'fabrica'	=> 87,
				'link'		=> '#',
				'descr'		=> 'Consulta chamados registrados no Callcenter',
				'titulo'	=> 'Consulta Chamado',
			),
			array( // HD 38922
				'fabrica_no'=> array(14, 66, 87),
				'link'		=> ($login_fabrica==6)?'cadastra_callcenter.php':'callcenter_interativo_new.php',
				'descr'		=> 'Abre um novo chamado no Callcenter',
				'titulo'	=> 'Abre Chamado',
			),
			array(
				'fabrica_no'=> array(14, 66, 87),
				'link'		=> 'callcenter_parametros_new.php',
				'descr'		=> 'Consulta chamados registrados no Callcenter',
				'titulo'	=> 'Consulta Chamado',
			),
		),
	),
	'Ordens de Serviço' => array(
		'itens' => array(
			array(
				'fabrica'	=> 87,
				'link'		=> '#',
				'descr'		=> 'Cadastra uma nova ordem de serviço',
				'titulo'	=> 'Abre OS',
			),
			array(
				'fabrica'	=> 87,
				'link'		=> '#',
				'descr'		=> 'Consulta Ordens de Serviço',
				'titulo'	=> 'Consulta OS',
			),
			array(
				'fabrica_no'=> array(14, 66, 87),
				'link'		=> 'os_consulta_lite.php',
				'descr'		=> 'Consulta Ordens de Serviço',
				'titulo'	=> 'Consulta OS',
			),
			array(
				'fabrica_no'=> array(14, 66, 87),
				'link'		=> 'os_cadastro.php',
				'descr'		=> 'Cadastra uma nova ordem de serviço',
				'titulo'	=> 'Abre OS',
			),
		),
	),
	'Pedidos' => array(
		'itens' => array(
			array(
				'fabrica'	=> 87,
				'link'		=> '#',
				'descr'		=> 'Cadastra um novo pedido de peças',
				'titulo'	=> 'Pedidos',
			),
			array(
				'fabrica_no'=> array(14, 66, 87),
				'link'		=> 'pedido_parametros.php',
				'descr'		=> ($login_fabrica==1)?'Consulta pedidos de peças / produtos':'Consulta pedidos de peças',
				'titulo'	=> 'Consulta Pedidos',
			),
			array(
				'fabrica_no'=> array(14, 66, 87),
				'link'		=> 'pedido_cadastro.php',
				'descr'		=> 'Cadastra um novo pedido de peças',
				'titulo'	=> 'Pedidos',
			),
		),
	),
	array(
		'fabrica'	=> 87,
		'link'		=> '#',
		'descr'		=> 'Consulta dos postos autorizados',
		'titulo'	=> 'Postos',
	),
	array(
		'fabrica_no'=> array(14, 66, 87),
		'link'		=> 'posto_consulta.php',
		'descr'		=> 'Consulta dos postos autorizados',
		'titulo'	=> 'Postos',
	),
);

