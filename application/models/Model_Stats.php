<?php
class Model_Stats extends CI_Model{
    
    
      public function getNbrMedoc(){
        $sql = $this->db->query(" SELECT count(MED_NOMCOMMERCIAL) from medicament");
        return $sql->result();
    }
    public function getQteComposantsDunMedicament(){
        $sql = $this->db->query(" SELECT medicament.MED_NOMCOMMERCIAL,count(CMP_CODE) as qte
                                    from medicament,constituer
                                    where medicament.MED_DEPOTLEGAL = constituer.MED_DEPOTLEGAL
                                    GROUP BY medicament.MED_DEPOTLEGAL");
        return $sql->result();
    }
    
    public function getSumCompMeds(){
         $sql = $this->db->query("  SELECT medicament.MED_NOMCOMMERCIAL,SUM(CST_QTE) as sum
                                    from medicament,constituer
                                    where medicament.MED_DEPOTLEGAL = constituer.MED_DEPOTLEGAL
                                    GROUP BY medicament.MED_DEPOTLEGAL");
        return $sql->result();
    }
    
    public function getNombreMedParPresentation(){
        $sql=$this->db->query("SELECT presentation.PRE_LIBELLE,count(MED_DEPOTLEGAL) as nbMed
                                from presentation,formuler
                                where presentation.PRE_CODE = formuler.PRE_CODE
                                GROUP BY presentation.PRE_LIBELLE");
        return $sql->result();
    }
}