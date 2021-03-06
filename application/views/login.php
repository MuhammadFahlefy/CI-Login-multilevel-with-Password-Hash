<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url().'assets/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?= base_url().'assets/vendor/metisMenu/metisMenu.min.css' ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url().'assets/dist/css/sb-admin-2.css' ?>" rel="stylesheet">

    <!-- Custom Fonts -->
	<link href="<?= base_url().'assets/vendor/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet" type="text/css">
	
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default panel-warning">
                    <div class="panel-heading">
                        <center> <h1 class="panel-title">SIGN IN</h1> </center>
                    </div>
                    <div class="panel-body">
                        <?php if( $this->session->flashdata('wrong') ) { ?> 
                            <div class='alert alert-danger'>
                                <center><?= $this->session->flashdata('wrong'); ?></center>
                            </div>
                        <?php } else if( $this->session->flashdata('mess') ) { ?>
                            <div class='alert alert-info'>
                                <center><?= $this->session->flashdata('mess'); ?></center>
                            </div>
                        <?php } else if( $this->session->flashdata('notLogin') ) { ?>
                            <div class='alert alert-info'>
                                <center><?= $this->session->flashdata('notLogin'); ?></center>
                            </div>
                        <?php } ?>
                        <form  action="<?= base_url() . 'Login/login_proses'; ?>" method="post" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="email" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
                                </div>
                                <p>Don't have an account? <a href="<?= base_url('Regist') ?>">Register</a></p>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-warning btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url().'assets/vendor/jquery/jquery.min.js' ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url().'assets/vendor/bootstrap/js/bootstrap.min.js' ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= base_url().'assets/vendor/metisMenu/metisMenu.min.js' ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url().'assets/dist/js/sb-admin-2.js' ?>"></script>

    <script type="application/javascript">
     $(window).bind("load", function() {  
       window.setTimeout(function() {  
         $(".alert").fadeTo(1500, 0).slideUp(500, function() {  
           $(this).remove();  
         });  
       }, 2000);  
     });  
   </script>

</body>

</html>
