<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Registration</title>
    <link rel="stylesheet" type="text/css" href="assets/css/mystl.css" >
    

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">


</head>
<body>

<div class="container-fluid" id="back">
      <div class="row">
          <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
              <div class="login-panel panel">
                  <div class="panel-heading">
                      <h3 style="color:green;" class="text-center"><b>Student Registration</b></h3>
                  </div>
                  <div class="panel-body">

                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>

                    <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
                        <fieldset>
                            <div class="row">
                                <div class="col-md-7">
                                    <label class="form-label">Student Name</label>
                                    <input type="text" name="stu_name" class="form-control">
                                </div>

                                <div class="col-md-7">
                                    <label class="form-label">STD</label>
                                    <input type="text" name="stu_std" class="form-control">
                                </div>

                                <div class="col-md-7">
                                    <label class="form-label">Roll Numbers</label>
                                    <input type="number" name="stu_rnum" class="form-control">
                                </div>

                                <!-- <div class="col-md-7">
                                    <label class="form-label">Gender</label>
                                    <select name="stu_age" class="form-control">
                                        <option value="">--Select Gender--</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div> -->

                                <div class="col-md-7">
                                    <label class="form-label">Age</label>
                                    <input type="number" name="stu_age" class="form-control">
                                </div>

                                <div class="col-md-7">
                                    <label class="form-label">Blood group</label>
                                    <input type="text" name="stu_bgroup" class="form-control">
                                </div>

                                <div class="col-md-7">
                                    <label class="form-label">Mobile</label>
                                    <input type="number" name="stu_mobile" class="form-control">
                                </div>

                                <div class="col-md-7">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" name="stu_email" class="form-control">
                                </div>
                                <div class="col-md-7">
                                    <label class="form-label">Password</label>
                                    <input type="text" name="stu_password" class="form-control">
                                </div>
                            </div> 

                            <center><input class="btn btn-success" type="submit" value="Register" name="register" ></center>

                        </fieldset>
                    </form>
                            <center><b>Already registered ?</b> <br></b><a href="<?php echo base_url('user/login_view'); ?>">Login here</a></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>



</body>
</html>
