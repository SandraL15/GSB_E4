<?php

class Model_Medicament extends CI_Model{
    
    public function getAllMedicament(){
        $sql=$this->db->query("select MED_NOMCOMMERCIAL, MED_DEPOTLEGAL  from medicament");
        return $sql->result();
    }
     public function insertMedocComposants($medicament,$composant,$CST_QTE){
         var_dump($CST_QTE);die;
         $this->db->query("INSERT INTO `constituer` (`MED_DEPOTLEGAL`, `CMP_CODE`, `CST_QTE`) VALUES ('".$medicament."','".$composant."','".$CST_QTE."')");
    }
    public function getComposantMeds($MED_NOMCOMMERCIAL){
        $sql = $this->db->query("SELECT * FROM  constituer, composant where constituer.CMP_CODE=composant.CMP_CODE AND MED_DEPOTLEGAL='".$MED_NOMCOMMERCIAL."'");
        return $sql->result();
    }
      
    public function getQuantitéComposantMeds($medicament,$composant){
        $sql = $this->db->query("SELECT CST_QTE FROM  constituer where  MED_DEPOTLEGAL='".$medicament."' AND CMP_CODE='".$composant."' ");
        return $sql->result();
    }
    
    public function modifierMedicComposants($medicament,$composant,$CST_QTE){
        $this->db->query("UPDATE constituer SET `CST_QTE` = '".$CST_QTE."' WHERE constituer.`MED_DEPOTLEGAL` = '".$medicament."' AND `constituer`.`CMP_CODE` = '".$composant."'");
    }
    
    
}       