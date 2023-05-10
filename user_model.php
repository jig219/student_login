<?php
class user_model extends CI_model{

  public function __construct()
  {
      $this->load->database();
  }



public function register_user($user){


$this->db->insert('data', $user);

}

public function login_user($email,$pass){

  $this->db->select('*');
  $this->db->from('data');
  $this->db->where('stu_email',$email);
  $this->db->where('stu_password',$pass);

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }


}
public function email_check($email){

  $this->db->select('*');
  $this->db->from('data');
  $this->db->where('stu_email',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}



public function password_check_model($password,$uid){

  $this->db->select('*');
  $this->db->from('data');
  $this->db->where('stu_password',$password);
  $this->db->where('stu_id',$uid);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return true;
  }else{
    return false;
  }

}

public function change_pass_model($npassword,$uid){
    $this->load->helper('url');

    $data = array(
        'stu_password' => $npassword
    );
    
    $this->db->where('stu_id', $uid);
    return $this->db->update('data', $data);
}


}


?>
