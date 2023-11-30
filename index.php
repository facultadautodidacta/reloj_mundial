<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Reloj mundial</title>
  </head>
  <body>
    
    <?php 
        date_default_timezone_set('America/Mexico_City');
        $cdmx = '<strong>CDMX:</strong> ' . date('H:i:s');

        date_default_timezone_set('America/New_York');
        $new_york = '<strong>New York</strong>: ' . date('H:i:s');

        date_default_timezone_set('Europe/London');
        $londres = '<strong>Londres</strong>: ' . date('H:i:s');

        date_default_timezone_set('Asia/Tokyo');
        $tokyo = '<strong>Tokyo</strong>: ' . date('H:i:s');
    ?>

    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2>Reloj mundial</h2>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="alert alert-success" role="alert">
                                    <?php echo $cdmx; ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="alert alert-primary" role="alert">
                                    <?php echo $new_york; ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="alert alert-warning" role="alert">
                                    <?php echo $londres; ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $tokyo; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>