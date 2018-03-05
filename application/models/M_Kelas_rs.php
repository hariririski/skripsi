<?php
class M_Kelas_rs extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM kelas_rs");
        return $query->result();
    }


    function tambah()
    {
      $nama_kelas_rs = $this->input->post('nama_kelas_rs');
      $data = array(
          'nama_kelas_rs'=>$nama_kelas_rs
      );
      $cek=$this->db->insert('kelas_rs',$data);
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
