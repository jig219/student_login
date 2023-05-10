
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Student Login</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/loginstyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
  </head>
  <body>
    
    <div class="container-fluid" id="back">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
            <div class="login-panel">
                <div class="panel-heading">
                    <h3 style="color:white; font-weight:bold; font-size:30px; border-bottom:2px solid black;" class="panel-title">Student Login</h3>
                </div>
                <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>

                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="stu_email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="stu_password" type="password" value="">
                            </div>


                            <center><input class="btn btn-lg btn-success" type="submit" value="login" name="login"></center>

                        </fieldset>
                    </form>
                <center><b>Not registered ?</b> <br></b><a href="<?php echo base_url('user'); ?>">Register here</a></center>

                </div>
            </div>
        </div>
    </div>
</div>


  </body>
</html>
