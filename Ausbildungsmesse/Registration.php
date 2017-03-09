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
class Registration {
    
    /**
     * 
     * @return string
     */
    public function getDialog($error) {
        $smarty = new Smarty();
        $smarty ->assign('error',$error);
        $betriebsRepository = new BetriebRepository();
        $betrieb = $betriebsRepository->findOneBy(['ID' => $_SESSION['betriebsID']]);
        $smarty->assign('betrieb', $betrieb);
        $smarty->display('Template/registration.tpl');
    }
    
    public function edit() {
        var_dump($_POST);
       $eMailpattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
       $numberPattern = "/^(\+[0-9]{2,3}|0+[0-9]{2,5}).+[\d\s\/\(\)-]/";
       $error = [];

        if (!preg_match($eMailpattern, $_POST['partneremail'])) {
            $error['partneremail'] = 'Bitte eine gültige E-Mail eingeben.';
        } 
        if(strlen(trim($_POST['name'])) <= 5){
            $error['name'] = 'Bitte einen gültigen Namen eingeben.';
        }
        if((!preg_match($numberPattern, $_POST['partnertel']))){
            $error['partnertel'] = 'Bitte eine gültige Telefonnummer eingeben.';
        }
        return $error;
}
}