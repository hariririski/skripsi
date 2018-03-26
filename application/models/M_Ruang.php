<?php
class M_Ruang extends CI_Model{
    function lihat()
    {
        $id=$this->session->userdata('rs');
        $query=$this->db->query("SELECT * FROM Ruang left join jenis_ruang on ruang.id_jenis_ruang=jenis_ruang.id_jenis_ruang where ruang.kode_rs='$id'");
        return $query->result();
    }
    function lihat_per($id)
    {
        $query=$this->db->query("SELECT * FROM Ruang left join jenis_ruang on ruang.id_jenis_ruang=jenis_ruang.id_jenis_ruang where ruang.id_ruang='$id'");
        return $query->result();
    }

    function lihat_ruang($id)
    {
        $query=$this->db->query("SELECT * FROM Ruang left join jenis_ruang on ruang.id_jenis_ruang=jenis_ruang.id_jenis_ruang left join rs on rs.kode_rs=ruang.kode_rs where ruang.kode_rs='$id'");
        return $query->result();
    }


    function tambah()
    {
      $nama_ruang = $this->input->post('nama_ruang');
      $jenis_ruang = $this->input->post('jenis_ruang');
      $kode_rs=$id=$this->session->userdata('rs');
      $data = array(
          'nama_ruang'=>$nama_ruang,
          'id_jenis_ruang'=>$jenis_ruang,
          'kode_rs'=>$kode_rs
      );
      $cek=$this->db->insert('ruang',$data);
      return $cek;
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
