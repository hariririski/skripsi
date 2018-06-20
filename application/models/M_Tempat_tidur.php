<?php
class M_tempat_tidur extends CI_Model{
    function lihat($id)
    {
        $query=$this->db->query("SELECT * FROM `tempat_tidur` WHERE id_kamar='$id'");
        return $query->result();
    }
    function semua()
    {
        $query=$this->db->query("SELECT * FROM `tempat_tidur` left JOIN kamar on tempat_tidur.id_kamar=kamar.id_kamar left JOIN kelas_kamar on kelas_kamar.id_kelas_kamar=kamar.id_kelas_kamar left join ruang on kamar.id_ruang=ruang.id_ruang WHERE tempat_tidur.status='0'  ORDER by kelas_kamar.id_kelas_kamar");
        return $query->result();
    }



    function kosong_tempat_tidur($id)
    {
        $query=$this->db->query("SELECT * FROM `tempat_tidur` WHERE id_kamar='$id' and status='0'");
        return $query->result();
    }
    function jlh_kosong_tempat_tidur($id)
    {
        $query=$this->db->query("SELECT count(id_tempat_tidur) as kosong FROM `tempat_tidur` WHERE id_kamar='$id' and status='0'");
        return $query->result();
    }

    function jumlah_tempat_tidur($id)
    {
        $query=$this->db->query("SELECT count(id_tempat_tidur) as jumlah_tempat_tidur FROM `tempat_tidur` WHERE id_kamar='$id' ");
        return $query->result();
    }

    function jumlah_tempat_tidur_kosong($id)
    {
        $query=$this->db->query("SELECT COUNT(id_tempat_tidur) as jumlah_tempat_tidur_kosong from tempat_tidur left join kamar on kamar.id_kamar=tempat_tidur.id_kamar left join ruang on ruang.id_ruang = kamar.id_ruang WHERE ruang.kode_rs='$id' and tempat_tidur.status='0'");
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
      $query=$this->db->where('id_tempat_tidur', $id);
      $cek=$this->db->delete('tempat_tidur');
      return $cek;
    }

    public function fetch_countries($limit, $start) {
        $query = $this->db->query("SELECT * FROM `tempat_tidur` left JOIN kamar on tempat_tidur.id_kamar=kamar.id_kamar left JOIN kelas_kamar on kelas_kamar.id_kelas_kamar=kamar.id_kelas_kamar left join ruang on kamar.id_ruang=ruang.id_ruang left join rs on rs.kode_rs=ruang.kode_rs left join jenis_ruang on jenis_ruang.id_jenis_ruang=ruang.id_jenis_ruang WHERE tempat_tidur.status='0'  ORDER by kelas_kamar.id_kelas_kamar limit $start,$limit ");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
    public function cari_kamar($limit, $start,$kamar,$jenis,$kelas) {
        if($kamar='null'){
          $kamar=null;
        }
         if($jenis==0 && $kelas==0){
          $query = $this->db->query("SELECT * FROM `tempat_tidur` left JOIN kamar on tempat_tidur.id_kamar=kamar.id_kamar left JOIN kelas_kamar on kelas_kamar.id_kelas_kamar=kamar.id_kelas_kamar left join ruang on kamar.id_ruang=ruang.id_ruang left join rs on rs.kode_rs=ruang.kode_rs left join jenis_ruang on jenis_ruang.id_jenis_ruang=ruang.id_jenis_ruang  WHERE tempat_tidur.nama_tempat_tidur like '%$kamar%' or jenis_ruang.id_jenis_ruang='$jenis' or kelas_kamar.id_kelas_kamar='$kelas' and tempat_tidur.status='0' ORDER by kelas_kamar.id_kelas_kamar limit $start,$limit");
        }else if($jenis!=0 && $kelas!=0){
        $query = $this->db->query("SELECT * FROM `tempat_tidur` left JOIN kamar on tempat_tidur.id_kamar=kamar.id_kamar left JOIN kelas_kamar on kelas_kamar.id_kelas_kamar=kamar.id_kelas_kamar left join ruang on kamar.id_ruang=ruang.id_ruang left join rs on rs.kode_rs=ruang.kode_rs left join jenis_ruang on jenis_ruang.id_jenis_ruang=ruang.id_jenis_ruang  WHERE tempat_tidur.nama_tempat_tidur like '%$kamar%' and jenis_ruang.id_jenis_ruang='$jenis' and kelas_kamar.id_kelas_kamar='$kelas' and tempat_tidur.status='0' ORDER by kelas_kamar.id_kelas_kamar limit $start,$limit");
        } else if($jenis!=0 && $kelas==0){
          $query = $this->db->query("SELECT * FROM `tempat_tidur` left JOIN kamar on tempat_tidur.id_kamar=kamar.id_kamar left JOIN kelas_kamar on kelas_kamar.id_kelas_kamar=kamar.id_kelas_kamar left join ruang on kamar.id_ruang=ruang.id_ruang left join rs on rs.kode_rs=ruang.kode_rs left join jenis_ruang on jenis_ruang.id_jenis_ruang=ruang.id_jenis_ruang  WHERE tempat_tidur.nama_tempat_tidur like '%$kamar%' and jenis_ruang.id_jenis_ruang='$jenis' or kelas_kamar.id_kelas_kamar='$kelas' and tempat_tidur.status='0' ORDER by kelas_kamar.id_kelas_kamar limit $start,$limit");
        }else if($jenis==0 && $kelas!=0){
           $query = $this->db->query("SELECT * FROM `tempat_tidur` left JOIN kamar on tempat_tidur.id_kamar=kamar.id_kamar left JOIN kelas_kamar on kelas_kamar.id_kelas_kamar=kamar.id_kelas_kamar left join ruang on kamar.id_ruang=ruang.id_ruang left join rs on rs.kode_rs=ruang.kode_rs left join jenis_ruang on jenis_ruang.id_jenis_ruang=ruang.id_jenis_ruang  WHERE tempat_tidur.nama_tempat_tidur like '%$kamar%' or jenis_ruang.id_jenis_ruang='$jenis' and kelas_kamar.id_kelas_kamar='$kelas' and tempat_tidur.status='0' ORDER by kelas_kamar.id_kelas_kamar limit $start,$limit");
         }
         if ($query->num_rows() > 0) {
             foreach ($query->result() as $row) {
                 $data[] = $row;
             }
             return $data;
         }
         return false;
   }

   public function record_count_cari($kamar,$jenis,$kelas) {

     if($kamar=='null'){
       $kamar=null;
     }
      if($jenis==0 && $kelas==0){
       $query = $this->db->query("SELECT count(tempat_tidur.id_tempat_tidur) as jumlah FROM `tempat_tidur` left JOIN kamar on tempat_tidur.id_kamar=kamar.id_kamar left JOIN kelas_kamar on kelas_kamar.id_kelas_kamar=kamar.id_kelas_kamar left join ruang on kamar.id_ruang=ruang.id_ruang left join rs on rs.kode_rs=ruang.kode_rs left join jenis_ruang on jenis_ruang.id_jenis_ruang=ruang.id_jenis_ruang  WHERE tempat_tidur.nama_tempat_tidur like '%$kamar%' or jenis_ruang.id_jenis_ruang='$jenis' or kelas_kamar.id_kelas_kamar='$kelas' and tempat_tidur.status='0'");
     }else if($jenis!=0 && $kelas!=0){
     $query = $this->db->query("SELECT count(tempat_tidur.id_tempat_tidur) as jumlah FROM `tempat_tidur` left JOIN kamar on tempat_tidur.id_kamar=kamar.id_kamar left JOIN kelas_kamar on kelas_kamar.id_kelas_kamar=kamar.id_kelas_kamar left join ruang on kamar.id_ruang=ruang.id_ruang left join rs on rs.kode_rs=ruang.kode_rs left join jenis_ruang on jenis_ruang.id_jenis_ruang=ruang.id_jenis_ruang  WHERE tempat_tidur.nama_tempat_tidur like '%$kamar%' and jenis_ruang.id_jenis_ruang='$jenis' and kelas_kamar.id_kelas_kamar='$kelas' and tempat_tidur.status='0'");
     } else if($jenis!=0 && $kelas==0){
       $query = $this->db->query("SELECT count(tempat_tidur.id_tempat_tidur) as jumlah FROM `tempat_tidur` left JOIN kamar on tempat_tidur.id_kamar=kamar.id_kamar left JOIN kelas_kamar on kelas_kamar.id_kelas_kamar=kamar.id_kelas_kamar left join ruang on kamar.id_ruang=ruang.id_ruang left join rs on rs.kode_rs=ruang.kode_rs left join jenis_ruang on jenis_ruang.id_jenis_ruang=ruang.id_jenis_ruang  WHERE tempat_tidur.nama_tempat_tidur like '%$kamar%' and jenis_ruang.id_jenis_ruang='$jenis' or kelas_kamar.id_kelas_kamar='$kelas' and tempat_tidur.status='0'");
     }else if($jenis==0 && $kelas!=0){
        $query = $this->db->query("SELECT count(tempat_tidur.id_tempat_tidur) as jumlah FROM `tempat_tidur` left JOIN kamar on tempat_tidur.id_kamar=kamar.id_kamar left JOIN kelas_kamar on kelas_kamar.id_kelas_kamar=kamar.id_kelas_kamar left join ruang on kamar.id_ruang=ruang.id_ruang left join rs on rs.kode_rs=ruang.kode_rs left join jenis_ruang on jenis_ruang.id_jenis_ruang=ruang.id_jenis_ruang  WHERE tempat_tidur.nama_tempat_tidur like '%$kamar%' or jenis_ruang.id_jenis_ruang='$jenis' and kelas_kamar.id_kelas_kamar='$kelas' and tempat_tidur.status='0'");
      }

        return $query->result();
   }
   public function record_count() {
     $query = $this->db->query("SELECT count(tempat_tidur.id_tempat_tidur) as jumlah FROM `tempat_tidur` left JOIN kamar on tempat_tidur.id_kamar=kamar.id_kamar left JOIN kelas_kamar on kelas_kamar.id_kelas_kamar=kamar.id_kelas_kamar left join ruang on kamar.id_ruang=ruang.id_ruang left join rs on rs.kode_rs=ruang.kode_rs left join jenis_ruang on jenis_ruang.id_jenis_ruang=ruang.id_jenis_ruang WHERE tempat_tidur.status='0' ");
        return $query->result();
   }


}
