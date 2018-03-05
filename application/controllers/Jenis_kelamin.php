<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_kelamin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


   function __construct() {
       parent::__construct();
			 $this->load->helper('url');
			 $this->load->library('session');
			 $this->load->database();
       $this->load->model('M_Jenis_kelamin');
			 $admin=$this->session->userdata('admin');


   }

	public function index()
	{
    $data['lihat'] = $this->M_Jenis_kelamin->lihat();
		$this->load->view('admin/tambah_jenis_kelamin',$data);
	}

  public function tambah(){
    		$cek= $this->M_Jenis_kelamin->tambah();
        if($cek){
          $this->alert("primary","Berhasil");
          redirect('jenis_kelamin');
        }else{
          $this->alert("danger","Gagal");
          redirect('jenis_kelamin');
        }
  }

  function alert($warna,$status){
       $this->session->set_flashdata('pesan',
       '<div class="alert alert-solid-'.$warna.'" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>'.$status.'</strong> Data '.$status.' Di Tambahkan
        </div>
        ');
     }

}
