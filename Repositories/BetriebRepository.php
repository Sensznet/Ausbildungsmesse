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
        $array = [];
        $ansprechpartnerRepository = new AnsprechpartnerRepository();
        $TeilnahmeRepository = new TeilnahmeRepository();
        foreach($sqlArrays as $sqlArray) {
            $betrieb = new Betrieb($sqlArray['Name'], $sqlArray['Name'], $sqlArray['Strasse'], $sqlArray['Ort'], $sqlArray['Homepage'], $sqlArray['Plz'], $sqlArray['ID']);
            $betrieb->setAnsprechpartner($ansprechpartnerRepository->findOneBy(['BetriebID' => $betrieb->getID()], $betrieb));
            $betrieb->setTeilnahme($TeilnahmeRepository->findOneBy(['BetriebID' => $betrieb->getID()], $betrieb));
            $array[] = $betrieb;
        }
        return $array;
    }

    /** @return Betrieb */
    public function findOneBy($array){
        $db = new DB();
        $sqlArray = $db->findOne('tblBetrieb', $array);
        $betrieb = new Betrieb($sqlArray['Nr'], $sqlArray['Name'], $sqlArray['Strasse'], $sqlArray['Ort'], $sqlArray['Homepage'], $sqlArray['Plz'], $sqlArray['ID']);
        $ansprechpartnerRepository = new AnsprechpartnerRepository();
        $betrieb->setAnsprechpartner($ansprechpartnerRepository->findOneBy(['BetriebID' => $betrieb->getID()], $betrieb));
        $TeilnahmeRepository = new TeilnahmeRepository();
        $betrieb->setTeilnahme($TeilnahmeRepository->findOneBy(['BetriebID' => $betrieb->getID()], $betrieb));
        return $betrieb;
    }

    public function persist(Betrieb $betrieb) {
        $db = new DB();
        if($betrieb->getID() == null) {
            $db ->createEntity('tblBetrieb',['Nr' => $betrieb->getNr(), 'Strasse' => $betrieb->getStraße(), 'Ort' => $betrieb->getOrt(), 
                'Homepage' => $betrieb->getHomepage(), 'Name' => $betrieb->getName(), 'Plz' => $betrieb->getPlz()]);
        } else {
            $db->updateEntity('tblBetrieb', ['Strasse' => $betrieb->getStraße(), 'Ort' => $betrieb->getOrt(), 'Homepage' => $betrieb->getHomepage(), 
                'Name' => $betrieb->getName(), 'Plz' => $betrieb->getPlz()], ['ID' => $betrieb->getID()]);
        }
    }
}
