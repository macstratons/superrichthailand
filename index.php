<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Super Rich Thailand -- Home</title>
    <!-- Bootstrap Core CSS -->
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/superrichth.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon@2x.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body id="home">
    <!-- NAVBAR -->
    <?php include '_/components/php/header.php'; ?>

    <!-- CAROUSEL -->
    <?php include '_/components/php/carousel.php'; ?>

    <!-- CONTENT -->
    <div class="container">
      <div class="row">
        <?php include '_/components/php/snippet-announcement.php'; ?>
        <?php include '_/components/php/snippet-ratetable.php'; ?>
        <?php include '_/components/php/snippet-mobileapp.php'; ?>
        
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->

    <!-- FOOTER -->
    <?php include '_/components/php/footer.php'; ?>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/superrichth.js"></script>

  </body>
</html>