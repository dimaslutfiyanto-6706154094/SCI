<?php

  class m_db extends CI_Model
  {
	function __construct(){
		parent::__construct();
	}

    function insertModel($table, $data){
      return $this->db->insert($table, $data);
	  
    }
	
	function lihat(){
		$this->db->select('*');
		$this->db->from("tb_barang");
		$data = $this->db->get();
	   return $data->result();		   
	}
	
	function delete_mhs($id){
		$con= array("code_barang"=>$id);
		$this->db->delete('tb_barang',$con);	
	}
	
	function edit_barang($value ,$where)
		{
			$this->db->where($where);
			$even = $this->db->update("tb_barang",$value);
			return $even;
		}
	
  }

 ?>
