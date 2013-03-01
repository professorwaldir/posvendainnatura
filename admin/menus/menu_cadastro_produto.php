<?php
//hd 19043 - Selecionei as fábricas que usam tbl_subproduto e coloquei no array. Ébano
$usam_subproduto          = array(43, 8, 3, 14, 46, 17, 66, 4, 10, 2, 5);
$vet_fabrica_multi_marca  = array(3, 10, 30, 52, 101, 104, 105);

/** COMEÇA A DEFINIÇÃO DO ARRAY DO MENU **/
// Menu CADASTRO
return array(
	'secaoProdutos' => array(
		'secao' => array(
			'link'       => '#',
			'titulo'     => in_array($login_fabrica, $fabricas_contrato_lite) ? 'CADASTROS DE PRODUTOS' : 'CADASTROS REFERENTES A PRODUTOS',
			'fabrica_no' => array(87) // Deshabilitado para a JACTO
		),
		array(
			'fabrica'    => $vet_fabrica_multi_marca,
			"icone"      => $icone["cadastro"],
			"link"       => 'marca_cadastro.php',
			"titulo"     => 'Marca de Produtos',
			"descr"      => 'Consulta - Inclusão - Exclusão de Marcas.',
			"codigo"     => "CAD0000"
		),
		array(
			'fabrica'    => $vet_fabrica_multi_marca,
			"icone"      => $icone["cadastro"],
			"link"       => 'produto_fornecedor_cadastro.php',
			"titulo"     => 'Fornecedor de Produtos',
			"descr"      => 'Consulta - Inclusão - Exclusão de Fornecedores de Produto.',
			"codigo"     => "CAD0010"
		),
		array(
			"icone"      => $icone["cadastro"],
			"link"       => 'tipo_posto_cadastro.php',
			"titulo"     => 'Tipo de Postos',
			"descr"      => 'Consulta - Inclusão - Exclusão dos Tipos de Postos.',
			"codigo"     => "CAD0020"
		),
		array(
			"icone"      => $icone["cadastro"],
			"link"       => 'linha_cadastro.php',
			"titulo"     => 'Linhas de Produtos',
			"descr"      => 'Consulta - Inclusão - Exclusão de Linha de Produtos.',
			"codigo"     => "CAD0030"
		),
		array(
			"icone"      => $icone["cadastro"],
			"link"       => 'familia_cadastro.php',
			"titulo"     => 'Família de Produtos',
			"descr"      => 'Consulta - Inclusão - Exclusão de Família de Produtos.',
			"codigo"     => "CAD0040"
		),
		array(
			"icone"      => $icone["cadastro"],
			"link"       => 'produto_cadastro.php',
			"titulo"     => 'Cadastro de Produtos',
			"descr"      => 'Consulta - Inclusão - Exclusão de Produtos.',
			"codigo"     => "CAD0050"
		),
		array(
			'fabrica'    => array(50),
			'icone'      => $icone["cadastro"],
			'link'       => 'custo_falha_cadastro.php',
			'titulo'     => 'Cadastro de Custo Falha',
			'descr'      => 'Cadastro de Custo Falha.',
			"codigo"     => "CAD0060"
		),
		array(
			'fabrica'    => $usam_subproduto,
			"icone"      => $icone["cadastro"],
			"link"       => 'subproduto_cadastro.php',
			"titulo"     => 'Cadastro de Sub-Produtos',
			"descr"      => 'Consulta - Inclusão - Exclusão de Sub-Produtos.',
			"codigo"     => "CAD0070"
		),
		array(
			'fabrica'    => 42,
			"icone"      => $icone["cadastro"],
			"link"       => 'classe_produto_cadastro.php',
			"titulo"     => 'Cadastro de classes de produtos',
			"descr"      => 'Cadastro de classes de produtos, onde poderá ser feito a inserção de novas classes ou alteração das classes já existentes',
			"codigo"     => "CAD0080"
		),
		array(
			'fabrica'    => array(7,10,11,40),
			'icone'      => $icone["cadastro"],
			'link'       => 'transportadora_cadastro.php',
			'titulo'     => 'Cadastro de Transportadora',
			'descr'      => 'Consulta - Inclusão - Exclusão de Transportadoras.',
			"codigo"     => "CAD0090"
		),
		array(
			'fabrica'    => array(14,66),
			"icone"      => $icone["consulta"],
			"link"       => 'produto_consulta_detalhe.php',
			"titulo"     => 'Estrutura do produto',
			"descr"      => 'Consulta dados da estrutura do produto (Produto &gt; Subconjunto &gt; Peças).',
			"codigo"     => "CAD0100"
		),
		array(
			'fabrica'    => 5,
			"icone"      => $icone["cadastro"],
			"link"       => 'serie_controle_cadastro.php',
			"titulo"     => 'Cadastro de Números de Série',
			"descr"      => 'Consulta - Inclusão - Exclusão de Número de Série e quantidade produzida por produto.',
			"codigo"     => "CAD0110"
		),
		array(
			'fabrica'    => 30,
			"icone"      => $icone["cadastro"],
			"link"       => 'metas_cadastro.php',
			"titulo"     => 'Cadastro de Metas',
			"descr"      => 'Cadastro de metas de produtos e famílias',
			"codigo"     => "CAD0120"
		),
		'link'       => 'linha_de_separação'
	),
);

