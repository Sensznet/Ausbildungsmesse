<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DB {
    private $db;
    
    public function __construct() {
        global $db;
        if(is_object($db)) {
            $this->db = $db;
        } else {
            $this->db = new mysqli('localhost', 'root', '', 'ausbildungsmesse');
        }
    }
    
    public function createEntity($objectName,array $values) {
        $sql = sprintf('INSERT INTO %s SET ', $objectName);
        $first = true;
        foreach($values as $key => $value) {
            if($first) {
                $first = false;
            } else {
                $sql .= ', ';
            }
            $sql .= $key . '="' . $value . '"';
        }
        $this->db->query($sql);
    }
    
    public function updateEntity($objectName,array $values, array $bedingungen) {
        $sql = sprintf('UPDATE %s SET ', $objectName);
        $first = true;
        foreach($values as $key => $value) {
            if($first) {
                $first = false;
            } else {
                $sql .= ', ';
            }
            $sql .= $key . '="' . $value . '"';
        }
        $sql .= ' WHERE ';
        foreach($bedingungen as $key => $value) {
            if($first) {
                $first = false;
            } else {
                $sql .= '&& ';
            }
            $sql .= $key . '="' . $value . '"';
        }
        $this->db->query($sql);
    }
    
    public function find($objectName,array $values) {
        $sql = sprintf('SELECT * FROM %s WHERE ', $objectName);
        $first = true;
        foreach($values as $key => $value) {
            if($first) {
                $first = false;
            } else {
                $sql .= '&& ';
            }
            $sql .= $key . '="' . $value . '"';
        }
        $result = $this->db->query($sql);
        $array = [];
        while($obeject = $result->fetch_array()) {
            $array[] = $object;
        }
        return $array;
    }
    
    public function findOne($objectName,array $values) {
        $sql = sprintf('SELECT * FROM %s WHERE ', $objectName);
        $first = true;
        foreach($values as $key => $value) {
            if($first) {
                $first = false;
            } else {
                $sql .= '&& ';
            }
            $sql .= $key . '="' . $value . '"';
        }
        
        $result = $this->db->query($sql);
        return $result->fetch_array();
    }
}