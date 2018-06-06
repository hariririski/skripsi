<?php
class M_jenis_kelamin extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM jenis_kelamin");
        return $query->result();
    }


    function tambah()
    {
      $nama_jenis_kelamin = $this->input->post('nama_jenis_kelamin');
      $data = array(
          'nama_jenis_kelamin'=>$nama_jenis_kelamin,
      );
      $cek=$this->db->insert('jenis_kelamin',$data);
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
      $query=$this->db->where('id_jenis_kelamin', $id);
      $cek=$this->db->delete('jenis_kelamin');
      return $cek;
    }


}
