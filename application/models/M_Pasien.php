<?php
class M_Pasien extends CI_Model{
    function rawat($id)
    {
        $query=$this->db->query("SELECT * from rawat left JOIN tempat_tidur on rawat.id_tempat_tidur=tempat_tidur.id_tempat_tidur LEFT JOIN kamar on tempat_tidur.id_kamar=kamar.id_kamar left JOIN ruang on kamar.id_ruang=ruang.id_ruang LEFT JOIN rs on ruang.kode_rs=rs.kode_rs LEFT JOIN pasien on rawat.nik=pasien.nik left JOIN jenis_kelamin on pasien.id_jenis_kelamin=jenis_kelamin.id_jenis_kelamin where rawat.tanggal_keluar is null and rs.kode_rs='$id' ");
        return $query->result();
    }
    function selesai($id)
    {
        $query=$this->db->query("SELECT * from rawat left JOIN tempat_tidur on rawat.id_tempat_tidur=tempat_tidur.id_tempat_tidur LEFT JOIN kamar on tempat_tidur.id_kamar=kamar.id_kamar left JOIN ruang on kamar.id_ruang=ruang.id_ruang LEFT JOIN rs on ruang.kode_rs=rs.kode_rs LEFT JOIN pasien on rawat.nik=pasien.nik left JOIN jenis_kelamin on pasien.id_jenis_kelamin=jenis_kelamin.id_jenis_kelamin where rawat.tanggal_keluar is not null and rs.kode_rs='$id'");
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
