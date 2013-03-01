<?php
// Fabricas que tem distribuição via DISTRIB Telecontrol
		$fabrica_distrib = array(51, 81, 114);
//HD 666788 - Funcionalidades por admin
		$sql = "SELECT fabrica
				  FROM tbl_funcionalidade
				 WHERE fabrica=$login_fabrica OR fabrica IS NULL";
$res = pg_query($con,$sql);
$fabrica_funcionalidades_admin = (pg_num_rows($res)>0);

// Seção CREDENCIAMENTO - Geral
return array(
	'secao0' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'CREDENCIAMENTO DE ASSISTÊNCIAS TÉCNICAS',
			'fabrica_no'=> array(87),
			'fabrica'   => array(24, 25, 47)
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["computador"],
			'link'		=> '../credenciamento/suggar/index.php',
			'titulo'	=> 'Credenciamento de Assistências Técnicas',
			'descr'		=> 'Credenciamento e Descredenciamento de Assistências Técnicas.',
			"codigo" => 'GER-0010'
		),
		array(
			'fabrica'	=> array(25),
			'icone'		=> $icone["computador"],
			'link'		=> '../credenciamento/hbtech/index_.php',
			'titulo'	=> 'Credenciamento de Assistências Técnicas',
			'descr'		=> 'Credenciamento e Descredenciamento de Assistências Técnicas.',
			"codigo" => 'GER-0020'
		),
		array(
			'fabrica'	=> array(25),
			'icone'		=> $icone["computador"],
			'link'		=> '../credenciamento/gera_contrato_crown.php',
			'titulo'	=> 'Contrato Assistências Técnicas',
			'descr'		=> 'Contrato para Assistências Técnicas.',
			"codigo" => 'GER-0030'
		),
		array(
			'fabrica'	=> array(25),
			'icone'		=> $icone["computador"],
			'link'		=> 'credenciamento_lista.php',
			'titulo'	=> 'Acompanhamento do recadastramento',
			'descr'		=> 'Listagem dos postos que receberam o e-mail de recadastramento.',
			"codigo" => 'GER-0040'
		),
		'link' => 'linha_de_separação',
	),

	// Seção CADASTRO DE FABRICANTES - Interno Telecontrol
	'secao1' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'RELATÓRIOS',
			'fabrica'   => array(10)
		),
		array(
			'admin'     => array(398, 432, 435), //São admins da fábrica Telecontrol...
			'icone'		=> $icone["cadastro"],
			'link'		=> 'fabricante_cadastro.php',
			'titulo'	=> 'Cadastro de fábricas',
			'descr'		=> 'Cadastro de fabricantes pela página.',
			"codigo" => 'GER-1010'
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'posto_credenciamento.php',
			'titulo'	=> 'Credenciar Autorizada',
			'descr'		=> 'Cadastramento da rede autorizada para este fabricante.',
			"codigo" => 'GER-1020'
		),
		'link' => 'linha_de_separação',
	),

	// Seção CONSULTAS - Geral
	'secao2' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'CONSULTAS',
			'fabrica_no'=> array(87, 108, 111)
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_parametros.php',
			'titulo'	=> 'Consulta Ordens de Serviço',
			'descr'		=> 'Consulta OS Lançadas',
			"codigo" => 'GER-2010'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'pedido_parametros.php',
			'titulo'	=> 'Consulta Pedidos de Peças',
			'descr'		=> 'Consulta pedidos efetuados por postos autorizados.',
			"codigo" => 'GER-2020'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'acompanhamento_os_revenda_parametros.php',
			'titulo'	=> 'Acompanhamento de OS Revenda',
			'descr'		=> 'Consulta OS de Revenda Lançadas e Finalizadas',
			"codigo" => 'GER-2030'
		),
		array(
			'fabrica'	=> array(43),
			'icone'		=> $icone["consulta"],
			'link'		=> 'status_os_posto.php',
			'titulo'	=> 'Acompanhamento de OS em aberto',
			'descr'		=> 'Consulta status das Ordens de Serviço em aberto',
			"codigo" => 'GER-2040'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_enviadas_tectoy.php',
			'titulo'	=> 'OS com peças enviadas a fábrica',
			'descr'		=> 'Consulta OSs que o posto enviou peças para a fábrica. Autoriza ou não o pagamento de metade da mão-de-obra.',
			"codigo" => 'GER-2050'
		),
		array(
			'fabrica'	=> array(3), // HD 55242
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_consulta_agrupada.php',
			'titulo'	=> 'Consulta Ordem de Serviço Agrupada',
			'descr'		=> 'Consulta OS agrupada.',
			"codigo" => 'GER-2060'
		),
		array(
			'fabrica'	=> array(1),
			'admin'     => 236,
			'icone'		=> $icone["computador"],
			'link'		=> 'os_consulta_lite_etiqueta.php',
			'titulo'	=> 'Consulta OSs e gera etiquetas',
			'descr'		=> 'Transferência de OS entre postos',
			"codigo" => 'GER-2070'
		),
		array(
			'fabrica'	=> array(14),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_transferencia.php',
			'titulo'	=> 'Transferência de OS',
			'descr'		=> 'Transferência de OS entre postos',
			"codigo" => 'GER-2080'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_transferencia_filizola.php',
			'titulo'	=> 'Transferência de OS',
			'descr'		=> 'Transferência de OS entre postos',
			"codigo" => 'GER-2090'
		),
		array(
			'fabrica'	=> array(51),
			'icone'		=> $icone["consulta"],
			'link'		=> 'estoque_consulta.php',
			'titulo'	=> 'Consulta de estoque',
			'descr'		=> 'Consulta de estoque da Telecontrol.',
			"codigo" => 'GER-2100'
		),
		'link' => 'linha_de_separação',
	),

	// Seção RELATÓRIOS - Geral
	'secao3' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'RELATÓRIOS',
			'fabirca_no'=> array(87)
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'background'=> '#AAAAAA',
			'link'		=> '#relatorio_lancamentos..php',
			'titulo'	=> 'Lançamentos',
			'descr'		=> 'Postos que estão lançando ordens de serviço no site.',
			"codigo" => 'GER-3010'
		),
		array(//HD 44656
			'fabrica'	=> array(14,15,43,66),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto.php',
			'titulo'	=> 'Field Call-Rate - Produtos',
			'descr'		=> 'Percentual de quebra de produtos.<br><i>Considera apenas ordem de serviço fechada, apresentando custos</i>',
			"codigo" => 'GER-3020'
		),
		array(
			'fabrica'	=> array(96),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_grafico_rel_os_finalizada.php',
			'titulo'	=> 'OS abertas em Garantia e Fora de Garantia',
			'descr'		=> 'Este Relatório mostra através de gráficos as OS abertas dentro e fora de garantia',
			"codigo" => 'GER-3030'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_indice_defeito.php',
			'titulo'	=> 'Relatório de Índice de Defeito de Campo',
			'descr'		=> 'Este relatório contempla o índice de defeitos de Campo.',
			"codigo" => 'GER-3040'
		),
		array(
			'fabrica'	=> array(94),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_periodo.php',
			'titulo'	=> 'Relatório de OS por Período',
			'descr'		=> 'Este relatório considera a Data de Fechamento das Ordens de Serviço.',
			"codigo" => 'GER-3050'
		),
		array(
			'fabrica'	=> array(94),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'indice_ocorrencia_mensal.php',
			'titulo'	=> 'Relatório de Índice de Ocorrência Mensal',
			'descr'		=> 'Este relatório contempla o índice de ocorrência de defeitos no intervalo de tempo determinado pelo usuário.',
			"codigo" => 'GER-3060'
		),
		array(
			'icone'		=> $icone["bi"],
			'link'		=> 'bi/fcr_os.php',
			'titulo'	=> 'BI -Field Call Rate - Produtos',
			'descr'		=> 'Percentual de quebra de produtos.<br><i>O BI é atualizado com as informações do dia anterior, portanto tem um dia de atraso!</i>',
			"codigo" => 'GER-3070'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["bi"],
			'link'		=> 'bi/fcr_os_detalhado.php',
			'titulo'	=> 'BI -Field Call Rate - Detalhado',
			'descr'		=> 'Detalhamento do Field Call Rate Produtos para Auditoria.<br><i>O BI é atualizado com as informações do dia anterior, portanto tem um dia de atraso!</i>',
			"codigo" => 'GER-3080'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["bi"],
			'link'		=> 'bi/fcr_os_detalhado_peca.php',
			'titulo'	=> 'BI -Field Call Rate - Defeitos',
			'descr'		=> 'Detalhamento do Field Call Rate Produtos e peças com defeito, para Auditoria.<br><i>O BI é atualizado com as informações do dia anterior, portanto tem um dia de atraso!</i>',
			"codigo" => 'GER-3090'
		),
		array(
			'fabrica'	=> array(3, 24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto2.php',
			'titulo'	=> 'Field Call Rate - Produtos 2',
			'descr'		=> 'Relatório do percentual de defeitos das peças por produto.',
			"codigo" => 'GER-3100'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto3_britania.php',
			'titulo'	=> 'Field Call Rate - Produtos 3',
			'descr'		=> 'Considera OS lançadas no sistema filtrando pela data da digitação ou finalização.',
			"codigo" => 'GER-3110'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto3.php',
			'titulo'	=> 'Field Call Rate - Produtos 3',
			'descr'		=> 'Considera OS lançadas no sistema filtrando pela data da digitação ou finalização.',
			"codigo" => 'GER-3120'
		),
		array(
			'fabrica_no'=> $fabricas_contrato_lite,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto_lista_basica.php',
			'titulo'	=> 'Field Call Rate - Produtos Lista Básica',
			'descr'		=> 'Relatório de quebras de peças da lista básica do produto',
			"codigo" => 'GER-3130'
		),
		array(
			'fabrica'	=> array(66,14),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_posto.php',
			'titulo'	=> 'Field Call Rate - Postos',
			'descr'		=> 'Relatório de ocorrência de OS por familia por postos.',
			"codigo" => 'GER-3140'
		),
		array(
			'icone'		=> $icone["bi"],
			'link'		=> 'bi/fcr_pecas.php',
			'titulo'	=> ($login_fabrica==24)?'Field Call-Rate - Produtos 4':'BI Field Call-Rate - Peças',
			'descr'		=> 'Percentual de quebra de peças.<br><i>O BI é atualizado com as informações do dia anterior, portanto tem um dia de atraso!</i>',
			"codigo" => 'GER-3150'
		),
		array(
			'fabrica'	=> array(14, 66),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_defeito_constatado.php',
			'titulo'	=> 'Field Call Rate - Defeitos Constatados',
			'descr'		=> 'Relatório de ocorrência de OS por defeitos constatados.',
			"codigo" => 'GER-3160'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_defeitos.php',
			'titulo'	=> 'Relatório de defeitos',
			'descr'		=> 'Relatório de defeitos de produtos e soluções a partir da data de digitação',
			"codigo" => 'GER-3170'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_engenharia_serie.php',
			'titulo'	=> 'Relatório de defeitos por Nº série',
			'descr'		=> 'Relatório de defeitos de produtos e soluções a partir do número de série',
			"codigo" => 'GER-3180'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_serie_reoperado.php',
			'titulo'	=> 'Relatório Nº série Reoperado',
			'descr'		=> 'Relatório de número de séries reoperados.',
			"codigo" => 'GER-3190'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_defeito_serie_fabricacao.php',
			'titulo'	=> 'Field Call-Rate - Produtos Número de Série',
			'descr'		=> 'Relatório de quebra dos produtos pela data de fabricação.',
			"codigo" => 'GER-3200'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto_grupo.php',
			'titulo'	=> 'Field Call-Rate - Produtos Número de Série 2',
			'descr'		=> 'Relatório de quebra dos produtos X número de série.',
			"codigo" => 'GER-3210'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto_pecas.php',
			'titulo'	=> 'Field Call-Rate - Mão-de-obra Produtos X Peças',
			'descr'		=> 'Relatório mão-de-obra por produto e troca de peça específicos.',
			"codigo" => 'GER-3220'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_pecas.php',
			'titulo'	=> 'Relatório Troca de Peça',
			'descr'		=> 'Relatório de peças trocadas pelo posto autorizado, peças trocadas em garantia ou pagas pelos clientes',
			"codigo" => 'GER-3230'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_sem_troca_peca.php',
			'titulo'	=> 'Relatório de OS sem troca de Peça',
			'descr'		=> 'Relatório em ordem de posto autorizado com maior índice de Ordens de Serviços sem troca de peça.',
			"codigo" => 'GER-3240'
		),
		array(
			'fabrica_no'=> array(81,114),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_peca_sem_pedido.php',
			'titulo'	=> 'Relatório de OS de Peça sem Pedido',
			'descr'		=> 'Relatório em ordem de posto autorizado com maior índice de Ordens de Serviços de peça sem pedido.',
			"codigo" => 'GER-3250'
		),
		array(
			'fabrica_no'=> $fabricas_contrato_lite,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_sem_preco.php',
			'titulo'	=> 'Relatório de Peça em OS sem Preço',
			'descr'		=> 'Relatório que mostra as peças que estão cadastradas em uma OS mas não possuem preço cadastrado.',
			"codigo" => 'GER-3260'
		),
		array(
			'fabrica'	=> array(106),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_reincidente.php',
			'titulo'	=> 'Relatório de OSs reincidentes',
			'descr'		=> 'Relatório de Ordens de Serviço Reincidentes',
			"codigo" => 'GER-3270'
		),
		array(
			'fabrica'	=> array(40,106,111,108),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_mais_tres_pecas.php',
			'titulo'	=> 'OS com mais de 3 peças',
			'descr'		=> 'Relatório para auditoria dos postos que utilizam mais de 3 peças por Ordem de Serviço.',
			"codigo" => 'GER-3280'
		),
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(14)),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_quantidade_os.php',
			'titulo'	=> 'Relatório de Quantidade de OSs Aprovadas por LINHA',
			'descr'		=> 'Relatório que mostra a quantidade de OS aprovadas por postos em determinadas linhas nos últimos 3 meses.',
			"codigo" => 'GER-3290'
		),
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(14, 81, 114)),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_devolucao_obrigatoria.php',
			'titulo'	=> 'Devolução Obrigatória',
			'descr'		=> 'Peças que devem ser devolvidas para a Fábrica constando em Ordens de Serviços.',
			"codigo" => 'GER-3300'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_devolucao_obrigatoria_tectoy.php',
			'titulo'	=> 'Total de Peças Devolução Obrigatória',
			'descr'		=> 'Total de peças que devem ser devolvidas para a Fábrica.',
			"codigo" => 'GER-3310'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_percentual_defeitos.php',
			'titulo'	=> 'Percentual de Defeitos',
			'descr'		=> 'Relatório por período de percentual dos defeitos de produtos.',
			"codigo" => 'GER-3320'
		),
		array(
			'fabrica_no'=> $fabricas_contrato_lite,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_percentual_defeitos.php',
			'titulo'	=> 'Percentual de Defeitos',
			'descr'		=> 'Relatório por período de percentual dos defeitos de produtos.',
			"codigo" => 'GER-3330'
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_defeito_constatado_os_anual.php',
			'titulo'	=> 'Relatório Anual de OS por Defeitos Constatados',
			'descr'		=> 'Relatório anual detalhando por família, grupo de defeito e defeito X mensal e total anual a quantidade de OS, bem como valores das mesmas',
			"codigo" => 'GER-3340'
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_auditoria.php',
			'titulo'	=> 'Relatório de Auditoria',
			'descr'		=> 'Relatório das Auditorias efetuadas nos postos autorizados',
			"codigo" => 'GER-3350'
		),
		array(
			'fabrica_no'=> $fabricas_contrato_lite,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_tempo_conserto_mes.php',
			'titulo'	=> 'Permanência em conserto no mês',
			'descr'		=> 'Relatório que mostra o tempo (dias) de permanência do produto na assistência técnica no mês.',
			"codigo" => 'GER-3360'
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_tempo_os_aberta.php',
			'titulo'	=> 'Relatorio de OS em abertos em dias',
			'descr'		=> 'Relatorio de OS em abertos em dias, considerando a data de abertura para o dia da geração do relatório.',
			"codigo" => 'GER-3370'
		),

		//liberado para Lenoxx hd 8231
		//liberado para Bosch hd 13373
		//liberado para Ibratele hd 138104
		//liberado para Esmaltec hd 149835
		//liberado para Nova Computadores hd 203875
		//liberado para Latinatec  30-12-2010 Aut. Ébano., solicitado por Rodrigo Torres.
		array(
			'fabrica'	=> array(8, 11, 15, 20, 30, 43),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_tempo_conserto.php',
			'titulo'	=> 'Permanência em conserto',
			'descr'		=> 'Relatório que mostra tempo médio (dias) de permanência do produto na assistência técnica.',
			"codigo" => 'GER-3380'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_defeitos_esmaltec.php',
			'titulo'	=> 'Relatório Defeitos OS por Atendimento',
			'descr'		=> 'Relatório de Defeitos OS x Tipo de Atendimento.',
			"codigo" => 'GER-3390'
		),
		array(
			'fabrica'	=> array(1,2,3,7,66),
			'icone'		=> $icone["relatorio"],
			'background'=> '#aaaaaa',
			'link'		=> '#relatorio_prazo_atendimento_periodo.php',
			'titulo'	=> 'Período de atendimento da OS',
			'descr'		=> 'Relatório de acompanhamento do atendimento por período de OS.',
			"codigo" => 'GER-3400'
		),
		array(
			'fabrica'	=> array(8), //liberado para Ibratele hd 138104
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_prazo_atendimento_periodo.php',
			'titulo'	=> 'Período de atendimento da OS',
			'descr'		=> 'Relatório de acompanhamento do atendimento por período de OS.',
			"codigo" => 'GER-3410'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_qualidade.php',
			'titulo'	=> 'Período de atendimento da OS',
			'descr'		=> 'Relatório de acompanhamento do atendimento por período de OS.',
			"codigo" => 'GER-3420'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_perguntas_britania.php',
			'titulo'	=> 'Relatório DVD Fama e Game',
			'descr'		=> 'Relatório que mostra a quantidade de P. A. participaram do questionário.',
			"codigo" => 'GER-3430'
		),
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(24)),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'produtos_mais_demandados.php',
			'titulo'	=> 'Produtos mais demandados',
			'descr'		=> 'Relatório dos produtos mais demandados em Ordens de Serviços nos últimos meses.',
			"codigo" => 'GER-3440'
		),
		array(
			'fabrica'	=> array(5,14,19,43,66),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'defeito_os_parametros.php',
			'titulo'	=> 'Relatório de Ordens de Serviço',
			'descr'		=> 'Relatório de Ordens de Serviço lançadas no sistema.',
			"codigo" => 'GER-3450'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["consulta"],
			'link'		=> 'auditoria_os_fechamento_blackedecker.php',
			'titulo'	=> 'Auditoria de peças trocadas em garantia',
			'descr'		=> 'Faz pesquisas nas Ordens de Serviços previamente aprovadas em extrato.',
			"codigo" => 'GER-3460'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_os.php',
			'titulo'	=> 'Relatório de Troca de OS',
			'descr'		=> 'Verifica as OS de troca do PA.',
			"codigo" => 'GER-3470'
		),
		array(
			'fabrica'	=> array(2, 3, 11, 24), //liberado para Lenoxx hd 8231
			'icone'		=> $icone["relatorio"],
			'link'		=> 'pendencia_posto.php',
			'titulo'	=> 'Pendências do posto',
			'descr'		=> 'Relatório de peças pendentes dos postos.',
			"codigo" => 'GER-3480'
		),
		array(
			'fabrica'	=> array(50),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produto_defeito_troca.php',
			'titulo'	=> 'Relatório de Troca de Peças',
			'descr'		=> 'Relatório de peças trocas os defeitos apresentados, listado por produtos.',
			"codigo" => 'GER-3490'
		),
		array(
			'fabrica'	=> array(50),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_serie_reincidente.php',
			'titulo'	=> 'Relatório OS Série Reincidente',
			'descr'		=> 'Relatório OS Série Reincidente.',
			"codigo" => 'GER-3500'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(2),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'extrato_posto_devolucao_controle.php',
			'titulo'	=> 'Pendências do posto - NF',
			'descr'		=> 'Controle de Notas Fiscais de Devolução e Peças',
			"codigo" => 'GER-3510'
		),
		array(
			'fabrica'	=> array(2, 11, 14, 24, 66),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_relatorio.php',
			'titulo'	=> 'Status das Ordens de Serviço',
			'descr'		=> 'Status das ordens de serviço',
			"codigo" => 'GER-3520'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_serie.php',
			'titulo'	=> 'Relatório de Nº de Série',
			'descr'		=> 'Relatório de ocorrência de produtos por nº de série.',
			"codigo" => 'GER-3530'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_serie_ano.php',
			'titulo'	=> 'Relatório de Nº de Série Anual',
			'descr'		=> 'Relatório de ocorrência de produtos por nº de série no período de 12 meses.',
			"codigo" => 'GER-3540'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_producao_serie.php',
			'titulo'	=> 'Relatório de Produção',
			'descr'		=> 'Relatório de produção.',
			"codigo" => 'GER-3550'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_producao_nova_serie.php',
			'titulo'	=> 'Relatório de Produção Série Nova',
			'descr'		=> 'Relatório de produção.',
			"codigo" => 'GER-3560'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pecas_faturadas.php',
			'titulo'	=> 'Relatório de Peças Faturadas',
			'descr'		=> 'Relatório de peças faturadas.',
			"codigo" => 'GER-3570'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto_serie.php',
			'titulo'	=> 'Relatório OS com Nº de Série e Posto',
			'descr'		=> 'Relatório Ordens de Serviços lançadas no sistema por produto e por posto, e com número de série.',
			"codigo" => 'GER-3580'
		),
		array(
			'fabrica'	=> array(3, 24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_produto.php',
			'titulo'	=> 'Relatório Troca de Produto',
			'descr'		=> 'Relatório de produto trocado na OS.',
			"codigo" => 'GER-3590'
		),
		array(
			'fabrica'	=> array(3, 24, 66, 81, 114),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_produto_total.php',
			'titulo'	=> 'Relatório Troca de Produto Total',
			'descr'		=> 'Relatório de produto trocado e arquivo .XLS',
			"codigo" => 'GER-3600'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_linha.php',
			'titulo'	=> 'Relatório de OS digitadas por linha',
			'descr'		=> 'Relatório de OS digitadas por linha.',
			"codigo" => 'GER-3610'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pecas_mes.php',
			'titulo'	=> 'Relatório de OS e Pecas digitadas',
			'descr'		=> 'Relatório contendo a qtde de OS e Peças digitadas.',
			"codigo" => 'GER-3620'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'background'=> '#aaaaaa',
			'link'		=> '#relatorio_garantia_faturado.php',
			'titulo'	=> 'Peças faturadas e garantia dos últimos quatro meses',
			'descr'		=> 'Quantidade de peças enviadas em garantia, comparadas com as peças faturadas, totalizados por linha.',
			"codigo" => 'GER-3630'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'background'=> '#aaaaaa',
			'link'		=> '#relatorio_diario.php',
			'titulo'	=> 'Relatório Diário',
			'descr'		=> 'Resumo mensal do Relatório Diário enviado por email.',
			"codigo" => 'GER-3640'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_qtde_os.php',
			'titulo'	=> 'Relatório Qtde OS e Peças Anual',
			'descr'		=> 'Relatório Anual de quantidade de OSs e Peças por Data Digitação e Finalização.',
			"codigo" => 'GER-3650'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_qtde_os_fabrica.php',
			'titulo'	=> 'Relatório de OS COM PEÇAS e SEM PEÇAS Anual',
			'descr'		=> 'Relatório Anual de quantidade de OSs com peças e sem peças por Data Digitação e Finalização.',
			"codigo" => 'GER-3660'
		),
		array(
			'fabrica'	=> array(8),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produto_por_posto.php',
			'titulo'	=> 'Produtos por posto',
			'descr'		=> 'Relatório de produtos lançados em OS por posto em determinado período.',
			"codigo" => 'GER-3670'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'rel_visao_mix_total.php',
			'titulo'	=> 'Visão geral por produto',
			'descr'		=> 'Relatório geral por produto.',
			"codigo" => 'GER-3680'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'custo_por_os.php',
			'titulo'	=> 'Custo por OS',
			'descr'		=> 'Calcula o custo médio de cada posto para realizar os consertos em garantia.',
			"codigo" => 'GER-3690'
		),
		array(
			'fabrica_no'=> array(7),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_quebra_familia.php',
			'titulo'	=> 'Relatório de Quebra por Família',
			'descr'		=> 'Este relatório contém a quantidade de quebra durante os últimos 12 meses levando em conta o fechamento do extrato de cada mês.',
			"codigo" => 'GER-3700'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_quebra_linha.php',
			'titulo'	=> 'Relatório de Quebra por Linha',
			'descr'		=> 'Este relatório contém a quantidade de quebra durante os ultimos 12 meses levando em conta o fechamento do extrato de cada mês.',
			"codigo" => 'GER-3710'
		),
		array(
			'fabrica'	=> array(14, 66),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_defeito_constatado_os.php',
			'titulo'	=> 'Relatório de Defeitos Constatados por OS',
			'descr'		=> 'Relatório de Defeitos Constatados por Ordem de Serviço.',
			"codigo" => 'GER-3720'
		),
		array(
			'fabrica'	=> array(14, 66),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_os_sem_peca_intelbras.php',
			'titulo'	=> 'Relatório de OS sem peça',
			'descr'		=> 'Relatório de Ordem de Serviço sem peças e seus respectivos defeitos reclamados, defeitos constatados e solução.',
			"codigo" => 'GER-3730'
		),
		array(
			'fabrica'	=> array(14, 66),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_reincidencia.php',
			'titulo'	=> 'Relatório de OS Reincidente',
			'descr'		=> 'Relatório de Ordem de Serviço reincidentes X posto autorizado.',
			"codigo" => 'GER-3740'
		),
		array(
			'fabrica'	=> array(94),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_troca_new.php',
			'titulo'	=> 'Relatório de OS de Troca',
			'descr'		=> 'Relatório de Ordem de Serviço de Troca.',
			"codigo" => 'GER-3750'
		),
		array(
			'fabrica'	=> array(50),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_auditoria_os.php',
			'titulo'	=> 'Relatório de OS Auditadas',
			'descr'		=> 'Relatório de Ordens de Serviço auditadas por: Número de série; Com mais de 3 peças; Reincidências; E Ordens de Serviços que não passaram por nenhuma auditoria.',
			"codigo" => 'GER-3760'
		),
		array(
			'fabrica_no'=> array(14),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_os_sem_peca.php',
			'titulo'	=> 'Relatório de OS sem peça',
			'descr'		=> 'Relatório de Ordem de Serviço sem peças e seus respectivos defeitos reclamados, defeitos constatados e solução.',
			"codigo" => 'GER-3770'
		),
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(14,115,116)),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'custo_os_nac_imp.php',
			'titulo'	=> 'Custo Nacionais &times; Importados',
			'descr'		=> 'Análise dos custos das Ordens de Serviços de produtos nacionais <i>versus</i> produtos importados.',
			"codigo" => 'GER-3780'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'auditoria_os_sem_peca.php',
			'titulo'	=> 'OSs abertas e sem Lançamento de Peças',
			'descr'		=> 'Relatório que consta os postos e a quantidade de OSs que estão abertas e sem lançamento de peças',
			"codigo" => 'GER-3790'
		),
		array(
			'fabrica'	=> array(19),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta_sac.php',
			'titulo'	=> 'Relatório de OS aberta pelo SAC',
			'descr'		=> 'Relatório de OSs abertas pelo SAC.',
			"codigo" => 'GER-3800'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["upload"],
			'link'		=> 'atualizacao_postos_bosch.php',
			'titulo'	=> 'Arquivo de Atualização de AT',
			'descr'		=> 'Gera o arquivo de atualização para o posto selecionado, ou envia os arquivos atualizados por e-mail.',
			"codigo" => 'GER-3810'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_credenciamento.php',
			'titulo'	=> 'Credenciamento de Postos por Mês',
			'descr'		=> 'Mostra os postos credenciados por mês.',
			"codigo" => 'GER-3820'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_atendida_os_aberta.php',
			'titulo'	=> 'OSs em aberto a mais de 15 dias que já foram atendidas',
			'descr'		=> 'Mostra OSs que tiveram suas peças faturadas pelo fabricante a mais de 15 dias e ainda não foram finalizadas pelo posto autorizado.',
			"codigo" => 'GER-3830'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_posto_produto_atendido.php',
			'titulo'	=> 'Produtos consertados pelo posto',
			'descr'		=> 'Relatório de produtos consertados por mês pelo posto autorizado.',
			"codigo" => 'GER-3840'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta_fechada.php',
			'titulo'	=> 'Relatório de OSs digitadas',
			'descr'		=> 'Relatório das OSs digitadas por período',
			"codigo" => 'GER-3850'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produto_os_finalizada.php',
			'titulo'	=> 'Relatório OSs finalizadas por produto',
			'descr'		=> 'Mostra a quantidade de OSs finalizadas por modelo de produto.',
			"codigo" => 'GER-3860'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_auditoria_previa.php',
			'titulo'	=> 'Relatório de OSs auditadas',
			'descr'		=> 'Relatório de OSs que sofreram auditoria prévia.',
			"codigo" => 'GER-3870'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'produto_custo_tempo.php',
			'titulo'	=> 'Relatório de Custo Tempo Cadastrado',
			'descr'		=> 'Relatório que consta o custo tempo cadastrado separados por família.',
			"codigo" => 'GER-3880'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'peca_informacoes_pais.php',
			'titulo'	=> 'Relatório de peça e preço por país',
			'descr'		=> 'Relatório que consta as peças cadastradas por país.',
			"codigo" => 'GER-3890'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_cfa.php',
			'titulo'	=> 'Relatório de Garantia dividido por CFAs',
			'descr'		=> 'Relatório de gastos por Família e Origem de fabricação.',
			"codigo" => 'GER-3900'
		),
		array(
			'fabrica_no'=> $fabricas_contrato_lite,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_posto_peca.php',
			'titulo'	=> 'Relatório de Peças Por Posto',
			'descr'		=> 'Relatório de acordo com a data em que a OS foi finalizada.',
			"codigo" => 'GER-3910'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_preco_produto_acabado.php',
			'titulo'	=> 'Relatório de Preços de Aparelhos',
			'descr'		=> 'Relatório de preços de produto acabado.',
			"codigo" => 'GER-3920'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_garantia.php',
			'titulo'	=> 'Relatório de Peças em Garantia',
			'descr'		=> 'Relatório de peças com a classificação de OS garantia.',
			"codigo" => 'GER-3930'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_sla.php',
			'titulo'	=> 'Relatório SLA',
			'descr'		=> 'Relatório SLA',
			"codigo" => 'GER-3940'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_back_log.php',
			'titulo'	=> 'Relatório Back-Log',
			'descr'		=> 'Relatório Back-Log',
			"codigo" => 'GER-3950'
		),
		array(
			'fabrica'	=> array(2, 15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_comunicado.php',
			'titulo'	=> 'Relatório de comunicado lido',
			'descr'		=> 'Relatório dos postos que confirmaram a leitura de comunicado.',
			"codigo" => 'GER-3960'
		),
		array(
			'fabrica'	=> array(2),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pendencia_codigo_componente.php',
			'titulo'	=> 'Relatório de pendências por Código',
			'descr'		=> 'Relatório de pendências por código de componente com filtro de posto opcional.',
			"codigo" => 'GER-3970'
		),
		array(
			'fabrica'	=> array(51),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_pendente_gama.php',
			'titulo'	=> 'Relatório de Peças Pendentes',
			'descr'		=> 'Relatório de peças pendentes nas ordens de serviço.',
			"codigo" => 'GER-3980'
		),
		array(
			'fabrica'	=> array(91),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_geral_os.php',
			'titulo'	=> 'Relatório Geral de OS',
			'descr'		=> 'Relatór,io geral de ordens de serviço.',
			"codigo" => 'GER-3990'
		),
		array(
			'fabrica_no'=> array(51, 30),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_pendente.php',
			'titulo'	=> 'Relatório de Peças Pendentes',
			'descr'		=> 'Relatório de peças pendentes nas ordens de serviço.',
			"codigo" => 'GER-3000'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> 'rel25.gif',
			'link'		=> 'relatorio_demanda_peca_new.php',
			'titulo'	=> 'Relatório de Demanda de Peças',
			'descr'		=> 'Relatório de demanda de peças pelas Assistências Técnicas.',
			"codigo" => 'GER-3010'
		),
		array(
			'fabrica'	=> array(40),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_revenda_produto.php',
			'titulo'	=> 'Relatório de Revenda por Produto',
			'descr'		=> 'Relatório de Revenda por Porduto - Controle de Fechamento de OS',
			"codigo" => 'GER-3020'
		),
		array(
			'fabrica'	=> array(40),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_cor_unidade.php',
			'titulo'	=> 'Relatório de OS por Unidade',
			'descr'		=> 'Relatório de OS - Por cor da unidade',
			"codigo" => 'GER-3030'
		),
		array(
			'fabrica'	=> array(40),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_numero_serie.php',
			'titulo'	=> 'Relatório de OS por Número de Série',
			'descr'		=> 'Relatório de OS por Número de Série',
			"codigo" => 'GER-3040'
		),
		array(
			'fabrica'	=> array(40),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_ordem_servico.php',
			'titulo'	=> 'Relatório de Ordens de Serviço',
			'descr'		=> 'Relatório que mostra os dados completos das ordens de serviço',
			"codigo" => 'GER-3050'
		),
		array(
			'fabrica'	=> array(90),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_serie_custo.php',
			'titulo'	=> 'Relatório de OS - Custo - Série',
			'descr'		=> 'Relatório das O.S Finalizadas no Mês.',
			"codigo" => 'GER-3060'
		),
		array(
			'fabrica'	=> array(85),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_gelopar_posto_interno.php',
			'titulo'	=> 'Relatório de MO (Posto Gelopar)',
			'descr'		=> 'Relatório que mostra o valor de OS do posto 10641- Gelopar',
			"codigo" => 'GER-3070'
		),
		array(
			'fabrica'	=> array(81, 114),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_scrap.php',
			'titulo'	=> 'Relatório de OS Scrap',
			'descr'		=> 'Relatório de ordens de serviços scrapeadas.',
			"codigo" => 'GER-3080'
		),
		array(
			'fabrica'	=> array(81, 114),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'extrato_os_scrap.php?posto_telecontrol=sim',
			'titulo'	=> 'Cadastro OS Scrap',
			'descr'		=> 'Permite cadastrar Scrap da OS Telecontrol.',
			"codigo" => 'GER-3090'
		),
		array(
			'fabrica'	=> array(24, 35, 51, 81, 85, 106, 114),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_gerencial_diario.php',
			'titulo'	=> 'Relatório Gerencial',
			'descr'		=> 'Relatório Gerencial.',
			"codigo" => 'GER-3100'
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_pecas_os.php',
			'titulo'	=> 'Relatório Peças trocadas por Postos',
			'descr'		=> 'Relatório de peças trocadas por posto autorizado, linha e família',
			"codigo" => 'GER-3110'
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_defeito_constatado_familia_anual.php',
			'titulo'	=> 'Relatório Anual de OS - Defeito - Família',
			'descr'		=> 'Relatório Anual de OS por defeitos constatados e por família',
			"codigo" => 'GER-3120'
		),
		array(
			'fabrica'	=> array(51),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_pendente_gama_troca.php',
			'titulo'	=> 'Peças Pendentes Críticas',
			'descr'		=> 'Relatório de peças pendentes Críticas para troca.',
			"codigo" => 'GER-3130'
		),
		array(
			'fabrica'	=> array(80), #HD 260902
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_produto_total.php',
			'titulo'	=> 'Relatório de Troca',
			'descr'		=> 'Relatório de trocas de produtos.',
			"codigo" => 'GER-3140'
		),
		array(
			'fabrica'	=> array(14, 43),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_status_os.php',
			'titulo'	=> 'Relatório de O.S. por Status',
			'descr'		=> 'Relatório de O.S. listadas de acordo com a seleção dos status',
			"codigo" => 'GER-3150'
		),
		array(
			'fabrica'	=> array(10),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pa_todos.php',
			'titulo'	=> 'Relatório de Assistências Técnicas',
			'descr'		=> 'Relatório de Assistências Técnicas no Brasil.',
			"codigo" => 'GER-3160'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_perfil_cliente.php',
			'titulo'	=> 'Relatório Perfil do Cliente',
			'descr'		=> 'Relatório de Perfil do Cliente, mostrando dados do OS, produto, e perfil do cliente.',
			"codigo" => 'GER-3170'
		),
		array(
			'fabrica'	=> array(35),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_cadence.php',
			'titulo'	=> 'Relatório de Ordem de Serviço',
			'descr'		=> 'Relatório de ordem de serviço, mostrando dados do consumidor, revenda, produto, e peças.',
			"codigo" => 'GER-3180'
		),
		array(
			'fabrica'	=> array(35),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_fechamento_os_posto.php',
			'titulo'	=> 'Relatório de controle de fechamento O.S.',
			'descr'		=> 'Consta o tempo médio que o posto levou para finalizar uma ordem de serviço.',
			"codigo" => 'GER-3190'
		),
		array(
			'fabrica'	=> array(45),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_produto.php',
			'titulo'	=> 'Relatório Troca de Produto',
			'descr'		=> 'Relatório de produto trocado na OS.',
			"codigo" => 'GER-3200'
		),
		array(
			'fabrica'	=> array(45),
			'icone'		=> $icone["relatorio"],
			'link'		=> '	.php',
			'titulo'	=> 'Relatório Movimentação de Produto',
			'descr'		=> 'Relatório de todas as movimentações do produto em um determinado período.',
			"codigo" => 'GER-3210'
		),
		array(
			'fabrica'	=> array(45),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produto_qtde.php',
			'titulo'	=> 'Relatório de Gerência',
			'descr'		=> 'Relatório que mostra total do produto(trocado, utilizaram peças) do mês.',
			"codigo" => 'GER-3220'
		),
		array(
			'fabrica'	=> array(45),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_produto_causa.php',
			'titulo'	=> 'Relatório Troca Produto Causa',
			'descr'		=> 'Relatório de produto trocado na OS(filtrando por causa).',
			"codigo" => 'GER-3230'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_sem_preco_al.php',
			'titulo'	=> 'Relatório de Peças sem Preço dos Paises da AL',
			'descr'		=> 'Relatório de Peças dos paises da América Latina que estão sem preço cadastrado.',
			"codigo" => 'GER-3240'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_qtde_valor.php',
			'titulo'	=> 'Relatório de quantidade / valor  de OSs',
			'descr'		=> 'Relatório de quantidade e valor de OSs por tipo de atendimento.',
			"codigo" => 'GER-3250'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_cortesia_comercial.php',
			'titulo'	=> 'Relatório de OS Cortesia Comercial',
			'descr'		=> 'Relatório de OS de Cortesia Comercial.',
			"codigo" => 'GER-3260'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pecas.php',
			'titulo'	=> 'Relatório de Pedidos de Peças',
			'descr'		=> 'Relatório de peças pedidas pelo posto autorizado em garantia ou compra.',
			"codigo" => 'GER-3270'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_revenda_os.php',
			'titulo'	=> 'Consulta Revenda x Produto',
			'descr'		=> 'Relatório de OS por revenda e quantidade em um período',
			"codigo" => 'GER-3280'
		),
		array(
			'fabrica'	=> array(24),# HD 24493 - Incluído para a Suggar Relatório de peças exportadas
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_exportada.php',
			'titulo'	=> 'Relatório de Peças Exportadas',
			'descr'		=> 'Relatório de peças exportadas pelo posto em um período',
			"codigo" => 'GER-3290'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_faturamento_pecas.php',
			'titulo'	=> 'Relatório de Peças Faturadas',
			'descr'		=> 'Relatório de peças faturadas para os postos autorizados pela data de emissão da nota fiscal.',
			"codigo" => 'GER-3300'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_faturamento_garantia_pecas.php',
			'titulo'	=> 'Relatório de Peças Atendidas em Garantia',
			'descr'		=> 'Relatório de peças atendidas em garantia para os postos autorizados pela data de emissão da nota fiscal.',
			"codigo" => 'GER-3310'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_devolucao_pecas_pendentes.php',
			'titulo'	=> 'Relatório de Devolução de Peças Pendentes<',
			'descr'		=> 'Relatório de peças atendidas em garantia para os postos autorizados com devolução pendente',
			"codigo" => 'GER-3320'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pecas_terceiros.php',
			'titulo'	=> 'Relatório de Peças em Poder de Terceiros',
			'descr'		=> 'Relatório de peças em poder de terceiros com base no LGR.',
			"codigo" => 'GER-3330'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_extrato.php',
			'titulo'	=> 'Relatório Analítico de Defeito de OS',
			'descr'		=> 'Relatório que lista OS com detalhes e defeitos constatados nos atendimentos',
			"codigo" => 'GER-3340'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pesquisa_satisfacao_new.php',
			'titulo'	=> 'Relatório Pesquisa de Satisfação',
			'descr'		=> 'Relatório Geral da Pesquisa de Satisfação',
			"codigo" => 'GER-3350'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pesquisa_satisfacao_os.php',
			'titulo'	=> 'Relatório Pesquisa de Satisfação - OS',
			'descr'		=> 'Relatório por OS da Pesquisa de Satisfação',
			"codigo" => 'GER-3360'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'posto_consulta_gerencia.php',
			'titulo'	=> 'Relação de Postos Credenciados',
			'descr'		=> 'Relação de Postos Credenciados',
			"codigo" => 'GER-3370'
		),
		array(
			'fabrica'	=> array(45),
			'icone'		=> 'rel25.gif',
			'link'		=> 'relatorio_tempo_defeito_produto.php',
			'titulo'	=> 'Relatório de tempo de defeito produtos',
			'descr'		=> 'Relatório de tempo de defeito produtos',
			"codigo" => 'GER-3380'
		),
		array(
			'fabrica'	=> array(50),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_extratificacao.php',
			'titulo'	=> 'Relação de Extratificação',
			'descr'		=> 'Relação de Extratificação',
			"codigo" => 'GER-3390'
		),
		array(
			'fabrica'	=> array(15), // HD 55355
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_nt_serie.php',
			'titulo'	=> 'Relatório de Série da Familia NT',
			'descr'		=> 'Relatório que mostra o número de série das OSs com produto da familia Lavadora NT e as OSs sem lançamento de peça.',
			"codigo" => 'GER-3400'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_defeito_constatado_peca.php',
			'titulo'	=> 'Relatório de Defeito Constatado Peça',
			'descr'		=> 'Relatório que consulta OS,Defeito Constatado e Peça.',
			"codigo" => 'GER-3410'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_nt_serie_abertura.php',
			'titulo'	=> 'Relatório de Série da Familia NT Abertura',
			'descr'		=> 'Relatório que mostra o número de série das OSs com produto da familia Lavadora NT e as OSs sem lançamento de peça pela data de abertura.',
			"codigo" => 'GER-3420'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_km.php',
			'titulo'	=> 'Relatório de OS com Deslocamento',
			'descr'		=> 'Relatório que mostra os dados das ordens de serviços com deslocamento.',
			"codigo" => 'GER-3430'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_mensal.php',
			'titulo'	=> 'Relatório de Ordem de Serviço',
			'descr'		=> 'Relatório que mostra os dados das ordens de serviços com base na na geração do extrato.',
			"codigo" => 'GER-3440'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_reincidencia_latinatec.php',
			'titulo'	=> 'Relatório de OS reincidêntes',
			'descr'		=> 'Relatório que mostra as reincidências de Ordens de Serviço.',
			"codigo" => 'GER-3450'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_estoque_posto.php',
			'titulo'	=> 'Relatório de Estoque dos postos',
			'descr'		=> 'Relatório que o estoque dos postos',
			"codigo" => 'GER-3460'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produto_locacao.php',
			'titulo'	=> 'Relatório de Produtos de Locação',
			'descr'		=> 'Relatório que mostra os produtos de locação.',
			"codigo" => 'GER-3470'
		),
		array(
			'fabrica'	=> array(91), // HD 367935
			'icone'		=> $icone["relatorio"],
			'link'		=> 'rel_peca_requisitada.php',
			'titulo'	=> 'Relatório de Requisição de Peças',
			'descr'		=> 'Relatório que mostra as as peças requisitadas',
			"codigo" => 'GER-3480'
		),
		array(
			'fabrica'	=> array(43), // HD 255546
			'icone'		=> $icone["relatorio"],
			'link'		=> 'ranking_autorizadas.php',
			'titulo'	=> 'Ranking Postos',
			'descr'		=> 'Relatório que mostra dados mensais dos Postos gerando um Ranking',
			"codigo" => 'GER-3490'
		),
		array(
			'fabrica'	=> array(74), // HD 673761
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_mensal_atlas.php',
			'titulo'	=> 'Relatório de Informações',
			'descr'		=> 'Relatório que mostra informações sobre OS, peças, defeitos etc.',
			"codigo" => 'GER-3500'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produtos_cadastrados.php',
			'titulo'	=> 'Relatório de Produtos Cadastrados',
			'descr'		=> 'Relatório que mostra informações sobre sobre os produtos cadastrados',
			"codigo" => 'GER-3510'
		),
		array(
			'fabrica'	=> array(81, 114),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'ressarcimento_consulta.php',
			'titulo'	=> 'Relatório de Ressarcimentos',
			'descr'		=> 'Relatório que mostra informações sobre ressarcimentos cadastrados',
			"codigo" => 'GER-3520'
		),
		array(
			'fabrica'	=> array(45),
			'icone'		=> 'rel25.gif',
			'link'		=> 'relatorio_gerencial_os.php',
			'titulo'	=> 'Relatório gerencial de OS',
			'descr'		=> 'Relatório gerencial de OS',
			"codigo" => 'GER-3530'
		),
		'link' => 'linha_de_separação',
	),

	// Seção OS - Apenas 
	'secaoOS' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'ORDENS DE SERVIÇO',
			'fabrica'   => array(108,111)
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_cadastro.php',
			'titulo'	=> 'Cadastra OS',
			'descr'		=> 'Cadastra uma nova ordem de serviço',
			"codigo" => 'GER-4010'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_consulta_lite.php',
			'titulo'	=> 'Consulta OS',
			'descr'		=> 'Consulta Ordens de Serviço',
			"codigo" => 'GER-4020'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_parametros_excluida.php',
			'titulo'	=> 'Consulta OS Excluída',
			'descr'		=> 'Consulta Ordens de Serviço excluídas do sistema',
			"codigo" => 'GER-4030'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_intervencao.php',
			'titulo'	=> 'OSs com Intervenções Técnicas',
			'descr'		=> 'OSs com intervenção técnica da fábrica. Autoriza ou cancela o pedido de peças do posto ou efetua o reparo na fábrica.',
			"codigo" => 'GER-4040'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_sem_pedido.php',
			'titulo'	=> 'OSs que não Geraram Pedidos',
			'descr'		=> 'Ordens de Serviços que não geraram pedidos de peças.',
			"codigo" => 'GER-4050'
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_revenda.php',
			'titulo'	=> 'Cadastra OS - REVENDA',
			'descr'		=> 'Cadastro de Ordem de Serviços de revenda',
			"codigo" => 'GER-4060'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_revenda_parametros.php',
			'titulo'	=> 'Consulta OS - REVENDA',
			'descr'		=> 'Consulta OS Revenda Lançadas',
			"codigo" => 'GER-4070'
		),
		'link' => 'linha_de_separação',
	),

	// Seção OS - Apenas 
	'secaoPD' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'PEDIDOS DE PEÇAS',
			'fabrica'   => array(108,111)
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'pedido_cadastro.php',
			'titulo'	=> 'Cadastra Pedidos',
			'descr'		=> 'Cadastra um novo pedido de peças',
			"codigo" => 'GER-5010'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'pedido_parametros.php',
			'titulo'	=> 'Consulta Pedidos',
			'descr'		=> 'Consulta pedidos de peças',
			"codigo" => 'GER-5020'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'comunicado_produto_consulta.php',
			'titulo'	=> 'Vista Explodida e Comunicados',
			'descr'		=> 'Consulta vista explodida, diagramas, esquemas e comunicados.',
			"codigo" => 'GER-5030'
		),
		'link' => 'linha_de_separação',
	),

	// Seção CALL-CENTER - GERAL 
	'secaoCC' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'RELATÓRIOS CALL-CENTER',
			'fabrica_no'=> array_merge(array(87,108,111,115,116), $fabricas_contrato_lite)
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_callcenter_reclamacao_por_estado.php',
			'titulo'	=> 'Reclamações por estado',
			'descr'		=> 'Histórico de atendimentos por estado.',
			"codigo" => 'GER-6010'
		),
		'link' => 'linha_de_separação',
	),

	// Seção QUALIDADE - Apenas Bosch
	'secaoQ' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'RELATÓRIOS - QUALIDADE',
			'fabrica'   => array(20)
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'extrato_pagamento_peca.php',
			'titulo'	=> 'Peça X Custo',
			'descr'		=> 'Relatório de OSs e seus produtos e valor pagos por peça.',
			"codigo" => "GER-7020"
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto_custo.php',
			'titulo'	=> 'Field Call Rate de Produto X Custo',
			'descr'		=> 'Relatório de Field Call Rate de Produtos e valor pagos por período.',
			"codigo" => "GER-7030"
		),
		'link' => 'linha_de_separação',
	),

	// Seção TAREFAS ADMINISTRATIVAS - Geral
	'secaoA' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'TAREFAS ADMINISTRATIVAS',
			'fabrica_no'=> array(87)
		),
		array(
			'fabrica'	=> array(2),
			'icone'		=> $icone["acesso"],
			'link'		=> 'posto_login.php',
			'titulo'	=> 'Logar como Posto',
			'descr'		=> 'Acesse o sistema como se fosse o posto autorizado',
			"codigo" => 'GER-8010'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["computador"],
			'link'		=> 'log_erro_integracao.php',
			'titulo'	=> 'Log de erros de integração',
			'descr'		=> 'Verificar erros na integração entre Logix e Telecontrol',
			"codigo" => 'GER-8020'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["usuario"],
			'link'		=> 'manutencao_contato.php',
			'titulo'	=> 'Manutenção de contatos úteis',
			'descr'		=> 'Manutenção de contatos úteis da área do posto.',
			"codigo" => 'GER-8030'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> "http://ww2.telecontrol.com.br/docs?fabrica={$login_fabrica}&nome={$login_fabrica_nome}&key=".md5($login_fabrica_nome.$login_fabrica),
			'titulo'	=> 'API Pós-Venda DOC',
			'descr'		=> 'Documentação das APIs da Telecontrol para integração',
			"codigo" 	=> 'GER-8040'
		),
		array(
			'icone'		=> $icone["usuario"],
			'link'		=> 'admin_senha_n.php',
			'titulo'	=> 'Usuários ADMIN',
			'descr'		=> 'Cadastro de usuários administradores do sistema, com opção para troca de senha e atribuição de privilégios de acesso aos programas.',
			"codigo" 	=> 'GER-8050'
		),
		array(
			'fabrica'	=> array(10,86), //Famastil, por enquanto
			'icone'		=> $icone["computador"],
			'link'		=> 'consulta_auto_credenciamento.php',
			'titulo'	=> 'Auto-Credenciamento de Postos',
			'descr'		=> 'Lista postos que gostariam de ser credenciados da '.$login_fabrica_nome .',<br />'.
			'mostra informações do posto, localiza no GoogleMaps<br />'.
			'e permite credenciar postos.',
			"codigo" => 'GER-8060'
		),

		/**
		 * NÃO ATIVAR ESTE PROGRAMA PARA MAIS NENHUMA FÁBRICA SEM FALAR COMIGO. ÉBANO
		 **/
		//if(!in_array($login_fabrica,$fabricas_contrato_lite) and $login_fabrica<>72) 
		array(
			'fabrica'	=> array(24,85),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_usuario_admin.php',
			'titulo'	=> 'Relatório de Acesso',
			'descr'		=> 'Relatório de Controle de Acessos.',
			"codigo" => 'GER-8070'
		),
		array(
			'fabrica'	=> $fabrica_funcionalidades_admin,
			'icone'		=> $icone["cadastro"],
			'link'		=> 'funcionalidades_cadastro.php',
			'titulo'	=> 'Cadastro de Funcionalidades',
			'descr'		=> 'Cadastro de Funcionalidades por Admin',
			"codigo" => 'GER-8080'
		),
		array(
			'fabrica'	=> array(10,25),
			'icone'		=> $icone["email"],
			'link'		=> 'envio_email_new.php',
			'titulo'	=> 'Envio de e-mail',
			'descr'		=> 'Envia mensagens via e-mail para os Postos',
			"codigo" => 'GER-8090'
		),
		array(
			'fabrica'	=> array(14),
			'icone'		=> $icone["email"],
			'link'		=> 'comunicado_intelbras.php',
			'titulo'	=> 'Envio de e-mail',
			'descr'		=> 'Envia mensagens via e-mail para os Postos',
			"codigo" => 'GER-8100'
		),
		array(
			'fabrica_no'=> array(10,14,25),
			'icone'		=> $icone["email"],
			'link'		=> 'envio_email.php',
			'titulo'	=> 'Envio de e-mail',
			'descr'		=> 'Envia mensagens via e-mail para os Postos',
			"codigo" => 'GER-8110'
		),
		array(
			'fabrica_no'=> array(81, 114),
			'icone'		=> $icone["limpar"],
			'link'		=> 'limpa_dados.php',
			'titulo'	=> 'Limpar Dados de Teste',
			'descr'		=> 'Apaga todas as informações do posto de teste, como OS, pedido e extrato',
			"codigo" => 'GER-8120'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["computador"],
			'link'		=> 'reincidencia_os_cadastro.php',
			'titulo'	=> 'Remanejamento de reincidências',
			'descr'		=> 'Efetua a substituição da OS reincidida para a OS principal.',
			"codigo" => 'GER-8130'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["computador"],
			'link'		=> 'libera_os_item_pedido.php',
			'titulo'	=> 'Liberar Item em Garantia',
			'descr'		=> 'Libera os itens das OSs para gerarem pedidos.',
			"codigo" => 'GER-8140'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["computador"],
			'link'		=> 'libera_os_item_faturado.php',
			'titulo'	=> 'Liberar Item de Vendas',
			'descr'		=> 'Libera os itens do Pedido Faturado.',
			"codigo" => 'GER-8150'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["upload"],
			'link'		=> 'upload_importa.php',
			'titulo'	=> 'Upload para Carga de Dados',
			'descr'		=> 'Efetua a carga de dados para atualização do sistema.',
			"codigo" => 'GER-8160'
		),
		'link' => 'linha_de_separação',
	),

	// Seção PESQUISA DE OPINIÃO - Geral
	'secaoO' => array (
		'secao' => array(
			'link'	    => '#',
			'titulo'    => 'PESQUISA DE OPINIÃO',
			'fabrica'   => (in_array($login_fabrica, array(3,10)) or $login_fabrica>87),
			'fabrica_no'=> array_merge(array(87, 104, 114), $fabricas_contrato_lite)
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'opiniao_posto.php',
			'titulo'	=> 'Cadastro do Questionário',
			'descr'		=> 'Cadastro do Questionário de Opinião do Posto',
			"codigo" => 'GER-9010'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'opiniao_posto_relatorio.php',
			'titulo'	=> 'Relatório de Opinião dos Postos',
			'descr'		=> 'Relatório dos questionários enviados aos Postos',
			"codigo" => 'GER-9020'
		),
		'link' => 'linha_de_separação',
	),

	// Seção DISTRIB - Apenas Telecontrol
	'secaoD' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'DISTRIBUIÇÃO TELECONTROL',
			'fabrica'   => $fabrica_distrib
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'distrib_pendencia.php',
			'titulo'	=> 'Pendência de Peças',
			'descr'		=> 'Pendência de Peças dos Postos junto ao Distribuidor',
			"codigo" => "GER-TC10"
		),
		array(
			'admin'     => 586,
			'icone'		=> $icone["computador"],
			'link'		=> 'distrib_pendencia_estudo.php',
			'titulo'	=> 'Estudo das Pendências de Peças',
			'descr'		=> 'Estudo das pendências de peças e sugestão de pedido para fábrica (Garantia/Compra)',
			"codigo" => "GER-TC20"
		),
		'link' => 'linha_de_separação',
	),

	// Seção CONSULTAS - Apenas Jacto
	'secaoJC' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'CONSULTAS',
			'fabrica'   => array(87)
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'pedido_parametros.php',
			'titulo'	=> 'Consulta Pedidos de Peças',
			'descr'		=> 'Consulta pedidos efetuados por postos autorizados.',
			"codigo" => "GER-JC10"
		),
		'link' => 'linha_de_separação',
	),

	// Seção ADMN - Apenas Jacto
	'secaoJA' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'TAREFAS ADMINISTRATIVAS',
			'fabrica'   => array(87)
		),
		array(
			'icone'		=> $icone["usuario"],
			'link'		=> 'admin_senha_n.php',
			'titulo'	=> 'Usuários ADMIN',
			'descr'		=> 'Cadastro de usuários administradores do sistema, com opção para troca de senha e atribuição de privilégios de acesso aos programas.',
			"codigo" => "GER-JA10"
		),
		'link' => 'linha_de_separação',
	),
);

