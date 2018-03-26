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
			 $this->load->model('M_Ruang');
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
    $data['ruang'] = $this->M_Ruang->lihat_ruang($this->uri->segment('3'));
    //print_r($data['ruang']);
    //$data['kamar'] = $this->M_Ruang->lihat_rs($this->uri->segment('3'));
		$this->load->view('umum/Detail_rumah_sakit',$data);
	}
  public function auto_data_ruang()
  {

    $data['ruang'] = $this->M_Ruang->lihat_ruang($this->uri->segment('3'));
    $this->load->view('umum/share/auto_ruang',$data);

    //$data['kamar'] = $this->M_Ruang->lihat_rs($this->uri->segment('3'));
    //$this->load->view('umum/Detail_rumah_sakit',$data);
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
  public function edit()
  {
      $name=$this->random_name(20);
      $upload=$this->upload($name,$this->uri->segment('3'));
      $gambar=NULL;
      $gambar=$upload['upload_data']['orig_name'];
      if($gambar!=NULL){
        $rs=$this->M_Rs->edit_profil($gambar, $this->uri->segment('3'));
         if($rs){
           $this->alert("success","berhasil","Anda Berhasil Meperbaharui Data Profil");
           redirect('profil');
         }else{
          $this->alert("danger","Gagal","Anda Gagal Meperbaharui Data Profil");
          redirect('profil');
         }
      }else{
        $rs=$this->M_Rs->edit_profil_tanpa_gambar($this->uri->segment('3'));
         if($rs){
           $this->alert("success","berhasil","Anda Berhasil Meperbaharui Data Profil");
           redirect('profil');
         }else{
          $this->alert("danger","Gagal","Anda Gagal Meperbaharui Data Profil");
          redirect('profil');
         }
      }
  }

  public function upload($name,$id){
		$config['upload_path']          = './gambar/'.$id.'/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 76800;
    $config['file_name']            = $name;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
			return false;
		}else{
			$data = array('upload_data' => $this->upload->data());
			//$this->load->view('v_upload_sukses', $data);
      return $data;
      //return ;

		}
	}

  function random_name($length) {
					 $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
					 $password = substr( str_shuffle( $chars ), 0, $length );
					 return $password;
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
