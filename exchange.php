<!DOCTYPE html>
<html>
  <head>
    <title>Super Rich Thailand -- Exchange Rate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Core CSS -->
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/superrichth.css" rel="stylesheet">

    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:700,400|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
  </head>
  
  <body id="exchange">
    <!-- NAVBAR -->
    <?php include '_/components/php/header.php'; ?>
    
    <!-- CONTENT -->
    <div class="container">
      <div class="row" id="content-margin">
        <?php include '_/components/php/snippet-currencytable.php'; ?>

        <div class="col-sm-12 col-lg-4">
          <!-- Currency Converter -->
          <?php include '_/components/php/snippet-converter.php'; ?>

          <!-- Latest Announcement -->
          <?php include '_/components/php/snippet-latestnews.php'; ?>

          <!-- Currency Graph -->
          <?php include '_/components/php/snippet-currencygraph.php'; ?>

          <!-- Historical Exchange Rate -->
          <?php include '_/components/php/snippet-historicalexchange.php'; ?>
        </div><!-- /.col-lg-4 -->
      </div><!-- end row -->
    </div><!-- end container -->

    <!-- FOOTER -->
    <?php include '_/components/php/footer.php'; ?>

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/superrichth.js"></script>

  </body>
</html>