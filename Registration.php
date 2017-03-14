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
       $eMailpattern = '/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/';
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
        /** Wenn keine Fehler dann Formular Speichern */
        if(count($error) == 0) {
            /** Speicher Betrieb */
            $betriebsRepository = new BetriebRepository();
            $betrieb = $betriebsRepository->findOneBy(['ID' => $_SESSION['betriebsID']]);
            $betrieb->setName($_POST['name']);
            $betrieb->setOrt($_POST['location']);
            $betrieb->setStraße($_POST['street']);
            $betrieb->setHomepage($_POST['hp']);
            $betrieb->setPlz($_POST['plz']);
            $betriebsRepository->persist($betrieb);
            
            /** Speicher Ansprechpartner */
            if(!is_a($betrieb->getAnsprechpartner(), "Ansprechpartner")) {
                $ansprechpartner = new Ansprechpartner($betrieb, $_POST['partneremail'], $_POST['partnerfax'], $_POST['partnertel'],  
                        $_POST['partnername'], $_POST['partnersurname']);
            } else {
                $ansprechpartner = $betrieb->getAnsprechpartner();
                $ansprechpartner->setEmail($_POST['partneremail']);
                $ansprechpartner->setFax($_POST['partnerfax']);
                $ansprechpartner->setTelefon( $_POST['partnertel']);
                $ansprechpartner->setName($_POST['partnername']);
                $ansprechpartner->setVorname($_POST['partnersurname']);
            }
            $ansprechpartnerRepository = new AnsprechpartnerRepository();
            $ansprechpartnerRepository->persist($ansprechpartner);
            
            /** Speicher Teilnahme */
            if(!is_a($betrieb->getTeilnahme(), "Teilnahme")) {
                $teilnahme = new Teilnahme($betrieb, $_POST['teilnahme'], $_POST['flaeche'], null, $_POST['strom'], $_POST['bemerkung'], $_POST['info']);
            } else {
                $teilnahme = $betrieb->getTeilnahme();
                $teilnahme->setTeilnahme($_POST['teilnahme']);
                $teilnahme->setFlaeche($_POST['flaeche']);
                $teilnahme->setStrom($_POST['strom']);
                $teilnahme->setBemerkung($_POST['bemerkung']);
                $teilnahme->setInfo($_POST['info']);
                $teilnahme->setRaum($_POST['raum']);
            }
            $teilnahmeRepository = new TeilnahmeRepository();
            $teilnahmeRepository->persist($teilnahme);
        }
        return $error;
}
}