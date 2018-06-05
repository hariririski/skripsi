<?php
class M_Admin extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM admin");
        return $query->result();
    }
    function data_grafik_pasien($id)
    {

        $kode_rs=$this->session->userdata('rs');
        $query=$this->db->query("SELECT MONTHNAME(rawat.tanggal_masuk) as bulan ,COUNT(rawat.id_rawat) as jumlah FROM `rawat` INNER JOIN tempat_tidur on tempat_tidur.id_tempat_tidur=rawat.id_tempat_tidur INNER join kamar on tempat_tidur.id_kamar=kamar.id_kamar INNER JOIN ruang on kamar.id_ruang=ruang.id_ruang WHERE YEAR(rawat.tanggal_masuk)='$id' GROUP BY MONTHNAME(rawat.tanggal_masuk) order by MONTH(rawat.tanggal_masuk) and ruang.kode_rs='$kode_rs'");
        return $query->result();
    }
    function data_grafik_rs($id)
    {

        $query=$this->db->query("SELECT rs.nama_rs as rs ,COUNT(rawat.id_rawat) as jumlah FROM `rawat` INNER JOIN tempat_tidur on tempat_tidur.id_tempat_tidur=rawat.id_tempat_tidur INNER join kamar on tempat_tidur.id_kamar=kamar.id_kamar INNER JOIN ruang on kamar.id_ruang=ruang.id_ruang INNER JOIN rs on ruang.kode_rs=rs.kode_rs WHERE YEAR(rawat.tanggal_masuk)='$id' GROUP BY rs.kode_rs order by rs.kode_rs DESC");
        return $query->result();
    }

    function tahun()
    {
        $query=$this->db->query("SELECT DISTINCT YEAR(tanggal_masuk) as tahun from `rawat` ");
        return $query->result();
    }


    function tambah()
    {
      $password = $this->input->post('password');
      $ulangi_password = $this->input->post('ulangi_password');
      if($password==$ulangi_password){
          $nama_lengkap = $this->input->post('nama_lengkap');
          $password =md5( $this->input->post('password'));
          $username = $this->input->post('username');
          $data = array(
              'nama_lengkap'=>$nama_lengkap,
              'password'=>$password,
              'username'=>$username
          );
          $cek=$this->db->insert('admin',$data);
          return $cek;
      }else{
        return false;
      }
    }

    function Edit($id,$new)
    {
      $data = array(
          'id_prodi'=>$id_prodi,
          'nama_prodi'=>$nama,
          'logo'=>$new
      );


          $this->db->where('id_prodi',$id);
          $cek=$this->db->update('prodi',$data);
          return $cek;

    }



    function hapus($id)
    {
      $query=$this->db->where('id_prodi', $id);
      $cek=$this->db->delete('prodi');
      return $cek;
    }


}
