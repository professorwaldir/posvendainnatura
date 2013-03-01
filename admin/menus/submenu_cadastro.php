<?php
return array(
	array(
		'disabled'  => ($multimarca != 't'),
		'link'		=> 'marca_cadastro.php',
		'descr'		=> 'Cadastro de Marcas',
		'titulo'	=> 'Marcas',
	),
	'Produto' => array(
		'itens' => array(
			array(
				'fabrica'	=> 87,
				'link'		=> '#',
				'descr'		=> 'Cadastro de linhas de produtos',
				'titulo'	=> 'Linhas',
			),
			array(
				'fabrica'   => 87,
				'link'		=> '#',
				'descr'		=> 'Cadastro de famílias de produtos',
				'titulo'	=> 'Famílias',
			),
			array(
				'fabrica_no'=> 87,
				'link'		=> 'linha_cadastro.php',
				'descr'		=> 'Cadastro de linhas de produtos',
				'titulo'	=> 'Linhas',
			),
			array(
				'fabrica_no'=> 87,
				'link'		=> 'familia_cadastro.php',
				'descr'		=> 'Cadastro de famílias de produtos',
				'titulo'	=> 'Famílias',
			),
			array(
				'fabrica'	=> 87,
				'link'		=> '#',
				'titulo'	=> 'Produtos',
				'descr'		=> 'Cadastro de produtos acabados',
			),
			array(
				'fabrica_no'=> 87,
				'link'		=> 'produto_cadastro.php',
				'descr'		=> 'Cadastro de produtos acabados',
				'titulo'	=> 'Produtos',
			),
			array(
				'fabrica'   => 87,
				'link'		=> '#',
				'descr'		=> 'Cadastro da lista básica (peças que compõe o produto)',
				'titulo'	=> 'Lista Básica',
			),
			array(
				'fabrica_no'=> 87,
				'link'		=> 'lbm_cadastro.php',
				'descr'		=> 'Cadastro da lista básica (peças que compõe o produto)',
				'titulo'	=> 'Lista Básica',
			),
		),
	),
	'Peças' => array(
		'itens' => array(
			array(
				'link'		=> 'peca_cadastro.php',
				'descr'		=> 'Cadastro de peças e componentes',
				'titulo'	=> 'Peças',
			),
			array(
				'link'		=> 'preco_cadastro.php',
				'descr'		=> 'Cadastro manual dos preços das peças',
				'titulo'	=> 'Preços',
			),
		),
	),
	array(
		'link'		=> 'posto_cadastro.php',
		'descr'		=> 'Cadastro de postos autorizados',
		'titulo'	=> 'Postos',
	),
);

