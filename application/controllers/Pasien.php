<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

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
			 $this->load->model('M_Pasien');


   }

	public function data()
	{
    $kode_rs=$this->session->userdata('rs');
    $data['rawat'] = $this->M_Pasien->rawat($kode_rs);
    $data['selesai'] = $this->M_Pasien->selesai($kode_rs);
		$this->load->view('umum/pasien',$data);
	}

  public function tambah(){
        $cek= $this->M_Pasien->tambah($this->uri->segment('3'));
        if($cek){
          $this->alert("primary","Berhasil");
          redirect('pasien');
        }else{
          $this->alert("danger","Gagal");
          redirect('pasien');
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
