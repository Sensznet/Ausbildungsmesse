<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AnsprechpartnerRepository {


    public function __construct() {

    }

    public function findBy($array) {
        $db = new DB();
        $sqlArrays = $db->find('tblTeilnahme', ['BetriebID' => $sqlArray['ID']]);
        $array = [];
        foreach($sqlArrays as $sqlArray) {
            $betrieb = $betriebRepository->findOneBy(["ID" => $sqlArray['BetriebID']]);
            $teilnahme = new Teilnahme($betrieb, $sqlArray['Name'], $sqlArray['Telefon'], $sqlArray['Fax'], $sqlArray['Email'], $tei, $sqlArray['ID']);
            $betrieb->setTeilnahme($teilnahme);
            $array[] = $teilnahme;
        }
        return $array;
    }

    public function findOneBy($array){
        $db = new DB();
        $sqlArray = $db->findOne('tblTeilnahme', $array);
        $betriebRepository = new BetriebRepository();
        $betrieb = $betriebRepository->findOneBy(["ID" => $sqlArray['BetriebID']]);
        $teilnahme = new Teilnahme($betrieb, $sqlArray['Name'], $sqlArray['Telefon'], $sqlArray['Fax'], $sqlArray['Email'], $tei, $sqlArray['ID']);
        $betrieb->setTeilnahme($teilnahme);
        return $teilnahme;
    }

    public function persist(Teilnahme $teilnahme) {
        if($betrieb->getID() == null) {
            $db->createEntity('tblTeilnahme', ['BetriebID' => $teilnahme->getBetrieb()->getID(),'Teilnahme' => $teilnahme->getTeilnahme(), 'Flaeche' => $teilnahme->getFlaeche(), 'Raum' => $teilnahme->getRaum(), 'Strom' => $teilnahme->getStrom(),
                                                'Bemerkung' => $teilnahme->getBemerkung()]);
        } else {
            $db->updateEntity('tblTeilnahme', ['BetriebID' => $teilnahme->getBetrieb()->getID(),'Teilnahme' => $teilnahme->getTeilnahme(), 'Flaeche' => $teilnahme->getFlaeche(), 'Raum' => $teilnahme->getRaum(), 'Strom' => $teilnahme->getStrom(),
                                                'Bemerkung' => $teilnahme->getBemerkung()], ["ID" => $teilnahme->getID()]);
        }
    }
}
