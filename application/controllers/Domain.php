<?php 

class Domain extends CI_Controller {
   public function __construct(){
      parent::__construct();
      $this->load->model('Domain_model');
      $this->load->library('form_validation');
      $this->load->library('Templates');
   }

   public function index(){
      $data['title'] = 'Your Domain';
      $data['domain'] = $this->Domain_model->getAll();
      $this->templates->display('domain/index', $data);
   }

   public function add(){
      $data['title'] = 'Add New Domain';

      $this->form_validation->set_rules('nama_domain', 'Name Domain', 'required');
      
      
      if ($this->form_validation->run() == FALSE) {
          $this->templates->display('domain/add', $data);
      } else {
         $keyword = $this->input->post('nama_domain', true);
         $checkvalidation = $this->Domain_model->duplicatedDomain($keyword);
            if ($checkvalidation == TRUE) {
               $this->Domain_model->insertDomain();
               $this->session->set_flashdata('flash', "added");
               redirect('domain');
            } else {
               $this->session->set_flashdata('flash', "Domain already taken");
               redirect('domain/add');
            }
         }
   }

   public function edit($id = ''){
      $data['title'] = 'Edit Your Domain';
      $data['domain'] = $this->Domain_model->getById($id);

      $this->form_validation->set_rules('nama_domain', 'Name Domain', 'required');
      
      if ($this->form_validation->run() == FALSE) {
         $this->templates->display('domain/edit', $data);
      } else { 
         $keyword = $this->input->post('nama_domain', true);
         $checkvalidation = $this->Domain_model->duplicatedDomain($keyword);
         if ($checkvalidation == TRUE) {
            $this->Domain_model->editDomain($id);
            $this->session->set_flashdata('flash', "edited");
            redirect('domain');
         } else {
            $this->session->set_flashdata('flash', "Domain already taken");
            redirect('domain/edit/' . $id);
         }
      }
   }

   public function delete($id) {
      $this->Domain_model->deleteDomain($id);
      $this->session->set_flashdata('flash', "deleted");
      redirect('domain');
   }

}