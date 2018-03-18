<?php
class M_Rs extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE verfikasi='1'");
        return $query->result();
    }
    function lihat_rs($id)
    {
        $query=$this->db->query("SELECT * FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE rs.kode_rs='$id'");
        return $query->result();
    }

    function lihat_verifikasi()
    {
        $query=$this->db->query("SELECT * FROM `rs` LEFT JOIN pemilik_rs on pemilik_rs.id_pemilik=rs.id_pemilik left JOIN kelas_rs on kelas_rs.id_kelas_rs=rs.id_kelas_rs left JOIN jenis_rs on jenis_rs.id_jenis_rs=rs.id_jenis_rs WHERE rs.verfikasi is null");
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
