<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tempat_tidur extends CI_Controller {

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
			 $this->load->model('M_Kelas_kamar');
			 $this->load->model('M_Ruang');
			 $this->load->model('M_Kamar');
			 $this->load->model('M_Tempat_tidur');


   }

	public function data()
	{

    $data['lihat'] = $this->M_Tempat_tidur->lihat_semua($this->session->userdata('rs'));


		$this->load->view('umum/semua_tempat_tidur',$data);
	}
	public function kamar()
	{

    $data['lihat'] = $this->M_Kelas_kamar->lihat();
    $data['kamar'] = $this->M_Kamar->lihat($this->uri->segment('3'));
    $data['ruang'] = $this->M_Ruang->lihat_per($this->uri->segment('3'));

		$this->load->view('umum/tambah_kamar',$data);
	}

	public function tempat_tidur()
	{

    $data['lihat'] = $this->M_Tempat_tidur->lihat($this->uri->segment('3'));
    $data['kamar'] = $this->M_Kamar->lihat_per($this->uri->segment('3'));
  	$this->load->view('umum/tempat_tidur',$data);
	}
	public function edit_tempat_tidur()
	{

    $data['lihat'] = $this->M_Tempat_tidur->lihat($this->uri->segment('3'));
    $data['kamar'] = $this->M_Kamar->lihat_per($this->uri->segment('3'));
  	$this->load->view('umum/edit_tempat_tidur',$data);
	}

  public function tambah(){
        $cek= $this->M_Tempat_tidur->tambah($this->uri->segment('3'));
        if($cek){
          $this->alert("primary","Berhasil");
          redirect('kamar/tempat_tidur/'.$this->uri->segment('3'));
        }else{
          $this->alert("danger","Gagal");
          redirect('kamar/tempat_tidur/'.$this->uri->segment('3'));
        }
  }
  public function hapus_tempat_tidur(){
        $id=$_GET['id'];

        $cek= $this->M_Tempat_tidur->hapus($id);
        if($cek){
          $this->alert_hapus("primary","Berhasil");
          redirect('kamar/tempat_tidur/'.$this->uri->segment('3'));
        }else{
          $this->alert_hapus("danger","Gagal");
            redirect('kamar/tempat_tidur/'.$this->uri->segment('3'));
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
     function random_name($length) {
              $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
              $password = substr( str_shuffle( $chars ), 0, $length );
              return $password;
            }

}
