<?php
$fabrica_audita_todas_os     = array(14, 43);
$fabrica_audita_os_aberta    = array(1,3,45,80,40);
$fabrica_auditoria_previa    = array(3, 30, 51, 80);
$fabrica_interv_serie        = array(30,85);
$fabrica_interv_tecnica      = array(35,43,72,80,81,85,98,104,105,106,108,111,114,115,116);
$fabrica_lgr_bateria         = array(1, 42);
$fabrica_lgr_residuos        = array(1);
$fabrica_vistoria_lgr        = array(3,43);// HD 73410 - Também mostra a vistoria de Peças!
$fabricas_autocredenciamento = array(10);
$fabrica_auditoria_km        = array(19, 30, 46, 50, 72);
$vet_km                      = array(15,35,46,50,72,87,91,94);
$vet_os_reincidente          = array(11,14,24,52,90,91,94,101,104,105,115,116);
$fabrica_troca				 = array(1, 51, 81, 114);

return array(
	'secao0' => array(
		'secao' => array(
			'link'     => '#',
			'titulo'   => 'AUDITORIA POSTOS',
			//'noexpand' => true
		),
		array(
			'icone'		=> $icone["acesso"],
			'link'		=> 'posto_login.php',
			'titulo'	=> 'Logar como Posto',
			'descr'		=> 'Permite acesso ao sistema com privilégios de um posto credenciado.',
			'codigo'    => 'AUD-0010'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'consulta_posto_cadastro.php',
			'titulo'	=> 'Consulta de Postos Autorizados',
			'descr'		=> 'Consulta de postos autorizados por localização, tipo e linhas.',
			'codigo'    => 'AUD-0020'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'atualizacao_postos_black.php',
			'titulo'	=> 'Relatório de Atualização do Cadastro',
			'descr'		=> 'Relatório e consulta de dados de atualização dos postos com base ao<br> formulário de preenchimento obrigatório.',
			'codigo'    => 'AUD-0030'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'posto_linha.php',
			'titulo'	=> 'Relação de Postos e Linhas',
			'descr'		=> 'Relatório de Postos e suas respectivas linhas',
			'codigo'    => 'AUD-0040'
		),
		array(
			'fabrica'	=> array(19),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'postos_usando-lorenzetti.php',
			'titulo'	=> 'Postos Usando',
			'descr'		=> 'Postos que utilizam o sistema.',
			'codigo'    => 'AUD-0050'
		),
		array(
			'fabrica_no'=> array(19),
			'icone'		=> $icone["bi"],
			'link'		=> 'bi/postos_usando.php',
			'titulo'	=> 'Postos Usando',
			'descr'		=> 'Relatório por período para os postos que utilizam o sistema pela data de abertura<br>'.
			'<i>O BI é atualizado com as informações do dia anterior, portanto tem um dia de atraso!</i>',
			'codigo'    => 'AUD-0060'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'postos_digita_os.php',
			'titulo'	=> 'Postos Usando Total',
			'descr'		=> 'Postos que já lançaram OS no Telecontrol',
			'codigo'    => 'AUD-0070'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'postos_nao_usando.php',
			'titulo'	=> 'Postos NÃO Usando',
			'descr'		=> 'Postos que ainda não lançaram OS no sistema.',
			'codigo'    => 'AUD-0080'
		),
		array(
			'fabrica'	=> array(19),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'postos_nao_usando_sac.php',
			'titulo'	=> 'Postos NÃO abriram OS pelo SAC',
			'descr'		=> 'Postos que não abriram OS pelo SAC (admin)',
			'codigo'    => 'AUD-0090'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["bi"],
			'link'		=> 'bi_medias_postos.php',
			'titulo'	=> 'Relatório de indicadores de postos autorizados',
			'descr'		=> 'Relatório de indicadores de postos autorizados.',
			'codigo'    => 'AUD-0100'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'posto_bloqueado.php',
			'titulo'	=> 'Postos Bloqueados',
			'descr'		=> 'Consulta de PAs bloqueados com OS abertas a mais de 180 dias',
			'codigo'    => 'AUD-0110'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produto_peca_posto.php',
			'titulo'	=> 'Relatório de Peça por Posto e por Período',
			'descr'		=> 'Relatório de peça por posto e por período.',
			'codigo'    => 'AUD-0120'
		),

		'link' => 'linha_de_separação'
	),
	'secao1' => array(
		'secao' => array(
			'link'     => '#',
			'titulo'   => 'AUDITORIA OS',
			//'noexpand' => true
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta_tectoy.php',
			'titulo'	=> 'Relatório de Ordens de Serviço em aberto',
			'descr'		=> 'Mostra as Ordens de Serviço que estão em aberto.',
			'codigo'    => 'AUD-1010'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_regiao.php',
			'titulo'	=> 'Relatório de OS por Região',
			'descr'		=> 'Relatório de Ordens de Serviço por Região.',
			'codigo'    => 'AUD-1020'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_regiao.php',
			'titulo'	=> 'Relatório de OS por Estado',
			'descr'		=> 'Relatório de Ordens de Serviço por Estado dos Postos Autorizados.',
			'codigo'    => 'AUD-1030'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta_geral.php',
			'titulo'	=> 'Relatório Geral de Ordens de Serviço',
			'descr'		=> 'Mostra as Ordens de Serviço abertas pelo posto - Critério de Abertura.',
			'codigo'    => 'AUD-1040'
		),
		array(
			'fabrica_no'=> array(1,11), // É, estava assim no arquivo original...
			'fabrica'   => array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'rel_os_por_posto.php',
			'titulo'	=> 'Ordens de Serviço aberta por Posto',
			'descr'		=> 'Mostra as Ordens de Serviço que estão abertas por posto.',
			'codigo'    => 'AUD-1050'
		),
		array(
			//'disabled'  => true,
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> '#',
			'titulo'	=> 'Ordens de Serviço aberta por Posto (INATIVO)',
			'descr'		=> 'Mostra as Ordens de Serviço que estão abertas por posto. (INATIVO)',
			'codigo'    => 'AUD-1060'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> '#',
			'titulo'	=> 'Ordens de Serviço aberta por Posto',
			'descr'		=> 'Mostra as Ordens de Serviço que estão abertas por posto.',
			'codigo'    => 'AUD-1070'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta_lenoxx.php',
			'titulo'	=> 'Relatório de Ordens de Serviço em aberto',
			'descr'		=> 'Mostra as Ordens de Serviço que estão em aberto.',
			'codigo'    => 'AUD-1080'
		),
		array(
			'fabrica'	=> $fabrica_audita_os_aberta,
			'fabrica_no'=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta.php',
			'titulo'	=> 'Relatório de Ordens de Serviço em aberto',
			'descr'		=> 'Mostra as Ordens de Serviço que estão em aberto.',
			'codigo'    => 'AUD-1090'
		),
		array(
			'fabrica'	=> array_merge($fabrica_audita_os_aberta, (array)11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta_completo.php',
			'titulo'	=> 'Relatório de Ordens de Serviço em aberto Completo',
			'descr'		=> 'Mostra as Ordens de Serviço que estão em aberto e suas peças e defeitos',
			'codigo'    => 'AUD-1100'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_peca_lenoxx.php',
			'titulo'	=> 'Pedido de Peça > 15 dias',
			'descr'		=> 'Relatório de Ordem de Serviço com pedido de peças com mais de 15 dias.',
			'codigo'    => 'AUD-1110'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_por_posto_peca.php',
			'titulo'	=> 'Relatório de OSs digitadas',
			'descr'		=> 'Mostra as Ordens de Serviço digitadas no sistema.',
			'codigo'    => 'AUD-1120'
		),
		array(
			'fabrica'	=> array(101,115,116),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_mais_tres_pecas.php',
			'titulo'	=> 'OS com 5 peças ou mais',
			'descr'		=> 'Relatório para auditoria dos postos que utilizam 5 peças ou mais por Ordem de Serviço.',
			'codigo'    => 'AUD-1130'
		),
		array(
			'fabrica_no'=> array(101,115,116),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_mais_tres_pecas.php',
			'titulo'	=> 'OS com 3 peças ou mais',
			'descr'		=> 'Relatório para auditoria dos postos que utilizam 3 peças ou mais por Ordem de Serviço.',
			'codigo'    => 'AUD-1140'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_exlcuida_90_150_dias.php',
			'titulo'	=> 'Relatório de OSs Excluídas sem Peças maior que 90 e 150 dias',
			'descr'		=> 'Relatório de OSs excluídas sem peças maior que 90 dias para consumidor e 150 dias para revenda',
			'codigo'    => 'AUD-1150'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_por_posto_peca_britania.php',
			'titulo'	=> 'Relatório Mensal de Ordens de Serviço',
			'descr'		=> 'Donwload do Relatório de Ordens de Serviços Digitadas',
			'codigo'    => 'AUD-1160'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_finalizada_por_posto_peca_britania.php',
			'titulo'	=> 'Relatório Mensal de Ordens de Serviço Finalizadas',
			'descr'		=> 'Donwload do Relatório de Ordens de Serviços Finalizadas dentro de um mês',
			'codigo'    => 'AUD-1170'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_codigo_fabricacao.php',
			'titulo'	=> 'Relatório de Código de fabricação',
			'descr'		=> 'Relatório de OSs lançadas filtrando pelo código de fabricação, período e família.',
			'codigo'    => 'AUD-1180'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_auditoria_os_aberta_90.php',
			'titulo'	=> 'Relatório de OS Aberta (90 dias)',
			'descr'		=> 'Relatório de Auditoria de OSs abertas a mais de 90 dias.',
			'codigo'    => 'AUD-1190'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_auditoria_os_aberta_45.php',
			'titulo'	=> 'Relatório de OS Aberta (45 dias)',
			'descr'		=> 'Relatório de Auditoria de OSs abertas a mais de 45 dias.',
			'codigo'    => 'AUD-1200'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta_detalhado_britania.php',
			'titulo'	=> 'Relatório de OS Aberta Detalhado INFO',
			'descr'		=> 'Relatório de OSs abertas por linha.',
			'codigo'    => 'AUD-1210'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_grafico_os_parada_x_os_aberto.php',
			'titulo'	=> 'Relatório de OS em aberto x Demanda de OS',
			'descr'		=> 'Comparativa das OS sem intervenção do posto (só abertas, sem análise) há mais de 10 dias com as OS abertas durante a semana',
			'codigo'    => 'AUD-1220'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'auditoria_os_aberta_90.php',
			'titulo'	=> 'Auditoria OS Aberta (45/90 dias) &ndash; INFO',
			'descr'		=> 'Auditoria de OSs abertas a mais de 45/90 dias.',
			'codigo'    => 'AUD-1230'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'auditoria_os_sem_peca.php',
			'titulo'	=> 'OSs abertas e sem Lançamento de Peças',
			'descr'		=> 'Relatório de quantidade de OSs abertas e sem lançamento de peças',
			'codigo'    => 'AUD-1240'
		),
		array(
			'fabrica'	=> array(40),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'auditoria_os_com_peca.php',
			'titulo'	=> 'OSs abertas e com Lançamento de Peças',
			'descr'		=> 'Relatório que consta os postos e a quantidade de OSs que estão abertas e com lançamento de peças',
			'codigo'    => 'AUD-1250'
		),
		array(
			'fabrica_no'=> $fabricas_contrato_lite,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_relatorio.php',
			'titulo'	=> 'Status Ordem de Serviço',
			'descr'		=> 'Relatório de status de OS por período',
			'codigo'    => 'AUD-1260'
		),
		array(
			'fabrica'	=> array(80),
			'icone'		=> $icone["chart"],
			'link'		=> 'relatorio_grafico_os_aberto.php',
			'titulo'	=> 'Relatório Gráfico de OS em Aberto',
			'descr'		=> 'Gráfico resumo das OS ainda em aberto após 5, 15,<br>'.
			'25 e mais de 25 dias, com filtro por posto ou produto',
			'codigo'    => 'AUD-1270'
		),
		array(
			//HD 138788
			'fabrica'	=> $fabrica_auditoria_km,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_km_os.php',
			'titulo'	=> 'Relatório de OS com KM solicitada',
			'descr'		=> 'Relatório que exibe as OS finalizadas e com KM solicitada',
			'codigo'    => 'AUD-1280'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_esmaltec.php',
			'titulo'	=> 'Relatório de OS',
			'descr'		=> 'Relatório de Ordem de Serviço',
			'codigo'    => 'AUD-1290'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_status_posto.php',
			'titulo'	=> 'Relatório de status das OSs abertas',
			'descr'		=> 'Relatório que consta as status das OSs abertas por posto',
			'codigo'    => 'AUD-1300'
		),
		array(
			'fabrica'	=> array(2),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta_dynacom.php',
			'titulo'	=> 'Relatório OS Aberta',
			'descr'		=> 'Relatório mostra OSs em aberto no posto e o motivo, OSs sem peças, com peças pedentes, etc.',
			'codigo'    => 'AUD-1310'
		),
		array(
			'fabrica'	=> array(87),
			'icone'		=> $icone["consulta"],
			'link'		=> 'auditoria_os_aberta.php',
			'titulo'	=> 'Auditoria de OS Abertas',
			'descr'		=> 'Consulta de relatório de OS abertas a mais de 30 ou 70 dias e de OS sem número de série do produto',
			'codigo'    => 'AUD-1320'
		),
		array(
			'fabrica'	=> array(74),
			'icone'		=> $icone["consulta"],
			'link'		=> 'auditoria_os_aberta_70_dias.php',
			'titulo'	=> 'Auditoria OS 30/70 dias e Nº Série',
			'descr'		=> 'Consulta de relatório de OS abertas a mais de 30 ou 70 dias e de OS reincidente pelo número de série do produto',
			'codigo'    => 'AUD-1330'
		),
		array(
			'fabrica'	=> array(91),
			'icone'		=> $icone["consulta"],
			'link'		=> 'auditoria_os_aberta_70_dias.php',
			'titulo'	=> 'Auditoria de Nº Série com Autorização',
			'descr'		=> 'Consulta de relatório de OS abertas de número de série com autorização',
			'codigo'    => 'AUD-1340'
		),
		array(
			'fabrica'	=> array(87),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'auditoria_os_soaf.php',
			'titulo'	=> 'Auditoria OS SOAF',
			'descr'		=> 'Relatório para auditoria das Ordens de Serviço que tem SOAF.',
			'codigo'    => 'AUD-1350'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'auditoria_online_suggar.php',
			'titulo'	=> 'Auditoria Online',
			'descr'		=> 'Cadastrar relatório de Auditoria Online',
			'codigo'    => 'AUD-1360'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["consulta"],
			'link'		=> 'auditoria_online_consulta.php',
			'titulo'	=> 'Consulta Auditoria Online',
			'descr'		=> 'Consulta de relatório de Auditoria Online',
			'codigo'    => 'AUD-1370'
		),
		'link' => 'linha_de_separação'
	),
	'secao2' => array(
		'secao' => array(
			'link'     => '#',
			'titulo'   => 'AUDITORIA INTERVENÇÃO',
			//'noexpand' => true
		),
		array(
			'fabrica'	=> $fabrica_audita_todas_os,
			'icone'		=> $icone["computador"],
			'link'		=> 'os_auditar.php',
			'titulo'	=> 'Auditoria Prévia de OS',
			'descr'		=> 'Auditoria prévia das OS para que possam ser analisadas antes de liberar as peças para o posto',
			'codigo'    => 'AUD-2010'
		),
		array(
			'fabrica'	=> array(86),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_intervencao.php',
			'titulo'	=> 'OS em Intervenção',
			'descr'		=> 'Consulta de relatório de OS em Intervenção',
			'codigo'    => 'AUD-2020'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_nf_reincidente.php',
			'titulo'	=> 'Relatório de NF Retroativa a 60 dias',
			'descr'		=> 'Relatório de Nota Fiscal Retroativa a 60 dias.',
			'codigo'    => 'AUD-2030'
		),
		array(
			'fabrica'	=> $fabrica_interv_tecnica,
			'icone'		=> $icone["computador"],
			'link'		=> 'os_intervencao.php',
			'titulo'	=> 'OS com Intervenção Técnica',
			'descr'		=> 'OSs com intervenção técnica da fábrica. Autoriza ou cancela o pedido de peças do posto ou efetua a troca do produto',
			'codigo'    => 'AUD-2040'
		),
		array(
			'fabrica'	=> array(50), // $vet_km
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_sem_peca_e_reincidente.php',
			'titulo'	=> 'Auditoria da OS',
			'descr'		=> 'Auditoria de OS reincidente, sem peças ou com mais de 3 peças',
			'codigo'    => 'AUD-2050'
		),
		array(
			'fabrica'	=> $fabrica_auditoria_previa,
			'icone'		=> $icone["computador"],
			'link'		=> 'auditoria_previa_posto.php',
			'titulo'	=> 'Auditoria prévia',
			'descr'		=> 'Auditoria prévia para liberação de peças em garantia.',
			'codigo'    => 'AUD-2060'
		),
		array(
			'fabrica'	=> $vet_os_reincidente,
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_os_reincidente.php',
			'titulo'	=> 'Auditoria de OS Reincidente',
			'descr'		=> 'Auditoria de OS Reincidente',
			'codigo'    => 'AUD-2070'
		),
		array(
			// HD 131735
			'fabrica'	=> array(15),
			'icone'		=> $icone["computador"],
			'link'		=> 'auditoria_os_aberta_90_aprova.php',
			'titulo'	=> 'Auditoria da OS aberta',
			'descr'		=> 'Auditoria de OS aberta mais de 60 dias',
			'codigo'    => 'AUD-2080'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_garantia_estendida.php',
			'titulo'	=> 'Auditoria de OS com LGI',
			'descr'		=> 'Auditoria das OS com garantia estendida - LGI',
			'codigo'    => 'AUD-2090'
		),
		array(
			'fabrica'	=> $vet_km,
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_serie.php',
			'titulo'	=> 'Auditoria na Série da OS',
			'descr'		=> 'Aprova ou reprova o número de série do produto e da OS',
			'codigo'    => 'AUD-2100'
		),
		array(
			'fabrica'	=> array_merge($vet_km, array(115,116)),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_km.php',
			'titulo'	=> 'Auditoria de KM',
			'descr'		=> 'OS para aprovação de KM do posto autorizado ao consumidor',
			'codigo'    => 'AUD-2110'
		),
		array(
			'fabrica'	=> $fabrica_interv_serie,
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_serie.php',
			'titulo'	=> 'Auditoria de OS por Número de Série',
			'descr'		=> 'Aprova ou reprova OS em Intervenção por número de série',
			'codigo'    => 'AUD-2120'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_reincidencia_nf.php',
			'titulo'	=> 'Auditoria de OS com reincidência',
			'descr'		=> 'Auditoria das OSs com reincidência',
			'codigo'    => 'AUD-2130'
		),
		array(
			'fabrica'	=> array(40),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_intervencao_tres_ou_mais_pecas.php',
			'titulo'	=> 'OSs com Intervenções com 3 peças ou mais',
			'descr'		=> 'OSs com intervenção com 3 peças ou mais.',
			'codigo'    => 'AUD-2140'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_reincidente_britania.php',
			'titulo'	=> 'Relatório de OSs reincidentes',
			'descr'		=> 'Relatório de Ordens de Serviço Reincidentes',
			'codigo'    => 'AUD-2150'
		),
		array(
			'fabrica'       => array(30),
			'icone'         => $icone["computador"],
			'link'          => 'auditoria_os_judicial_troca.php',
			'titulo'        => 'Auditoria OS com Troca ou Processo Judicial',
			'descr'         => 'Auditoria OS com Troca de Produto ou Processo Judicial',
			'codigo'    => 'AUD-2160'
		),
		'link' => 'linha_de_separação'
	),
	'secaoLGR' => array(
		'secao' => array(
			'link'       => '#',
			'fabrica_no' => $fabricas_contrato_lite,
			'titulo'     => 'AUDITORIA PEÇAS / LGR',
			//'noexpand' => true
		),
		array(
			// HD 138788
			'fabrica'	=> array(104, 105),
			'icone'		=> $icone["computador"],
			'link'		=> 'pedido_intervencao.php',
			'titulo'	=> 'Pedido de Peça com Intervenção',
			'descr'		=> 'Autoriza ou Cancela Pedidos de Venda dos Postos',
			'codigo'    => 'AUD-3010'
		),
		/* HD 42726
		array(
			'disabled'  => true,
			'fabrica'	=> array(3,43),
			'icone'		=> 'tela25.gif',
			'link'		=> 'relatorio_lgr.php',
			'titulo'	=> 'Relatório do Não Preenchimento do LGR',
			'descr'		=> 'Relatório dos Postos que não preencheram o LGR'
		); HD 138788 */

		array(
			'fabrica'	=> (in_array($login_fabrica, array( 2, 3, 6, 11, 25, 35, 45, 51, 14, 72)) OR $login_fabrica > 79),
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(81,114)),
			'icone'		=> $icone["computador"],
			'link'		=> 'pedido_intervencao.php',
			'titulo'	=> 'Pedido com Intervenção',
			'descr'		=> 'Pedido com peças críticas. Autoriza ou cancela o pedido do posto',
			'codigo'    => 'AUD-3020'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'auditoria_os_fechamento_blackedecker.php',
			'titulo'	=> 'Auditoria de peças trocadas em garantia',
			'descr'		=> 'Faz pesquisas nas Ordens de Serviços previamente aprovadas em extrato.',
			'codigo'    => 'AUD-3030'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_pecas_defeitos.php',
			'titulo'	=> 'Field Call Rate de Peças',
			'descr'		=> 'Relatório de quebras por defeitos das peças.',
			'codigo'    => 'AUD-3040'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_devolucao_obrigatoria.php',
			'titulo'	=> 'Devolução Obrigatória',
			'descr'		=> 'Peças que devem ser devolvidas para a Fábrica constando em Ordens de Serviços.',
			'codigo'    => 'AUD-3050'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(81, 114),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_devolucao_obrigatoria_novo.php',
			'titulo'	=> 'Relatório de Devolução Obrigatória',
			'descr'		=> 'Peças que devem ser devolvidas para a Fábrica constando em Ordens de Serviços.',
			'codigo'    => 'AUD-3060'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_devolvida.php',
			'titulo'	=> 'Devolução de Peças dos Postos',
			'descr'		=> 'Relatório de conferência das peças devolvidas pelos postos',
			'codigo'    => 'AUD-3070'
		),
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(81,114)),
			'icone'		=> $icone["consulta"],
			'link'		=> 'extrato_posto_devolucao_controle.php',
			'titulo'	=> 'Controle de Notas de Devolução - LGR',
			'descr'		=> 'Consulte ou confirme Notas Fiscais de Devolução.',
			'codigo'    => 'AUD-3080'
		),
		//HD 138788
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(81,114)),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_lgr.php',
			'titulo'	=> 'Relatório do Não Preenchimento do LGR',
			'descr'		=> 'Relatório dos Postos que não preencheram o LGR.',
			'codigo'    => 'AUD-3090'
		),
		array(
			'fabrica'	=> $fabrica_lgr_bateria,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_devolucao_bateria.php',
			'titulo'	=> 'Relatório de Devolução das baterias',
			'descr'		=> 'Relatório de Devolução das baterias',
			'codigo'    => 'AUD-3100'
		),
		// HD 318173
		array(
			'fabrica'	=> array(51,94,98),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'lgr_vistoria_itens_new.php',
			'titulo'	=> 'Relatório de Peças Retornáveis',
			'descr'		=> 'Relatório que indica as Peças Retonáveis do Extrato',
			'codigo'    => 'AUD-3110'
		),
		// HD 708844
		array(
			'fabrica'	=> array(104,105,106),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'lgr_vistoria_itens_new.php',
			'titulo'	=> 'Relatório de Peças para Inspeção',
			'descr'		=> 'Relatório que indica as Peças que precisam e inspeção',
			'codigo'    => 'AUD-3120'
		),
		array(
			'fabrica'	=> array(11,24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'auditoria_pecas_pendentes.php',
			'titulo'	=> 'Relação de Peças Pendentes aos postos',
			'descr'		=> 'Relatório de peças de pedidos que ainda não foram atendidas pelo fabricante.(por posto)',
			'codigo'    => 'AUD-3130'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'auditoria_pecas_pendentes_pecas.php',
			'titulo'	=> 'Peças Pendentes por Estoque',
			'descr'		=> 'Relatório de peças que ainda nao foram atendidas (por peças)',
			'codigo'    => 'AUD-3140'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_pedido_anistia.php',
			'titulo'	=> 'Relatório de OSs abertas há mais de 150 dias com pedidos de peças atendidos',
			'descr'		=> 'OS abertas há mais de 150 dias com pedidos de peças atendidos há mais de 20 dias',
			'codigo'    => 'AUD-3150'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_pedido_anistia_comunicados.php',
			'titulo'	=> 'Relatório de OSs abertas há mais de 150 dias com comunicado ao posto',
			'descr'		=> 'OS abertas há mais de 150 dias, com pedidos de peças atendidos e com comunicado ao posto',
			'codigo'    => 'AUD-3160'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_pedido_anistia_excluidas.php',
			'titulo'	=> 'Relatório de OSs abertas há mais de 150 dias excluídas',
			'descr'		=> 'OS abertas há mais de 150 dias, com pedidos de peças atendidos e excluídas',
			'codigo'    => 'AUD-3170'
		),
		'link' => 'linha_de_separação'
	),
	'secao4' => array(
		'secao' => array(
			'link'     => '#',
			'titulo'   => 'AUDITORIA FINANCEIRO',
			//'noexpand' => true
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_media_pagamento.php',
			'titulo'	=> 'Relação de pagamentos',
			'descr'		=> 'Relatório demostrativo de dias para pagamento de notas de crédito.',
			'codigo'    => 'AUD-4010'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_media_pagamento_pecas.php',
			'titulo'	=> 'Relatório de 1,5 %',
			'descr'		=> 'Relatório demostrativo de dias para pagamento de notas de crédito com valor de peças.',
			'codigo'    => 'AUD-4020'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'gasto_por_posto.php',
			'titulo'	=> 'Gastos por Posto',
			'descr'		=> 'Mostra os postos com maiores e menores gastos em garantia.',
			'codigo'    => 'AUD-4030'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'gasto_por_revenda.php',
			'titulo'	=> 'Gastos por Revenda',
			'descr'		=> 'Mostra as revendas com maiores e menores gastos em garantia.',
			'codigo'    => 'AUD-4040'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'gasto_por_posto_todos_blacskedecker.php',
			'titulo'	=> 'Gastos por Posto (todos)',
			'descr'		=> 'Mostra os todos os gastos em garantia de todos os postos.',
			'codigo'    => 'AUD-4050'
		),
	),
	'secao5' => array(
		'secao' => array(
			'link'     => '#',
			'titulo'   => 'AUDITORIA OUTROS',
			//'noexpand' => true
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'black_quebra_acumulado.php',
			'titulo'	=> 'Visão geral por produto',
			'descr'		=> 'Relatório de visão geral por produto com valores de peças e mão-de-obra.',
			'codigo'    => 'AUD-5010'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'rel_codigo_fabricacao.php',
			'titulo'	=> 'Relatório do Código de Fabricação',
			'descr'		=> 'Ocorrências de codigo de fabricação em OS',
			'codigo'    => 'AUD-5020'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'rel_visao_mix_total.php',
			'titulo'	=> 'Visão geral por produto',
			'descr'		=> 'Relatório geral por produto.',
			'codigo'    => 'AUD-5030'
		),
		array(
			'fabrica'	=> $fabricas_autocredenciamento,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_autocredenciamento.php',
			'titulo'	=> 'Relatório Auto-Credeciamento',
			'descr'		=> 'Relatório de Postos cadastrados no Auto-Credeciamento',
			'codigo'    => 'AUD-5040'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'distribuidor_desempenho.php',
			'titulo'	=> 'Desempenho Distribuidores',
			'descr'		=> 'Avaliação de desempenho dos principais distribuidores.',
			'codigo'    => 'AUD-5050'
		),
		array(
			'fabrica'	=> array(14),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'documento_cadastro.php',
			'titulo'	=> 'Cadastro de Documentos de Supervisor Técnico',
			'descr'		=> 'Mostra todos os documentos cadastrados para os Supervisores Técnicos.',
			'codigo'    => 'AUD-5060'
		),
		array(
			'fabrica'	=> array(14),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'documento_consulta.php',
			'titulo'	=> 'Documentos de Supervisor Técnico',
			'descr'		=> 'Mostra todos os documentos dos supervisores que estão cadastrados.',
			'codigo'    => 'AUD-5070'
		),
		array(
			'fabrica'	=> array(81,114),
			'icone'		=> $icone["consulta"],
			'link'		=> 'troca_revenda_baixa.php',
			'titulo'	=> 'Autorizações de Devoluções de Vendas',
			'descr'		=> 'Consulta e Baixas das Autorizações de Devoluções de Vendas aprovadas por falta de peças',
			'codigo'    => 'AUD-5080'
		),
		array(
			'fabrica'	=> array(11,72),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_produto_total.php',
			'titulo'	=> 'Relatório Troca de Produto',
			'descr'		=> 'Relatório de produto trocado e arquivo .XLS',
			'codigo'    => 'AUD-5090'
		),
		//HD 138788
		array(
			'fabrica'	=> array(81,114),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_atendimento_sac.php',
			'titulo'	=> 'Relatório dos Atendimentos',
			'descr'		=> 'Relatório que indica todos os atendimentos efetuados pelo CALL-CENTER (independente do meio de comunicação)',
			'codigo'    => 'AUD-5100'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'gera_txt_peca_garantia_black.php',
			'titulo'	=> 'Gera TXT de Garantia',
			'descr'		=> 'Relatório em TXT para Engenharia de OSs em garantia.',
			'codigo'    => 'AUD-5110'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_troca_parametros.php',
			'titulo'	=> 'Consulta OS Troca',
			'descr'		=> 'Consulta de Ordem de Serviço de Troca',
			'codigo'    => 'AUD-5120'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_serie_locadora.php',
			'titulo'	=> 'Relatório OS Número de Série',
			'descr'		=> 'Relatório que mostra OS Cortesia com série da locadora',
			'codigo'    => 'AUD-5130'
		),
		array(
			'fabrica'	=> $fabricas_autocredenciamento,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_banner.php',
			'titulo'	=> 'Relatório de Banner',
			'descr'		=> 'Relatório de Postos cadastrados no pedido de banner',
			'codigo'    => 'AUD-5140'
		),
		'link' => 'linha_de_separação'
	),
	'secaoBOSCH' => array(
		'secao' => array(
			'link'     => '#',
			'fabrica'  => array(20),
			'titulo'   => 'AUDITORIA AL',
			//'noexpand' => true
		),
		/* Bosch */
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_valor_pecas_mobra.php',
			'titulo'	=> 'Qtde OS, valor de Peças e Mão de Obra',
			'descr'		=> 'Relatório que consta as quantidade de OSs digitadas, o valor de peças e mão de obra filtrado por país',
			'codigo'    => 'AUD-AL10'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_colombia.php',
			'titulo'	=> 'Relatório Colômbia',
			'descr'		=> 'Relatório que consta as quantidade de OSs digitadas, o valor de peças e mão de obra',
			'codigo'    => 'AUD-AL20'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_garantias.php',
			'titulo'	=> 'Relatório Garantías',
			'descr'		=> 'Relatório Garantías por país das OSs em extrato, que consta o total de peças e mão de obra',
			'codigo'    => 'AUD-AL30'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_status.php',
			'titulo'	=> 'Relatório de OS Recusadas e Acumuladas',
			'descr'		=> 'Relatório de ordem de serviços que foram recusadas ou acumuladas do extrato',
			'codigo'    => 'AUD-AL40'
		),
	),
	'link' => 'linha_de_separação'
);
