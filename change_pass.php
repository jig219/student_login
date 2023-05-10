
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Password Changes</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/change.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
  </head>
  <body>
    
    <div class="container-fluid img">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
            <div class="login-panel">
                <div class="panel-heading">
                    <h3 style="color:white; font-weight:bold; font-size:30px; border-bottom:2px solid black;" class="panel-title">CHANGE PASSWORD</h3>
                </div>
                <?php
              $success_msg= $this->session->flashdata('success_msga');
              $error_msg= $this->session->flashdata('error_msga');

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
                    <form role="form" method="post" action="<?php echo base_url('user/change_pass'); ?>">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Old-password" name="oldpass" type="password" autofocus>
                                <input class="form-control" placeholder="Old-password" name="id" type="hidden" autofocus>

                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="New-password" name="newpass" type="password" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Confirm-password" name="confpass" type="password" autofocus>
                            </div>


                            <center><input class="btn btn-lg btn-success" type="submit" value="submit" name="submit"></center>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


  </body>
</html>
