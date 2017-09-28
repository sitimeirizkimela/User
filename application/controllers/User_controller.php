<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->User_model->show_user();
		$this->load->view('header');
		$this->load->view('leftsidebarview');
		$this->load->view('userview',$data);
	}

	public function tambah_user()
	{
		
		$this->load->view('header');
		$this->load->view('leftsidebarview');
		$this->load->view('adduserview');
	}

	public function tambah_proses()
	{
		
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('telepon','Telepon','required');

		$id_user =$this->db->insert_id();
		$nama=$this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
		
		if($this->form_validation->run() != false){
			
				$this->User_model->add_user($id_user,$nama,$alamat,$telepon);
				redirect('User_controller/index');
		}
	}

		public function edit_user($id_user)
		{

			$data['user'] = $this->User_model->get_where_user($id_user);
			$data['id_user'] = $id_user;

			$this->load->view('header');
			$this->load->view('leftsidebarview');
			$this->load->view('edituserview',$data);
		}

		public function edit_proses($id_user)
		{

			$nama=$this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$telepon = $this->input->post('telepon');

			
				$data = array(
					'nama' => $this->input->post('nama'),
					'alamat' => $this->input->post('alamat'),
					'telepon' => $this->input->post('telepon'));

				$this->User_model->edit_user($id_user,$data);
				redirect(base_url('User_controller/index'),'refresh');  

		}

		public function delete_user($id_user)
		{

			$this->User_model->delete_user($id_user);
			redirect('User_controller/index','refresh');
		}

		





	}

	/* End of file  */
/* Location: ./application/controllers/ */