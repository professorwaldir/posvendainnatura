<?php
// Menu INFORMAÇÕES FINANCEIRAS
return array(
	// Secão INFORMAÇÕES FINANCEIRAS - Britânia
	'secao0' => array(
		'secao'	=> array(
			'link'	   => '#',
			'titulo'    => 'INFORMAÇÕES FINANCEIRAS',
			'fabrica'   => array(3)
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'devolucao_cadastro.php',
			'titulo'	=> 'Notas de Devolução',
			'descr'		=> 'Consulta as Notas de Devolução.',
			"codigo" => 'FIN-0010'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'acerto_contas.php',
			'titulo'	=> 'Encontro de Contas',
			'descr'		=> 'Realiza o encontro de contas.',
			"codigo" => 'FIN-0020'
		),
		'link' => 'linha_de_separação',
	),

	// Secão MANUTENÇÕES EM EXTRATOS - Geral
	'secao1' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'MANUTENÇÕES EM EXTRATOS',
		),
		array(
			'fabrica'	=> 8,
			'icone'		=> $icone["computador"],
			'link'		=> 'os_extrato_pre.php',
			'titulo'	=> 'Pré Fechamento de Extratos',
			'descr'		=> 'Pré fechamento de extratos para visualização da quantidade de OS do posto até a data limite e o valor de mão-de-obra.',
			"codigo" => 'FIN-1010'
		),
		array(
			'fabrica'	=> array(11, 25, 50),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_extrato_por_posto.php',
			'titulo'	=> 'Fechamento de Extratos',
			'descr'		=> 'Fecha o extrato de cada posto, totalizando o que cada um tem a receber de mão-de-obra, suas peças de devolução obrigatória, e demais informações de fechamento.',
			"codigo" => 'FIN-1020'
		),
		array(
			'fabrica'	=> array(2, 6),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_extrato_new.php',
			'titulo'	=> 'Fechamento de Extratos',
			'descr'		=> 'Fecha o extrato de cada posto, totalizando o que cada um tem a receber de mão-de-obra, suas peças de devolução obrigatória, e demais informações de fechamento.' .  iif(($login_fabrica==6), "<a href='os_extrato_por_posto.php' class='menu'>Por Posto (em Teste).</a>"),
			"codigo" => 'FIN-1030'
		),
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite,
			array(2,6,11,20,25,50,81,114,115,116)),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_extrato.php',
			'titulo'	=> 'Fechamento de Extratos',
			'descr'		=> 'Fecha o extrato de cada posto, totalizando o que cada um tem a receber de mão-de-obra, suas peças de devolução obrigatória, e demais informações de fechamento.',
			"codigo" => 'FIN-1040'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_consulta.php',
			'titulo'	=> 'Manutenção de Extratos',
			'descr'		=> 'Permite retirar ordens de serviços de um extrato, recalcular o extrato, e dar baixa em seu pagamento.',
			"codigo" => 'FIN-1050'
		),
		array(
			'fabrica'	=> array(20,30),
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_liberado.php',
			'titulo'	=> 'Liberação de Extrato',
			'descr'		=> 'Libera extratos para aprovação.',
			"codigo" => 'FIN-1060'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_aprovado_consulta.php',
			'titulo'	=> 'Extratos Aprovados',
			'descr'		=> 'Permite enviar um extrato para o financeiro.',
			"codigo" => 'FIN-1070'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["consulta"],
			'link'		=> 'extrato_financeiro_consulta.php',
			'titulo'	=> 'Extratos Enviados ao Financeiro',
			'descr'		=> 'Consulta e Manutenção de Extratos Enviados ao Financeiro.',
			"codigo" => 'FIN-1080'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_custo_pecas.php',
			'titulo'	=> 'Custo das Peças',
			'descr'		=> 'Digitação manual dos custos das peças, quando não for encontrado o último faturamento respectivo.',
			"codigo" => 'FIN-1090'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["computador"],
			'link'		=> 'acumular_extratos.php',
			'titulo'	=> 'Acumular Extratos',
			'descr'		=> 'Admin informa um valor e sistema acumula os extratos menores que este valor, desde que este extrato não tenha OS fechada a mais de 30 dias',
			"codigo" => 'FIN-1100'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["consulta"],
			'link'		=> 'extrato_pendencia_consulta.php',
			'titulo'	=> 'Pendência Extratos',
			'descr'		=> 'Consulta e manutenção de pendência de extratos.',
			"codigo" => 'FIN-1110'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_avulso_britania.php',
			'titulo'	=> 'Lançamento Avulso / Extratos',
			'descr'		=> 'Permite gerar um novo lançamento avulso, com isto, um novo extrato também é gerado.',
			"codigo" => 'FIN-1120'
		),
		array(
			'fabrica_no'=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_avulso.php',
			'titulo'	=> 'Lançamento Avulso / Extratos',
			'descr'		=> 'Permite gerar um novo lançamento avulso, com isto, um novo extrato também é gerado.',
			"codigo" => 'FIN-1130'
		),
		array(
			'fabrica'	=> array(6,59),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'lancamentos_avulsos_cadastro.php',
			'titulo'	=> 'Cadastro Lançamentos Avulsos',
			'descr'		=> 'Cadastro dos Lançamentos Avulsos ao Extrato',
			"codigo" => 'FIN-1140'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'movimentacao_postos_lenoxx.php',
			'titulo'	=> 'Movimentação do Posto Autorizado',
			'descr'		=> 'Relatório de Movimentação do Posto Autorizado entre períodos.',
			"codigo" => 'FIN-1150'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'movimentacao_revenda_lenoxx.php',
			'titulo'	=> 'Movimentação da Revenda',
			'descr'		=> 'Relatório de Movimentação da Revenda entre períodos.',
			"codigo" => 'FIN-1160'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_os_troca.php',
			'titulo'	=> 'Aprovação de OS Troca',
			'descr'		=> 'Manutenção de Ordem de Serviço de Troca.',
			"codigo" => 'FIN-1170'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_excluir.php',
			'titulo'	=> 'Excluir Ordem de Serviço',
			'descr'		=> 'Exclua Ordens de Serviço do Posto',
			"codigo" => 'FIN-1180'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_exclusao.php',
			'titulo'	=> 'Aprovação de OS Excluída',
			'descr'		=> 'Aprove de Ordem de Serviço Excluída.',
			"codigo" => 'FIN-1190'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["consulta"],
			'link'		=> 'extrato_posto_britania.php?somente_consulta=sim',
			'titulo'	=> 'Consulta de Extratos de POSTOS',
			'descr'		=> 'Permite visualizar os extratos dos postos.',
			"codigo" => 'FIN-1200'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["consulta"],
			'link'		=> 'extrato_posto_britania.php',
			'titulo'	=> 'Conferência de Extratos de POSTOS',
			'descr'		=> 'Permite visualizar os extratos dos postos e realizar a conferência das OSs.',
			"codigo" => 'FIN-1210'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["consulta"],
			'link'		=> 'extrato_distribuidor.php',
			'titulo'	=> 'Consulta de Extratos de DISTRIBUIDOR',
			'descr'		=> 'Permite visualizar os extratos dos distribuidores.',
			"codigo" => 'FIN-1220'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'manutencao_logistica_reversa.php',
			'titulo'	=> 'Manutenção de Logistica Reversa',
			'descr'		=> 'Permite excluir e alterar número da nota fiscal de devolução.',
			"codigo" => 'FIN-1230'
		),
		array(
			'fabrica'	=> in_array($login_fabrica,array(11,24,25,43,72))
			or $login_fabrica>80,
			'fabrica_no'=> $fabricas_contrato_lite,
			'icone'		=> $icone["consulta"],
			'link'		=> 'extrato_posto_devolucao_controle.php',
			'titulo'	=> 'Controle de Notas de Devolução',
			'descr'		=> 'Consulta ou confirme notas fiscais de devolução.',
			"codigo" => 'FIN-1240'
		),
		array(
			'fabrica_no'=> array(6,24),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'motivo_recusa_cadastro.php',
			'titulo'	=> 'Motivo de Recusa',
			'descr'		=> 'Cadastro de Motivo de Recusa de OS dos Extratos.',
			"codigo" => 'FIN-1250'
		),
		array(
			'fabrica'	=> array(10),
			'icone'		=> $icone["computador"],
			'link'		=> 'controle_de_implantacao.php',
			'titulo'	=> 'Controle de Implantação',
			'descr'		=> 'Controle de Implantação',
			"codigo" => 'FIN-1260'
		),
		array(
			'fabrica'	=> array(10),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_controle_de_implantacao.php',
			'titulo'	=> 'Relatório de Implantação',
			'descr'		=> 'Relatório de Implantação',
			"codigo" => 'FIN-1270'
		),
		array(
			'fabrica'	=> array(74),
			'icone'		=> $icone["computador"],
			'link'		=> 'manutencao_nota_extrato.php',
			'titulo'	=> 'Manutenção de Notas Fiscais de Extrato',
			'descr'		=> 'Manutenção para as notas que o posto digita e envia pela prestação de serviços e/ou devolução de peças (LGR).',
			"codigo" => 'FIN-1280'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_baixa.php',
			'titulo'	=> 'Pagamento de Extratos',
			'descr'		=> 'Permite efetuar o pagamento de extratos gerados.',
			"codigo" => 'FIN-1290'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["upload"],
			'link'		=> 'upload_importa_black.php',
			'titulo'	=> 'UPLOAD Arquivo Pagamento',
			'descr'		=> 'Atualiza o site Telecontrol com a previsão de pagamento de extrato.',
			"codigo" => 'FIN-1300'
		),
		array(
			'fabrica'	=> array(1,3,7),
			'icone'		=> $icone["consulta"],
			'link'		=> 'estoque_posto_movimento.php',
			'titulo'	=> 'Movimentação Estoque',
			'descr'		=> 'Visualização da movimentação do estoque do posto autorizado.',
			"codigo" => 'FIN-1310'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["computador"],
			'link'		=> 'movimentacao_estoque_posto.php',
			'titulo'	=> 'Transferir Estoque',
			'descr'		=> 'Transferência do estoque de um posto para outro.',
			"codigo" => 'FIN-1320'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_extrato_detalhe.php',
			'titulo'	=> 'Relatório Extratos de POSTOS',
			'descr'		=> 'Relatório para visualizar detalhe dos extratos dos postos.',
			"codigo" => 'FIN-1330'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'gera_circular.php',
			'titulo'	=> 'Cadastro Circular Interna',
			'descr'		=> 'Permite gerar uma circular interna em PDF dos extratos liberados.',
			"codigo" => 'FIN-1340'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["consulta"],
			'link'		=> 'consulta_circular.php',
			'titulo'	=> 'Consulta Circular Interna',
			'descr'		=> 'Permite consultar o número de circular interna em pdf dos extratos liberados.',
			"codigo" => 'FIN-1350'
		),

		'link' => 'linha_de_separação',
	),

	// Secão RELATÓRIOS DE EXTRATOS - Geral
	'secao2' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'RELATÓRIOS',
		),
		array(
			'fabrica_no'=> $fabricas_contrato_lite,
			'icone'		=> $icone["upload"],
			'link'		=> 'relatorio_ressarcimento.php',
			'titulo'	=> 'Baixar Ressarcimento',
			'descr'		=> 'Baixar Ressarcimento de Ordem de Serviço.',
			"codigo" => 'FIN-2010'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_extrato_avulso.php',
			'titulo'	=> 'Avulsos Pagos em Extrato',
			'descr'		=> 'Todos os pagamentos avulsos pagos em extrato.',
			"codigo" => 'FIN-2020'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_extrato_pago.php',
			'titulo'	=> 'Extrato Baixados',
			'descr'		=> 'Relatório dos extratos baixados.',
			"codigo" => 'FIN-2030'
		),
		array(
			'fabrica'	=> array(30,50),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_gasto_km.php',
			'titulo'	=> 'Gasto com km Pagos em Extrato',
			'descr'		=> 'Valores pagos em extrato pelo deslocamento no atendimento do posto autorizado.',
			"codigo" => 'FIN-2040'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'posto_dados_pagamento.php',
			'titulo'	=> 'Dados Bancários para Pagamento',
			'descr'		=> 'Todas as informações bancárias para pagamentos dos postos autorizados',
			"codigo" => 'FIN-2050'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["print"],
			'link'		=> 'etiqueta_posto.php',
			'titulo'	=> 'Etiquetas de Endereço',
			'descr'		=> 'Imprime etiquetas com o endere&ccedil;o dos postos selecionados.',
			"codigo" => 'FIN-2060'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_custo_tempo.php',
			'titulo'	=> 'Custo Tempo de Extratos',
			'descr'		=> 'Neste relatório contém as OS e seus respectivos Custo Tempo por um determinado período.',
			"codigo" => 'FIN-2070'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_extrato_aprovado.php',
			'titulo'	=> 'Tempo de Análise de Extratos',
			'descr'		=> 'Informa a quantidade de tempo para análise do extrato',
			"codigo" => 'FIN-2080'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'extrato_pagamento.php',
			'titulo'	=> 'Valores de Extratos',
			'descr'		=> 'Informa todos os extratos e valores a serem pagos para os postos.',
			"codigo" => 'FIN-2090'
		),
		array(
			'fabrica_no'=> array(20),	//retirado a pedido de Andre chamado 2254
			'icone'		=> $icone["relatorio"],
			'link'		=> 'extrato_pagamento_produto.php',
			'titulo'	=> 'Produto X Custo',
			'descr'		=> 'Relatório de OSs e seus produtos e valor pagos por período.',
			"codigo" => 'FIN-2100'
		),
		array(
			'fabrica_no'=> array(20),	//retirado a pedido de Andre chamado 2254
			'icone'		=> $icone["relatorio"],
			'link'		=> 'extrato_pagamento_peca.php',
			'titulo'	=> 'Peça X Custo',
			'descr'		=> 'Relatório de OSs e seus produtos e valor pagos por peça.',
			"codigo" => 'FIN-2110'
		),
		array(
			'fabrica'	=> array(14),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'faturamento_posto_peca.php',
			'titulo'	=> 'Faturamento Produto',
			'descr'		=> 'Relatório de faturamento por produto, família e período.',
			"codigo" => 'FIN-2120'
		),
		array(
			'fabrica_no'=> array(20),	//retirado a pedido de Andre chamado 2254
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto_custo.php',
			'titulo'	=> 'Field Call Rate de Produto X Custo',
			'descr'		=> 'Relatório de Field Call Rate de Produtos e valor pagos por período.',
			"codigo" => 'FIN-2130'
		),
		array(
			'fabrica_no'=> array(20),	//retirado a pedido de Andre chamado 2254
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_familia_custo.php',
			'titulo'	=> 'Field Call Rate Família de Produto X Custo',
			'descr'		=> 'Relatório de Field Call Rate de Família e valor pagos por período.',
			"codigo" => 'FIN-2140'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'posto_extrato_ano.php',
			'titulo'	=> 'Comparativo Anual de Média de Extrato',
			'descr'		=> 'Valor mensal dos extratos do posto num período de 12 meses.',
			"codigo" => 'FIN-2150'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_extrato_semestral_bosch.php',
			'titulo'	=> 'Controle de Garantia Semestral',
			'descr'		=> 'Relatório semestral com: total de OSs, total de peças, total de mão de obra, total pago e média por os.',
			"codigo" => 'FIN-2160'
		),
		//	24472 - Francisco Ambrozio (4/8/08) - Incluído link Relatório O,
		//  		Conferidas por Linha - Britania.
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_conferida_linha.php',
			'titulo'	=> 'Relatório de OSs Conferidas',
			'descr'		=> 'Relatório de ordens de serviço conferidas por linha.',
			"codigo" => 'FIN-2170'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_fluxo_os.php',
			'titulo'	=> 'Relatório Fluxo de OSs',
			'descr'		=> 'Relatório de fluxo de OS.',
			"codigo" => 'FIN-2180'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_gastos_postos.php',
			'titulo'	=> 'Relatório de Mão-de-obra',
			'descr'		=> 'Relatório de pagamento de mão-de-obra por posto, período e produto.',
			"codigo" => 'FIN-2190'
		),
		array(
			'fabrica'	=> array(30),/*hd: 91609*/
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_extrato_detalhado_esmaltec.php',
			'titulo'	=> 'Relatório de Extrato Detalhado',
			'descr'		=> 'Valor dos extratos com filtro de família e como resultado os detalhes de valor de mão de obra, peças e Km.',
			"codigo" => 'FIN-2200'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(2),
			'icone'		=> $icone["consulta"],
			'link'		=> 'extrato_posto_devolucao_controle.php',
			'titulo'	=> 'Controle de Notas de Devolução',
			'descr'		=> '<strong>EM TESTE</strong> Consulta ou confirme notas fiscais de devolução.',
			"codigo" => 'FIN-2210'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pgto_mo.php',
			'titulo'	=> 'Relatório de Mão-de-Obra',
			'descr'		=> 'Relatório de pagamento de mão-de-obra por posto, período e produto.',
			"codigo" => 'FIN-2220'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_mobra_relacao.php',
			'titulo'	=> 'Relatório Custo x Posto',
			'descr'		=> 'Relatório do total de produto e mão-de-obra pagos por posto nas relações ME, MK, ML/MC.',
			"codigo" => 'FIN-2230'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_parametros_finalizada.php',
			'titulo'	=> 'Relatório OS Finalizada + Mão-de-Obra',
			'descr'		=> 'Relatório Ordens de Serviço finalizadas com mão-de-obra e peças aplicadas',
			"codigo" => 'FIN-2240'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'extrato_peca_retorno_obrigatorio.php',
			'titulo'	=> 'Relatório Devolução Obrigatória',
			'descr'		=> 'Relatório de Peças de Retorno Obrigatório',
			"codigo" => 'FIN-2250'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'extrato_documento_consulta.php',
			'titulo'	=> 'Relatório de Pendência de Documento',
			'descr'		=> 'Relatório de Todas as Pendências Lançadas nos Extratos.',
			"codigo" => 'FIN-2260'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(14),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'extrato_excluido.php',
			'titulo'	=> 'Relatório dos extratos excluídos',
			'descr'		=> 'Relatório que mostram os extratos excluídos.',
			"codigo" => 'FIN-2270'
		),
		array(
			'fabrica'	=> array(14),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_recusada.php',
			'titulo'	=> 'Relatório das OSs Recusadas',
			'descr'		=> 'Relatório que mostram a quantidade das OSs recusada do extrato.',
			"codigo" => 'FIN-2280'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(14),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_sem_extrato.php',
			'titulo'	=> 'Relatório de OS sem extrato',
			'descr'		=> 'Relatório de Ordens de serviço que não entraram em nenhum extrato por algum motivo (ex. os pedidos são inferior a R$ 3,00).',
			"codigo" => 'FIN-2290'
		),
		array(
			'fabrica'	=> array(5,45),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_lancamento_avulso.php',
			'titulo'	=> 'Relatório dos Lançamentos Avulsos',
			'descr'		=> 'Relatório que mostram os lançamentos avulsos.',
			"codigo" => 'FIN-2300'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_defeito_constatado_mo.php',
			'titulo'	=> 'Relatório de Mão-de-Obra DEWALT',
			'descr'		=> 'Relatório que mostra a mão-de-obra por defeito constatado da linha Dewalt.',
			"codigo" => 'FIN-2310'
		),
		array(
			'fabrica'	=> array(80),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_sem_extrato_new.php',
			'titulo'	=> 'Relatório de Previsão de Mão de Obra',
			'descr'		=> 'Relatório de OS Finalizadas e mostrando o valor de Mão-de-Obra antes de entrar no extrato.',
			"codigo" => 'FIN-2320'
		),
		'link' => 'linha_de_separação',
	),

	// Secão NOVO EXTRATO - Britânia
	'secao3' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'NOVO SISTEMA DE EXTRATO',
			'fabrica'   => array(3)
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_posto_britania_novo_processo.php',
			'titulo'	=> 'Conferência de Extratos de POSTOS',
			'descr'		=> 'Permite visualizar os extratos dos postos e realizar a conferência das OSs.',
			"codigo" => 'FIN-3010'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'sinalizador_os.php',
			'titulo'	=> 'Sinalizador',
			'descr'		=> 'Gerencia o status e opções para sinalizar as OSs.',
			"codigo" => 'FIN-3020'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'agrupa_extrato_posto_geral.php',
			'titulo'	=> 'Agrupar Extratos',
			'descr'		=> 'Agrupa todos os extratos conferidos.',
			"codigo" => 'FIN-3030'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_agrupado.php',
			'titulo'	=> 'Extratos Pagos ao Posto',
			'descr'		=> 'Extratos pagos aos postos.',
			"codigo" => 'FIN-3040'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'nota_fiscal_pagamento_britania.php',
			'titulo'	=> 'Lançamento nota fiscal',
			'descr'		=> 'Lança dados da nota fiscal emitida pelo posto e dados de pagamento.',
			"codigo" => 'FIN-3050'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_conferida_linha_novo.php',
			'titulo'	=> 'Relatório de OSs Conferidas',
			'descr'		=> 'Relatório de ordens de serviço conferidas por linha.',
			"codigo" => 'FIN-3060'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_fechamento_automatico.php',
			'titulo'	=> 'Fechamento Automático de OS',
			'descr'		=> 'Relatório para consulta de OS fechadas automaticamente pelo sistema.',
			"codigo" => 'FIN-3070'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_pag_mo.php',
			'titulo'	=> 'Aprovação técnica pagamento de mão de obra',
			'descr'		=> 'Aprovar ou reprovar os extratos agrupados para pagamento de mão de obra.',
			"codigo" => 'FIN-3080'
		),
		'link' => 'linha_de_separação',
	),

	// Secão COBRANÇA - Britânia
	'secao4' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'COBRANÇA',
			'fabrica'   => array(3)
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'cobranca_busca.php',
			'titulo'	=> 'Cobrança',
			'descr'		=> 'Lista notas para a cobrança.',
			"codigo" => 'FIN-4010'
		),
		array(
			'icone'		=> $icone["upload"],
			'link'		=> 'cobranca_envia_arquivo.php',
			'titulo'	=> 'Incluir arquivo',
			'descr'		=> 'Incluiu o arquivo TXT no banco de dados.',
			"codigo" => 'FIN-4020'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'cobranca_debito.php',
			'titulo'	=> 'Débito detalhado',
			'descr'		=> 'Gerencia tipos de débito.',
			"codigo" => 'FIN-4030'
		),
		'link' => 'linha_de_separação',
	),

	// Secão CADASTRO - Britania
	'secao5' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'CADASTRO',
			'fabrica'   => array(3)
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'acrescimo_mo_prazo_cadastro.php',
			'titulo'	=> 'Cadastro de mão-de-obra diferenciada',
			'descr'		=> 'Cadastro de mão-de-obra diferenciada por prazo de atendimento.',
			"codigo" => 'FIN-5010'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'cadastro_contas_postos.php',
			'titulo'	=> 'Cadastro de Contas dos Postos',
			'descr'		=> 'Manutenção de contas dos postos.',
			"codigo" => 'FIN-5020'
		),
		'link' => 'linha_de_separação',
	),
);

