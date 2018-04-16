<?php
class M_tempat_tidur extends CI_Model{
    function lihat($id)
    {
        $query=$this->db->query("SELECT * FROM `tempat_tidur` WHERE id_kamar='$id'");
        return $query->result();
    }

    function kosong_tempat_tidur($id)
    {
        $query=$this->db->query("SELECT * FROM `tempat_tidur` WHERE id_kamar='$id' and status='0'");
        return $query->result();
    }


    function tambah($id_kamar)
    {
      $data = array(
          'nama_tempat_tidur'=>$this->input->post('nama_tempat_tidur'),
          'id_kamar'=>$id_kamar,
      );
      $cek=$this->db->insert('tempat_tidur',$data);
      return $cek;
    }

    function auto_bed($id_kamar,$jumlah)
    {
      for($i=1;$i<=$jumlah;$i++){
        $data = array(
            'nama_tempat_tidur'=>"Bed ".$i,
            'id_kamar'=>$id_kamar
        );
        $cek=$this->db->insert('tempat_tidur',$data);
      }
      return true;
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
    function kosong($id_tempat_tidur)
    {
      $data = array(
          'status'=>'0'

      );


          $this->db->where('id_tempat_tidur',$id_tempat_tidur);
          $cek=$this->db->update('tempat_tidur',$data);
          return $cek;

    }
    function terisi($id_tempat_tidur)
    {
      $data = array(
          'status'=>'1'

      );


          $this->db->where('id_tempat_tidur',$id_tempat_tidur);
          $cek=$this->db->update('tempat_tidur',$data);
          return $cek;

    }



    function hapus($id)
    {
      $query=$this->db->where('id_prodi', $id);
      $cek=$this->db->delete('prodi');
      return $cek;
    }


}
