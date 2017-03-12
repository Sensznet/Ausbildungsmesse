<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TeilnahmeRepository {


    public function __construct() {

    }

    public function findBy($array, $betrieb = null) {
        $db = new DB();
        $betriebRepository = new BetriebRepository();
        $sqlArrays = $db->find('tblTeilnahme', $array);
        $array = [];
        foreach($sqlArrays as $sqlArray) {
            if($betrieb == null) {
                $betrieb = $betriebRepository->findOneBy(["ID" => $sqlArray['BetriebID']]);
            }
            $teilnahme = new Teilnahme($betrieb, $sqlArray['Teilnahme'], $sqlArray['Flaeche'], $sqlArray['Raum'], $sqlArray['Strom'], $sqlArray['Bemerkung'], $sqlArray['info'], $sqlArray['ID']);
            if($betrieb->getTeilnahme() == null) {
                $betrieb->setTeilnahme($teilnahme);
            }
            $array[] = $teilnahme;
        }
        return $array;
    }

    public function findOneBy($array, $betrieb = null){
        $db = new DB();
        $teilnahme = null;
        $betriebRepository = new BetriebRepository();
        $sqlArray = $db->findOne('tblTeilnahme', $array);
        if(is_array($sqlArray)) {
            if($betrieb == null) {
            $betrieb = $betriebRepository->findOneBy(["ID" => $sqlArray['BetriebID']]);
            }
            $teilnahme = new Teilnahme($betrieb, $sqlArray['Teilnahme'], $sqlArray['Flaeche'], $sqlArray['Raum'], $sqlArray['Strom'], $sqlArray['Bemerkung'], $sqlArray['info'], $sqlArray['ID']);
            if($betrieb->getTeilnahme() == null) {
                $betrieb->setTeilnahme($teilnahme);
            }
        }
        return $teilnahme;
    }

    public function persist(Teilnahme $teilnahme) {
         $db = new DB();
        if($teilnahme->getID() == null) {
            $db->createEntity('tblTeilnahme', ['BetriebID' => $teilnahme->getBetrieb()->getID(),'Teilnahme' => $teilnahme->getTeilnahme(), 'Flaeche' => $teilnahme->getFlaeche(), 'Raum' => $teilnahme->getRaum(), 'Strom' => $teilnahme->getStrom(),
                                                'Bemerkung' => $teilnahme->getBemerkung(), 'info' => $teilnahme->getInfo()]);
        } else {
            $db->updateEntity('tblTeilnahme', ['BetriebID' => $teilnahme->getBetrieb()->getID(),'Teilnahme' => $teilnahme->getTeilnahme(), 'Flaeche' => $teilnahme->getFlaeche(), 'Raum' => $teilnahme->getRaum(), 'Strom' => $teilnahme->getStrom(),
                                                'Bemerkung' => $teilnahme->getBemerkung(), 'info' => $teilnahme->getInfo()], ["ID" => $teilnahme->getID()]);
        }
    }
}
