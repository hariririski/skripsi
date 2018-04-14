<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

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
			 $this->load->model('M_Ruang');
			 $this->load->model('M_Kamar');
			 $this->load->model('M_Fasilitas');


   }

	public function tambah()
	{
    $kode_kamar=$this->uri->segment('3');
    $data['lihat'] = $this->M_Fasilitas->lihat($kode_kamar);
    $data['kamar'] = $this->M_Kamar->lihat_per($kode_kamar);
  	$this->load->view('umum/tambah_fasilitas',$data);
	}



  public function tambah_fasilitas(){

        $cek= $this->M_Fasilitas->tambah($this->uri->segment('3'));
        if($cek){
          $this->alert("primary","Berhasil");
          redirect('fasilitas/tambah/'.$this->uri->segment('3'));
        }else{
          $this->alert("danger","Gagal");
          redirect('fasilitas/tambah/'.$this->uri->segment('3'));
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

     function random_name($length) {
              $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
              $password = substr( str_shuffle( $chars ), 0, $length );
              return $password;
            }

}
