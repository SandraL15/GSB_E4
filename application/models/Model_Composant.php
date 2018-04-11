<?php
class Model_Composant extends CI_Model{
     
    public function getAllComposants(){
        $sql=$this->db->query("SELECT * FROM `composant` ");
        return $sql->result();
    }

    public function insertComposants($data) { 
        $this->db->insert("composant", $data); 
    }
    
    public function getComposantById($code) {
        $this->db->where('CMP_CODE',$code);
        $query = $this->db->get('composant');
        return $query->result();
       
    }
    
   public function modifierComposant($hidden_id, $libelle){
    $this->db->query("UPDATE `composant` SET `CMP_LIBELLE`='".$libelle."' WHERE `composant`.`CMP_CODE` = '".$hidden_id."'");
  
    }   
}