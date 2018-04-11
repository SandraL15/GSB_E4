<?php

class Model_Medicament_Ivan extends CI_Model{
    
    public function getAllMedicament(){
        $sql=$this->db->query("select MED_NOMCOMMERCIAL, MED_DEPOTLEGAL  from medicament");
        return $sql->result();
    }
    
}