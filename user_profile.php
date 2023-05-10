<?php
$user_id=$this->session->userdata('stu_id');

if(!$user_id){

  redirect('user/login_view');
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Student Profile</title>
  

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/us_pro.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>

<div class="container-fluid iim">
  <div class="row">
    <div class="col-md-12">

      <table class="table">
          <thead class="table-info">
            <tr>
              <th scop="col">Name</th>
              <th scop="col">Standard</th>
              <th scop="col">Roll-Number</th>
              <th scop="col">Age</th>
              <th scop="col">Blood Group</th>
              <th scop="col">Mobile</th>
              <th scop="col">E-mail</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <td><?php echo $this->session->userdata('stu_name'); ?></td>
            <td><?php echo $this->session->userdata('stu_std');  ?></td>
            <td><?php echo $this->session->userdata('stu_rnum');  ?></td>
            <td><?php echo $this->session->userdata('stu_age');  ?></td>
            <td><?php echo $this->session->userdata('stu_bgroup');  ?></td>
            <td><?php echo $this->session->userdata('stu_mobile');  ?></td>
            <td><?php echo $this->session->userdata('stu_email');  ?></td>
            </tr>
          </tbody>
      </table>


    </div>
  </div>
<a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
<a href="<?php echo base_url('user/change_passl');?>" >  <button type="button" class="btn-primary">change_pass</button></a>
<!-- <a href="<?php echo base_url('user/edit');?>" >  <button type="button" class="btn-success">Edit_Data</button></a> -->

</div>
  </body>
</html>
