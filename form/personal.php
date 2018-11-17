<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Statistik Personal</title>
  </head>
  <body class="bg-info text-white">
      
    <?php include_once("../include/navbar.php"); ?>

    <div class="bg-info text-white p-4">
        <div class="card text-white bg-danger">            
            <div class="card-header ml-auto mr-auto"><h3>Username</h3></div>
            <img class="card-img-top ml-auto mr-auto d-block" src="../image/profile.png" style="width: 20%;">
            <div class="card-body ml-auto mr-auto">                
                <p class="card-text">Grafik</p>
            </div>
            <div class="card-body">    
                <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-primary btn-lg btn-block mt-4" data-toggle="modal" data-target="#sifat_utama">Nilai Sifat Utama</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-primary btn-lg btn-block mt-4" data-toggle="modal" data-target="#sifat_pendukung">Nilai Sifat Pendukung</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary btn-lg btn-block mt-4" data-toggle="modal" data-target="#kemampuan">Nilai Kemampuan</button>
                        </div>
                    <div class="w-100"></div>
                        <div class="col">
                                <button type="button" class="btn btn-success btn-lg btn-block mt-4" data-toggle="modal" data-target="#history">History</button>    
                        </div>
                        <div class="col">
                                <button type="button" class="btn btn-success btn-lg btn-block mt-4" data-toggle="modal" data-target="#penilaian">Penilaian Reviewer</button>
                        </div>
                </div>                                                                               
            </div>
            <div class="card-footer">
                <small class="card-text"><h6>Jumlah Reviewer n dari Total Reviewer n</h6></small>
            </div>
        </div>
    </div>

    <?php include_once("../include/sifat_utama.php"); ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>