<?php
class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashbord';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }
    // public function gatal()
    // {
    //     $this->load->model('join');
    //     $data1['menu'] = $this->join->table();

    //     $data['title'] = 'Dashbord';
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('template/header', $data);
    //     $this->load->view('template/sidebar', $data, $data1);
    //     $this->load->view('template/topbar', $data);
    //     $this->load->view('admin/index', $data);
    //     $this->load->view('template/footer');


    //     // $this->load->view('template/sidebar',  $data1);
    // }
}
