<?php
//error_reporting(E_ERROR);

if ($admin_e_promotor_wanke) { //HD 685194
	return include(__DIR__ . '/menu_promotor_wanke.php');
}

$fabrica_helpdesk_posto           = array(1,42);
$fabrica_admin_anexaNF            = array(43, 45, 80); // Acesso a nota_foto_cadastro
$fabrica_relatorio_os_aberto      = array(43, 45, 80);
$verifica_ressarcimento_troca     = array(81, 114);
$fabrica_callcenter_deshabilitado = array();

// 159888
$fabrica_movimiento_estoque_posto = array(15,24,30,50,74);
$fabrica_estoque_cfop             = array(3, 15, 30);

// HD 706867
$sql = "SELECT fabrica
	      FROM tbl_fabrica
		 WHERE fabrica = $login_fabrica
		   AND fatura_manualmente";
$res = pg_query($con, $sql);

$fabrica_fatura_manualmente = (pg_num_rows($res)>0);

// Aviso comunicado
if ($login_fabrica ==50) { // HD 58256
	$sql = "SELECT comunicado
			  FROM tbl_comunicado
			 WHERE fabrica = $login_fabrica
			   AND data > CURRENT_DATE - INTERVAL '3 DAYS' ;";
	$com_style = (pg_num_rows(@pg_query($con, $sql))>0) ? ' style="color:red"':'';
}

// Menu CALLCENTER

return array(
	'secao0' => array(
		'secao' => array(
			'link'	=> '#',
			'titulo' => 'CALL-CENTER' . iif(($login_fabrica == 6), ' NOVO')
		),
		array(
			'disabled'  => (!$admin_consulta_os),
			"icone"		=> $icone["consulta"],
			"titulo"	=> 'Consulta Ordens de Serviço',
			"link"		=> 'os_consulta_lite.php',
			"descr"		=> 'Consulta OS Lançadas',
			"codigo" => 'CCT-0010'
		),
		array(
			'disabled'  => (!$admin_consulta_os),
			"link"		=> 'linha_de_separação',
		),
		array(
			'fabrica'	=> array(25),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'callcenter_interativo_new.php',
			'titulo'	=> 'Atendimento Interativo',
			'descr'		=> 'Cadastro de atendimento do Call-Center Interativo',
			"codigo" => 'CCT-0020'
		),
		array(
			'fabrica'	=> array(25),
			'icone'		=> $icone["consulta"],
			'link'		=> 'callcenter_parametros_interativo.php',
			'titulo'	=> 'Consulta Atendimentos Call-Center',
			'descr'		=> 'Consulta atendimentos já lançados',
			"codigo" => 'CCT-0030'
		),
		array(
			'fabrica'	=> array(25),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_pendente_interativo.php',
			'titulo'	=> 'Pendência Call-Center',
			'descr'		=> 'Exibe todos os atendimentos do Call-Center com pendência.',
			"codigo" => 'CCT-0040'
		),
		array(
			'fabrica'	=> array(25),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_consulta_atendimento.php',
			'titulo'	=> 'Relatório Call-Center',
			'descr'		=> 'Relatório de callcenter simples (permite baixar o relatório em XLS).',
			"codigo" => 'CCT-0050'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'cadastra_callcenter.php',
			'titulo'	=> 'Cadastra Atendimento Call-Center',
			'descr'		=> 'Cadastro de atendimento do Call-Center',
			"codigo" => 'CCT-0060'
		),
		array(
			'fabrica_no'=> array(25, 95),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'callcenter_interativo_new.php',
			"codigo"    => 'CCT-0070',
			'titulo'	=> 'Cadastra Atendimento Call-Center' .  iif(($login_fabrica == 6), ' NOVO'),
			'descr'		=> 'Cadastro de atendimento do Call-Center'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'pre_os_britania_simplificada.php',
			'titulo'	=> 'Cadastro de PRÉ OS',
			'descr'		=> 'Cadastrar Pré Ordem de serviço para Posto Autorizado',
			"codigo" => 'CCT-0080'
		),
		array(
			'fabrica_no'=> array(25, 95),
			'icone'		=> $icone["consulta"],
			'link'		=> 'callcenter_parametros_new.php',
			'titulo'	=> 'Consulta Atendimentos Call-Center',
			'descr'		=> 'Consulta atendimentos já lançados',
			"codigo" => 'CCT-0090'
		),
		array(
			'fabrica'	=> array($fabricas_contrato_lite),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'faq_situacao.php',
			'titulo'	=> 'Perguntas Frequentes - FAQ',
			'descr'		=> 'Cadastro de  perguntas e respostas sobre um determinado produto',
			"codigo" => 'CCT-0100'
		),
		array(
			'fabrica'	=> array($fabricas_contrato_lite),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'callcenter_pergunta_cadastro.php',
			'titulo'	=> 'Cadastro de Perguntas do Callcenter',
			'descr'		=> 'Para que as frases padrões do callcenter sejam alteradas.',
			"codigo" => 'CCT-0110'
		),
		array(
			'fabrica_no'=> array(25, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_pendente.php',
			'titulo'	=> 'Pendência Call-Center',
			'descr'		=> 'Exibe todos os atendimentos do Call-Center com pendência.',
			"codigo" => 'CCT-0120'
		),
		// HD 674943
		array(
			'fabrica'	=> array(85),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'pergunta_cadastro.php',
			'titulo'	=> 'Cadastro de Pergunta',
			'descr'		=> 'Cadastro de pergunta para a pesquisa de satisfação.',
			"codigo" => 'CCT-0130'
		),
		array(
			'fabrica'	=> array(85),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'tipo_pergunta_cadastro.php',
			'titulo'	=> 'Cadastro de Tipo de Pergunta',
			'descr'		=> 'Cadastro de tipo de pergunta para a pesquisa de satisfação.',
			"codigo" => 'CCT-0140'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["computador"],
			'link'		=> 'hd_chamado_postagem.php',
			'titulo'	=> 'Autorização de Postagem',
			'descr'		=> 'Consulta, Autorização e Reprovação de postagens solicitadas pelos atendentes do CallCenter',
			"codigo" => 'CCT-0150'
		),
		array(
			'fabrica'	=> array(14, 43, 66),
			'icone'		=> $icone["computador"],
			'link'		=> 'pre_os_cadastro_sac.php',
			'titulo'	=> 'Abertura de Pré-Os - SAC',
			'descr'		=> 'Abre Pré OS para um Posto Autorizado.',
			"codigo" => 'CCT-0160'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_pendente_procon.php',
			'titulo'	=> 'Pendência Call-Center (Procon / Jec)',
			'descr'		=> 'Exibe todos os atendimentos do Call-Center com pendência.',
			"codigo" => 'CCT-0170'
		),
		array(
			'fabrica'	=> array(2),
			'icone'		=> $icone["computador"],
			'link'		=> 'pesquisa_acompanhamento.php',
			'titulo'	=> 'Acompanhamento de Assistência Técnica',
			'descr'		=> 'Acompanhamento de situação do posto autorizado.',
			"codigo" => 'CCT-0180'
		),
		array(
			'fabrica'   => $fabrica_helpdesk_posto,
			'icone'		=> $icone["consulta"],
			'link'		=> 'helpdesk_listar.php',
			'titulo'	=> 'Consulta Chamados',
			'descr'		=> 'Consulta de Chamados Abertos por Posto.',
			"codigo" => 'CCT-0190'
		),
		'link' => 'linha_de_separação'
	),

	/* Seção INFORMATIVO MENSAL, apenas BLACK */
	//if ($login_fabrica == 1) {
	'secao1'=> array(
		'secao' => array(
			'link'	=> '#',
			'titulo' => 'INFORMATIVO MENSAL',
			'fabrica'=> array(1)
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'informativo_publicado.php',
			'titulo'	=> 'Informativos Publicados',
			'descr'		=> 'Informativos Publicados',
			"codigo" => 'CCT-1010'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'informativo_edicao.php',
			'titulo'	=> 'Edição de Informativos',
			'descr'		=> 'Edição de Informativos',
			"codigo" => 'CCT-1020'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'reportagem_consulta.php',
			'titulo'	=> 'Reportagens',
			'descr'		=> 'Reportagens',
			"codigo" => 'CCT-1030'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'destinatario.php',
			'titulo'	=> 'Destinatários',
			'descr'		=> 'Destinatários',
			"codigo" => 'CCT-1040'
		),
		'link' => 'linha_de_separação'
	),

	/**
	 * RELATÓRIOS RELATIVOS AO CALL-CENTER. GERAL.	
	 **/
	'secao2' => array(
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'CALL-CENTER RELATÓRIOS',
			'fabrica_no' => array(25, 95)
		),
		array(
			'fabrica_no'=> array(25, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_atendimento.php',
			'titulo'	=> 'Relatório de Atendimentos',
			'descr'		=> 'Relatório de quantidade de atendimento e o status.',
			"codigo" => 'CCT-2010'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_atendimento_orientacao_uso.php',
			'titulo'	=> 'Relatório de Orientação de Uso',
			'descr'		=> 'Relatório de Atendimentos x Orientação de Uso.',
			"codigo" => 'CCT-2020'
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_callcenter_atendimento.php',
			'titulo'	=> 'Relatório de Atendimentos por POSTO',
			'descr'		=> 'Relatório que exibe a quantidade de atendimentos <br /> por posto selecionado no período filtrado.',
			"codigo" => 'CCT-2030'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pre_os_britania_simplificado.php',
			'titulo'	=> 'Relatório de Pré OS',
			'descr'		=> 'Relatório Pré Ordem de serviço para Posto Autorizado.',
			"codigo" => 'CCT-2040'
		),
		array(
			'fabrica_no'=> array(24, 25, 52, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_atendimento_atendente.php',
			'titulo'	=> 'Relatório de Atendimentos por Atendente',
			'descr'		=> 'Relatório de quantidade de atendimento por atendente.',
			"codigo" => 'CCT-2050'
		),
		array(
			'fabrica_no'=> array(24, 25, 52, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_periodo_atendimento.php',
			'titulo'	=> 'Relatório Período de Atendimentos',
			'descr'		=> 'Relatório de Período de Atendimento, informa a quantidade de dias que o atendimento levou para ser resolvido.',
			"codigo" => 'CCT-2060'
		),
		array(
			'fabrica_no'=> array(24, 25, 52, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_defeito.php',
			'titulo'	=> 'Relatório de Reclamações',
			'descr'		=> 'Relatório com os 10 defeitos mais reclamados.',
			"codigo" => 'CCT-2070'
		),
		array(
			'fabrica_no'=> array(25, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_defeito_produto.php',
			'titulo'	=> 'Relatório de Reclamações X Produtos',
			'descr'		=> 'Relatório de reclamações por produtos.',
			"codigo" => 'CCT-2080'
		),
		array(
			'fabrica'	=> array(81,114),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produto_defeito_reclamado.php',
			'titulo'	=> 'Relatório Produto X Defeito Reclamado',
			'descr'		=> 'Relatório de produtos por defeito reclamado',
			"codigo" => 'CCT-2090'
		),
		array(
			'fabrica'   => array(85),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pesquisa_satisfacao.php',
			'titulo'	=> 'Relatório de Pesquisa de Satisfação',
			'descr'		=> 'Relatório de Satisfação dos Clientes Atendidos pelo SAC.',
			"codigo" => 'CCT-2100'
		),
		array(
			'fabrica'   => array(85),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_atendimento_pesquisa_satisfacao.php',
			'titulo'	=> 'Relatório Atendimentos x Pesquisa Satisfação',
			'descr'		=> 'Relatório Total de Atendimentos x Atendimentos<br /> com Pesquisa de Satisfação',
			"codigo" => 'CCT-2110'
		),
		array(
			'fabrica_no'=> array(24, 25, 52, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_defeito_familia.php',
			'titulo'	=> 'Relatório de Reclamações X Família',
			'descr'		=> 'Relatório de reclamações por família de produtos.',
			"codigo" => 'CCT-2120'
		),
		array(
			'fabrica_no'=> array(24, 25, 52, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_produto_natureza.php',
			'titulo'	=> 'Relatório de Produtos X Natureza',
			'descr'		=> 'Relatório de natureza por produtos.',
			"codigo" => 'CCT-2130'
		),
		array(
			'fabrica_no'=> array_merge(array(25, 52, 95), $fabricas_contrato_lite),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_produto.php',
			'titulo'	=> 'Relatório de Atendimento por produto',
			'descr'		=> 'Relatório de atendimento por produtos',
			"codigo" => 'CCT-2140'
		),
		array(
			'fabrica_no'=> array_merge(array(25, 95), $fabricas_contrato_lite),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_interacoes.php',
			'titulo'	=> 'Relatório maior tempo entre interações',
			'descr'		=> 'Relatório que exibe o maior periodo sem interações<BR> com o consumidor.',
			"codigo" => 'CCT-2150'
		),
		array(
			'fabrica_no'=> array_merge(array(25, 95), $fabricas_contrato_lite),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_natureza.php',
			'titulo'	=> 'Relatório de Natureza de Chamado',
			'descr'		=> 'Relatório que exibe a quantidade de atendimento<BR> por Natureza.',
			"codigo" => 'CCT-2160'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_indicacao_posto.php',
			'titulo'	=> 'Relatório de Indicação de Posto',
			'descr'		=> 'Relatório que exibe a quantidade de Indicação de Posto.',
			"codigo" => 'CCT-2170'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_historico_csv.php',
			'titulo'	=> 'Histórico do Call-Center',
			'descr'		=> 'Relatório com atendimentos e histórico, em formato texto.',
			"codigo" => 'CCT-2180'
		),
		array(
			'disabled'  => true, //HD 684395
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'call_center_relatorio_posto_indicacao_suggar.php',
			'titulo'	=> 'Relatório de Indicação de Posto',
			'descr'		=> 'Relatório que exibe a quantidade de Indicação de Posto.',
			"codigo" => 'CCT-2190'
		),
		array(
			'fabrica_no'=> array_merge(array(25, 95), $fabricas_contrato_lite),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_atendente.php',
			'titulo'	=> 'Relatório por Atendentes',
			'descr'		=> 'Relatório que exibe a quantidade de atendimentos por atendente',
			"codigo" => 'CCT-2200'
		),
		array(
			'fabrica'	=> array(80),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_atendimento_procon.php',
			'titulo'	=> 'Relatório Procon',
			'descr'		=> 'Relatório dos atendimentos de Procon.',
			"codigo" => 'CCT-2210'
		),
		array(
			'fabrica_no'=> array(25, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_mailing.php',
			'titulo'	=> 'Relatório de Mailing',
			'descr'		=> 'Relatório que exibe nome e e-mail dos consumidores cadastrados no atendimento do SAC',
			"codigo" => 'CCT-2220'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_advertencia_bo.php',
			'titulo'	=> 'Relatório de advertência / boletim de ocorrência',
			'descr'		=> 'Relatório de advertência e/ou boletim de ocorrência.',
			"codigo" => "?????????"
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_atendimento_familia.php',
			'titulo'		=> 'Relatório de Atendimento por Família',
			'descr'		=> 'Relatório de Atendimento por Família',
			"codigo" => 'CCT-2230'
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pesquisas_chamado.php',
			'titulo'		=> 'Relatório de Pesquisas em Atendimentos',
			'descr'		=> 'Relatório das Pesquisas que foram feitas com os Clientes através de Atendimentos.',
			"codigo" => 'CCT-2240'
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pesquisas_chamado_new.php',
			'titulo'		=> 'Novo Relatório de Pesquisas em Atendimentos',
			'descr'		=> 'Novo Relatório das Pesquisas que foram feitas com os Clientes através de Atendimentos.',
			"codigo" => 'CCT-2250'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_mailing_os.php',
			'titulo'	=> 'Relatório de Mailing - OS',
			'descr'		=> 'Relatório que exibe nome e e-mail dos consumidores de OSs abertas',
			"codigo" => 'CCT-2260'
		),
		array(
			'fabrica'	=> array(51),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_coleta_postagem.php',
			'titulo'	=> 'Relatório de OSs Troca de Produto',
			'descr'		=> 'Relatório que exibe as OS de troca com Nº de Coleta/Postagem',
			"codigo" => 'CCT-2270'
		),
		array(
			'fabrica'	=> array(51),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_perfil_consumidor.php',
			'titulo'	=> 'Relatório de Perfil do Consumidor',
			'descr'		=> 'elatório baseado na Pesquisa sobre Perfil do Consumidor',
			"codigo" => 'CCT-2280'
		),
		array(
			'fabrica'	=> array(72),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_nf_troca.php',
			'titulo'	=> 'Relatório de OS por status da nota',
			'descr'		=> 'Relatório que exibe as OS por status da nota',
			"codigo" => 'CCT-2290'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_posto_atualizacao.php',
			'titulo'	=> 'Relatório de Atualização de Postos',
			'descr'		=> 'Relatório com relação de postos com dados cadastrais Atualizados',
			"codigo" => 'CCT-2300'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_estatisticas.php',
			'titulo'	=> 'Estatisticas de Callcenter',
			'descr'		=> 'Estatisticas com visão geral de atendimentos',
			"codigo" => 'CCT-2310'
		),
		array(
			'fabrica'	=> array(59),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_troca.php',
			'titulo'	=> 'Call-Center Ressarcimento/SEDEX Reverso',
			'descr'		=> 'Chamados de Ressarcimento/SEDEX Reverso',
			"codigo" => 'CCT-2320'
		),
		array(
			'fabrica'	=> array(59),
			'icone'		=> $icone["upload"],
			'link'		=> 'callcenter_backup_parametros.php',
			'titulo'	=> 'Call-Center Backup',
			'descr'		=> 'Gera arquivo de backup em formato <span title="Dados separados por ponto e vírgula (;)">CSV</span> para ser exportado para Access.',
			"codigo" => 'CCT-2330'
		),
		array(
			'fabrica'	=> array(2),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'acompanhamento_consulta.php',
			'titulo'	=> 'Relatório Situação das Assistências',
			'descr'		=> 'Relatório que exibe o histórico de acompanhamento<br>das assistências.',
			"codigo" => 'CCT-2340'
		),
		array(
			'fabrica'	=> array(11),//HD 56947
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_callcenter_at_procon.php',
			'titulo'	=> 'Relatório Classificação Posto',
			'descr'		=> 'Relatório que mostra as classificações dos<br>postos no atendimento(AT/Procon).',
			"codigo" => 'CCT-2350'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_duvidas.php',
			'titulo'	=> 'Relatório Dúvidas',
			'descr'		=> 'Relatório que mostra as as dúvidas <br/> de produtos registradas em chamados.',
			"codigo" => 'CCT-2360'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_motivo_callcenter.php',
			'titulo'	=> 'Relatório Motivo Atendimento',
			'descr'		=> 'Relatório que mostra os motivos <br/> dos atendimentos abertos.',
			"codigo" => 'CCT-2370'
		),
		array(
			'fabrica'	=> array(94),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_chamados_callcenter.php',
			'titulo'	=> 'Relatório Chamados Call-Center',
			'descr'		=> 'Relatório de Chamados do Call-Center.',
			"codigo" => 'CCT-2380'
		),
		array(
			'fabrica'	=> array(115,116),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_callcenter_reclamacao_por_estado.php',
			'titulo'	=> 'Reclamações por estado',
			'descr'		=> 'Histórico de atendimentos por estado.',
			"codigo" => 'CCT-2390'
		),
		array(
			'fabrica_no'=> array(25, 95),
			'link'		=> 'linha_de_separação',
		),
	),

	/**
	 * Seção de ORDENS DE SERVIÇO. GERAL.
	 **/
	'secao3' => array (
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'ORDENS DE SERVIÇO',
			'fabrica_no' => array(25, 95)
		),
		array(
			'fabrica'	=> array(($login_fabrica != 14 or in_array($login_admin, array(260, 261, 262, 263)))),
			'fabrica_no'=> array_merge(array(25, 95), $fabricas_contrato_lite),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_cadastro.php',
			'titulo'	=> 'Cadastra Ordens de Serviço',
			'descr'		=> 'Cadastro de Ordem de Serviços, no modo ADMIN',
			"codigo" => 'CCT-3010'
		),
		array(
			'fabrica'	=> $fabrica_admin_anexaNF,
			'icone'		=> $icone["anexo"],
			'link'		=> 'nota_foto_cadastro.php',
			'titulo'	=> 'Anexa NF às Ordens de Serviço',
			'descr'		=> 'Permite anexar arquivos às Ordens de Serviço',
			"codigo" => 'CCT-3020'
		),
		array(
			'fabrica'	=> $fabrica_relatorio_os_aberto,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta.php',
			'titulo'	=> 'Relatório de Ordens de Serviço em aberto',
			'descr'		=> 'Mostra as Ordens de Serviço que estão em aberto.',
			"codigo" => 'CCT-3030'
		),
		array(
			'fabrica'   => array(20),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'aprova_os_troca.php',
			'titulo'	=> 'Troca de Produto na OS',
			'descr'		=> 'Cadastro da troca de produto na OS',
			"codigo" => 'CCT-3040'
		),
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(3,25,50,81,86,95,114)),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'aprova_km.php',
			'titulo'	=> 'Intervenção de KM',
			'descr'		=> 'OS para aprovação de KM do posto autorizado ao consumidor',
			"codigo" => 'CCT-3050'
		),
		array(
			'fabrica'   => array(3, 25, 81, 95, 114),
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(50, 86)),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_atendimento_domicilio.php',
			'titulo'	=> 'Intervenção de KM',
			'descr'		=> 'OS para aprovação de KM do posto autorizado ao consumidor',
			"codigo" => 'CCT-3060'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(3),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_parametros.php',
			'titulo'	=> 'Consulta ANTIGA',
			'descr'		=> 'Liberado até às 15 horas de hoje. Problemas de performance no site estão relacionados com pesquisas muito extensas.',
			"codigo" => 'CCT-3070'
		),
		array(
			'fabrica_no'=> array(25, 95),
			'icone'		=> $icone["consulta"],
			'link'		=> iif(($login_fabrica == 1),
			'os_consumidor_consulta.php',
			'os_consulta_lite.php'),
			'titulo'	=> 'Consulta Ordens de Serviço',
			'descr'		=> 'Consulta OS Lançadas',
			"codigo" => 'CCT-3080'
		),
		array(
			'fabrica'	=> array(7, 45),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_fechamento.php',
			'titulo'	=> 'Fechamento de Ordem de Serviço',
			'descr'		=> 'Fechamento de Ordem de Serviço',
			"codigo" => 'CCT-3090'
		),
		array(
			'fabrica_no'=> array(25, 95),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_parametros_excluida.php',
			'titulo'	=> 'Consulta OS Excluída',
			'descr'		=> 'Consulta Ordens de Serviço excluídas do sistema',
			"codigo" => 'CCT-3100'
		),
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(14, 25, 86, 95)),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_consulta_procon.php',
			'titulo'	=> 'Consulta OS Procon',
			'descr'		=> 'Consulta Ordens de Serviço do Procon',
			"codigo" => 'CCT-3110'
		),
		array(
			'fabrica'	=> array(35),
			'icone'		=> $icone["computador"],
			'link'		=> 'produto_troca_lote.php',
			'titulo'	=> 'Troca de Produtos Criticos em Lote',
			'descr'		=> 'Troca de produto de OS de produtos críticos',
			"codigo" => 'CCT-3120'
		),
		array(
			'fabrica'	=> $verifica_ressarcimento_troca,
			'icone'		=> $icone["consulta"],
			'link'		=> 'consulta_os_troca_ressarcimento.php',
			'titulo'	=> 'Consulta OS - Troca em Lote',
			'descr'		=> 'Consulta Ordens de Serviço - Troca em Lote',
			"codigo" => 'CCT-3130'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_os_cortesia.php',
			'titulo'	=> 'Aprova OS de Cortesia',
			'descr'		=> 'Aprovação das OS de Cortesia pelos Promotores',
			"codigo" => 'CCT-3140'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_troca_os.php',
			'titulo'	=> 'Aprova OS de Troca',
			'descr'		=> 'Aprovação das OS de Troca pelos Promotores',
			"codigo" => 'CCT-3150'
		),
		array(
			'fabrica'	=> (((in_array($login_fabrica,array(2,3,6,11,25,45,51,14,52,19,85,80)) or $login_fabrica > 87) or in_array($login_fabrica,$fabricas_contrato_lite))),
			'fabrica_no'=> array(114), // HD 907550, Bestway não está, Comimex tb não
			'icone'		=> $icone["computador"],
			'link'		=> 'os_intervencao.php',
			'titulo'	=> 'OS com Intervenção Técnica',
			'descr'		=> 'OSs com intervenção técnica da fábrica. Autoriza ou cancela o pedido de peças do posto ou efetua o reparo na fábrica.',
			"codigo" => 'CCT-3160'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_intervencao_juridica.php',
			'titulo'	=> 'Intervenção de OS Bloqueada',
			'descr'		=> 'Intervenção de OS Bloqueada (Jurídica)',
			"codigo" => 'CCT-3170'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_intervencao_sap.php',
			'titulo'	=> 'OS com Intervenção Técnica Garantia',
			'descr'		=> 'OSs com intervenção técnica para peças bloqueadas em garantia. Autoriza ou cancela o pedido de peças do posto.',
			"codigo" => 'CCT-3180'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_intervencao_sap.php',
			'titulo'	=> 'OS com Intervenção SAP',
			'descr'		=> 'OSs com intervenção do SAP. Autoriza ou cancela o pedido de peças do posto ou efetua o reparo na fábrica.',
			"codigo" => 'CCT-3190'
		),
		array(
			'fabrica'	=> array(3), /* 35521 69916 */
			'icone'		=> $icone["computador"],
			'link'		=> 'os_intervencao_carteira.php',
			'titulo'	=> 'OS com Intervenção de Carteira',
			'descr'		=> 'OSs com intervenção de Carteira. Autoriza ou cancela o pedido de peças do posto / Troca ou Alteração da OS',
			"codigo" => 'CCT-3200'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'cancela_pre_os.php',
			'titulo'	=> 'Pré-OS Callcenter',
			'descr'		=> 'Pré-OS cadastrado no Callcenter. Consulta e cancela Pré-OS',
			"codigo" => 'CCT-3210'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_consulta_lite_off_britania.php',
			'titulo'	=> 'Altera OS off-line e Nota Fiscal',
			'descr'		=> 'Alteração da OS off-line e número da nota fiscal nas OSs',
			"codigo" => 'CCT-3220'
		),
		array(
			'fabrica'	=> array(1,11),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_intervencao_suprimentos.php',
			'titulo'	=> 'OS com Intervenção Suprimentos',
			'descr'		=> 'OSs com intervenção de Suprimentos. Autoriza ou cancela o pedido de peças do posto.',
			"codigo" => 'CCT-3230'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["computador"],
			'link'		=> 'configuracoes.php',
			'titulo'	=> 'E-mail do DAT (TESTE)',
			'descr'		=> 'Configuração do e-mail do DAT',
			"codigo" => 'CCT-3240'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_interacao_pendente.php',
			'titulo'	=> 'OSs Pendentes (TESTE)',
			'descr'		=> 'Relatório das OSs pendentes para o fabricante',
			"codigo" => 'CCT-3250'
		),
		array(
			'fabrica'	=> array(19),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_consulta_sac.php',
			'titulo'	=> 'Consulta OS SAC',
			'descr'		=> 'Consulta Ordens de Servido do SAC',
			"codigo" => 'CCT-3260'
		),
		array(
			'fabrica'	=> array(19),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'defeito_os_parametros.php',
			'titulo'	=> 'Relatório de Ordens de Serviço',
			'descr'		=> 'Relatório de Ordens de Serviço lançadas no sistema.',
			"codigo" => 'CCT-3270'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_cortesia_cadastro.php',
			'titulo'	=> 'Cadastro Cortesia Ordens de Serviço',
			'descr'		=> 'Cadastro de Cortesia de Ordem de Serviços, no modo ADMIN',
			"codigo" => 'CCT-3280'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_cortesia_parametros.php',
			'titulo'	=> 'Consulta Cortesia Ordens de Serviço',
			'descr'		=> 'Consulta OS Cortesia Lançadas',
			"codigo" => 'CCT-3290'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_cadastro_troca_black.php',
			'titulo'	=> 'Cadastro OS Troca de Consumidor',
			'descr'		=> 'Cadastro de Troca interna p/ Consumidores (garantia/faturada ou cortesia)',
			"codigo" => 'CCT-3300'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_revenda_troca.php',
			'titulo'	=> 'Cadastro OS Troca de Revenda',
			'descr'		=> 'Cadastro de Troca interna p/ Revendas (garantia/faturada ou cortesia)',
			"codigo" => 'CCT-3310'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_troca.php',
			'titulo'	=> 'Relatório OS Troca',
			'descr'		=> 'Relatório de Ordem de Serviço de Troca.',
			"codigo" => 'CCT-3320'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_cortesia.php',
			'titulo'	=> 'Relatório de Cortesia OS',
			'descr'		=> 'Relatório de OS Cortesia em determinado mês.',
			"codigo" => 'CCT-3330'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_revenda_cortesia.php',
			'titulo'	=> 'Cadastro Cortesia OS de Revenda',
			'descr'		=> 'Cadastro de Cortesia de OS de Revenda, no modo ADMIN',
			"codigo" => 'CCT-3340'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_cadastro_metais_sanitario_cortesia.php',
			'titulo'	=> 'Cadastro Cortesia OS de Metais Sanitários',
			'descr'		=> 'Cadastro de Cortesia de OS de Metais Sanitários, no modo ADMIN',
			"codigo" => 'CCT-3350'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_relatorio_aberta.php',
			'titulo'	=> 'Consulta OS Aberta',
			'descr'		=> 'Consulta OS aberta a mais de 10 dias',
			"codigo" => 'CCT-3360'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_fechamento.php',
			'titulo'	=> 'Fechamento de Ordem de Serviço',
			'descr'		=> 'Fechamento das Ordens de Serviços',
			"codigo" => 'CCT-3370'
		),
		array(
			'fabrica'	=> $fabricas_contrato_lite,
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_revenda_parametros.php',
			'titulo'	=> 'Consulta OS - REVENDA',
			'descr'		=> 'Consulta OS Revenda Lançadas',
			"codigo" => 'CCT-3380'
		),
		// Telas específicas da Filizola
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_manutencao.php',
			'titulo'	=> 'Cadastrar OS de Manutenção',
			'descr'		=> 'Lançamento de OS de Manutenção, com vários equipamentos por OS.',
			"codigo" => 'CCT-3390'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_manutencao_consulta_lite.php',
			'titulo'	=> 'Consulta OS de Manutenção',
			'descr'		=> 'Consulta OS de Manutenção lançadas',
			"codigo" => 'CCT-3400'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_filizola_relatorio.php',
			'titulo'	=> 'Faturamento - Valores da OS',
			'descr'		=> 'Consulta as OS com valores',
			"codigo" => 'CCT-3410'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'lote_filizola.php',
			'titulo'	=> 'Lotes de OS',
			'descr'		=> 'Lançamento de Lotes de OS',
			"codigo" => 'CCT-3420'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["computador"],
			'link'		=> 'lote_conferencia_filizola.php',
			'titulo'	=> 'Conferência de Lote',
			'descr'		=> 'Realiza a conferência da capa de Lote.',
			"codigo" => 'CCT-3430'
		),
		'link' => 'linha_de_separação'
	),

	/**
	 * Seção de ORDENS DE SERVIÇO. GERAL.
	 **/
	'secao4' => array (
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'REVENDAS - ORDENS DE SERVIÇO',
			'fabrica_no' => array_merge(array(7, 14, 25, 95), $fabricas_contrato_lite)
		),
		array(
			'fabrica_no'=> array(1,15),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_revenda.php',
			'titulo'	=> 'Cadastra OS - REVENDA',
			'descr'		=> 'Cadastro de Ordem de Serviço de revenda',
			"codigo" => 'CCT-4010'
		),
		array(
			'fabrica'=> array(1),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_revenda_blackedecker.php',
			'titulo'	=> 'Cadastra OS - REVENDA',
			'descr'		=> 'Cadastro de Ordem de Serviço de revenda',
			"codigo" => 'CCT-4020'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_revenda_latina.php',
			'titulo'	=> 'Cadastra OS - REVENDA',
			'descr'		=> 'Cadastro de Ordem de Serviço de revenda',
			"codigo" => 'CCT-4030'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_revenda_parametros.php',
			'titulo'	=> 'Consulta OS - REVENDA',
			'descr'		=> 'Consulta OS Revenda Lançadas',
			"codigo" => 'CCT-4040'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_metais_consulta_lite.php',
			'titulo'	=> 'Consulta OS - Metais Sanitários',
			'descr'		=> 'Consulta OS Metais Sanitários',
			"codigo" => 'CCT-4050'
		),
		array(
			'fabrica'	=> $usa_sistema_de_revenda,
			'icone'		=> $icone["computador"],
			'link'		=> 'revenda_inicial.php',
			'titulo'	=> 'SISTEMA DE REVENDA',
			'descr'		=> 'Sistema para controle de Revendas',
			"codigo" => 'CCT-4060'
		),
		'link' => 'linha_de_separação'
	),

	/**
	 * Seção ATENDIMENTO TÉCNICO - Apenas LENOXX
	 **/
	'secao5' => array (
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'ATENDIMENTO TÉCNICO',
			'fabrica' => array(11)
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'atendimento_tecnico_cadastra.php',
			'titulo'	=> 'Cadastra Atendimento Técnico',
			'descr'		=> 'Cadastro de Atendimento Técnico',
			"codigo" => 'CCT-5010'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'atendimento_tecnico_consulta.php',
			'titulo'	=> 'Consulta Atendimento Técnico',
			'descr'		=> 'Consulta Atendimento Técnico',
			"codigo" => 'CCT-5020'
		),
		'link' => 'linha_de_separação'
	),

	/**
	 * Seção SEDEX - Apenas B&D (e HBTech, mas está inativa)
	 **/
	'secao6' => array (
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'SEDEX - ORDENS DE SERVIÇO',
			'fabrica' => array(1, 25)
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'sedex_cadastro.php',
			'titulo'	=> 'Cadastra OS SEDEX',
			'descr'		=> 'Cadastro de Ordem de Serviços de SEDEX',
			"codigo" => 'CCT-6010'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'sedex_parametros.php',
			'titulo'	=> 'Consulta OS SEDEX',
			'descr'		=> 'Consulta OS Sedex Lançadas',
			"codigo" => 'CCT-6020'
		),
		'link' => 'linha_de_separação'
	),

	/**
	 * Seção de PEDIDOS - GERAL
	 **/
	'secao7' => array (
		'secao' => array(
			'link'		=> '#',
			'titulo'    => 'PEDIDOS DE PEÇAS' . iif(($login_fabrica== 1),"/PRODUTOS"),
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["computador"],
			'link'		=> 'pedido_altera_permissao.php',
			'titulo'	=> 'Permissão de Cadastro de Pedido',
			'descr'		=> 'Permite selecionar o admin que poderá fazer exclusão no pedido.',
			"codigo" => 'CCT-7010'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'pedido_cadastro_altera.php',
			'titulo'	=> 'Cadastro de Pedidos',
			'descr'		=> 'Cadastra pedidos de peças',
			"codigo" => 'CCT-7020'
		),
		array(
			'disabled'	=> ($login_fabrica == 1 and !in_array($login_admin,array(112,232,245))),
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(11,14,43,66)),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'pedido_cadastro.php',
			'titulo'	=> 'Cadastro de Pedidos',
			'descr'		=> 'Cadastra pedidos de peças',
			"codigo" => 'CCT-7030'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'pedido_cadastro_blackedecker.php',
			'titulo'	=> 'Cadastro de Pedidos (em TESTE)',
			'descr'		=> 'Cadastra pedidos de peças (em TESTE)',
			"codigo" => 'CCT-7040'
		),
		array(
			'fabrica'	=> array(3,80),
			'icone'		=> $icone["consulta"],
			'link'		=> 'nf_relacao.php',
			'titulo'	=> 'Consulta de Notas Fiscais',
			'descr'		=> 'Listar as Notas Fiscais dos Postos Autorizados',
			"codigo" => 'CCT-7050'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["computador"],
			'link'		=> 'pedido_bloqueio.php',
			'titulo'	=> 'Personalizar tela de pedido',
			'descr'		=> 'Bloqueia o site para os postos não fazerem pedidos por um período. Opção para cadastrar período fiscal. Opção para cadastrar período de pedido de promoção.',
			"codigo" => 'CCT-7060'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'pedido_parametros.php',
			'titulo'	=> 'Consulta Pedidos de Peças'.iif(($login_fabrica==1),'/Produtos'),
			'descr'		=> 'Consulta pedidos efetuados por postos autorizados.',
			"codigo" => 'CCT-7070'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["consulta"],
			'link'		=> 'callcenter_relatorio_pedido.php',
			'titulo'	=> 'Consulta Pedidos Pendentes'.iif(($login_fabrica==1),'/Produtos'),
			'descr'		=> 'Consulta pedidos em aberto.',
			"codigo" => 'CCT-7080'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["consulta"],
			'link'		=> 'callcenter_relatorio_pedido_peca.php',
			'titulo'	=> 'Consulta Pedidos Pendentes Detalhado'.iif(($login_fabrica==1),'/Produtos'),
			'descr'		=> 'Consulta pedidos em aberto listando as peças.',
			"codigo" => 'CCT-7090'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["upload"],
			'link'		=> 'pedido_nao_importado.php',
			'titulo'	=> 'Pedidos não importados',
			'descr'		=> 'Permite o envio de um arquivo contendo os pedidos que não foram importados por alguma inconsistência, fazendo com que eles sejam marcados como "não-importados" permitindo sua alteração.',
			"codigo" => 'CCT-7100'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'pedido_relatorio.php',
			'titulo'	=> 'Pedidos da Loja Virtual',
			'descr'		=> 'Este relatório exibe as informações dos pedidos feito na loja virtual e os admins responsáveis.',
			"codigo" => 'CCT-7110'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'pedido_relatorio_shop.php',
			'titulo'	=> 'Pedidos da AT-SHOP',
			'descr'		=> 'Este relatório exibe as informações dos pedidos feito na AT-SHOP',
			"codigo" => 'CCT-7120'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'lv_inicial.php',
			'titulo'	=> 'Criar Pedido da Loja Virtual',
			'descr'		=> 'Permite que um admin crie um pedido para o posto na Loja Virtual, sendo responsável pelo mesmo.',
			"codigo" => 'CCT-7130'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'peca_loja_virtual.php',
			'titulo'	=> 'Peças da loja virtual',
			'descr'		=> 'Relatório de peças da loja virtual disponibiliza a peça, quantidade, valor, e Obs.',
			"codigo" => 'CCT-7140'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["consulta"],
			'link'		=> 'pedido_cancelado_consulta.php',
			'titulo'	=> 'Consulta Pedidos Cancelados',
			'descr'		=> 'Consulta peças canceladas automaticamente em pedidos, devido ao fechamento da Ordem de Serviço antes do faturamento das peças.',
			"codigo" => 'CCT-7150'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pedidos_filizola.php',
			'titulo'	=> 'Relatório de Pedidos por OS',
			'descr'		=> 'Relatório de pedidos referentes a OS de um determinado periodo, com valor de peças, mão-de-obra e mais.',
			"codigo" => 'CCT-7160'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["consulta"],
			'link'		=> 'pedido_parametros_blackedecker_acessorio.php',
			'titulo'	=> 'Consulta Pedidos de Acessórios',
			'descr'		=> 'Consulta pedidos de Acessórios efetuados por PA autorizados.',
			"codigo" => 'CCT-7170'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(1),
			'icone'		=> $icone["upload"],
			'link'		=> 'faturamento_importa_blackedecker_new.php',
			'titulo'	=> 'Importar Faturamento',
			'descr'		=> 'Importação dos arquivos de faturamento (retorno).',
			"codigo" => 'CCT-7180'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["upload"],
			'link'		=> 'faturamento_importa_estoque.php',
			'titulo'	=> 'Importar Estoque',
			'descr'		=> 'Importação dos arquivos de peças faturadas. Faturamento<br /> das peças de ESTOQUE.',
			"codigo" => 'CCT-7190'
		),
		array(
			'disabled'	=> !$fabrica_fatura_manualmente,
			'icone'		=> $icone["computador"],
			'link'		=> 'pedido_peca_fatura_manual_consulta.php',
			'titulo'	=> 'Faturar Pedido Manualmente',
			'descr'		=> 'Faturamento de pedidos com peças marcadas como<br> Faturar Manualmente',
			"codigo" => 'CCT-7200'
		),
		array(
			'disabled'	=> !$fabrica_fatura_manualmente,
			'icone'		=> $icone["upload"],
			'link'		=> 'pedido_peca_fatura_manual_exportar_consulta.php',
			'titulo'	=> 'Exportar Pedido Manualmente',
			'descr'		=> 'Exportacao de pedidos com peças marcadas como <br>Faturar Manualmente',
			"codigo" => 'CCT-7210'
		),
		array(
			'fabrica'	=> array(10),
			'icone'		=> $icone["computador"],
			'link'		=> '#',
			'titulo'	=> 'Pendência de Peças',
			'descr'		=> '',
			"codigo" => 'CCT-7220'
		),
		'link' => 'linha_de_separação'
	),

	/**
	 * Seção PEÇAS - Apenas INTELBRAS
	 **/
	'secao8' => array (
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'INFORMAÇÕES SOBRE PEÇAS',
			'fabrica' => array(14)
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["consulta"],
			'link'		=> 'peca_consulta_dados.php',
			'titulo'	=> 'Dados Cadastrais da Peça',
			'descr'		=> 'Consulta todos os dados cadastrais da peça.',
			"codigo" => "CAD-5495"
		),
		'link' => 'linha_de_separação'
	),

	/**
	 * Seção DIVERSOS - Menos INTELBRAS
	 **/
	'secao9' => array (
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'DIVERSOS',
			'fabrica_no' => array(14)
		),
		array(
			'fabrica_no'=> array(2),
			'icone'		=> $icone["acesso"],
			'link'		=> 'posto_login.php',
			'titulo'	=> 'Logar como Posto',
			'descr'		=> 'Acesse o sistema como se fosse o Posto Autorizado',
			"codigo" => 'CCT-9010'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'posto_consulta.php',
			'titulo'	=> 'Consulta Postos',
			'descr'		=> 'Consulta cadastro de postos autorizados.',
			"codigo" => 'CCT-9020'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_tecnico_posto.php',
			'titulo'	=> 'Relação de Técnico Posto',
			'descr'		=> 'Relação dos técnicos cadastrados pelo posto',
			"codigo" => 'CCT-9030'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["consulta"],
			'link'		=> 'posto_consulta_pais.php',
			'titulo'	=> 'Consulta Postos por País',
			'descr'		=> 'Consulta dos dados de postos da América Latina.',
			"codigo" => 'CCT-9040'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> iif(($login_fabrica == 1),
			'tabela_precos_blackedecker_consulta',
			'preco_consulta.php'),
			'titulo'	=> 'Tabela de Preços',
			'descr'		=> 'Consulta tabela de preços de peças',
			"codigo" => 'CCT-9050'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["upload"],
			'link'		=> 'upload_tabela_preco.php',
			'titulo'	=> 'Importa Tabela de Preços',
			'descr'		=> 'Atualização da Tabela de Preços.',
			"codigo" => 'CCT-9060'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'lbm_consulta.php',
			'titulo'	=> 'Lista Básica',
			'descr'		=> 'Consulta lista básica de peças por produto.',
			"codigo" => 'CCT-9070'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'linha_consulta.php',
			'titulo'	=> 'Linhas de produtos',
			'descr'		=> 'Consulta as linhas de produtos',
			"codigo" => 'CCT-9080'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'produto_consulta.php',
			'titulo'	=> 'Produtos',
			'descr'		=> 'Consulta os produtos cadastrados.',
			"codigo" => 'CCT-9090'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'depara_consulta.php',
			'titulo'	=> 'DE&ndash;&gt;PARA',
			'descr'		=> 'Consulta PEÇAS com DE&ndash;&gt;PARA',
			"codigo" => 'CCT-9100'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'peca_fora_linha_consulta.php',
			'titulo'	=> 'Peças fora de linha',
			'descr'		=> 'Consulta as PEÇAS que estão fora de linha.',
			"codigo" => 'CCT-9110'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'comunicado_produto_consulta.php',
			'titulo'	=> 'Vista Explodida e Comunicados',
			'TITLEattrs'=> $com_style,
			'descr'		=> 'Consulta vista explodida, diagramas, esquemas e comunicados.',
			"codigo" => 'CCT-9120'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'peca_consulta_dados.php',
			'titulo'	=> 'Dados Cadastrais da Peça',
			'descr'		=> 'Consulta todos os dados cadastrais da peça.',
			"codigo" => 'CCT-9130'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_sem_pedido.php',
			'titulo'	=> 'OS não geraram pedidos',
			'descr'		=> 'Ordens de Serviços que não geraram pedidos de peças.',
			"codigo" => 'CCT-9140'
		),
		array(
			'fabrica'	=> array(80),
			'icone'		=> $icone["consulta"],
			'link'		=> 'relatorio_extrato.php',
			'titulo'	=> 'Extratos de Posto Autorizado',
			'descr'		=> 'Consulta de extrato de posto autorizado.',
			"codigo" => 'CCT-9150'
		),
		array(
			'fabrica'	=> array(81,114),
			'icone'		=> $icone["upload"],
			'link'		=> 'venda_upload.php',
			'titulo'	=> 'Upload de Venda Produto',
			'descr'		=> 'Upload de arquivo de venda de produto.',
			"codigo" => 'CCT-9160'
		),
		array(
			'fabrica'	=> array(40),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_devolucao_obrigatoria.php',
			'titulo'	=> 'Devolução Obrigatória',
			'descr'		=> 'Peças que devem ser devolvidas para a Fábrica constando em Ordens de Serviço.',
			"codigo" => 'CCT-9170'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["consulta"],
			'link'		=> 'pesquisa_suggar.php',
			'titulo'	=> 'Pesquisa Satisfação',
			'descr'		=> 'Pesquisa de Satisfação do Cliente (Controle de qualidade).',
			"codigo" => 'CCT-9180'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["consulta"],
			'link'		=> 'pesquisa_suggar_consulta.php',
			'titulo'	=> 'Consulta Pesquisa Satisfação',
			'descr'		=> 'Resultado da pesquisa de qualidade.',
			"codigo" => 'CCT-9190'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["upload"],
			'link'		=> 'upload_importa_suggar.php',
			'titulo'	=> 'Atualização de Faturamento',
			'descr'		=> 'Envio do arquivo de faturamento de pedidos.',
			"codigo" => 'CCT-9200'
		),
		#HD 159888
		array(
			'fabrica'	=> $fabrica_movimiento_estoque_posto,
			'icone'		=> $icone["consulta"],
			'link'		=> 'estoque_posto_movimento.php',
			'titulo'	=> 'Movimentação Estoque',
			'descr'		=> 'Visualização da movimentação do estoque do posto autorizado.',
			"codigo" => 'CCT-9210'
		),
		array(
			'fabrica'	=> $fabrica_estoque_cfop,
			'icone'		=> $icone["cadastro"],
			'link'		=> 'estoque_cfop.php',
			'titulo'	=> 'Estoque CFOP',
			'descr'		=> 'Tipos de nota (CFOP) que serão utilizadas para alimentar o estoque.',
			"codigo" => 'CCT-9220'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'estoque_minimo.php',
			'titulo'	=> 'Estoque Mínimo',
			'descr'		=> 'Cadastro de Coeficiente de estoque mínimo por estado.',
			"codigo" => 'CCT-9230'
		),
		array(
			'fabrica'	=> array(7,24),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'peca_inventario.php',
			'titulo'	=> 'Inventário de Peças',
			'descr'		=> 'Cadastro do inventário de peças do posto autorizado',
			"codigo" => 'CCT-9240'
		),
		array(
			'fabrica'	=> array(7,10,43,66),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_pedido.php',
			'titulo'	=> 'Aprovação de Pedido',
			'descr'		=> 'Aprovação de Pedidos de Cliente',
			"codigo" => 'CCT-9250'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["upload"],
			'link'		=> 'gera_pedido_cliente.php',
			'titulo'	=> 'Geração de Pedido',
			'descr'		=> 'Geração de Pedidos de Cliente',
			"codigo" => 'CCT-9260'
		),
		array(
			'fabrica'	=> array(25, 50, 51, 59),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_posto_fabrica.php',
			'titulo'	=> 'Relatório de Postos Autorizados',
			'descr'		=> 'Relatório que exibe todos os postos autorizados',
			"codigo" => 'CCT-9270'
		),
		array(
			'fabrica'	=> array(51),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_pendente_gama.php',
			'titulo'	=> 'Relatório de Peças Pendentes',
			'descr'		=> 'Relatório de peças pendentes nas ordens de serviços.',
			"codigo" => 'CCT-9280'
		),
		array(
			'fabrica'	=> array(45),
			'icone'		=> $icone["consulta"],
			'link'		=> 'relatorio_peca_bloqueada.php',
			'titulo'	=> 'Peças Bloqueadas Para Garantia',
			'descr'		=> 'Consulta de Peças Bloqueadas para Garantia.',
			"codigo" => 'CCT-9290'
		),
		array(
			'fabrica'	=> array(2),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_cliente_garantia_estendida.php',
			'titulo'	=> 'Relatório garantia estendida',
			'descr'		=> 'Consulta de clientes que cadastraramm produto para garantia estendida.',
			"codigo" => 'CCT-9300'
		),
		array(
			'disabled'  => true, // MLG - Ainda não entrou em produção, quando entrar, só excluir ou comentar esta linha
			'fabrica'	=> array(1),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'cadastro_advertencia_bo.php',
			'titulo'	=> 'Cadastro de advertência / boletim de ocorrência',
			'descr'		=> 'Cadastro de advertência e/ou boletim de ocorrência.',
			"codigo" => "CCT-9310"
		),
		'link' => 'linha_de_separação'
	),

	/**
	 * Seção RELATÓRIOS CALL-CENTER (¿?)
	 **/
	'secaoA' => array (
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'RELATÓRIOS CALL-CENTER',
			'fabrica_no' => array_merge($fabricas_contrato_lite, array(14, 95))
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_callcenter_reclamacao_por_estado.php',
			'titulo'	=> 'Reclamações por estado',
			'descr'		=> 'Histórico de atendimentos por estado.',
			"codigo" => 'CCT-A010'
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'callcenter_pergunta_cadastro.php',
			'titulo'	=> 'Cadastro de Perguntas do Callcenter',
			'descr'		=> 'Para que as frases padrões do callcenter sejam alteradas.',
			"codigo" => 'CCT-A020'
		),
		array(
			'fabrica'	=> array(3, 6, 11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_intervencao.php',
			'titulo'	=> 'Relatório de Intervenção',
			'descr'		=> 'OS com intervenção da Assistência Técnica da Fábrica / SAP',
			"codigo" => 'CCT-A030'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produto_serie_mascara.php',
			'titulo'	=> 'Relatório de Máscara de Número de Série',
			'descr'		=> 'Relatório de Máscara de Número de Série.',
			"codigo" => 'CCT-A040'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_intervencao_km.php',
			'titulo'	=> 'Relatório de Intervenção de KM',
			'descr'		=> 'OS com intervenção de deslocamento (KM).',
			"codigo" => 'CCT-A050'
		),
		'link' => 'linha_de_separação'
	),

	/**
	 * Seção GERENCIAMENTO DE REVENDAS - Apenas Britânia
	 **/
	'secaoB' => array (
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'GERENCIAMENTO DE REVENDAS',
			'fabrica'    => array(3)
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_revenda_pesquisa.php',
			'titulo'	=> 'Pesquisa de OS Revenda',
			'descr'		=> 'Pesquisa as OS em aberto em uma revenda, pelo seu CNPJ.',
			"codigo" => 'CCT-B010'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_revenda.php',
			'titulo'	=> 'OS em Aberto por Revenda',
			'descr'		=> 'Relatório com Ordens de Serviços em aberto, listando pelas 20 maiores revendas que abriram Ordens de Serviços.',
			"codigo" => 'CCT-B020'
		),
		'link' => 'linha_de_separação'
	),
);

