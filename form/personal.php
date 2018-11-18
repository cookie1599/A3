<?php include_once("../include/header.php"); ?>  
  
<?php include_once("../include/navbar.php"); ?>

<div class="bg-info p-4 text-white">
    <div class="card bg-danger">            
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

<?php include_once("../include/penilaian.php"); ?>
<?php include_once("../include/history.php"); ?>
<?php include_once("../include/kemampuan.php"); ?>
<?php include_once("../include/sifat_pendukung.php"); ?>        
<?php include_once("../include/sifat_utama.php"); ?>            

<?php include_once("../include/footer.php"); ?>    