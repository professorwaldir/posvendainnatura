<?php

/**
* menu
* Gerar HTML para os menus do sistema (ADMIN)
 **/
class MenuPosvenda {
	
	private $layout;
	private $_erro;
	private $_fabrica;    
	private $_admin;      
	private $_posto;      
	private $_unico;
	private $abasMenu = array();
	private $secoes   = array();
	private $itens    = array();
	private $subMenu  = array();
	private $HTML;

	static $iconPath = 'template/images/icons/small/grey/';

	function __construct($menu) {

		global $login_fabrica, $login_admin, $login_posto, $login_unico, $login_login;

		try {
			if (!is_array($menu)) {
				if (is_readable($menu)) {
					$menu = include($menu);
				} else {
					$menu = "menus/menu_$menu.php";
					if (is_readable($menu))
						$menu = include($menu);
				}
			}
			$this->abasMenu = $menu;

			$this->layout = $layout;

			if (!$menu)
				throw new Exception("Parâmetros inválidos!");
			
			$this->_fabrica     = $login_fabrica;
			$this->_admin       = $login_admin;
			$this->_posto       = $login_posto;
			$this->_login_unico = $login_login_unico;
		}
		catch(Exception $e) {
			return $e->getMessage();
		}
	}

	public function __get($var) {
		switch ($var) {
		case '_erro':
		case '_fabrica':
		case 'secoes':
		case 'abasMenu': 
		case 'itens':
		case 'HTML':
		case 'subMenu':
			return $this->$var;

		default:
			# Generate an error, throw an exception, or ...
			return null;
		}
	}

	public function __call($f, $p) {
		echo "ERRO: tentando executar método desconhecido '$f()'\n";
	}

	public function __toString() {
		return $this->HTML;
	}

	/**
	 * Devolve um array com os IDs das seções como key e o nome da seção como value
	 * ex.: Array (
	 *     [secao0] => CALL-CENTER
	      [secao1] => INFORMATIVO MENSAL
	 *     [secao2] => CALL-CENTER RELATÓRIOS
	 *     [secao3] => ORDENS DE SERVIÇO
	 * )
	 **/
	public function getGruposMenu(array $myMenu=null) {

		global $login_abrica, $login_admin, $login_posto, $login_unico;

		if (is_null($myMenu))
			$myMenu = $this->abasMenu;

		$secoes = array_keys($myMenu);

		foreach($secoes as $secao) {
			$mySection = $myMenu[$secao]['secao'];

			if ($this->validaItem($mySection)){
				$abasMenu[$secao] = $myMenu[$secao]['secao']['titulo'];
				unset($myMenu[$secao]['secao']);
				$itensMenu[$secao]  = $myMenu[$secao];
			}
		}

		foreach($itensMenu as $idx=>$menuGroup) {

			foreach ($itensMenu[$idx] as $key=>$item) {

				if (!$this->validaItem($item)) {
					unset($itensMenu[$idx][$key]);
				}
			}
		}
		$this->secoes = $abasMenu;
		$this->itens  = $itensMenu;

		return $this;
	}

	public function getDropDown(array $mySubMenu=null) {
		if (is_null($mySubMenu))
			$mySubMenu = $this->abasMenu;

		if (!is_array($mySubMenu))
			throw new Exception("Dados inconsistentes!\n");

		foreach ($mySubMenu as $idx=>$item) {
			//print_r($item);
			if (!is_numeric($idx)) {// Submenu do submenu...

				foreach($item['itens'] as $sidx=>$subitem) {
					if ($this->validaItem($subitem))
						$submenu[$idx]['itens'][] = $subitem;
					//echo "$idx - $sidx - " . $item['submenu'] . chr(10);
				}
				continue;
			} else {

				//pre_echo($this->validaItem($item), "Item $idx");
				if ($this->validaItem($item)) {
					//echo "Submenu $idx OK!\n";
					$submenu[$idx] = $item;
				}
			}
		}

		$this->subMenu = $submenu;

		return $this;
	}

	public function getDropDownHTML() {

		$href = function($link, $descr, $titulo) {
			return "<a href='$link' title='$descr'><span>$titulo</span></a>";
		};

		$subMenu = $this->subMenu;

		if (!is_array($subMenu))
			die();

		foreach($subMenu as $idx=>$item) {
			extract($item);

			if (isCLI and $debug)
				echo "Processando submenu ítem $idx..\n";

			if (isset($itens)) { // A barra de menu tem menu dropdown (todas deveriam... mas tem a Jacto)
				//$html .= "\t<li class='has_dropdown' title='$idx'>" . $href('#', $idx, $idx) .
				//		 "\n\t\t<ul class='dropdown'>";

				if (!is_numeric($idx)) { // O drowpdown tem submenus (accordion)
					$html .= "\t<li class='has_drawer'>" .
							   "<a href='#'><span>$idx</span></a>\n".
							   "\t\t<ul class='drawer'>\n" .
							   "\t\t\t<li>\n";

					foreach($itens as $dropDownSubmenu) {
						extract($dropDownSubmenu, EXTR_PREFIX_ALL, 'sub');
						$html .= str_repeat(chr(9), 4) . $href($sub_link, $sub_descr, $sub_titulo) . chr(10);
					}
					$html .= "\t\t\t</li>\n\t\t</ul>\n\t</li>\n";
				
				} else {
					$html .= "\t<li title='$titulo'>" . $href($link, $descr, $titulo) . "</li>\n";
				}
			} else {
				$html .= "\t<li>" . $href($link, $descr, $titulo) . "</li>\n";
			}
		}

		$this->HTML = $html;

		return $this;

	}

	public function getGruposHTML($id_ativo=0, $formato='ul') {

		$html = "<ul class='nav nav-tabs'>\n";
		foreach($this->secoes as $secaoID=>$titulo) {
			if (count($this->itens[$secaoID]))
				$html .= "\t<li$abaAtiva><a href='#$secaoID' data-toggle='tab'>$titulo</a></li>\n";
		}
		$html .= '</ul>' . chr(10);

		$this->HTML = $html;
		return $this;
	}

	public function getGrupoMenuHTML($secao) {
		if (!is_null ($secao) and !in_array($secao, array_keys($this->secoes))) {
			$this->_erro = "Grupo $secao do menu $layout não encontrado!" ;
			throw new Exception($this->_erro);
		}
/**

<thead><tr><th>Código</th><th>Programa</th><th>Descrição</th></tr></thead>
<tbody>
	<tr>
		<td> <code>blj7A</code> </td>
		<td> <span><a href="#"><h4>Fechamento de Extratos</h4></a></span> /td>
		<td> <p> Fecha o extrato de cada posto, totalizando o que cada um tem a receber de mão-de-obra, suas peças de devolução obrigatória, e demais informações de fechamento.  </p> </td>
	</tr>

**/
		if (is_null($secao)) {

			foreach($this->secoes as $k=>$s) {
				$htmlAll .= $this->getGrupoMenuHTML($k)->HTML;
			}
			$this->HTML = $htmlAll;
			return $this;
		} else {
			$menuSection = $this->itens[$secao];

			$html = "<div class='tab-pane' id='$secao'>\n" .
			        "<table class='table table-striped table-bordered'>\n" . 
					"<colgroup><col class='span1'><col class='span5'><col class='span5'></colgroup>\n" .
					"<thead><tr><th>Código</th><th>Programa</th><th>Descrição</th></tr></thead>\n<tbody>\n";
			foreach ($menuSection as $item) {
				extract($item);
				$html .= "\t<tr>" .
						 "<td><code>$codigo</code></td>" .
						 "<td><span><a href='$link'><h4>$titulo</h4></a></span></td>".
						 "<td><p>$descr</p></td>".
						 "</tr>\n";
			}
			$html .= "</tbody>\n</table>\n</div>\n";

			$this->HTML = $html;
			return $this;
		}
	}
	/**
	 * validaItem
	 * Verifica se o item é válido seguindo as regras do próprio ítem:
	 * disabled, fabrica, fabrica_no, admin, posto...
	 * retorna bool
	 **/
	private function validaItem($menuItem) {

		if (isset($menuItem['disabled']) and $menuItem['disabled']==true)
			return false;

		if (isset($menuItem['fabrica'])) {
			$fabricas_sim = $menuItem['fabrica'];
			if (is_bool($fabricas_sim))
				if ($fabricas_sim === false) 
					return false;

			$ver_fabrica = (is_array($fabricas_sim)) ? $fabricas_sim : array($fabricas_sim);
			if (!in_array($this->_fabrica, $ver_fabrica))
				return false;
		}

		if (isset($menuItem['fabrica_no'])) {
			$fabricas_nao = $menuItem['fabrica_no'];
			if ($fabricas_nao === true)
				return false;

			$ver_fabrica = (is_array($fabricas_nao)) ? $fabricas_nao : array($fabricas_nao);
			if (in_array($this->_fabrica, $ver_fabrica))
				return false;
		}

		if (isset($menuItem['admin'])) {
			if ($menuItem['admin'] === true)
				return false;

			$admins_sim = $menuItem['admin'];
			$ver_admin = (is_array($admins_sim)) ? $admins_sim : array($admins_sim);
			if (in_array($this->_admin, $ver_admin))
				return false;
		}

		if (isset($menuItem['posto'])) {
			if ($menuItem['posto'] === true)
				return false;

			$postos_sim = $menuItem['posto'];
			$ver_posto = (is_array($postos_sim)) ? $postos_sim : array($postos_sim);
			if (in_array($this->_posto, $ver_posto))
				return false;
		}
		return true;
	}
}
