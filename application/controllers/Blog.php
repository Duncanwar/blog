<?php
    class Blog extends CI_Controller{

        function __construct(){
            parent:: __construct();
            $this->load->model('blog_m',"m");
        }
        public function index(){
            $data['blogs']= $this->m->getBlog();
        
            $this->load->view('blog/index', $data);
        
        }

    }
    