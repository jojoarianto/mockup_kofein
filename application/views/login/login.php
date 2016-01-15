<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php if (isset($title)) {echo "";} else {echo "KOFEIN 2016";} ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- custom css -->
    <link href="<?php echo base_url() ?>assets/css/kofein-custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
  		<!-- <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">Log out</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">KOFEIN 2016</h3>
    	</div> -->

      <div class="row col-md-6 col-md-offset-3" style="margin-top:90px;">
        <h3>Login</h3>
        <hr>
        <form method="POST" action="http://artodo.co.id/auth/register" accept-charset="UTF-8"><input name="_token" type="hidden" value="ZmIlF9j9LMTzUAZ1TUFlLuHaJURR4kmWTYnlRsHa">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input class="form-control" placeholder="Your full name" required="required" autofocus="autofocus" name="name" type="text" value="">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" placeholder="example@example.com" required="required" name="email" type="email" value="">
          </div>
          <div class="form-group text-center">
            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Login">
          </div>
          <p>belum punya akun kofein? silahkan dafar <a href="#">disini</a></p>
        </form>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>