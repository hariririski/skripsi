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
			 $this->load->model('M_Kamar');
			 $this->load->model('M_Tempat_tidur');
			 $this->load->model('M_Jenis_rs');
			 $this->load->model('M_Pemilik_rs');
			 $this->load->model('M_Kelas_rs');
       $this->load->library("pagination");
       $this->Front = & get_instance();

   }

	public function rs()
	{
    $config["base_url"] = base_url() . "rumah_sakit/rs/";
    $config["total_rows"] = $this->M_Rs->record_count();
    $config["per_page"] = 8;
    $config["uri_segment"] = 3;
    $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = round($choice);

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
    $data["results"] = $this->M_Rs
        ->fetch_countries($config["per_page"], $page);
    $str_links = $this->pagination->create_links();
    $data["links"] = explode('&nbsp;',$str_links );
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
    $CI =& get_instance();
    $data['lihat'] = $this->M_Rs->lihat_rs($this->uri->segment('3'));
    $data['ruang'] = $this->M_Ruang->lihat_ruang($this->uri->segment('3'));
    //print_r($data['ruang']);

		$this->load->view('umum/Detail_rumah_sakit',$data);
	}
  public function detail2($id_rs,$id_ruang)
	{
     return $this->M_Kamar->ruang_kamar($id_rs,$id_ruang);
	}

  public function jumlah_kamar($id_rs)
	{
     return $this->M_Kamar->jumlah_kamar($id_rs);
	}

  public function jumlah_ruang($id_rs)
  {
     return $this->M_Ruang->jumlah_ruang($id_rs);
  }

  public function jumlah_tempat_tidur_kosong($id_rs)
  {
     return $this->M_Tempat_tidur->jumlah_tempat_tidur_kosong($id_rs);
  }
  public function kosong($id_kamar)
  {
     return $this->M_Tempat_tidur->jlh_kosong_tempat_tidur($id_kamar);
  }
  public function jumlah_tempat_tidur($id_kamar)
  {
     return $this->M_Tempat_tidur->jumlah_tempat_tidur($id_kamar);
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

  public function ya()
  {
        $kode_rs=$this->uri->segment('3');
         $rs=$this->M_Rs->ya($kode_rs);
         if($rs){
           $this->alert("success","berhasil","Anda Berhasil Memverifikasi");
           redirect("rumah_sakit/detail/$kode_rs");
         }else{
          $this->alert("danger","Gagal","Anda Gagal Memverifikasi");
         redirect("rumah_sakit/detail/$kode_rs");
       }
  }

  public function tidak()
  {
        $kode_rs=$this->uri->segment('3');
         $rs=$this->M_Rs->tidak($kode_rs);
         if($rs){
           $this->alert("success","berhasil","Anda Berhasil Memverifikasi");
           redirect("rumah_sakit/detail/$kode_rs");
         }else{
          $this->alert("danger","Gagal","Anda Gagal Memverifikasi");
         redirect("rumah_sakit/detail/$kode_rs");
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
