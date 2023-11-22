<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    public function getMahasiswa($id = NULL)
    {
        if($id ==NULL){
       return $this->db->get('tb_mahasiswa')->result_array();
    }
    else{
        return $this->db->get_where('tb_mahasiswa',['id'=>$id])->result_array();

       }
	}
	
}

