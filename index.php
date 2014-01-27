<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Super Rich Thailand -- Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Core CSS -->
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/superrichth.css" rel="stylesheet">
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

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/superrichth.js"></script>

  </body>
</html>