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
			 $this->load->model('M_Rs');
			 $this->load->model('M_Pasien');
			 $this->load->model('M_Tempat_tidur');
			 $this->load->model('M_Kamar');
			 $this->load->model('M_Ruang');
			 $this->load->model('M_Jenis_kelamin');


   }

	public function data()
	{
    $kode_rs=$this->session->userdata('rs');
    $data['rawat'] = $this->M_Pasien->rawat($kode_rs);
    $data['selesai'] = $this->M_Pasien->selesai($kode_rs);
		$this->load->view('umum/pasien',$data);
	}
	public function rawat_pasien()
	{

    $data['rawat'] = $this->M_Pasien->rawat_pasien($this->uri->segment('3'));
    $data['ruang'] = $this->M_Ruang->lihat();
		$this->load->view('umum/rawat_pasien',$data);
	}

	public function info_pasien()
	{
    $kode_rs=$_GET['rs'];
    $data['rawat'] = $this->M_Pasien->rawat($kode_rs);
    $data['ruang'] = $this->M_Ruang->lihat();
    $data['rumah_sakit'] = $this->M_Rs->lihat();
		$this->load->view('umum/info_pasien',$data);
	}

  function kamar($id) {
    $data1=null;
    $data=$this->M_Kamar->lihat($id);

    $data1.='<option value="">Pilih Kamar</option>';
    foreach($data as $data2){
    $data1.='<option value="'.$data2->id_kamar.'">'.$data2->nama_kamar.'</option>';
    }
    echo $data1;
  }
  function tempat_tidur($id) {
    $data1=null;
    $data=$this->M_Tempat_tidur->kosong_tempat_tidur($id);

    $data1.='<option value="">Pilih Tempat Tidur</option>';
    foreach($data as $data2){
    $data1.='<option value="'.$data2->id_tempat_tidur.'">'.$data2->nama_tempat_tidur.'</option>';
    }
    echo $data1;
  }

	public function tambah_pasien()
	{

    $data['lihat'] = $this->M_Jenis_kelamin->lihat();
    $data['ruang'] = $this->M_Ruang->lihat();
		$this->load->view('umum/tambah_pasien',$data);
	}

  public function tambah(){
        $cek= $this->M_Pasien->tambah_pasien();
        if($cek){
          $this->alert("primary","Berhasil");
          redirect('pasien/data');
        }else{
          $this->alert("danger","Gagal");
          redirect('pasien/data');
        }
  }

  public function rawat(){
        $cek= $this->M_Pasien->tambah_rawat();
        if($cek){
          $this->alert("primary","Berhasil");
          redirect('pasien/data');
        }else{
          $this->alert("danger","Gagal");
          redirect('pasien/data');
        }
  }


  public function cek(){

        $tersedia= $this->M_Pasien->tersedia($this->input->post('nik'));
        if($tersedia){
          $kode_rs=$this->session->userdata('rs');
          echo $rawat= $this->M_Pasien->cek_rawat($this->input->post('nik'),$kode_rs);
          if($rawat==0){
              redirect('pasien/rawat_pasien/'.$this->input->post('nik'));
          }else{
            $this->alert("danger","Pasien Sedang Di Rawat");
            redirect('pasien/data');
          }
        }else{
          redirect('pasien/tambah_pasien/'.$this->input->post('nik'));
        }
  }

  public function keluar(){
        $id_rawat=$this->uri->segment('3');
        $id_kamar=$this->uri->segment('4');
        $tanggal_masuk=$this->uri->segment('5');
        $tanggal_keluar=$this->input->post('tanggal_keluar');
        if($tanggal_keluar>=$tanggal_masuk){
        $cek1= $this->M_Pasien->keluar($this->uri->segment('3'));
        $cek2= $this->M_Tempat_tidur->kosong($this->uri->segment('4'));
            if($cek1&&$cek2){
              $this->alert("primary","Berhasil");
              redirect('pasien/data');
            }else{
              $this->alert("danger","Gagal");
              redirect('pasien/data');
            }
        }else{
          $this->alert("danger","Tanggal Salah");
          redirect('pasien/data');
        }
  }

  function alert($warna,$status){
       $this->session->set_flashdata('pesan',
       '<div class="alert alert-solid-'.$warna.'" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>'.$status.'</strong>
        </div>
        ');
     }


}
