<?php
return array(
	'Comunicados' => array(
		'itens' => array(
			array(
				'link'		=> 'vista_explodida_cadastro.php',
				'descr'		=> 'Cadastro de vistas explodidas',
				'titulo'	=> 'Vistas Explodidas',
			),
			array(
				'link'		=> 'comunicado_produto.php',
				'descr'		=> 'Cadastro de comunicados, vistas explodidas, manuais, etc.',
				'titulo'	=> 'Comunicados',
			),
		),
	),
	array(
		'fabrica'   => 19,
		'link'		=> 'confirmacao_comunicado_leitura.php',
		'descr'		=> 'Acompanhamento de leitura dos comunicados na entrada do site pelos postos.',
		'titulo'	=> 'Postos e comunicados',
	),
	'HelpDesk Postos' => array(
		'fabrica' => 1,
		'itens' => array(
			array(
				'fabrica'   => 1,
				'link'		=> 'helpdesk_listar.php',
				'descr'		=> 'Help-Desk Postos Autorizados',
				'titulo'	=> 'HelpDesk Postos',
			),
		),
	),
	array(
		'fabrica_no'=> 1,
		'link'		=> 'forum.php',
		'descr'		=> 'Painel de mensagens, perguntas e sugestões dos postos',
		'titulo'	=> 'Forum',
	),
	array(
		'link'		=> 'forum_moderado.php',
		'descr'		=> 'Liberação das mensagens do painel',
		'titulo'	=> 'Forum Moderado',
	),
);

