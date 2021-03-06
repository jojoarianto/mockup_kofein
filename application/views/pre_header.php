<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="root-url" content="<?php echo base_url(); ?>">
    <meta name="description" content="Olimpiade Farmasi Universitas Airlangga">
    <link rel="shortcut icon" href="http://kofeinunair.com/images/ico/favicon.ico">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php if (isset($title)) {echo "";} else {echo "KOFEIN 2016";} ?></title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- extentsion for icheck library -->
    <style type="text/css">
    body {
      font-family: MuseoSans, serif;
    }
    .shadow {
        box-shadow: 0 1px 0px 0 rgba(0, 0, 0, 0.2), 0 3px 20px 0 rgba(0, 0, 0, 0.19);
    }
    </style>
    <!-- custom css and js-->
    <?php echo loadCssPreHeader() ?>
    <?php echo loadJsPreHeader() ?>
  </head>
  <body>