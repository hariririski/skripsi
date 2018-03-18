<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rumah_sakit extends CI_Controller {

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


   }

	public function index()
	{
    $data['lihat'] = $this->M_Rs->lihat();
		$this->load->view('umum/Rumah_sakit',$data);
	}

  public function rumah_sakit_admin()
	{
    $data['lihat'] = $this->M_Rs->lihat();
    $data['verifikasi'] = $this->M_Rs->lihat_verifikasi();
		$this->load->view('admin/Rumah_sakit_admin',$data);
	}

  public function detail()
	{

    $data['lihat'] = $this->M_Rs->lihat_rs($this->uri->segment('3'));
		$this->load->view('umum/Detail_rumah_sakit',$data);
	}

  public function profil()
  {
    $id=$this->session->userdata('rs');
    $data['lihat'] = $this->M_Rs->lihat_rs($id);
    $data['jenis'] = $this->M_Jenis_rs->lihat();
    $data['pemilik'] = $this->M_Pemilik_rs->lihat();
    $data['kelas'] = $this->M_Kelas_rs->lihat();
    $this->load->view('umum/profil',$data);
  }


}
