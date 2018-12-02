<?php include_once("../include/header.php"); ?>  
  
<?php include_once("../include/navbar.php"); ?>

<div class="p-4">
    <div class="card" style="border: 2px solid black">            
        <div class="card-header bg-dark text-center text-white"><h3>Username</h3></div>
        <img class="card-img-top ml-auto mr-auto d-block" src="../img/profile.png" style="width: 20%;">
        
        <div class="card-body">                
            <div class="row" style="height: 350px;">
                <div class="col">
                    <div id="gsifat_utama"></div>
                </div>
                <div class="col">
                    <div id="gsifat_pendukung"></div>
                </div>
            </div>
            <div id="gkemampuan"></div>
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
                    <div class="col">
                        <button type="button" class="btn btn-danger btn-lg btn-block mt-4" data-toggle="modal" data-target="#history">Laporkan</button>
                    </div>                
            </div>                                                                               
        </div>
        <div class="card-footer bg-dark text-white text-center">
            <small class="card-text"><h6>Jumlah Reviewer 10 dari Total Reviewer 250</h6></small>
        </div>
    </div>
</div>

<?php include_once("../include/penilaian.php"); ?>
<?php include_once("../include/history.php"); ?>
<?php include_once("../include/kemampuan.php"); ?>
<?php include_once("../include/sifat_pendukung.php"); ?>        
<?php include_once("../include/sifat_utama.php"); ?>            

<?php include_once("../include/footer.php"); ?>    