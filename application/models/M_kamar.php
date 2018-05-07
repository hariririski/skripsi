<?php
class M_Kamar extends CI_Model{
    function lihat($id)
    {
        $query=$this->db->query("SELECT * FROM kamar left join kelas_kamar on kamar.id_kelas_kamar=kelas_kamar.id_kelas_kamar where id_ruang='$id'");
        return $query->result();
    }
    function ruang_kamar($id_rs,$id_ruang)
    {
        $query=$this->db->query("SELECT * FROM kamar left join ruang on ruang.id_ruang=kamar.id_ruang where ruang.id_ruang='$id_ruang' and ruang.kode_rs='$id_rs' ");
        return $query->result();
    }
    function lihat_per($id)
    {
        $query=$this->db->query("SELECT * FROM kamar left join kelas_kamar on kamar.id_kelas_kamar=kelas_kamar.id_kelas_kamar left join ruang on ruang.id_ruang=kamar.id_ruang where kamar.id_kamar='$id'");
        return $query->result();
    }
    function jumlah_kamar($id)
    {
        $query=$this->db->query("SELECT COUNT(id_kamar) as jumlah_kamar from kamar left join ruang on ruang.id_ruang = kamar.id_ruang WHERE ruang.kode_rs='$id'");
        return $query->result();
    }


    function tambah($id_ruang,$id_kamar)
    {

      $data = array(
          'nama_kamar'=>$this->input->post('nama_kamar'),
          'id_kelas_kamar'=>$this->input->post('kelas_kamar'),
          'id_ruang'=>$id_ruang,
          'id_kamar'=>$id_kamar,
      );
      $cek=$this->db->insert('kamar',$data);
      $this->auto_bed($id_kamar,$this->input->post('jumlah_tempat_tidur'));
      return $cek;
    }

    function auto_bed($id_kamar,$jumlah)
    {
      for($i=1;$i<=$jumlah;$i++){
        $data = array(
            'nama_tempat_tidur'=>"Kamar ".$i,
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



    function hapus($id)
    {
      $query=$this->db->where('id_prodi', $id);
      $cek=$this->db->delete('prodi');
      return $cek;
    }


}
