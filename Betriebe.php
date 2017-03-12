<?php

require_once 'Smarty/Smarty.class.php';

class Betriebe {
	public function getDialog() {
		$smarty = new Smarty();
        $smarty->display('Template/firm.tpl');
	}
}