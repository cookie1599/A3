<?php include_once("../include/header.php"); ?>                   

<div class="w-25 ml-auto mr-auto" style="margin-top: 7%;">
    <h1 class="text-center mb-4">Login</h1>
    <div class="card text-white bg-dark">                                            
        <div class="card-body">                 
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Masukkan Username...">
            </div>      
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Masukkan Password...">
            </div>
            <a href="personal.php"><button type="button" class="btn btn-primary btn-lg btn-block mt-4">Masuk</button></a>
            <a href="../index.php"><button type="button" class="btn btn-danger btn-lg btn-block mt-4">Batal</button></a>
        </div>
    </div>
</div>

<?php include_once("../include/footer.php"); ?>    