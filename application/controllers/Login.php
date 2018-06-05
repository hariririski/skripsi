<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
			 $this->load->model('M_Login');


   }

	public function index()
	{
		if( empty($admin)==0 ){

		 redirect("home");
		}
		$this->load->view('umum/login');
	}

  public function daftar()
	{

		$this->load->view('umum/login');
	}

	public function logout() {

		$this->session->sess_destroy();
		redirect('login');
	}

	public function proses_login() {
		 $rs=$this->M_Login->login_rs($this->input->post('username'));
		 $admin=$this->M_Login->login_admin($this->input->post('username'));

     if(isset($rs[0]->kode_rs)){
       $this->session->set_userdata('rs',$rs[0]->kode_rs);
       redirect('rumah_sakit/admin');
     }else if(isset($admin[0]->username)){
       $this->session->set_userdata('admin',$admin[0]->username);
       redirect('home_admin');
     }else{
       $this->alert("danger","Gagal","Maaf Anda Gagal Login");
       redirect('login');
     }
   }

   public function proses_daftar() {
 		 $rs=$this->M_Login->daftar();
      if($rs){
        $this->alert("warning","berhasil","Silahkan Lengkapi Data Anda, Pada Menu Data -> Profil Rumah Sakit, Untuk Mempermudah Proses Verifikasi ");
        $this->session->set_userdata('rs',$this->input->post('kode_rumah_sakit'));
        redirect('home');
      }else{
          $this->alert("danger","Gagal","Maaf Anda Gagal Login");
          redirect('login');
      }
    }

     function alert($warna,$status,$isi){
          $this->session->set_flashdata('pesan',
          '<div class="alert alert-solid-'.$warna.'" role="alert">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">×</span>
                   </button>
                   <strong>'.$status.'</strong> '.$isi.'
           </div>
           ');
        }

}
