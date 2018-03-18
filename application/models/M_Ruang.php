<?php
class M_Ruang extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM Ruang left join jenis_ruang on ruang.id_jenis_ruang=jenis_ruang.id_jenis_ruang");
        return $query->result();
    }


    function tambah()
    {
      $nama_jenis_ruang = $this->input->post('nama_jenis_ruang');
      $data = array(
          'nama_jenis_ruang'=>$nama_jenis_ruang
      );
      $cek=$this->db->insert('jenis_ruang',$data);
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
