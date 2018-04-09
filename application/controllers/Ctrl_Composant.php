<?php
class Ctrl_Composant extends CI_Controller {

	public function index()
	{
       $this->load->model("Model_Composant"); 
       $data["lesComposants"] = $this->Model_Composant->getAllComposants();
       $this->load->view("v_acceuil",$data);
	}
         public function v_acceuil(){
            $this->load->view("v_acceuil");
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
            $data['lesComposants']=$this->Model_Composant->getAllComposants();
            $this->load->view('v_listeComposant',$data);
        }
        public function modifierComposant(){
        $this->load->model("Model_Composant");
        $data["lesComposants"]=$this->Model_Composant->getAllComposants();
        $this->load->view("v_ModifierComposant", $data);
        }
 
         public function modifierComposantMod(){
        $this->load->model("Model_Composant");
        $data["lesComposants"] = $this->Model_Composant->getAllComposants();

         $data = array( 
                      'hidden_id'    => $this->input->post('hidden_id'),
                      'CMP_CODE'    => $this->input->post('CMP_CODE') ,
                      'CMP_LIBELLE'    => $this->input->post('CMP_LIBELLE')
                        ); 
                      $hidden_id = $data['hidden_id'];
                      $code = $data['CMP_CODE'];
                      $libelle = $data['CMP_LIBELLE'];
        
        $this->Model_Composant->modifierComposant($hidden_id,$code,$libelle);
        $data["lesComposants"]=$this->Model_Composant->getAllComposants();
        $this->modifierComposant();
        }
        
        public function modComposant(){
            $code = $this->uri->segment(3);
            $this->load->model("Model_Composant");
            $data["lesComposants"] = $this->Model_Composant->getAllComposants();
            $data['unCode'] = $this->Model_Composant->unCode($code);
            $this->load->view("v_ModComposant",$data);
        }

}