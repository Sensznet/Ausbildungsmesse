<?php

require_once 'Smarty/Smarty.class.php';

class Impressum {
	public function getDialog() {
		$smarty = new Smarty();
        $smarty->display('Template/impress.tpl');
	}
}
