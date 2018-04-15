<?php
class Model_Presentation extends CI_Model{
    
    public function GetAllPresentations(){
        $sql=$this->db->query("select *  from presentation");
        return $sql->result();
    }
    
    public function insererPresentation($medicament,$presentation){
           $this->db->query("INSERT INTO formuler (`MED_DEPOTLEGAL`, `PRE_CODE`) values('".$medicament."','".$presentation."')");
    }
    
    public function GetAllPresentationsMedoc($medicament){
         $sql = $this->db->query("SELECT PRE_LIBELLE FROM  formuler, presentation where formuler.PRE_CODE=presentation.PRE_CODE AND MED_DEPOTLEGAL='".$medicament."'");
        return $sql->result();
    }
        public function insertPresentation($data) { 
        $this->db->insert("presentation", $data); 
    }
    
}