<?php
class Ctrl_Composant extends CI_Controller {

	public function index()
	{
       $this->load->model("Model_Composant"); 
       $data["lesComposants"] = $this->Model_Composant->getAllComposants();
       $this->load->view("v_Acceuil",$data);
	}
         public function v_Acceuil(){
            $this->load->view("v_Acceuil");
        }
        public function ajouterComposant(){
            $this->load->model("Model_Composant"); 
            $data['lesComposants']=$this->Model_Composant->getAllComposants();
            $this->load->view('v_ajouterComposant',$data);
        }
        public function form_composant(){
          if($this->form_validation->run()==true)
          {
            $this->ajouterComposant();
          }
          else{
              $this->load->model("Model_Composant");
              $data=array(
                  'CMP_CODE' =>$this->input->post('CMP_CODE'),
                  'CMP_LIBELLE' =>$this->input->post('CMP_LIBELLE'),
                      );
              $this->Model_Composant->insertComposants($data);
              $this->ajouterComposant();
          }  
        }
        public function afficherComposants(){
            $this->load->model("Model_Composant"); 
            $data['lesComposants'] = $this->Model_Composant->getAllComposants();
            $this->load->view('v_listeComposant',$data);
        }
        public function modifierComposant(){
        $this->load->model("Model_Composant");
        $data["lesComposants"] = $this->Model_Composant->getAllComposants();
        $this->load->view("v_ModifierComposant", $data);
        }
 
         public function modifierComposantMod(){
        $this->load->model("Model_Composant");
        $data["lesComposants"] = $this->Model_Composant->getAllComposants();
        $data = array( 
                      'hidden_id'    => $this->input->post('hidden_id'),
                      'CMP_LIBELLE'    => $this->input->post('CMP_LIBELLE')
                        ); 
                      $hidden_id = $data['hidden_id'];
                      $libelle = $data['CMP_LIBELLE'];
        $this->Model_Composant->modifierComposant($hidden_id,$libelle);
        $this->modifierComposant();
        }
        
        public function modComposant(){
            $code = $this->uri->segment(3);
            $this->load->model("Model_Composant");
            $data['unComposant'] = $this->Model_Composant->getComposantById($code);
            $this->load->view("v_ModComposant",$data);
        }
         
        public function ajouterComposantMeds(){
            $this->load->model("Model_Medicament");
            $this->load->model("Model_Composant");
            $data['lesMedicaments'] = $this->Model_Medicament->getAllMedicament();
            $data['lesComposants'] = $this->Model_Composant->getAllComposants();
            $this->load->view('v_AjoutCompoMedoc',$data);
        }
  
        public function insererComposantMedoc(){
            $medicament = $_POST['medicament'];
            $composant = $_POST['composant'];
            $CST_QTE = $_POST['quantite'];
            $this->load->model("Model_Medicament");
            
            $this->Model_Medicament->insertMedocComposants($medicament,$composant,$CST_QTE);
            $this->ajouterComposantMeds();
        }
        public function afficherMedicaments(){
           $this->load->model("Model_Medicament");
           $data['lesMedicaments'] =$this->Model_Medicament->getAllMedicament();   
           $this->load->view('v_CompoMedoc',$data);
        }
        public function afficherComposantMeds(){
            $this->load->model("Model_Medicament");
            $idMedicament = $_GET['idMedicament'];   
            $data["lesComposantDeMedicaments"] = $this->Model_Medicament->getComposantMeds($idMedicament);
            $this->load->view('v_CompsMeds',$data);
        }      
        public function statistique(){
           $this->load->model("Model_Stats");
           $data['lesQteMedCom'] = $this->Model_Stats->getQteComposantsDunMedicament(); 
           $data['lesSumMedCom'] = $this->Model_Stats->getSumCompMeds();
           $data['lesnbrMedPres'] = $this->Model_Stats->getNombreMedParPresentation();
           $data['lenbrMed'] = $this->Model_Stats->getNbrMedoc();
           $this->load->view("v_statistique", $data);
       }
        public function modifierComposantMedoc(){
           $this->load->model("Model_Medicament");
           $this->load->model("Model_Composant");
           $data['lesMedicaments'] =$this->Model_Medicament->getAllMedicament();
           $data['lesComposants'] =$this->Model_Composant->getAllComposants();
           $this->load->view('v_modCompoMedoc',$data);
        }
        public function ModModifierComposantMedoc(){
            $medicament = $_POST['medicament'];
            $composant = $_POST['composant'];
            $CST_QTE = $_POST['quantite'];
            $this->load->model("Model_Medicament");
            $this->load->model("Model_Composant");
            $this->Model_Medicament->modifierMedocComposants($medicament,$composant,$CST_QTE);
            $this->modifierComposantMedoc();
        }
        public function quantiteComposantMedoc(){
           $this->load->model("Model_Medicament");
           $composant = $_POST['composant'];
           $medicament = $_POST['medicament'];
           $data["lesQuantitéCDM"] = $this->Model_Medicament->getQuantitéComposantMeds($medicament,$composant);
           $this->load->view('v_QteCompo',$data);
       }
       public function composantMedoc(){
            $this->load->model("Model_Medicament");
            $medicament = $_POST['medicament'];
            $data["lesComposants"] = $this->Model_Medicament->getComposantMeds($medicament);
            $this->load->view('v_ComposantAjouter',$data);
        }
        public function modifComposantMedoc(){
            $medicament = $_POST['medicament'];
            $composant = $_POST['composant'];
            $CST_QTE = $_POST['quantite'];
            $this->load->model("Model_Medicament");
            $this->load->model("Model_Composant");
            $this->Model_Medicament->modifierMedocComposants($medicament,$composant,$CST_QTE);
            $this->modifierComposantMedoc();
       }
        public function formulationMed(){
           $this->load->model("Model_Presentation");
           $this->load->model("Model_Medicament");
           $data["lesPresentations"] = $this->Model_Presentation->GetAllPresentations();
           $data['lesMedicaments'] =$this->Model_Medicament->getAllMedicament();
           $this->load->view("v_FormulationMedoc",$data);
       }
        public function AjouteFormulationMedoc(){
           $this->load->model("Model_Presentation");
           $this->load->model("Model_Medicament");
           $medicament = $_POST['idMedicament'];
           $presentation = $_POST['idPresentation'];
           $this->Model_Presentation->insererPresentation($medicament,$presentation);
           $this->formulationMed();   
       }
        public function ajouterPresentation(){
           $this->load->model("Model_Presentation");
           $data["lesPresentations"] = $this->Model_Presentation->GetAllPresentations();
           $this->load->view("v_AjoutPresentation",$data);
       }
       
        public function form_presentation(){
          
          if($this->form_validation->run()==true)
          {
            $this->ajouterPresentation();
          }
          else{
              $this->load->model("Model_Presentation");
              $data=array(
                  'PRE_CODE' =>$this->input->post('PRE_CODE'),
                  'PRE_LIBELLE' =>$this->input->post('PRE_LIBELLE'),
                      );
              $this->Model_Presentation->insertPresentation($data);
              $this->ajouterPresentation();
          }  
        }
}