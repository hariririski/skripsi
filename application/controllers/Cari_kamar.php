<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cari_kamar extends CI_Controller {

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
			 $this->load->model('M_Rs');
			 $this->load->model('M_Jenis_rs');
			 $this->load->model('M_Pemilik_rs');
			 $this->load->model('M_Kelas_rs');
			 $this->load->model('M_Kamar');
			 $this->load->model('M_Tempat_tidur');
       $this->load->library("pagination");

   }

	public function index()
	{
    $config["base_url"] = base_url() . "cari_kamar/index/";
    $config["total_rows"] = $this->M_Rs->record_count();
    $config["per_page"] = 5;
    $config["uri_segment"] = 3;
    $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = round($choice);

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
    $data["semua"] = $this->M_Tempat_tidur->fetch_countries($config["per_page"], $page);
    $str_links = $this->pagination->create_links();
    $data["links"] = explode('&nbsp;',$str_links );

		$this->load->view('umum/Cari_kamar',$data);
	}

  public function fasilitas($id_kamar)
	{
     return $this->M_Kamar->fasilitas($id_kamar);
	}

  public function rumah_sakit_admin()
	{
    $data['lihat'] = $this->M_Rs->lihat();
    $data['verifikasi'] = $this->M_Rs->lihat_verifikasi();
		$this->load->view('admin/Rumah_sakit_admin',$data);
	}

  public function detail()
	{

		$this->load->view('umum/Detail_rumah_sakit');
	}

  public function profil()
  {
    $id=$this->session->userdata('rs');
    $data['lihat'] = $this->M_Rs->lihat_rs($id);
    $data['jenis'] = $this->M_Rs->lihat();
    $data['pemilik'] = $this->M_Rs->lihat();
    $data['kelas'] = $this->M_Rs->lihat();
    $this->load->view('umum/profil',$data);
  }


}
