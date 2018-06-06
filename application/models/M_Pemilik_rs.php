<?php
class M_Pemilik_rs extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM pemilik_rs");
        return $query->result();
    }


    function tambah()
    {
      $nama_pemilik_rs = $this->input->post('nama_pemilik_rs');
      $data = array(
          'nama_pemilik_rs'=>$nama_pemilik_rs
      );
      $cek=$this->db->insert('pemilik_rs',$data);
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
      $query=$this->db->where('id_pemilik', $id);
      $cek=$this->db->delete('pemilik_rs');
      return $cek;
    }


}
