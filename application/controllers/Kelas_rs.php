<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_rs extends CI_Controller {

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
			 $this->load->model('M_Kelas_rs');


   }

	public function index()
	{
    $data['lihat'] = $this->M_Kelas_rs->lihat();
		$this->load->view('admin/tambah_kelas_rs',$data);
	}
	public function edit_kelas_rs()
	{
    $data['lihat'] = $this->M_Kelas_rs->lihat();
		$this->load->view('admin/edit_kelas_rs',$data);
	}


  public function tambah(){
        $cek= $this->M_Kelas_rs->tambah();
        if($cek){
          $this->alert("primary","Berhasil");
          redirect('kelas_rs');
        }else{
          $this->alert("danger","Gagal");
          redirect('kelas_rs');
        }
  }
  public function hapus_kelas_rs(){
        $id=$_GET['id'];
        $cek= $this->M_Kelas_rs->hapus($id);
        if($cek){
          $this->alert_hapus("primary","Berhasil");
          redirect('kelas_rs');
        }else{
          $this->alert_hapus("danger","Gagal");
          redirect('kelas_rs');
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
  function alert_hapus($warna,$status){
       $this->session->set_flashdata('pesan',
       '<div class="alert alert-solid-'.$warna.'" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>'.$status.'</strong> Data '.$status.' Di hapus
        </div>
        ');
     }


}
