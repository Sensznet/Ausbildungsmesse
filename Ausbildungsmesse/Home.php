<?php

require_once 'Smarty/Smarty.class.php';

class Home {
	public function getDialog() {
		$smarty = new Smarty();
        $smarty->display('Template/home.tpl');
	}
}