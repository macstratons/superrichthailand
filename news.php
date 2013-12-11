<!DOCTYPE html>
<html>
  <head>
    <title>Super Rich Thailand -- News Update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Core CSS -->
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/superrichth.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:700,400|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
  </head>
  
  <body id="news">
    <!-- NAVBAR -->
    <?php include '_/components/php/topmenu.php'; ?>

    <!-- CONTENT -->
    <div class="container">
      <div class="row" id="content-margin">
        <?php include '_/components/php/snippet-newslist.php'; ?>
        <?php include '_/components/php/snippet-activities.php'; ?>
      </div><!-- end row -->
    </div><!-- /.container -->

    <!-- FOOTER -->
    <?php include '_/components/php/footer.php'; ?>

    <!-- Scroll To Top --> 
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/superrichth.js"></script>

  </body>
</html>