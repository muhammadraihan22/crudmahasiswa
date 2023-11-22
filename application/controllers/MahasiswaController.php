<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
use chriskacerguis\RestServer\RestController;


class MahasiswaController extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model', 'mahasiswa');
    }
    public function index_get()
    {
      // $mahasiswa = $this->mahasiswa->getData('tb_mahasiswa');
  
      $id = $this->get('id');
      if ($id == null){
        $mahasiswa = $this->mahasiswa->getMahasiswa('tb_mahasiswa');
      }
      else{
        $mahasiswa = $this->mahasiswa->getMahasiswa($id);
      }
      if ($mahasiswa) {
        $this->response([
          'status'=> true,
          'data'=> $mahasiswa
        ], RestController::HTTP_OK);
    }else{
      $this->response([
        'status'=> false,
        'message'=> 'id not found'
      ], RestController :: HTTP_NOT_FOUND);
    }
  }
}
