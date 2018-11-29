<?php include_once("../include/header.php"); ?>    
      
<?php include_once("../include/navbar.php"); ?>

<div class="card-group text-white p-4">        
    <div class="card text-white">                        
        <input class="form-control mr-sm-3" type="search" placeholder="Contoh : ayuamalia" aria-label="Search" style="border: 2px">
        <button class="btn btn-primary my-2 my-sm-0" type="submit" style="border-radius: 2px">Username Satu</button>
    </div>

    <div class="card text-white">                        
        <input class="form-control mr-sm-3" type="search" placeholder="Contoh : atrisaendya" aria-label="Search" style="border: 2px">
        <button class="btn btn-primary my-2 my-sm-0" type="submit" style="border-radius: 2px">Username Dua</button>
    </div>
</div>

<div class="card-group text-white p-4 text-center">        
    <div class="card">                        
        <div class="card-header bg-dark"><h3>Username Satu</h3></div>
        <img class="card-img-top ml-auto mr-auto d-block" src="../img/profile.png" style="width: 20%;">
        <div class="card-body">                
            <div id="gb1sifat_utama"></div>
        </div>            
        <div class="card-footer bg-dark">
            <small class="card-text"><h6>Jumlah Reviewer n dari Total Reviewer n</h6></small>
        </div>
    </div>
    
    <div class="card">                        
        <div class="card-header bg-dark"><h3>Username Dua</h3></div>
        <img class="card-img-top ml-auto mr-auto d-block" src="../img/profile.png" style="width: 20%;">
        <div class="card-body">                
            <div id="gb2sifat_utama"></div>
        </div>            
        <div class="card-footer bg-dark">
            <small class="card-text"><h6>Jumlah Reviewer n dari Total Reviewer n</h6></small>
        </div>
    </div>
</div>

<div class="card p-4 text-white text-center">
    <div class="card">            
        <div class="card-header bg-dark"><h3>Membandingkan</h3></div>            
        <div class="card-body">                
            <div id="gpsifat_utama"></div>
        </div>   
    </div>
</div>

<?php include_once("../include/footer.php"); ?>    