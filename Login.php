<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Smarty/Smarty.class.php';

/**
 * Description of Login
 *
 * @author 14senszst1201
 */
class Login {
    
    /**
     * 
     * @return string
     */
    public function getDialog() {
        $smarty = new Smarty();
        $smarty->display('Template/login.tpl');
    }
    
    /**
     * 
     * @param int $betriebsNr
     */
    public function anmeldung($betriebsNr) {
        if(!isset($_SESSION['betriebsID'])) {
            $betriebRepository = new BetriebRepository();
            $betrieb = $betriebRepository->findOneBy(['Nr' => $betriebsNr]);
            var_dump($betrieb);
            if($betrieb instanceof Betrieb) {
               $_SESSION['betriebsID'] = $betrieb->getID();
            }
        }
        
    }

    public function abmeldung() {
        unset($_SESSION);
    }
}
