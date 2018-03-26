<?php
class M_Kamar extends CI_Model{
    function lihat($id)
    {
        $query=$this->db->query("SELECT * FROM kamar left join kelas_kamar on kamar.id_kelas_kamar=kelas_kamar.id_kelas_kamar where id_ruang='$id'");
        return $query->result();
    }


    function tambah()
    {
      $nama_ruang = $this->input->post('nama_ruang');
      $jenis_ruang = $this->input->post('jenis_ruang');
      $data = array(
          'nama_ruang'=>$nama_ruang,
          'id_jenis_ruang'=>$jenis_ruang
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
