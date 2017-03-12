<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AnsprechpartnerRepository {


    public function __construct() {

    }

    public function findBy($array, $betrieb = null) {
        $db = new DB();
        $betriebRepository = new BetriebRepository();
        $sqlArrays = $db->find('tblansprechpartner', $array);
        $array = [];
        foreach($sqlArrays as $sqlArray) {
            if($betrieb == null) {
                $betrieb = $betriebRepository->findOneBy(["ID" => $sqlArray['BetriebID']]);
            }
            $ansprechpartner = new Ansprechpartner($betrieb, $sqlArray['Email'], $sqlArray['Fax'], $sqlArray['Telefon'], $sqlArray['Name'], $sqlArray['Vorname'], $sqlArray['ID']);
            if($betrieb->getAnsprechpartner() == null) {
                $betrieb->setAnsprechpartner($ansprechpartner);
            }
            $array[] = $ansprechpartner;
        }
        return $array;
    }

    public function findOneBy($array, $betrieb = null){
        $db = new DB();
        $ansprechpartner = null;
        $betriebRepository = new BetriebRepository();
        $sqlArray = $db->findOne('tblansprechpartner', $array);
        if(is_array($sqlArray)) {
            if($betrieb == null) {
            $betrieb = $betriebRepository->findOneBy(["ID" => $sqlArray['BetriebID']]);
            }
            $ansprechpartner = new Ansprechpartner($betrieb, $sqlArray['Email'], $sqlArray['Fax'], $sqlArray['Telefon'], $sqlArray['Name'], $sqlArray['Vorname'], $sqlArray['ID']);
            if($betrieb->getAnsprechpartner() == null) {
                $betrieb->setAnsprechpartner($ansprechpartner);
            }
        }
        return $ansprechpartner;
    }

    public function persist(Ansprechpartner $ansprechpartner) {
         $db = new DB();
        if($ansprechpartner->getID() == null) {
            $db ->createEntity('tblansprechpartner', ['BetriebID' => $ansprechpartner->getBetrieb()->getID(), 'Email' => $ansprechpartner->getEmail(), 
                'Fax' => $ansprechpartner->getFax(), 'Name' => $ansprechpartner->getName(), 'Vorname' => $ansprechpartner->getVorname(), 
                'Telefon' => $ansprechpartner->getTelefon()]);
        } else {
            $db ->updateEntity('tblansprechpartner', ['BetriebID' => $ansprechpartner->getBetrieb()->getID(), 'Email' => $ansprechpartner->getEmail(), 
                'Fax' => $ansprechpartner->getFax(), 'Name' => $ansprechpartner->getName(), 'Vorname' => $ansprechpartner->getVorname(), 
                'Telefon' => $ansprechpartner->getTelefon()], ["ID" => $ansprechpartner->getID()]);
        }
    }
}
