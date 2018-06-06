<?php
class M_Jenis_rs extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM jenis_rs");
        return $query->result();
    }


    function tambah()
    {
      $nama_jenis_rs = $this->input->post('nama_jenis_rs');
      $data = array(
          'nama_jenis_rs'=>$nama_jenis_rs
      );
      $cek=$this->db->insert('jenis_rs',$data);
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
      $query=$this->db->where('id_jenis_rs', $id);
      $cek=$this->db->delete('jenis_rs');
      return $cek;
    }


}
