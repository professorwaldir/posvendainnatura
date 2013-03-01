<?php
// Fábricas que podem inserir comunicado na tela inicial
$fabrica_comunicado_tela_ini = (in_array($login_fabrica, array(1, 2, 3, 11, 19, 20, 24, 25, 35, 43, 46, 51, 66)) or $login_fabrica > 80);

// Fábricas que oferecem trainamento aos PAs
$fabrica_treinamento = array(1, 10, 20, 42);

$titulo_vista_explodida = array(
	11 => 'Vistas Explodidas, Esquemas Elétricos e Informativos Técnicos',
	14 => 'Informações Técnicas',
	15 => 'Vistas Explodidas, Esquemas Elétricos <br>e Vídeos Treinamentos',
	66 => 'Material de Apoio',
);
$titulo_ve = in_array($login_fabrica, $titulo_vista_explodida) ?
	$titulo_vista_explodida[$login_fabrica] :
	'Vistas Explodidas e Esquemas Elétricos';

$descr_vista_explodida = array(
	0 => "Insira as vistas explodidas e esquemas eletricos da <b>$login_fabrica_nome</b> para os postos",
	11 => "Insira as vistas explodidas, esquemas eletricos e informativos tecnicos da <b>$login_fabrica_nome</b> para os postos",
	14 => 'Informações técnicas dos produtos, vistas explodidas, esquemas, manuais, informativos, etc...',
	15 => 'Insira as vistas explodidas, esquemas elétricos e vídeos de treinamento da latinatec para os postos',
);
$descr_ve = in_array($login_fabrica, $descr_vista_explodida) ?
	$descr_vista_explodida[$login_fabrica] :
	$descr_vista_explodida[0];

// Menu INFORMAÇÕES TÉCNICAS
// Secão INFORMAÇÕES TÉCNICAS - Geral
return array(
	'secao0' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    =>'INFORMAÇÕES TÉCNICAS',
			//'noexpand'  => true
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'comunicado_produto.php',
			'titulo'	=> 'Comunicados',
			'descr'		=> "Insira os comunicados da <b>$login_fabrica_nome</b> para os postos",
			"codigo" => 'TEC-0010'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_comunicado.php',
			'titulo'	=> 'Relatório de comunicado lido',
			'descr'		=> 'Relatório dos postos que confirmaram a leitura de comunicado.',
			"codigo" => 'TEC-0020'
		),
		array(
			'fabrica_no'=> array(87), // Deshabilitado para a JACTO
			'icone'		=> $icone["cadastro"],
			'link'		=> 'vista_explodida_cadastro.php',
			'titulo'	=> $titulo_ve,
			'descr'		=> $descr_ve,
			"codigo" => 'TEC-0030'
		),
		array(
			'fabrica'	=> $fabrica_comunicado_tela_ini,
			'icone'		=> $icone["cadastro"],
			'link'		=> 'comunicado_inicial.php',
			'titulo'	=> 'Mensagem na Tela Inicial de Posto',
			'descr'		=> "Insira as mensagens da tela inicial da <b>$login_fabrica_nome</b>, para os postos possam ver quando entrarem no sistema",
			"codigo" => 'TEC-0040'
		),
		array(
			'fabrica'	=> array(19),
			'icone'		=> $icone["computador"],
			'link'		=> 'confirmacao_comunicado_leitura.php',
			'titulo'	=> 'Postos e Comunicados',
			'descr'		=> 'Acompanhamento da leitura dos relatórios na entrada do site pelos postos.',
			"codigo" => 'TEC-0050'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_interacao_pendente.php',
			'titulo'	=> 'Suporte Técnico',
			'descr'		=> 'Solicitações de suporte técnico pendente por produtos feita pelos postos autorizados.',
			"codigo" => 'TEC-0060'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_interacao_resolvida.php',
			'titulo'	=> 'Relatório Suporte Técnico',
			'descr'		=> 'Espaço reservado para enviar/responder as dúvidas e comentários dos postos.',
			"codigo" => 'TEC-0070'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'forum.php',
			'titulo'	=> 'Fórum',
			'descr'		=> 'Espaço reservado para enviar/responder as dúvidas e comentários dos postos',
			"codigo" => 'TEC-0080'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'forum_moderado.php',
			'titulo'	=> 'Fórum Moderado',
			'descr'		=> 'Aprovação de conteúdo das mensagens inseridas no Fórum. Os postos apenas irão ver as mensagens após aprovação.',
			"codigo" => 'TEC-0090'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'produto_fornecedor_lista_basica.php',
			'titulo'	=> 'Lista Básica para Fornecedores',
			'descr'		=> 'Lista Básica para Fornecedores.',
			"codigo" => 'TEC-0100'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["consulta"],
			'link'		=> 'pesquisa_comunicado.php',
			'titulo'	=> 'Pesquisa Comunicado',
			'descr'		=> 'Consulta Comunicados Cadastrados.',
			"codigo" => 'TEC-0110'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'produto_fornecedor_lista_basica.php?idioma=EN',
			'titulo'	=> 'Suppliers - Spare Parts',
			'descr'		=> 'Suppliers - Spare Parts.',
			"codigo" => 'TEC-0120'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["consulta"],
			'link'		=> 'info_tecnica_arvore_manual.php',
			'titulo'	=> 'Downloads por mês Manual de Serviço',
			'descr'		=> 'Consulta quantidade de downloads baixados por produto',
			"codigo" => 'TEC-0130'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_visualizacao_documentacao_tecnica.php',
			'titulo'	=> 'Relatório de Visualização de Documentação Técnica',
			'descr'		=> 'Consulta quantidade de documentos técnicos visualizados por posto autorizado.',
			"codigo" => 'TEC-0140'
		),
		'link' => 'linha_de_separação',
	),

	//Menu TREINAMENTOS
	'secao1' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'TREINAMENTOS',
			'fabrica'   => $fabrica_treinamento
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'treinamento_cadastro.php',
			'titulo'	=> 'Treinamentos Agendados',
			'descr'		=> 'Agendamento, alteração e visualização dos treinamentos.',
			"codigo" => 'TEC-1010'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'treinamento_realizados.php',
			'titulo'	=> 'Treinamentos Realizados',
			'descr'		=> 'Controle de treinamentos já realizados e controle de presença.',
			"codigo" => 'TEC-1020'
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'treinamento_agenda.php',
			'titulo'	=> 'Cadastrar Técnico ao Treinamento',
			'descr'		=> 'Cadastro de técnicos ao treinamento.',
			"codigo" => 'TEC-1030'
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'treinamento_promotor.php',
			'titulo'	=> 'Cadastrar Promotor',
			'descr'		=> 'Cadastro de promotores que irão divulgar o treinamento por região.',
			"codigo" => 'TEC-1040'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'treinamento_relatorio.php',
			'titulo'	=> 'Relatório de Treinamentos',
			'descr'		=> 'Relatório de treinamentos por região.',
			"codigo" => 'TEC-1050'
		),
		'link' => 'linha_de_separação',
	),

	//Menu RELATÓRIOS - Apenas SUGGAR
	'secao2' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'RELATÓRIOS SUGGAR',
			'fabrica'   => array(24)
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'formulario_consulta_suggar.php',
			'titulo'	=> 'Consulta de relatórios',
			'descr'		=> 'Consulta relatórios já cadastrados.',
			"codigo" => "TEC-SG10"
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'rg-gat-001_suggar.php',
			'titulo'	=> 'Relatório Visita ao Posto Autorizado',
			'descr'		=> 'Cadastra o Relatório Visita ao Posto Autorizado.',
			"codigo" => "TEC-SG20"
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'rg-gat-002_suggar.php',
			'titulo'	=> 'Relatório Mensal Inspeção Técnica',
			'descr'		=> 'Cadastra o Relatório Mensal Inspeção Técnica.',
			"codigo" => "TEC-SG30"
		),
		'link' => 'linha_de_separação',
	),
	//FIM Menu TECNICA
);

