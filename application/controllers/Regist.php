<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regist extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	public function index()
	{
		$this->load->view('regist');
    }
    
    function regist_proses()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[20]');

        if( $this->form_validation->run() == FALSE )
        {
            if( $this->m_admin->regist() )
            {
                $this->session->set_flashdata('mess', 'Register berhasil, silahkan login');
                redirect( base_url().'Login' );
            }else
            {
                $this->session->set_flashdata('mess', 'Register gagal');
                redirect( base_url().'Regist' );
            }
        }else
        {
            $this->session->set_flashdata('mess', 'Terdapat kesalahan sistem pada Registrasi');
            redirect( base_url().'Regist' );
        }
    }
}
