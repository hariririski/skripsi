<?php
class M_Admin extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM admin");
        return $query->result();
    }


    function tambah()
    {
      $password = $this->input->post('password');
      $ulangi_password = $this->input->post('ulangi_password');
      if($password==$ulangi_password){
          $nama_lengkap = $this->input->post('nama_lengkap');
          $password =md5( $this->input->post('password'));
          $username = $this->input->post('username');
          $data = array(
              'nama_lengkap'=>$nama_lengkap,
              'password'=>$password,
              'username'=>$username
          );
          $cek=$this->db->insert('admin',$data);
          return $cek;
      }else{
        return false;
      }
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
