<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_db');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$this->load->view('v_barang');
	}	
	
	function update(){
		$tampil = array('data'=> $this->m_db->lihat());
		$this->load->view('v_data', $tampil);
	}
	
	function penjual(){
		$this->load->view('v_penjual');
	}
	function lihat(){
		$tampil = array('data'=> $this->m_db->lihat());
		$this->load->view('v_customer', $tampil);
	}
	
	function insertBarang(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '5000'; //in kb
 
		$this->upload->initialize($config);
 
		//if upload failed
		if ( ! $this->upload->do_upload('image')){
 
			$data['message'] =  $this->upload->display_errors();
			$this->load->view('notification_view', $data);
		//if upload success
		}else{
			$url = base_url('/uploads/');
			$Barang = array(
			'code_barang'     => $this->input->post('kd'),
			'asal_daerah'    => $this->input->post('ad'),
			'nama_barang'   => $this->input->post('nb'),
			'kategori'   => $this->input->post('kate'),
			'keterangan'   => $this->input->post('ket'),
			'image' => $url.$this->upload->data('file_name')
			);
			
			//query to insert into myupload table
			$this->load->model('m_db');
			$this->m_db->insertModel('tb_barang', $Barang);
 
			//$data['message'] =  'Your file was successfully uploaded!';
			//$this->load->view('notification_view', $data);

			$this->penjual();
		}
    }
	
	function insertPenjual(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '5000'; //in kb
 
		$this->upload->initialize($config);
 
		//if upload failed
		if ( ! $this->upload->do_upload('image')){
 
			$data['message'] =  $this->upload->display_errors();
			$this->load->view('notification_view', $data);
		//if upload success
		}else{
			$url = base_url('/uploads/');
			$Toko = array(
			'toko_penjual'     => $this->input->post('nt'),
			'harga'    => $this->input->post('h'),
			'code_barang'   => $this->input->post('kd'),
			'image_penjual' => $url.$this->upload->data('file_name')
			);
			
			//query to insert into myupload table
			$this->m_db->insertModel('tb_penjual', $Toko);
 
			//$data['message'] =  'Your file was successfully uploaded!';
			//$this->load->view('notification_view', $data);

			$this->penjual();
		}
	}
	
	public function view_barang(){
		$tampil = array('data'=> $this->m_db->lihat());
		$this->load->view('v_data', $tampil); 
	  }
	  
	public function view_customer(){
		$tampil = array('data'=> $this->m_db->lihat());
		$this->load->view('v_customer', $tampil); 
	  }
	
	
	public function delete_barang($id){
			$del = $this->m_db->delete_mhs($id);
			
			redirect('admin/view_barang/');
			
			
	}
		
	public function edit_barang($kd)
	{
		$data['kd'] = $kd;
		$this->load->view('edit_barang',$data);
	}
		
	public function action_edit_barang()
	{
		$kode     = $this->input->post('cd');
		$asal    = $this->input->post('ad');
		$nama  = $this->input->post('nb');
		$kategori  = $this->input->post('kate');
		$keterangan   = $this->input->post('ket');
		$where = array('code_barang' => $kode);
		$Barang = array(
			'nama_barang' => $nama,
			'asal_daerah' => $asal,
			'kategori' => $kategori,
			'keterangan' => $keterangan
		);
		$update = $this->m_db->edit_barang($Barang,$where);
		if($update){
			redirect('admin/update');
		}
		else{
			echo "gagal";
		}
	}	
}