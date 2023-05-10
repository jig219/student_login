<?php

class user extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}

public function index()
{
  
$this->load->view("register");
}
public function change_passl()
{
  
$this->load->view("change_pass");
}
public function register_user()
{

      $user=array(
      'stu_name'=>$this->input->post('stu_name'),
      'stu_std'=>$this->input->post('stu_std'),
      'stu_rnum'=>$this->input->post('stu_rnum'),
      'stu_age'=>$this->input->post('stu_age'),
      'stu_bgroup'=>$this->input->post('stu_bgroup'),
      'stu_mobile'=>$this->input->post('stu_mobile'),
      'stu_email'=>$this->input->post('stu_email'),
      'stu_password'=>md5($this->input->post('stu_password'))
        );
       print_r($user);

$email_check=$this->user_model->email_check($user['stu_email']);

if($email_check){
  $this->user_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Already Register');
  redirect('user');


}

}

public function login_view(){

    $this->load->view("login");
    
}

function login_user(){
    $user_login=array(
  
    'stu_email'=>$this->input->post('stu_email'),
    'stu_password'=>md5($this->input->post('stu_password'))
  
      );
  
      $data=$this->user_model->login_user($user_login['stu_email'],$user_login['stu_password']);
        if($data)
        {
          $this->session->set_userdata('stu_id',$data['stu_id']);
          $this->session->set_userdata('stu_name',$data['stu_name']);
          $this->session->set_userdata('stu_std',$data['stu_std']);
          $this->session->set_userdata('stu_rnum',$data['stu_rnum']);
          $this->session->set_userdata('stu_age',$data['stu_age']);
          $this->session->set_userdata('stu_bgroup',$data['stu_bgroup']);
          $this->session->set_userdata('stu_mobile',$data['stu_mobile']);
          $this->session->set_userdata('stu_email',$data['stu_email']);
  
          $this->load->view('user_profile');
  
        }
        else{
          $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
          $this->load->view("login");
  
        }
  
  }

function user_profile(){
 
    $this->load->view('user_profile');
    
    }
    public function user_logout(){
    
      $this->session->sess_destroy();
      redirect('user/login_view', 'refresh');
}






  public function change_pass(){
        
    $uid = $this->session->userdata('stu_id');
    
    if($uid == "")
    {
        redirect(base_url('login'));
    }
    
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('oldpass', 'Password', 'required');
        $this->form_validation->set_rules('newpass', 'New Password', 'required');
        $this->form_validation->set_rules('confpass', 'Confirm Password', 'required');
        
        if ($this->form_validation->run() === FALSE)
        {
            echo "error";
        
        }
        else
        {
            $password=md5($this->input->post('oldpass'));
            $npassword=md5($this->input->post('newpass'));
            $cpassword=md5($this->input->post('confpass'));
            
            if($npassword==$cpassword)
            {
                $password_check=$this->user_model->password_check_model($password,$uid);
            
                if($password_check){
                  $this->user_model->change_pass_model($npassword,$uid);
                  $this->session->set_flashdata('success_msga', 'Successfully Changed..');
                  redirect(base_url('user/user_profile'));
                }
                else{
                  $this->session->set_flashdata('error_msga', 'Old Password Wrong..');
                  redirect(base_url('user/user_profile'));
                }
            }
            else{
              $this->session->set_flashdata('error_msga', 'New Password And Confirm Password Not Match..');
              redirect(base_url('user/user_profile'));
            }
        }
        
}


}
?>
