<?php
include_once 'helper.php';

$usam_kit_pecas           = array(15,24,91);
$vet_fabrica_multi_marca  = array(3, 10, 30, 52, 101, 104, 105);
$fabrica_pecas_represadas = array_merge($fabricas_contrato_lite, array(6,24,50,86));

// Fábricas que não deixam digitar o defeito reclamado,
// têm que cadastrar e manter a lista de defeitos reclamados
$sql = "SELECT pedir_defeito_reclamado_descricao
		  FROM tbl_fabrica
		 WHERE fabrica = $login_fabrica
		   AND (pedir_defeito_reclamado_descricao IS NULL
			OR pedir_defeito_reclamado_descricao  IS FALSE);";
$res = @pg_exec($con,$sql);

$fabrica_seleciona_defeito_reclamado = (@pg_numrows($res) > 0 or in_array($login_fabrica, array(42, 74, 81, 86,  96, 114,115,116)));

// Fábricas que fazem relacionamento de integridade de defeito constatado com família
$fabrica_integridade_familia_constatado = array(42,74,81,86,94,95,96,98,99,104,105,108,101,111,114,115,116);

// Fábricas que fazem relacionamento de integridade de defeito reclamado com família
$fabrica_integridade_familia_reclamado  = array(52,98,99,104,105,108,101,111,115,116);

$fabrica_integridade_reclamado_constatado = array(1, 2, 5, 8, 10, 14, 16, 20);
$fabrica_nao_cadastra_solucao_defeito     = array_merge($fabricas_contrato_lite, array(2,14,19,20,86,94,106));

// Clientes que usam a nova tela de Relacionamento de Integridade
$fabrica_usa_rel_diag_new = in_array($login_fabrica, array(2, 7, 15, 25, 28, 30, 35, 40, 42, 43, 45, 46, 47,96,85)) or
					($login_fabrica > 49 and !in_array($login_fabrica, array(59, 66)));
$fabrica_integridade_peca = array(5,15,24,50);

// Habilita o Laudo Técnico (cadastro de questionário)
$fabrica_pede_laudo_tecnico = array(1, 19, 43, 46, 56, 57, 58);

// Cadastra S/N
$fabrica_cadastra_num_serie   = array(74,85,90,94,95,106,108,111);
// Upload de arquivo para importação de S/N
$fabrica_integra_serie_upload = array(95,108,111);
// Fábrica cadastra número de série para peças
$fabrica_cadastra_serie_pecas = array(95,108,111);
// Máscara de Número de série
$fabrica_usa_mascara_serie    = array(3, 14, 66, 99, 101); // HD 86636 HD 264560

//hd 19043 - Selecionei as fábricas que usam tbl_subproduto e coloquei no array. Ébano
$usam_subproduto          = array(43, 8, 3, 14, 46, 17, 66, 4, 10, 2, 5);
$vet_fabrica_multi_marca  = array(3, 10, 30, 52, 101, 104, 105);

/** COMEÇA A DEFINIÇÃO DO ARRAY DO MENU **/
// Menu CADASTRO
return array(
	// Secão CADASTROS REFERENTES A PEÇAS JACTO
	'jacto_pecas' => array(
		'secao' => array(
			'link'    => '#',
			'titulo'  => in_array($login_fabrica, $fabricas_contrato_lite) ? 'CADASTROS DE PEÇAS' : 'CADASTROS REFERENTES A PEDIDOS DE PEÇAS',
			'fabrica' => array(87) // Habilitado para a JACTO
		),
		array(
			'icone'   => $icone["cadastro"],
			'link'    => 'transportadora_cadastro.php',
			'titulo'  => 'Cadastro de Transportadora',
			'descr'   => 'Consulta - Inclusão - Exclusão de Transportadoras.',
			"codigo"  => "CAD0130"
		),
		array(
			'icone'   => $icone["cadastro"],
			'link'    => 'peca_cadastro.php',
			'titulo'  => 'Cadastro de Peças',
			'descr'   => 'Consulta - Inclusão - Exclusão de Componentes utilizados pela fábrica.',
			"codigo"  => "CAD0140"
		),
		array(
			'icone'   => $icone["cadastro"],
			'link'    => 'preco_cadastro.php',
			'titulo'  => 'Preços de Peças',
			'descr'   => 'Cadastramento e alteração em preços de peças.',
			"codigo"  => "CAD0150"
		),
		array(
			'icone'   => $icone["cadastro"],
			'link'    => 'depara_cadastro.php',
			'titulo'  => 'De -> Para',
			'descr'   => 'Cadastro de peças DE-PARA (alteração em códigos de peças).',
			"codigo"  => "CAD0160"
		),
	),

	// Menu Cadastro Postos para a JACTO, evita colocar regra de exclusão em quase tudo
	'jacto_postos' => array(
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'MANUTENÇÃO DE POSTOS AUTORIZADOS',
			'fabrica'   => array(87) // Habilitado para a JACTO
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'posto_cadastro.php',
			'titulo'	=> 'Postos Autorizados',
			'descr'		=> 'Cadastramento de postos autorizados',
			"codigo" => "CAD0170"
		),
	),

	// SEÇÃO de INTEGRIDADE E RELACIONAMENTO DE DEFEITOS
	'jacto_integridade' => array(
		'secao' => array(
			'disabled' => true, // Não estão usando...
			'link'     => '#',
			'titulo'   => 'CADASTROS DE DEFEITOS - EXCEÇÕES',
			'fabrica'  => false
		),
		array(
			//'disabled' => true, //Pertence à seção seguinte (Integridade)
			'icone'    => $icone["computador"],
			'link'     => 'tipo_os_por_familia_cadastro.php',
			'titulo'   => 'Manutenção de Tipo de OS X Família',
			'descr'    => 'Integridade - Tipo de OS X Família',
			"codigo"   => "CAD0180"
		),
		array(
			//'disabled' => true, //Pertence à seção seguinte (Integridade)
			'icone'    => $icone["cadastro"],
			'link'     => 'tipo_atendimento_cadastro.php',
			'titulo'   => 'Cadastro de Tipos de Atendimento',
			'descr'    => 'Manutenção do cadastro dos Tipos de Atendimentos que serão utilizados nas Ordens de Serviço',
			"codigo"   => "CAD0190"
		),
	), // FIM Menus JACTO

	// Menu CADASTRO (parte II)
	'secao0' => array(
		'secao' => array(
			'link'       => '#',
			'titulo'     => in_array($login_fabrica, $fabricas_contrato_lite) ? 'CADASTROS DE PEÇAS' : 'CADASTROS REFERENTES A PEDIDOS DE PEÇAS',
			'fabrica_no' => array(87) // Deshabilitado para a JACTO
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_cadastro.php',
			'titulo'     => 'Cadastro de Peças',
			'descr'      => 'Consulta - Inclusão - Exclusão de Componentes utilizados pela fábrica.',
			"codigo"     => "CAD0200"
		),
		array(
			'fabrica'    => array(24),
			'icone'      => $icone["computador"],
			'link'       => 'peca_amarracao.php',
			'titulo'     => 'Amarração de Peças',
			'descr'      => 'Ferramenta de amarração de peças. Quando lançar uma peça é obrigado a lançar a peça amarrada',
			"codigo"     => "CAD0210"
		),
		array(
			'fabrica'    => array(6),
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_amarracao_lista.php',
			'titulo'     => 'Lista Peça X Peça',
			'descr'      => 'Cadastro e exclusão de peça e subpeça da lista básica.',
			"codigo"     => "CAD0220"
		),
		array(
			'fabrica_no' => $fabricas_contrato_lite,
			'icone'      => $icone["cadastro"],
			'link'       => 'lbm_cadastro.php',
			'titulo'     => 'Lista Básica',
			'descr'      => 'Estrutura de peças aplicadas a cada produto',
			"codigo"     => "CAD0230"
		),
		array(
			'fabrica'    => array(42),
			'icone'      => $icone["upload"],
			'link'       => 'lbm_excel.php',
			'titulo'     => 'Lista Básica Upload',
			'descr'      => 'Upload de arquivo xls para atualização da lista básica',
			"codigo"     => "CAD0240"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'condicao_cadastro.php',
			'titulo'     => 'Condições de Pagamento',
			'descr'      => 'Cadastramento de condições de pagamentos para pedidos de peças',
			"codigo"     => "CAD0250"
		),
		array(
			'fabrica_no' => array_merge($fabricas_contrato_lite, array(86,104,115,116)),
			'icone'      => $icone["cadastro"],
			'link'       => 'tipo_posto_condicao_cadastro.php',
			'titulo'     => 'Condições de Pagamento para Postos',
			'descr'      => 'Cadastramento de condições de pagamentos para pedidos de peças específica para postos',
			"codigo"     => "CAD0260"
		),
		array(
			'fabrica'    => array(7),
			'icone'      => $icone["computador"],
			'link'       => 'tabela_vigencia.php',
			'titulo'     => 'Vigência das Tabela Promocionais',
			'descr'      => 'Altera a vigência das tabelas promocionais',
			"codigo"     => "CAD0270"
		),
		array(
			'fabrica'    => array(7),
			'icone'      => $icone["cadastro"],
			'link'       => 'desconto_pedido_cadastro.php',
			'titulo'     => 'Cadastro de Descontos',
			'descr'      => 'Cadastro de desconto em pedidos, com data de vigência.',
			"codigo"     => "CAD0280"
		),
		array(
			'fabrica'    => array(7),
			'icone'      => $icone["cadastro"],
			'link'       => 'capacidade_manutencao.php',
			'titulo'     => 'Valores por Capacidade',
			'descr'      => 'Define os valores de regulagem e certificado por capacidade',
			"codigo"     => "CAD0290"
		),
		//PARA BLACK - ADICIONADO DIA 30-03-2007 IGOR - HD:1666
		array(
			'fabrica'    => array(1,72),
			'icone'      => $icone["cadastro"],
			'link'       => 'condicao_pagamento_manutencao.php',
			'titulo'     => 'Alteração de Condições de Pagamento',
			'descr'      => 'Alteração  de condições de pagamentos dos postos',
			"codigo"     => "CAD0300"
		),
		array(
			'fabrica'    => array(52,81,114),
			'icone'      => $icone["cadastro"],
			'link'       => 'tabela_preco.php',
			'titulo'     => 'Tabela de Preço',
			'descr'      => 'Cadastro e manuntenção de peças e tabelas',
			"codigo"     => "CAD0310"
		),
		array(
			'fabrica'    => array(52),
			'icone'      => $icone["cadastro"],
			'link'       => 'cadastro_tabela_servico.php',
			'titulo'     => 'Tabela de Serviço',
			'descr'      => 'Cadastro de Tabela de Serviço para Mão de Obra.',
			"codigo"     => "CAD0320"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'preco_cadastro.php',
			'titulo'     => 'Preços de Peças',
			'descr'      => 'Cadastramento e alteração em preços de peças.',
			"codigo"     => "CAD0330"
		),
		array(
			'fabrica'    => array(1),
			'icone'      => $icone["upload"],
			'link'       => 'preco_upload.php',
			'titulo'     => 'Atualização de Preços de Acessórios',
			'descr'      => 'Atualiza preço de peça Acessórios para pedido Acessório e Loja Virtual.',
			"codigo"     => "CAD0340"
		),
		array(
			'fabrica'    => 3,
			'icone'      => $icone["cadastro"],
			'link'       => 'fator_multiplicacao.php',
			'titulo'     => 'Preços Sugeridos',
			'descr'      => 'Cadastro de preços sugeridos para que o PA se baseie para vender ao consumidor.',
			"codigo"     => "CAD0350"
		),
		array(
			'fabrica'    => 40,
			'icone'      => $icone["cadastro"],
			'link'       => 'upload_importa_masterfrio.php',
			'titulo'     => 'Atualização de Preços(Via Upload)',
			'descr'      => 'Cadastramento e alteração em preços de peças via upload pelo arquivo XLS.',
			"codigo"     => "CAD0360"
		),
		array(
			'fabrica_no' => $fabricas_contrato_lite,
			'icone'      => $icone["cadastro"],
			'link'       => 'tipo_pedido.php',
			'titulo'     => 'Tipo do Pedido',
			'descr'      => 'Cadastro de Tipo de Pedidos',
			"codigo"     => "CAD0370"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'depara_cadastro.php',
			'titulo'     => 'De &ndash;&gt; Para',
			'descr'      => 'Cadastro de peças DE&ndash;&gt;PARA (alteração em códigos de peças).',
			"codigo"     => "CAD0380"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_alternativa_cadastro.php',
			'titulo'     => 'Peças Alternativas',
			'descr'      => 'Cadastro de peças ALTERNATIVAS.',
			"codigo"     => "CAD0390"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_fora_linha_cadastro.php',
			'titulo'     => 'Peças Fora de Linha',
			'descr'      => 'Cadastro de peças FORA DE LINHA',
			"codigo"     => "CAD0400"
		),
		array(
			'fabrica_no' => $fabricas_contrato_lite,
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_analise_cadastro.php',
			'titulo'     => 'Peças em Análise',
			'descr'      => 'Cadastro de peças em ANÁLISE',
			"codigo"     => "CAD0410"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_acerto.php',
			'titulo'     => 'Acerto de Peças',
			'descr'      => 'Lista todas as peças e seus dados para acerto comum.',
			"codigo"     => "CAD0420"
		),
		array(
			//'disabled'  => true, // É referente a produtos, deveria estar com os produtos
			'icone'      => $icone["cadastro"],
			'link'       => 'produto_acerto_linha.php',
			'titulo'     => 'Acerto de Produtos',
			'descr'      => 'Lista todos os produtos e seus dados para acerto comum.',
			"codigo"     => "CAD0430"
		),
		array(
			'fabrica_no' => $fabricas_contrato_lite,
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_previsao_entrega.php',
			'titulo'     => 'Previsão de Entrega de Peças',
			'descr'      => 'Cadastra a previsão de entrega de peças com abastecimento crítico. Os postos serão informados da previsão, e pode-se consultar as pendências destas peças para tomada de providências.',
			"codigo"     => "CAD0440"
		),
		array(
			'fabrica_no' => $fabrica_pecas_represadas,
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_represada_cadastro.php',
			'titulo'     => 'Peças Utilizadas do Estoque do Distribuidor',
			'descr'      => 'Cadastro de Peças que o distribuidor não vai mais receber automaticamente. As peças irão gerar crédito.<br /><i>A finalidade deste processo é permitir que o distribuidor possa abaixar o estoque de determinadas peças.</i>',
			"codigo"     => "CAD0450"
		),
		array(
			'fabrica'    => array(40),
			'icone'      => $icone["cadastro"],
			'link'       => 'defeito_constatado_peca_cadastro.php',
			'titulo'     => 'Defeito Constatado Por Peça',
			'descr'      => 'Cadastro de Defeito Constatado por Peças',
			"codigo"     => "CAD0460"
		),
		array(
			'fabrica'    => array(1),
			'icone'      => $icone["cadastro"],
			'link'       => 'acrescimo_tributario.php',
			'titulo'     => 'Acréscimo Tributário por Estado',
			'descr'      => 'Cadastro de Acréscimo Tributário definido para cada Estado.',
			"codigo"     => "CAD0470"
		),
		array(
			'fabrica'    => $usam_kit_pecas,
			'icone'      => $icone["cadastro"],
			'link'       => 'kit_pecas_cadastro.php',
			'titulo'     => 'Kit Peças',
			'descr'      => 'Cadastro de Kit de Peças.',
			"codigo"     => "CAD0480"
		),
		array(
			'fabrica'    => array(5),
			'icone'      => $icone["cadastro"],
			'link'       => 'producao_cadastro.php',
			'titulo'     => 'Cadastro de Itens de Produção',
			'descr'      => 'Cadastro de itens produzidos.',
			"codigo"     => "CAD0490"
		),
		'link' => 'linha_de_separação'
	),

	//Menu LOCAÇÃO - Apenas Black&Decker
	'secaoLocacao' => array(
		'secao'   => array(
			'link'    => '#',
			'titulo'  => 'LOCAÇÃO',
			'fabrica' => array(1) // Apenas Black&Decker
		),
		array(
			'icone'   => $icone["cadastro"],
			'link'    => 'os_cadastro_locacao.php',
			'titulo'  => 'Cadastro de Produtos Locação',
			'descr'   => 'Produtos liberados para Locação',
			"codigo"  => "CAD0500"
		),
		array(
			'icone'   => $icone["consulta"],
			'link'    => 'pedido_consulta_locacao.php',
			'titulo'  => 'Consulta de Produtos Locação',
			'descr'   => 'Consulta Produtos liberados para Locação',
			"codigo"  => "CAD0510"
		),
		'link' => 'linha_de_separação'
	),

	// SEÇÃO de INTEGRIDADE E RELACIONAMENTO DE DEFEITOS
	'secao1' => array(
		'secao' => array(
			'link'       => '#',
			'titulo'     => in_array($login_fabrica, $fabricas_contrato_lite) ? 'CADASTROS DE DEFEITOS' : 'CADASTROS DE DEFEITOS - EXCEÇÕES',
			'fabrica_no' => array(87)
		),

		array(
			'fabrica'    => array(30),
			'icone'      => $icone["upload"],
			'link'       => 'indice_defeito_campo.php',
			'titulo'     => 'Upload Defeito Campo',
			'descr'      => 'Importação do relatório de índice de defeito de campo.',
			"codigo"     => "CAD0520"
		),
		array(
			'fabrica'    => array(52),
			'icone'      => $icone["cadastro"],
			'link'       => 'motivo_reincidencia.php',
			'titulo'     => 'Motivo da Reincidência',
			'descr'      => 'Cadastro de Motivos de Reincidência',
			"codigo"     => "CAD0530"
		),
		array(
			'fabrica'    => array(52),
			'icone'      => $icone["cadastro"],
			'link'       => 'motivo_atraso_fechamento.php',
			'titulo'     => 'Motivos de atendimentos fora do prazo',
			'descr'      => 'Cadastro de Motivos de atendimentos fora do prazo',
			"codigo"     => "CAD0540"
		),
		array(
			'disabled'   => !$fabrica_seleciona_defeito_reclamado,
			'icone'      => $icone["cadastro"],
			'link'       => 'defeito_reclamado_cadastro.php',
			'titulo'     => 'Defeitos Reclamados',
			'descr'      => 'Tipos de defeitos reclamados pelo CLIENTE',
			"codigo"     => "CAD0550"
		),
		array(
			'fabrica'    => array(25),
			'icone'      => $icone["cadastro"],
			'link'       => 'defeito_reclamado_cadastro_callcenter.php',
			'titulo'     => 'Defeitos Reclamados Call Center',
			'descr'      => 'Cadastro de defeitos reclamados no CallCenter',
			"codigo"     => "CAD0560"
		),
		array(
			'fabrica'    => array(11),
			'icone'      => $icone["cadastro"],
			'link'       => 'callcenter_motivo_ligacao_cadastro.php',
			'titulo'     => 'Motivo Ligação Call-Center',
			'descr'      => 'Cadastro de motivos das ligações no Call-Center',
			"codigo"     => "CAD0570"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'defeito_constatado_cadastro.php',
			'titulo'     => 'Defeitos Constatados',
			'descr'      => 'Tipos de defeitos constatados pelo TÉCNICO',
			"codigo"     => "CAD0580"
		),
		array(
			'fabrica'    => $fabrica_integridade_familia_reclamado,
			'icone'      => $icone["computador"],
			'link'       => 'familia_integridade_reclamado.php',
			'titulo'     => 'Família - Defeito Reclamado',
			'descr'      => 'Relacionamento/Integridade - Família - Defeito Reclamado',
			"codigo"     => "CAD0590"
		),
		array(
			'fabrica'    => $fabrica_integridade_familia_constatado,
			'icone'      => $icone["computador"],
			'link'       => 'familia_integridade_constatado.php',
			'titulo'     => 'Família - Defeito Constatado',
			'descr'      => 'Relacionamento/Integridade - Família - Defeito Constatado',
			"codigo"     => "CAD0600"
		),
		array(
			'fabrica'    => array(52),
			'icone'      => $icone["cadastro"],
			'link'       => 'grupo_defeito_constatado_cadastro_fricon.php',
			'titulo'     => 'Grupo de Defeitos Constatados',
			'descr'      => 'Cadastro/Manutenção nos grupos de defeitos constatados pelo TÉCNICO',
			"codigo"     => "CAD0610"
		),
		array(
			'fabrica'    => array(52),
			'icone'      => $icone["cadastro"],
			'link'       => 'manutencao_mao_de_obra_linha_defeito.php',
			'titulo'     => 'Manutenção mão-de-obra',
			'descr'      => 'Cadastro/Manutenção de valores mão de obra',
			"codigo"     => "CAD0620"
		),
		array(//chamado 2977
			'disabled'   => true,
			'fabrica_no' => array(24),
			'icone'      => $icone["cadastro"],
			'link'       => 'causa_defeito_cadastro.php',
			'titulo'     => 'Causa de Defeitos',
			'descr'      => 'Causas de defeitos constatados pelo TÉCNICO',
			"codigo"     => "CAD0630"
		),
		array(
			'fabrica_no' => array_merge($fabricas_contrato_lite, array(86)),
			'icone'      => $icone["cadastro"],
			'link'       => 'excecao_cadastro.php',
			'titulo'     => 'Exceção de mão-de-obra',
			'descr'      => 'Cadastro das exceções de mão-de-obra',
			"codigo"     => "CAD0640"
		),
		array(
			'fabrica'    => array(15),
			'icone'      => $icone['cadastro'],
			'link'       => 'excecao_cadastro_new.php',
			'titulo'     => 'Manutenção Exceção de mão-de-obra',
			'descr'      => 'Manutenção das exceções de mão-de-obra',
			"codigo"     => "CAD0650"
		),
		array(
			'fabrica'    => 1,
			'icone'      => $icone["cadastro"],
			'link'       => 'excecao_cadastro_black.php',
			'titulo'     => 'Exceção de mão-de-obra(Nova Tela)',
			'descr'      => 'Cadastro das exceções de mão-de-obra',
			"codigo"     => "CAD0660"
		),
		array(
			'fabrica'    => array(45, 80),
			'icone'      => $icone["cadastro"],
			'link'       => 'extrato_lancamento_mensal.php',
			'titulo'     => 'Valor fixo mensal para postos',
			'descr'      => 'Cadastro de valores que serão incluídos todos os meses ao extrato',
			"codigo"     => "CAD0670"
		),
		array(
			'fabrica'    => array(20),
			'icone'      => $icone["cadastro"],
			'link'       => 'servico_realizado_cadastro.php',
			'titulo'     => 'Cadastro de Identificação',
			'descr'      => 'Cadastro de Identificação, terceiro código de falha',
			"codigo"     => "CAD0680"
		),
		array(
			'fabrica_no' => array(20),
			'icone'      => $icone["cadastro"],
			'link'       => 'servico_realizado_cadastro.php',
			'titulo'     => 'Serviços',
			'descr'      => 'Cadastro de serviços realizados',
			"codigo"     => "CAD0690"
		),
		array(
			'fabrica'    => array(14),
			'icone'      => $icone["cadastro"],
			'link'       => 'servico_realizado_tipo_posto.php',
			'titulo'     => 'Cadastro de Serviços Realizados x Tipos de Postos',
			'descr'      => 'Cadastro de serviços realizados x tipos de postos e cadastro de exceção por posto',
			"codigo"     => "CAD0700"
		),
		array(
			'fabrica'    => $fabrica_integridade_reclamado_constatado,
			'icone'      => $icone["cadastro"],
			'link'       => 'defeito_causa_defeito_cadastro.php',
			'titulo'     => 'Defeitos x Causa do Defeito',
			'descr'      => 'Cadastro da relação entre os defeitos e suas causas possíveis',
			"codigo"     => "CAD0710"
		),
		array(
			'fabrica'    => $fabrica_integridade_reclamado_constatado,
			'icone'      => $icone["cadastro"],
			'link'       => 'defeito_reclamado_defeito_constatado.php',
			'titulo'     => 'Defeito Constatado x Reclamado',
			'descr'      => 'Cadastro da relação entre os defeitos reclamados e seus possíveis defeitos constatados',
			"codigo"     => "CAD0720"
		),
		array(
			'fabrica_no' => array_merge($fabricas_contrato_lite,array(94)),
			'icone'      => $icone["cadastro"],
			'link'       => 'defeito_cadastro.php',
			'titulo'     => 'Defeito em Peças',
			'descr'      => 'Cadastro de defeitos que podem ocorrer nas peças',
			"codigo"     => "CAD0730"
		),
		array(
			'fabrica_no' => $fabrica_nao_cadastra_solucao_defeito,
			'icone'      => $icone["cadastro"],
			'link'       => 'solucao_cadastro.php',
			'titulo'     => 'Solução',
			'descr'      => 'Cadastro de Solução de um defeito',
			"codigo"     => "CAD0740"
		),
		array(
			'fabrica'    => 74,
			'icone'      => $icone["cadastro"],
			'link'       => 'solucao_familia_cadastro.php',
			'titulo'     => 'Integridade Família e Solução',
			'descr'      => 'Cadastro de integridade de Solução x Família',
			"codigo"     => "CAD0750"
		),
		array(
			'fabrica'    => 1,
			'icone'      => $icone["cadastro"],
			'link'       => 'linha_solucao_cadastro.php',
			'titulo'     => 'Linha x Solução',
			'descr'      => 'Cadastro de Solução de um defeito para cada linha (Objetivo é para o posto digitar a solução somente da linha)',
			"codigo"     => "CAD0760"
		),
		array( //Volta o menu para LeaderShip HD 731929
			'fabrica'    => 95,
			'icone'      => $icone["computador"],
			'link'       => 'relacionamento_diagnostico.php',
			'titulo'     => 'Relacionamento de Integridade',
			'descr'      => 'Relacionamento de Linha, Familia, Defeito Reclamado, Defeito Constatado e Solução para o Diagnóstico',
			"codigo"     => "CAD0770"
		),
		array(
			'disabled'   => $fabrica_usa_rel_diag_new, // A _NEW vem depois...
			'fabrica_no' => array_merge($fabricas_contrato_lite, array(20,74,86,94,108,111)),
			'icone'      => $icone["computador"],
			'link'       => 'relacionamento_diagnostico.php',
			'titulo'     => 'Relacionamento de Integridade',
			'descr'      => 'Relacionamento de Linha, Familia, Defeito Reclamado, Defeito Constatado e Solução para o Diagnóstico',
			"codigo"     => "CAD0780"
		),
		array(
			'fabrica'    => $fabrica_usa_rel_diag_new,
			'icone'      => $icone["computador"],
			'link'       => 'relacionamento_diagnostico_new.php',
			'titulo'     => 'Relacionamento de Integridade',
			'descr'      => 'Relacionamento de Linha, Familia, Defeito Reclamado, Defeito Constatado e Solução para o Diagnóstico',
			"codigo"     => "CAD0790"
		),
		array(
			'fabrica'    => array(15),
			'icone'      => $icone["computador"],
			'link'       => 'os_acerto_defeito.php',
			'titulo'     => 'Acertos de OSs cadastradas',
			'descr'      => 'Acerto dos cadastro dos defeitos das OSs.',
			"codigo"     => "CAD0800"
		),
		array(
			'fabrica'    => $fabrica_integridade_peca,
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_integridade.php',
			'titulo'     => 'Integridade de Peças',
			'descr'      => 'Cadastro de integridade de peças',
			"codigo"     => "CAD0810"
		),
		array(
			'fabrica'    => array(20),
			'icone'      => $icone["cadastro"],
			'link'       => 'produto_custo_tempo_cadastro.php',
			'titulo'     => 'Cadastro de Custo Tempo',
			'descr'      => 'Cadastro e atulização de custo tempo por produtos',
			"codigo"     => "CAD0820"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'causa_troca_cadastro.php',
			'titulo'     => 'Cadastro de Causa de Troca',
			'descr'      => 'Cadastro das causas da troca do produto',
			"codigo"     => "CAD0830"
		),
		array(
			'fabrica'    => array(15),
			'icone'      => $icone["cadastro"],
			'link'       => 'rel_area_atuacao_familia.php',
			'titulo'     => 'Relacionamento Area Atuação X Família',
			'descr'      => 'Cadastro dos relacionamentos das áreas de atuação com famílias de produtos',
			"codigo"     => "CAD0840"
		),
		array(
			'fabrica'    => array(6),
			'icone'      => $icone["cadastro"],
			'link'       => 'causa_troca_item_cadastro.php',
			'titulo'     => 'Cadastro dos Itens de Causa de Troc',
			'descr'      => 'Cadastro dos Itens das causas da troca do produto',
			"codigo"     => "CAD0850"
		),
		array(
			'fabrica'    => $fabrica_pede_laudo_tecnico,
			'icone'      => $icone["cadastro"],
			'link'       => 'laudo_tecnico_cadastro.php',
			'titulo'     => 'Cadastro de questionário',
			'descr'      => ($login_fabrica==19)?'Cadastro de questionário por linha de produto para atendimento em domicílio':'Cadastro dos Laudos Ténicos por Produto ou Família',
			"codigo"     => "CAD0860"
		),
		array(
			'fabrica'    => array(30,92),
			'icone'      => $icone["cadastro"],
			'link'       => 'cadastro_item_servico.php',
			'titulo'     => 'Cadastro de Itens de Serviço',
			'descr'      => 'Cadastro de Itens de Serviço',
			"codigo"     => "CAD0870"
		),
		array(
			'fabrica'    => array(74),
			'icone'      => $icone["cadastro"],
			'link'       => 'integridade_peca_defeito_cadastro.php',
			'titulo'     => 'Cadastro de Integridade Peça Defeito',
			'descr'      => 'Cadastro de Integridade entre Peças e Defeitos',
			"codigo"     => "CAD0880"
		),
		array(
			'fabrica'    => array(15,74),
			'icone'      => $icone["cadastro"],
			'link'       => 'servico_realizado_integridade_cadastro.php',
			'titulo'     => 'Cadastro de Integridade de Serviço e Defeito',
			'descr'      => 'Cadastro de Integridade de Serviço Realizado e Defeitos',
			"codigo"     => "CAD0890"
		),
		array(
			'fabrica'    => array(15,74),
			'icone'      => $icone["cadastro"],
			'link'       => 'produto_serie_integridade.php',
			'titulo'     => 'Cadastro de Integridade de Produto e Série',
			'descr'      => 'Cadastro da Integridade de Produtos com Número de Séries para controle de OS.',
			"codigo"     => "CAD0900"
		),
		'link' => 'linha_de_separação'
	),

	// SEÇÃO de EXTRATOS
	'secao2' => array(
		'secao'      => array(
			'link'       => '#',
			'titulo'     => 'CADASTROS REFERENTES AO EXTRATO',
			'fabrica_no' => array(87)
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'lancamentos_avulsos_cadastro.php',
			'titulo'     => 'Lançamentos Avulsos',
			'descr'      => 'Cadastro dos Lançamentos Avulsos ao Extrato',
			"codigo"     => "CAD0910"
		),
		array(
			'fabrica'    => array(50),
			'icone'      => $icone["email"],
			'link'       => 'colormaq_email_devolucao_cad.php',
			'titulo'     => 'E-mail de NF de Devolução',
			'descr'      => 'Cadastro do e-mail enviado aos postos cobrando a NF de devolução',
			"codigo"     => "CAD0920"
		),
		array(
			'fabrica'    => array(3),
			'icone'      => $icone["cadastro"],
			'link'       => 'tipo_nota_cadastro.php',
			'titulo'     => 'Tipo de Nota',
			'descr'      => 'Cadastro de tipo de nota para o extrato',
			"codigo"     => "CAD0930"
		),
		'link' => 'linha_de_separação'
	),

	// SEÇÃO de MANUTENÇÃO DE POSTOS AUTORIZADOS
	'secao3' => array(
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'MANUTENÇÃO DE POSTOS AUTORIZADOS',
			'fabrica_no' => array(87)
		),
		array(
			'fabrica'    => array(30,52,85,96),
			'icone'      => $icone["cadastro"],
			'link'       => 'cliente_admin_cadastro.php',
			'titulo'     => ($login_fabrica==96)?'Cadastro de Clientes':'Clientes Admin',
			'descr'      => 'Cadastro de Clientes que terão acesso a abertura de Pré-OS',
			"codigo"     => "CAD0940"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'posto_cadastro.php',
			'titulo'     => 'Postos Autorizados',
			'descr'      => 'Cadastro de postos autorizados',
			"codigo"     => "CAD0950"
		),
		array(
			'fabrica'    => array(81,114),
			'icone'      => $icone["computador"],
			'link'       => 'controle_salton.php',
			'titulo'     => 'Controle Boaz Credenciamento',
			'descr'      => 'Controle dos postos que responderam o email de auto-credenciamento.',
			"codigo"     => "CAD0960"
		),
		array(
			'fabrica'    => array(15),
			'icone'      => $icone["consulta"],
			'link'       => 'relatorio_atualizacao_dados_posto.php',
			'titulo'     => 'Consulta Atualização Cadastro Postos',
			'descr'      => 'Consulta a atualização cadastral obrigatória dos postos.',
			"codigo"     => "CAD0970"
		),
		array(
			'icone'      => $icone["computador"],
			'link'       => 'credenciamento.php',
			'titulo'     => 'Credenciamento de Postos',
			'descr'      => 'Credenciamento de postos autorizados.',
			"codigo"     => "CAD0980"
		),
		array(
			'fabrica'    => array(15),
			'icone'      => $icone["cadastro"],
			'link'       => 'valor_km_posto.php',
			'titulo'     => 'Cadastro de Valor de KM por Posto',
			'descr'      => 'Cadastro de Valor de KM por Posto Autorizado.',
			"codigo"     => "CAD0990"
		),
		array(
			'fabrica_no' => array($fabricas_contrato_lite),
			'icone'      => $icone["cadastro"],
			'link'       => 'revenda_cadastro.php',
			'titulo'     => 'Revendas',
			'descr'      => 'Cadastro de Revendedores',
			"codigo"     => "CAD1000"
		),
		array(
			'fabrica'    => 7,
			'icone'      => $icone["consulta"],
			'link'       => 'cliente_consulta.php',
			'titulo'     => 'Clientes',
			'descr'      => 'Consulta de Clientes',
			"codigo"     => "CAD1010"
		),
		array(
			'fabrica'    => 7,
			'icone'      => $icone["cadastro"],
			'link'       => 'cadastro_representante_posto.php',
			'titulo'     => 'Representante Posto',
			'descr'      => 'Cadastro de Representantes por Posto',
			"codigo"     => "CAD1020"
		),
		array(
			'fabrica_no' => array_merge(array(7), $fabricas_contrato_lite),
			'icone'      => $icone["cadastro"],
			'link'       => 'consumidor_cadastro.php',
			'titulo'     => 'Consumidores',
			'descr'      => 'Cadastro de Consumidores',
			"codigo"     => "CAD1030"
		),
		array(
			'fabrica_no' => $fabricas_contrato_lite,
			'icone'      => $icone["cadastro"],
			'link'       => 'fornecedor_cadastro.php',
			'titulo'     => 'Fornecedores',
			'descr'      => 'Cadastro de Fornecedores',
			"codigo"     => "CAD1040"
		),
		array(
			'fabrica_no' => $fabricas_contrato_lite,
			'icone'      => $icone["cadastro"],
			'link'       => 'faq_situacao.php',
			'titulo'     => 'Perguntas Frequentes',
			'descr'      => 'Cadastro de  perguntas e respostas sobre um determinado produto',
			"codigo"     => "CAD1050"
		),
		array(
			'fabrica'    => 1,
			'icone'      => $icone["email"],
			'link'       => 'comunicado_blackedecker.php',
			'titulo'     => 'Comunicados por E-mail',
			'descr'      => 'Envie comunicados por e-mail para os postos',
			"codigo"     => "CAD1060"
		),
		array(
			'fabrica'    => array(3),
			'icone'      => $icone["computador"],
			'link'       => 'distribuidor_posto_relatorio.php',
			'titulo'     => 'Distribuidor e seus postos',
			'descr'      => 'Relação para conferência da Distribuição',
			"codigo"     => "CAD1070"
		),
		array(
			'fabrica'    => array(3),
			'admin'      => array(258, 852),
			'icone'      => $icone["cadastro"],
			'link'       => 'cadastro_km.php',
			'titulo'     => 'Quilometragem',
			'descr'      => 'Cadastro do valor pago por Quilometragem para Ordens de Serviços com atendimento em Domicilio.',
			"codigo"     => "CAD1080"
		),
		array(
			'fabrica'    => array(3),
			'admin'      => array(258, 852),
			'icone'      => $icone["computador"],
			'link'       => 'aprova_atendimento_domicilio.php',
			'titulo'     => 'Aprovar OS Domicilio (EM TESTE)',
			'descr'      => 'Aprovação de Ordens de Serviços que tenham atendimento em domicilio.',
			"codigo"     => "CAD1090"
		),
		array(
			'fabrica'    => $fabrica_cadastra_num_serie,
			'icone'      => $icone["cadastro"],
			'link'       => 'manutencao_numero_serie.php',
			'titulo'     => 'Cadastro de Número de Série',
			'descr'      => 'Cadastro e Manutenção de Nº de Série',
			"codigo"     => "CAD1100"
		),
		array(
			'fabrica'    => $fabrica_integra_serie_upload,
			'icone'      => $icone["upload"],
			'link'       => 'upload_importacao_serie.php',
			'titulo'     => 'Upload de Número de Série',
			'descr'      => 'Upload de Arquivo de Número de Série',
			"codigo"     => "CAD1110"
		),
		array(
			'fabrica'    => $fabrica_cadastra_serie_pecas,
			'icone'      => $icone["cadastro"],
			'link'       => 'manutencao_numero_serie_peca.php',
			'titulo'     => 'Inserir Componentes em Produtos',
			'descr'      => 'Inserir Componentes em Produtos para lançamento de itens na Ordem de Serviço',
			"codigo"     => "CAD1120"
		),
		array(
			'fabrica_no' => array_merge(array(86), $fabricas_contrato_lite),
			'icone'      => $icone["cadastro"],
			'link'       => 'feriado_cadastra.php',
			'titulo'     => 'Cadastro de Feriado',
			'descr'      => 'Cadastro de feriados no sistema',
			"codigo"     => "CAD1130"
		),
		array(
			'fabrica_no' => $fabricas_contrato_lite,
			'icone'      => $icone["cadastro"],
			'link'       => 'callcenter_pergunta_cadastro.php',
			'titulo'     => 'Cadastro de Perguntas do Callcenter',
			'descr'      => 'Para que as frases padrões do callcenter sejam alteradas',
			"codigo"     => "CAD1140"
		),
		array(
			'fabrica'    => array(20),
			'icone'      => $icone["cadastro"],
			'link'       => 'escritorio_regional_cadastro.php',
			'titulo'     => 'Cadastro de Escritórios Regionais',
			'descr'      => 'Faz o cadastramento e manutenção de escritórios regionais.',
			"codigo"     => "CAD1150"
		),
		array(
			'fabrica'    => array(20),
			'icone'      => $icone["upload"],
			'link'       => 'upload_importacao.php',
			'titulo'     => 'Upload de Arquivos',
			'descr'      => 'Faz o Upload de peças, preço, produto, lista básica do Brasil e América Latina.',
			"codigo"     => "CAD1160"
		),
		array(
			'fabrica'    => array(1,42,45),
			'icone'      => $icone["computador"],
			'link'       => 'atendente_cadastro.php',
			'titulo'     => 'Atendente Manutenção',
			'descr'      => 'Manutenção de Atendente de Help-Desk por Estado.',
			"codigo"     => "CAD1170"
		),
		array(
			'fabrica'    => array(1),
			'icone'      => $icone["computador"],
			'link'       => 'fale_conosco_cadastro.php',
			'titulo'     => 'Fale Conosco Manutenção',
			'descr'      => 'Manutenção de Fale Conosco na Tela do Posto.',
			"codigo"     => "CAD1180"
		),

		// $menu['secao3'][] = array(
		// 	'fabrica'	=> array(1),
		// 	'icone'		=> 'pasta25.gif',
		// 	'link'		=> 'atendente_solicitacao_cadastro.php',
		// 	'titulo'	=> 'Atendente Solicitação',
		// 	'descr'		=> 'Manutenção de Atendente por tipo de solicitação.'
		// );
		array(
			'fabrica' => 7,
			'icone'   => $icone["cadastro"],
			'link'    => 'classificacao_os_cadastro.php',
			'titulo'  => 'Classificação de OS',
			'descr'   => 'Cadastro de Clasificação de Ordem de Serviço.',
			"codigo"  => "CAD1190"
		),
		array(
			'fabrica' => 7,
			'icone'   => $icone["cadastro"],
			'link'    => 'contrato_cadastro.php',
			'titulo'  => 'Contrato',
			'descr'   => 'Cadastro de Contrato.',
			"codigo"  => "CAD1200"
		),
		array(
			'fabrica' => 7,
			'icone'   => $icone["cadastro"],
			'link'    => 'grupo_empresa_cadastro.php',
			'titulo'  => 'Grupo de Empresa',
			'descr'   => 'Cadastro Grupo de empresa.',
			"codigo"  => "CAD1210"
		),
		array(
			'fabrica' => array(3),
			'icone'   => $icone["cadastro"],
			'link'    => 'dias_intervencao_cadastro.php',
			'titulo'  => 'Dias para entrar na intervenção',
			'descr'   => 'Alteração de quantidade de dias para OS entrar na intervenção.',
			"codigo"  => "CAD1220"
		),
		array(
			'fabrica' => $fabrica_usa_mascara_serie, // HD 86636 HD 264560
			'icone'   => $icone["cadastro"],
			'link'    => 'cadastro.php',
			'titulo'  => 'Cadastro de Máscara de Número de Série',
			'descr'   => 'Manutenção de Máscara de Número de Série.',
			"codigo"  => "CAD1230"
		),
		array(
			'fabrica' => array(3),
			'icone'   => $icone["cadastro"],
			'link'    => 'cadastro_garantia_estendida.php',
			'titulo'  => 'Cadastro de Garantia Estendida',
			'descr'   => 'Cadastro de Garantia Estendida.',
			"codigo"  => "CAD1240"
		),
		array(
			'fabrica' => array(3),
			'icone'   => $icone["cadastro"],
			'link'    => 'prospeccao_cadastro.php',
			'titulo'  => 'Cadastro de Prospecção de Postos',
			'descr'   => 'Cadastro de Prospecção de Postos',
			"codigo"  => "CAD1250"
		),
		array(
			'fabrica' => array(50),
			'icone'   => $icone["computador"],
			'link'    => 'posto_familia_cadastro.php',
			'titulo'  => 'Posto X Deslocamento',
			'descr'   => 'Autoriza deslocamento para familia de produto.',
			"codigo"  => "CAD1260"
		),
		array(
			'fabrica' => array(43), // HD34210
			'icone'   => $icone["cadastro"],
			'link'    => 'indicadores_cadastro.php',
			'titulo'  => 'Cadastro Indicadores Ranking',
			'descr'   => 'Cadastro de notas de corte, peso de cada nota e meta para o ranking dos postos.',
			"codigo"  => "CAD1270"
		),
		array(
			'fabrica' => array(45), // HD34210
			'icone'   => $icone["cadastro"],
			'link'    => 'upload_representante_comercial.php',
			'titulo'  => 'Upload de arquivo de representante comercial',
			'descr'   => 'Upload de arquivo de representante comercial.',
			"codigo"  => "CAD1280"
		),
		'link' => 'linha_de_separação'
	),

	// SEÇÃO de PESQUISA DE SATISFAÇÃO - Apenas Esmaltec
	'secao4' => array(
		'secao'    => array(
			'link'     => '#',
			'titulo'   => 'PESQUISA DE SATISFAÇÃO',
			'fabrica'  => array(30, 52)
		),
		array(
			'icone'    => $icone["cadastro"],
			'link'     => 'cadastro_pergunta.php',
			'titulo'   => 'Cadastro de Pergunta',
			'descr'    => 'Cadastro de Perguntas para a Pesquisa de Satisfação.',
			'fabrica'  => array(30),
			"codigo"   => "CAD1290"
		),
		array(
			'icone'    => $icone["cadastro"],
			'link'     => 'pergunta_cadastro_new.php',
			'titulo'   => 'Cadastro de Pergunta',
			'descr'    => 'Cadastro de Perguntas para a Pesquisa de Satisfação.',
			'fabrica'  => array(52),
			"codigo"   => "CAD1300"
		),
		array(
			'disabled' => (!$helper->login->hasPermission('inspetor')),
			'icone'    => $icone["cadastro"],
			'link'     => 'cadastro_auditoria.php',
			'titulo'   => 'Cadastro de Auditoria',
			'descr'    => 'Cadastro de Auditoria do posto autorizado.',
			'fabrica'  => array(52),
			"codigo"   => "CAD1310"
		),
		array(
			'icone'    => $icone["cadastro"],
			'link'     => 'tipo_pergunta_cadastro.php',
			'titulo'   => 'Cadastro de Tipo de Pergunta/Requisito',
			'descr'    => 'Cadastro de Tipo de Pergunta para a pesquisa de satisfação/Auditoria.',
			'fabrica'  => array(52),
			"codigo"   => "CAD1320"
		),
		array(
			'icone'    => $icone["cadastro"],
			'link'     => 'cadastro_tipo_resposta.php',
			'titulo'   => 'Cadastro de Tipo de Respostas',
			'descr'    => 'Cadastro de Tipos de Respostas para as perguntas da Pesquisa de Satisfação.',
			"codigo"   => "CAD1330"
		),
		array(
			'icone'    => $icone["cadastro"],
			'link'     => 'cadastro_pesquisa.php',
			'titulo'   => 'Cadastro de Pesquisa',
			'descr'    => 'Cadastro de Pesquisa de Satisfação.',
			"codigo"   => "CAD1340"
		),
		'link' => 'linha_de_separação'
	),

	// SEÇÃO de LOJA VIRTUAL - Apenas Britânia, Cadence e Telecontrol
	'secao5' => array(
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'CONSULTA LOJA VIRTUAL',
			'fabrica'    => array(3, 10, 35)
		),
		array(
			'fabrica_no' => array(35),
			'icone'      => $icone["computador"],
			'link'       => 'loja_completa.php',
			'titulo'     => 'Listas de Produtos',
			'descr'      => 'Listas dos Produtos Promoção Loja Virtual.',
			"codigo"     => "CAD1350"
		),
		array(
			'icone'      => $icone["computador"],
			'link'       => 'manutencao_valormin.php',
			'titulo'     => 'Manutenção',
			'descr'      => 'Manutenção do Valor Minimo de Compra.',
			"codigo"     => "CAD1360"
		),
		'link' => 'linha_de_separação'
	),

	// SEÇÃO de AMÉRICA LATINA - Apenas Bosch
	'secao6' => array(
		'secao'   => array(
			'link'    => '#',
			'titulo'  => 'INFORMAÇÕES CADASTRAIS DA AMÉRICA LATINA',
			'fabrica' => array(20),
		),
		array(
			'icone'   => $icone["computador"],
			'link'    => 'peca_informacoes_pais.php',
			'titulo'  => 'Tabela de Preços América Latina',
			'descr'   => 'Todas tabelas de preço da América Latina.',
			"codigo"  => "CAD1370"
		),
		array(
			'icone'   => $icone["computador"],
			'link'    => 'produto_informacoes_pais.php',
			'titulo'  => 'Produtos por País',
			'descr'   => 'Todos os produtos cadastrados pelos países da América Latina.',
			"codigo"  => "CAD1380"
		),
		array(
			'icone'   => $icone["computador"],
			'link'    => 'informacoes_pais.php',
			'titulo'  => 'Dados Países da América Latina',
			'descr'   => 'Dados de conversão de moeda e desconto de cada país <br>usado na integração com a Alemanha.',
			"codigo"  => "CAD1390"
		),
		'link' => 'linha_de_separação'
	),
);

