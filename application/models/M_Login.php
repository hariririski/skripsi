<?php
    class M_login extends CI_Model{
      function login(){

  			$username = $this->input->post('username');
  			$password= $this->input->post('password');
        $cek=is_numeric($username);
        $password=md5($password);
        if($cek==true){
          $sql="SELECT * FROM mahasiswa where npm='$username' and password='$password'";
      		$query = $this->db->query($sql);
        }else if($cek==false){
          $sql="SELECT * FROM user where username='$username' and password='$password'";
          $query = $this->db->query($sql);
        }
          return $query->result();
      }

      function mhs($username){
          $sql="SELECT * FROM mahasiswa where npm='$username' ";
          $query = $this->db->query($sql);
            return $query->result();
      }
      function prodi($username){
          $sql="SELECT * FROM user where username='$username' ";
          $query = $this->db->query($sql);
            return $query->result();
      }


		function daftar(){
			$password_baru = md5($this->input->post('password'));
			$ulangi_password = md5($this->input->post('ulangi_password'));
			if($password_baru==$ulangi_password){
				$mahasiswa = array(
				  'npm'=>$this->input->post('npm'),
				  'nama'=>$this->input->post('nama'),
				  'alamat'=>$this->input->post('alamat'),
				  'email'=>$this->input->post('email'),
				  'id_prodi'=>$this->input->post('prodi'),
				  'no_hp'=>$this->input->post('no_hp'),
          'password'=>$password_baru

				);


			$cek1=$this->db->insert('mahasiswa',$mahasiswa);

			if($cek1){
				return true;
      }else{
        return true;
      }

			}else{
				return false;
			}
		}
	}
?>
