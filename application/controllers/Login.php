<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	public function index()
	{
		$this->load->view('login');
	}

	function login_proses()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if( $this->form_validation->run() == FALSE )
		{
			redirect( base_url().'Login' );
		}else
		{
			if( $this->m_admin->login()->num_rows() == 1 )
			{
				$row = $this->m_admin->login()->row();
	
				if( hash_verified($this->input->post('password'), $row->user_password) )
				{
					$session = array(
						'id'	=> $row->user_id,
						'nama'	=> $row->user_nama,
						'level'	=> $row->user_level,
						'status'=> 'login'				
					);
	
					$this->session->set_userdata($session);

					if( $this->session->userdata('level')  == 'Admin' )
					{
						redirect('Admin');
					}else if( $this->session->userdata('level')  == 'Member' )
					{
						redirect('Admin');
					}else
					{
						redirect( base_url().'Login' );
					}
				}else
				{
					$this->session->set_flashdata('wrong', 'Password salah');
					redirect( base_url().'Login' );
				}
			}else
			{
				$this->session->set_flashdata('wrong', 'Email tidak valid');
				redirect( base_url().'Login' );
			}
		}
	}
}
