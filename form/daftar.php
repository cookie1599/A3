<?php include_once("../include/header.php"); ?>    

<div class="bg-info text-white" id="kotak">
    <h1 align="center" style="color: white;">Daftar Statistik Personal</h1>
    <div class="card text-white bg-danger">                                            
        <div class="card-body">                 
            <div class="form-group">
                <label>Nomor Induk Kependudukan</label>
                <input type="text" class="form-control" placeholder="Contoh : 3201012103990008">
            </div>      
            <div class="form-group">
                <label>Foto Wajah 5 x 5</label>
                <input type="file" class="form-control-file">
            </div>                                                  
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Contoh : muhazharrasyad@gmail.com">                        
            </div>
            <button type="button" class="btn btn-primary btn-lg btn-block">Kirim</button>
        </div>
    </div>
</div>

<?php include_once("../include/footer.php"); ?>    