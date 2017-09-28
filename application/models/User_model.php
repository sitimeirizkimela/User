<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	
	public function show_user()
	{
		$query = $this->db->get('user');
			return $query->result_array();
	}

	public function add_user($id_user,$nama,$alamat,$telepon)
	{
		$data = array(
				'id_user' => $id_user,
				'nama' => $nama,
				'alamat' => $alamat,
				'telepon' => $telepon,
				
				);
			$this->db->insert('user',$data);
	}

	public function get_where_user($id_user)
		{
			$query = $this->db->get_where('user', array('id_user' => $id_user));
				return $query->row();
			}

	public function edit_user($user,$data)
		{
			$this->db->where('id_user', $user);
			$this->db->update('user',$data);
		}

	public function delete_user($id_user) {
			$table = array('user');
			$this->db->where('id_user', $id_user);
			$this->db->delete($table);
		}

}

/* End of file  */
/* Location: ./application/models/ */