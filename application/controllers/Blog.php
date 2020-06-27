<?php
    class Blog extends CI_Controller{

        function __construct(){
            parent:: __construct();
            $this->load->model('blog_m',"m");
        }
        public function index(){
            $data['blogs']= $this->m->getBlog();
            $this->load->view('layout/header');
            $this->load->view('blog/index', $data);
            $this->load->view('layout/footer');
        
        }

        public function add(){
            $this->load->view('layout/header');
            $this->load->view('blog/add');
            $this->load->view('layout/footer');
        }
        public function submit(){
            $result = $this->m->submit();
            if($result){
                $this->session->set_flashdata('success_msg', 'Record added successfully');
            }
            else{
                $this->session->set_flashdata('error_msg', 'Fail to add record');

            }
            redirect(base_url('blog/index'));
        }

        public function edit($id){
            
        }
       
    }
    