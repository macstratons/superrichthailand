<!DOCTYPE html>
<html>
  <head>
    <title>Super Rich Thailand -- Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Core CSS -->
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/superrichth.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:700,400|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
  </head>
  
  <body id="home">
    <!-- NAVBAR -->
    <?php include '_/components/php/topmenu.php'; ?>

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
    
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/superrichth.js"></script>

  </body>
</html>