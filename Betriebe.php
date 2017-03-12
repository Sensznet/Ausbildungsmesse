<?php

require_once 'Smarty/Smarty.class.php';

class Betriebe {
    public function getDialog() {
        $betreibRepository = new BetriebRepository();
        $betriebe = $betreibRepository->findBy([]);
        $smarty = new Smarty();
        $smarty->assign('betriebe', $betriebe);
        $smarty->display('Template/firm.tpl');
    }
}