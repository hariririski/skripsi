<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
			 $this->load->model('M_Admin');



   }

	public function index()
	{
    $data['lihat'] = $this->M_Admin->lihat();
  	$this->load->view('admin/Tambah_admin',$data);
	}
	public function grafik_pasien()
	{
    $data['lihat'] = $this->M_Admin->lihat();
    $data['tahun'] = $this->M_Admin->tahun();
  	$this->load->view('admin/pasien_rs',$data);
	}
	public function data_grafik_pasien()
	{
    $id = $_GET['id'];
    $data['lihat'] = $this->M_Admin->data_grafik_pasien($id);

  	$this->load->view('admin/data/data',$data);
	}

  public function grafik_rs()
	{
    $data['lihat'] = $this->M_Admin->lihat();
    $data['tahun'] = $this->M_Admin->tahun();
  	$this->load->view('admin/grafik_rs',$data);
	}
	public function data_grafik_rs()
	{
    $id = $_GET['id'];
    $data['lihat'] = $this->M_Admin->data_grafik_rs($id);

  	$this->load->view('admin/data/data_rs',$data);
	}

  public function tambah(){
        $cek= $this->M_Admin->tambah();
        if($cek){
          $this->alert("primary","Berhasil");
          redirect('admin');
        }else{
          $this->alert("danger","Gagal");
          redirect('admin');
        }
  }
  public function hapus_admin(){
        $id=$_GET['id'];
        $cek= $this->M_Admin->hapus($id);
        if($cek){
          $this->alert("primary","Berhasil");
          redirect('admin');
        }else{
          $this->alert("danger","Gagal");
          redirect('admin');
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
