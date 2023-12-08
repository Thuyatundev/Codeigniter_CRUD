<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header.php');
        $this->load->model('EmployeeModel');
        $emp = $this->EmployeeModel->getEmp();
        $this->load->view('frontend/employee.php',['emp'=>$emp]);
        $this->load->view('template/footer.php');
    }

    public function create()
    {
        $this->load->view('template/header.php');
        $this->load->view('frontend/create.php');
        $this->load->view('template/footer.php');
        
    }

    public function store(){
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');

       if ($this->form_validation->run('')) {
        $data = [
            'first_name'=> $this->input->post('first_name'),
            'last_name'=> $this->input->post('last_name'),
            'email'=> $this->input->post('email'),
            'phone'=> $this->input->post('phone')
           
        ];
        $this->load->model('EmployeeModel','emp');
        $this->emp->insertEmployee($data);
       
        redirect(base_url('employee'));
       } else {
        $this->create();
       }  
    }

    public function edit($id){
        
        $this->load->model('EmployeeModel');
        $data['emp'] = $this->EmployeeModel->editEmp($id);
        $this->load->view('template/header.php');
        $this->load->view('frontend/edit.php',$data);
        $this->load->view('template/footer.php');
    }

    public function  update($id) {
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');

       if ($this->form_validation->run('')) {
        $data = [
            'first_name'=> $this->input->post('first_name'),
            'last_name'=> $this->input->post('last_name'),
            'email'=> $this->input->post('email'),
            'phone'=> $this->input->post('phone')
           
        ];
        $this->load->model('EmployeeModel','emp');
        $this->emp->updateEmp($id,$data);
       
        redirect(base_url('employee'));
       } else {
        $this->edit($id);
       }  
    }

    public function  delete($id) {
        $this->load->model('EmployeeModel');
        $this->EmployeeModel->deleteEmp($id);
        redirect(base_url('employee'));
    }
}