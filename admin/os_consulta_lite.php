<?php
	include "cabecalho_new.php";
	$icones = "template/images/icons/small/grey/";

?>


<div class="box grid_16" style="opacity: 1;">
	<h2 class="box_head">Parametros de pesquisa</h2>
	<div class="controls">
		<a href="#" class="grabber"></a>
		<a href="#" class="toggle"></a>
	</div>
	<div class="toggle_container">
		<div class="block" style="opacity: 1;">
			<div class="section">
				<form id="frm_consulta_os" method="post">
					<table cellspacing="5" cellpadding="5" style="margin:0 auto;">
						<tbody>
							<tr>
								<td>
									<label for="os">Número OS</label>
									<input id="os" type="text" style="width:100px;" name="os">
								</td>
								<td>
									<label for="serie">Número Série</label>
									<input id="serie" type="text" style="width:100px;" name="serie">
								</td>
								<td>
									<label for="nf_compra">Nf de Compra</label>
									<input id="nf_compra" type="text" style="width:100px;" name="nf_compra">
								</td>
							</tr>
							<tr>
								<td>
									<label for="tipo_os">Tipo OS</label>
									<select id="tipo_os" name="tipo_os">
										<option value="">Todas</option>
										<option value="C">Consumidor</option>
										<option value="R">Revenda</option>
									</select>
								</td>
								<td>
									<label for="status_os">Status OS</label>
									<select id="status_os" name="status_os">
										<option value=""></option>
										<option value="A">Aberta</option>
										<option value="F">Finalizada</option>
									</select>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
			<div class="button_bar clearfix">
				<button class="green text_only has_text">
					<span>Pesquisar</span>
				</button>
			</div>
		</div>
	</div>
</div>

<form class="validate_form" novalidate="novalidate" >
<div class="box grid_16" style="opacity: 1;">
	<h2 class="box_head">Parametros de pesquisa 2</h2>
	<div class="controls">
		<a href="#" class="grabber"></a>
		<a href="#" class="toggle"></a>
	</div>
	<div class="toggle_container">
		<div class="block" style="opacity: 1;">
			<div class="section">
				<table cellspacing="5" cellpadding="5" style="margin:0 auto;">
					<tbody>
						<tr>
							<td>
								<label for="linha">Linha</label>
								<select id="linha" name="linha">
									<option value=""></option>
									<option value="eletrica">Elétrica</option>
									<option value="ope">OPE</option>
								</select>
							</td>
							<td>
								<label for="familia">Familia</label>
								<select id="familia" name="familia">
									<option value=""></option>
									<option value="acessorios">Acessórios</option>
									<option value="bateria">Bateria</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label for="required_data_inicial">Data Inicial</label>
								<input id="required_data_inicial" class="datepicker required text error" type="text" style="width:60px;" name="required_data_inicial" />
								<label class="error" for="required_data_inicial" generated="true">This field is required.</label>
							</td>
							<td>
								<label for="data_final">Data Final</label>
								<input id="data_final" class="datepicker required" type="text" style="width:60px;" name="data_final" />
							</td>
						</tr>
						<tr>
							<td>
								<input id="os_aberto" type="checkbox" name="os_aberto">
								OS Aberta
							</td>
							<td>
								<input id="os_nao_atendida" type="checkbox" name="os_nao_atendida">
								OS não atendida
							</td>
							<td>
								<input id="os_entrega_tecnica" type="checkbox" name="os_entrega_tecnica">
								Entrega Técnica
							</td>
						</tr>
						<tr>
							<td>
								<label for="posto">Posto</label>
								<input id="posto" type="text" style="width:60px;" name="posto">
								<img src="template/images/icons/small/grey/magnifying_glass.png">
							</td>
							<td>
								<label for="nome_posto">Nome do Posto</label>
								<input id="nome_posto" type="text" style="width:200px;" name="nome_posto">
								<img src="template/images/icons/small/grey/magnifying_glass.png">
							</td>
						</tr>
						<tr>
							<td>
								<label for="referencia">Referência Produto</label>
								<input id="referencia" type="text" style="width:60px;" name="referencia">
								<img src="template/images/icons/small/grey/magnifying_glass.png">
							</td>
							<td>
								<label for="descricao">Nome do Produto</label>
								<input id="descricao" type="text" style="width:200px;" name="descricao">
								<img src="template/images/icons/small/grey/magnifying_glass.png">
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="button_bar clearfix">
		<button class="green text_only has_text" type="submit" >
			<span>Pesquisar</span>
		</button>
	</div>
</div>
</form>
