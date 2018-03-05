<?php
class M_Kelas_kamar extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM kelas_kamar");
        return $query->result();
    }


    function tambah()
    {
      $nama_kelas_kamar = $this->input->post('nama_kelas_kamar');
      $data = array(
          'nama_kelas_kamar'=>$nama_kelas_kamar
      );
      $cek=$this->db->insert('kelas_kamar',$data);
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
