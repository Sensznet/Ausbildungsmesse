<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class BetriebRepository {


    public function __construct() {

    }

    public function findBy($array) {
        $db = new DB();
        $sqlArrays = $db->find('tblBetrieb', $array);
        $objects = [];
        foreach($sqlArrays as $sqlArray) {
            $array[] = new Betrieb($sqlArray['Name'], $sqlArray['Strasse'], $sqlArray['Ort'], $sqlArray['Homepage'], null, $sqlArray['ID']);
        }
    }

    public function findOneBy($array){
        $db = new DB();
        $sqlArray = $db->findOne('tblBetrieb', $array);
        $objects = [];
        $betrieb = new Betrieb($sqlArray['Nr'], $sqlArray['Name'], $sqlArray['Strasse'], $sqlArray['Ort'], $sqlArray['Homepage'], null, $sqlArray['ID']);
        
        return $betrieb;
    }

    public function persist(Betrieb $betrieb) {
        if($betrieb->getID() == null) {
            $db ->createEntity('tblBetrieb',['Nr' => $betrieb->getNr(), 'Strasse' => $betrieb->getStraße(), 'Ort' => $betrieb->getOrt(), 'Homepage' => $betrieb->getHomepage(), 'Name' => $betrieb->getName()]);
        } else {
            $db->updateEntity('tblBetrieb', ['Strasse' => $betrieb->getStraße(), 'Ort' => $betrieb->getOrt(), 'Homepage' => $betrieb->getHomepage(), 'Name' => $betrieb->getName()], ['ID' => $betrieb->getID()]);
        }
    }
}
