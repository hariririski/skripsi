<?php
class M_Pasien extends CI_Model{
    function rawat($id)
    {
        $query=$this->db->query("SELECT * from rawat left JOIN tempat_tidur on rawat.id_tempat_tidur=tempat_tidur.id_tempat_tidur LEFT JOIN kamar on tempat_tidur.id_kamar=kamar.id_kamar left JOIN ruang on kamar.id_ruang=ruang.id_ruang LEFT JOIN rs on ruang.kode_rs=rs.kode_rs LEFT JOIN pasien on rawat.nik=pasien.nik left JOIN jenis_kelamin on pasien.id_jenis_kelamin=jenis_kelamin.id_jenis_kelamin where rawat.tanggal_keluar is null and rs.kode_rs='$id' ");
        return $query->result();
    }
    function rawat_pasien($id)
    {
        $query=$this->db->query("SELECT * from pasien left join jenis_kelamin on jenis_kelamin.id_jenis_kelamin=pasien.id_jenis_kelamin where nik='$id' ");
        return $query->result();
    }
    function selesai($id)
    {
        $query=$this->db->query("SELECT * from rawat left JOIN tempat_tidur on rawat.id_tempat_tidur=tempat_tidur.id_tempat_tidur LEFT JOIN kamar on tempat_tidur.id_kamar=kamar.id_kamar left JOIN ruang on kamar.id_ruang=ruang.id_ruang LEFT JOIN rs on ruang.kode_rs=rs.kode_rs LEFT JOIN pasien on rawat.nik=pasien.nik left JOIN jenis_kelamin on pasien.id_jenis_kelamin=jenis_kelamin.id_jenis_kelamin where rawat.tanggal_keluar is not null and rs.kode_rs='$id'");
        return $query->result();
    }
    function tersedia($nik)
    {
        $this->db->where('nik',$nik);
        $query=$this->db->get('pasien');
        return $query->result();
    }

    function cek_rawat($nik,$kode_rs)
    {
        $query=$this->db->query("SELECT * from rawat left JOIN tempat_tidur on rawat.id_tempat_tidur=tempat_tidur.id_tempat_tidur LEFT JOIN kamar on tempat_tidur.id_kamar=kamar.id_kamar left JOIN ruang on kamar.id_ruang=ruang.id_ruang LEFT JOIN rs on ruang.kode_rs=rs.kode_rs LEFT JOIN pasien on rawat.nik=pasien.nik left JOIN jenis_kelamin on pasien.id_jenis_kelamin=jenis_kelamin.id_jenis_kelamin where rawat.tanggal_keluar is null and rs.kode_rs='$kode_rs' and rawat.nik='$nik'");
        return $query->num_rows();
    }


    function tambah_pasien()
    {
      $pasien = array(
          'nik'=>$this->input->post('nik'),
          'nama_pasien'=>$this->input->post('nama_pasien'),
          'id_jenis_kelamin'=>$this->input->post('id_jenis_kelamin'),

      );
      $rawat = array(
          'id_tempat_tidur'=>$this->input->post('tempat_tidur'),
          'nik'=>$this->input->post('nik'),
          'tanggal_masuk'=>$this->input->post('tanggal_masuk'),
      );

      $data = array(
          'status'=>'1'

      );

      $this->db->where('id_tempat_tidur',$this->input->post('tempat_tidur'));
      $cek=$this->db->update('tempat_tidur',$data);

      $cek=$this->db->insert('pasien',$pasien);
      $cek=$this->db->insert('rawat',$rawat);
      return $cek;
    }


    function tambah_rawat()
    {

      $rawat = array(
          'id_tempat_tidur'=>$this->input->post('tempat_tidur'),
          'nik'=>$this->input->post('nik'),
          'tanggal_masuk'=>$this->input->post('tanggal_masuk'),


      );

      $data = array(
          'status'=>'1'

      );


      $this->db->where('id_tempat_tidur',$this->input->post('tempat_tidur'));
      $cek=$this->db->update('tempat_tidur',$data);

      $cek=$this->db->insert('rawat',$rawat);
      return $cek;
    }

    function keluar($id_rawat)
    {

      $data = array(
          'tanggal_keluar'=>$this->input->post('tanggal_keluar')

      );
      $this->db->where('id_rawat',$id_rawat);
      $cek=$this->db->update('rawat',$data);
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
