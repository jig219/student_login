<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Registration</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/mystl.css" >
    

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

                      <form role="form" method="post" action="<?php echo base_url('user/edit'); ?>">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Name" name="stu_name" type="text" value="<?php echo $data->stu_name; ?>" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Standard" name="stu_std" type="text" value="<?php echo $data->stu_std; ?>" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Roll-Number" name="stu_rnum" type="number" value="<?php echo $data->stu_rnum; ?>" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Age" name="stu_age" type="number" value="<?php echo $data->stu_age; ?>">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Blood-Group" name="stu_bgroup" type="text" value="<?php echo $data->stu_bgroup; ?>" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Mobile No" name="stu_mobile" type="number" value="<?php echo $data->stu_mobile; ?>">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="E-mail" name="stu_email" type="email" value="<?php echo $data->stu_email; ?>" autofocus>
                              </div>

                             

                              <center><input class="btn btn-success" type="submit" value="Register" name="register" ></center>

                          </fieldset>
                      </form>
                    
                  </div>
              </div>
          </div>
      </div>
  </div>



</body>
</html>
