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
			 $admin=$this->session->userdata('admin');


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

  // public function register() {
	// 	$data['prodi'] = $this->M_Prodi->lihat();
	// 	$this->load->view('Register',$data);
	// }
  //
	//  public function proses_daftar() {
	// 	$cek= $this->M_Login->daftar();
	// 	if($cek){
  //
  //          redirect('login');
  //        }else{
  //          $this->tambah_gagal();
  //          redirect('daftar');
  //        }
	// }
  //
	// public function proses_login() {
	// 	$cek=$this->M_Login->login();
	// 	$mhs=$this->M_Login->mhs($this->input->post('username'));
	// 	$prodi=$this->M_Login->prodi($this->input->post('username'));
  //
  // 		if($mhs==true && $cek==true){
  //     			echo $username= $mhs[0]->npm;
  //     			echo $level= $mhs[0]->level;
  //     			echo $prodi= $mhs[0]->id_prodi;
  //     			echo $mhs= $mhs[0]->nama;
  //     			session_save_path();
  //     			$this->session->set_userdata('login',$username);
  //     			$this->session->set_userdata('level',$level);
  //     			$this->session->set_userdata('prodi',$prodi);
  //     			$this->session->set_userdata('nama',$mhs);
	// 		     redirect('home');
  //
	// 	}
  //   else if($prodi==true && $cek==true){
  //           $username= $prodi[0]->username;
  //           $level= $prodi[0]->level;
  //           $prodi= $prodi[0]->id_prodi;
  //           $nama_lengkap= $prodi[0]->nama_lengkap;
  //           session_save_path();
  //           $this->session->set_userdata('login',$username);
  //           $this->session->set_userdata('level',$level);
  //           $nama_prodi=$this->M_Prodi->prodi($prodi);
  //           $nama_prodi= $nama_prodi[0]->nama_prodi;
  //           $this->session->set_userdata('prodi',$prodi);
  //           $this->session->set_userdata('nama_prodi',$nama_prodi);
  //           $this->session->set_userdata('nama',$nama_lengkap);
  //           redirect('home');
  //   }
  //   else{
	// 		$data="document.getElementById('exampleTopFullWidth').click();";
	// 		$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
	// 		redirect('login');
	// 	}
	// }
  //
  //
  //
  //
  //   function tambah_gagal(){
  //       $this->session->set_flashdata('pesan', '
  //               <div class="alert alert-danger fade in">
  //               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  //               <strong>Gagal!</strong> Proses Pendaftaran Gagal!.
  //               </div>');
  //    }


}
