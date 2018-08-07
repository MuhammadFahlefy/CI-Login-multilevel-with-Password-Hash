<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        if( $this->session->userdata('status') != 'login' )
        {
            $this->session->set_flashdata('notLogin', 'Silahkan login terlebih dahulu');
            redirect( base_url().'Login' );
        }
    }
    
    public function index()
    {
        $this->load->view('admin/adm_header');
        $this->load->view('admin/adm_dashboard');
        $this->load->view('admin/adm_footer');
        $this->load->view('admin/adm_dashboardJS');
    }

    function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('logout', 'Anda telah logout');
		redirect( base_url().'Login' );
    }
    
    function member()
    {
        $data['user']   = $this->db->query('SELECT * FROM user WHERE user_level = "Member" ')->result();

        $this->load->view('admin/adm_header');
        $this->load->view('admin/adm_user', $data);
        $this->load->view('admin/adm_footer');
        $this->load->view('admin/adm_dashboardJS');
    }
}