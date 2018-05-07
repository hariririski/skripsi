<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruang extends CI_Controller {

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
	 * So any other public methods not prefixed with an underuangcore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


   function __construct() {
       parent::__construct();
			 $this->load->helper('url');
			 $this->load->library('session');
			 $this->load->database();
			 $this->load->model('M_Jenis_ruang');
			 $this->load->model('M_Ruang');


   }

	public function index()
	{
    $data['lihat'] = $this->M_Jenis_ruang->lihat();
    $data['ruang'] = $this->M_Ruang->lihat();
		$this->load->view('umum/tambah_ruang',$data);
	}
	

  public function tambah(){
        $cek= $this->M_Ruang->tambah();
        if($cek){
          $this->alert("primary","Berhasil");
          redirect('ruang');
        }else{
          $this->alert("danger","Gagal");
          redirect('ruang');
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
