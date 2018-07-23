<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_category');
    }

    function index(){

        $query = $this->m_category->get();
        $data['hasil'] = $query->result();
        $data['title'] = 'Form Category';

        $this->load->view('vhead');
        $this->load->view('vcategory', $data);
        $this->load->view('vfooter');
    }

    function edit(){
        $id = $this->input->post('id');
        $category = $this->input->post('category');
        
        $data = array(
            'id' => $id,
            'category' => $category
        );

        $this->m_category->edit($data);
        echo "<script>window.location='?page=category';</script>";
    }
}

?>