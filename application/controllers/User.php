<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$query = $this->db->get('user');
			$query_result = $query->result_array();
			$data = array();
			$path = '';
			
			foreach ($query_result as $key) {
				
			
					$path = 'http://dev.dot.co.id/smipoc/api/user';
					
				
					$data[] = array(
						'post_id'		=> $key['id_user'],
						'nama'			=> $key['nama'],
						'alamat'		=> $key['alamat'],
						'telepon'		=> $key['telepon'],
						);
				}	


			$array  = array(
					'totalItems' => count($data),
					'items' 	 => $data);
			echo json_encode($array);
		
	}
			

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */