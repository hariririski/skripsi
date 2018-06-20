<?php
class M_Rs extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE rs.verifikasi='1'");
        return $query->result();
    }
    function jumlah($id)
    {
        $query=$this->db->query("SELECT COUNT(DISTINCT ruang.id_ruang) as ruang,COUNT(DISTINCT kamar.id_kamar) as kamar, COUNT( DISTINCT tempat_tidur.id_tempat_tidur) as tempat_tidur from ruang LEFT JOIN kamar on kamar.id_ruang=ruang.id_ruang LEFT JOIN tempat_tidur on tempat_tidur.id_kamar=kamar.id_kamar WHERE ruang.kode_rs='$id'");
        return $query->result();
    }
    function terbaru()
    {
        $query=$this->db->query("SELECT * FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE rs.verifikasi='1' order by rs.tanggal_update DESC limit 4");
        return $query->result();
    }
    function lihat_rs($id)
    {
        $query=$this->db->query("SELECT * FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE rs.kode_rs='$id'");
        return $query->result();
    }

    function lihat_verifikasi()
    {
        $query=$this->db->query("SELECT * FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE rs.verifikasi is null");
        return $query->result();
    }


    function tambah()
    {
      $nama_pemilik_rs = $this->input->post('nama_pemilik_rs');
      $data = array(
          'nama_pemilik_rs'=>$nama_pemilik_rs
      );
      $cek=$this->db->insert('rs',$data);
      return $cek;
    }

    function Edit_profil($name,$kode_rs)
    {
      $data = array(
        'nama_rs'=> $this->input->post('nama_rs'),
        'alamat'=> $this->input->post('alamat'),
        'email'=> $this->input->post('email'),
        'no_hp'=> $this->input->post('no_hp'),
        'id_pemilik'=> $this->input->post('pemilik_rs'),
        'id_kelas_rs'=> $this->input->post('kelas_rs'),
        'id_jenis_rs'=> $this->input->post('jenis_rs'),
        'gambar'=> $name
      );


          $this->db->where('kode_rs',$kode_rs);
          $cek=$this->db->update('rs',$data);
          return $cek;

    }
    function ya($kode_rs)
    {
      $admin=$this->session->userdata('admin');
      $data = array(
        'verifikasi'=>'1',
        'username_admin'=>$admin
      );
          $this->db->where('kode_rs',$kode_rs);
          $cek=$this->db->update('rs',$data);
          return $cek;
    }
    function tidak($kode_rs)
    {
      $admin=$this->session->userdata('admin');
      $data = array(
        'verifikasi'=>'2',
        'username_admin'=>$admin
      );
          $this->db->where('kode_rs',$kode_rs);
          $cek=$this->db->update('rs',$data);
          return $cek;
    }

    function edit_profil_tanpa_gambar($kode_rs)
    {
      $data = array(
        'nama_rs'=> $this->input->post('nama_rs'),
        'alamat'=> $this->input->post('alamat'),
        'email'=> $this->input->post('email'),
        'no_hp'=> $this->input->post('no_hp'),
        'id_pemilik'=> $this->input->post('pemilik_rs'),
        'id_kelas_rs'=> $this->input->post('kelas_rs'),
        'id_jenis_rs'=> $this->input->post('jenis_rs')

      );


          $this->db->where('kode_rs',$kode_rs);
          $cek=$this->db->update('rs',$data);
          return $cek;

    }



    function hapus($id)
    {
      $query=$this->db->where('id_prodi', $id);
      $cek=$this->db->delete('prodi');
      return $cek;
    }

    public function record_count() {
        $this->db->where('verifikasi', '1');
        return $this->db->count_all_results(("Rs"));
    }

    public function fetch_countries($limit, $start) {
        $query = $this->db->query("SELECT * FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE rs.verifikasi='1' limit $start,$limit ");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

   function user_limit($limit, $start = 0) {
      $query = $this->db->query("SELECT * FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE rs.verifikasi='1' limit $start,$limit ");

        return $query;
    }

    public function record_count_cari($rs,$jenis,$kelas) {

      if($rs=='null'){
        $rs=null;
      }
       if($jenis==0 && $kelas==0){
        $query = $this->db->query("SELECT count(rs.kode_rs)as jumlah FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE rs.nama_rs like '%$rs%' or rs.id_kelas_rs='$kelas' or rs.id_jenis_rs='$jenis'  ");
      }else if($jenis!=0 && $kelas!=0){
         $query = $this->db->query("SELECT count(rs.kode_rs)as jumlah FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE rs.nama_rs like '%$rs%' and rs.id_kelas_rs='$kelas' and rs.id_jenis_rs='$jenis'  ");
      } else if($jenis!=0 && $kelas==0){
         $query = $this->db->query("SELECT count(rs.kode_rs)as jumlah FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE rs.nama_rs like '%$rs%'and rs.id_jenis_rs='$jenis' or rs.id_kelas_rs='$kelas'   ");
      }else if($jenis==0 && $kelas!=0){
        $query = $this->db->query("SELECT count(rs.kode_rs)as jumlah FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE rs.nama_rs like '%$rs%' and rs.id_kelas_rs='$kelas' or rs.id_jenis_rs='$jenis'  ");
      }

         return $query->result();
    }

   function cari($limit, $start = 0,$rs,$jenis,$kelas) {
     if($rs=='null'){
       $rs=null;
     }
      if($jenis==0 && $kelas==0){
       $query = $this->db->query("SELECT * FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE rs.nama_rs like '%$rs%' or rs.id_kelas_rs='$kelas' or rs.id_jenis_rs='$jenis' and rs.verifikasi='1' limit $start,$limit ");
     }else if($jenis!=0 && $kelas!=0){
        $query = $this->db->query("SELECT * FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE rs.nama_rs like '%$rs%' and rs.id_kelas_rs='$kelas' and rs.id_jenis_rs='$jenis' and rs.verifikasi='1' limit $start,$limit ");
     } else if($jenis!=0 && $kelas==0){
        $query = $this->db->query("SELECT * FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE rs.nama_rs like '%$rs%'and rs.id_jenis_rs='$jenis' or rs.id_kelas_rs='$kelas'  and rs.verifikasi='1' limit $start,$limit ");
     }else if($jenis==0 && $kelas!=0){
       $query = $this->db->query("SELECT * FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE rs.nama_rs like '%$rs%' and rs.id_kelas_rs='$kelas' or rs.id_jenis_rs='$jenis' and rs.verifikasi='1' limit $start,$limit ");
     }
        return $query;
    }

}
