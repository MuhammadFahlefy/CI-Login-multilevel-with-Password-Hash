<?php 

class M_admin extends CI_Model
{

	function login(/*$email, $pass*/)
	{
		// $this->db->select('user_nama, user_email, user_password, user_level');
		// $this->db->from('user');
		// $this->db->where('user_email', $email);
		// $this->db->where('user_password', md5($pass));
		// $this->db->limit(1);

		// $query	= $this->db->get(); // Mengambil data dari database
		
		// if( $query->num_rows() == 1 )
		// {
		// 	return $query->result();
		// }else
		// {
		// 	return FALSE;
		// }

		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_email', $this->input->post('email'));
		return $this->db->get();
	}

	function regist()
	{
		$data = array(
			'user_nama' => $this->input->post('username'),
			'user_email' => $this->input->post('email'),
			'user_level' => $this->input->post('level'),
			'user_password' => get_hash( $this->input->post('password') )
		);
		return $this->db->insert('user', $data);
	}
}
 ?>