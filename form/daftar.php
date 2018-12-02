<?php include_once("../include/header.php"); ?>    

<div class="w-25 ml-auto mr-auto" style="margin-top: 7%;">
    <h1 class="text-center mb-4">Daftar</h1>
    <div class="card text-white bg-dark">                                            
        <div class="card-body">                 
            <div class="form-group">
                <label>Nomor Induk Kependudukan</label>
                <input type="text" class="form-control" placeholder="Masukkan NIK...">
            </div>      
            <div class="form-group">
                <label>Foto Wajah 5 x 5</label>
                <input type="file" class="form-control-file">
            </div>                                                  
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Masukkan Email...">                        
            </div>
            <a href="index.php"><button type="button" class="btn btn-primary btn-lg btn-block">Kirim</button></a>
        </div>
    </div>
</div>

<?php include_once("../include/footer.php"); ?>    