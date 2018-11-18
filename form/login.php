<?php include_once("../include/header.php"); ?>                   

<div class="bg-info text-white" id="kotak">
    <h1 align="center" style="color: white;">Login Statistik Personal</h1>
    <div class="card text-white bg-danger">                                            
        <div class="card-body">                 
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Contoh : mazharrasyad">
            </div>      
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Contoh : ******">
            </div>
            <a href="personal.php"><button type="button" class="btn btn-primary btn-lg btn-block">Masuk</button></a>
            <a href="../index.php"><button type="button" class="btn btn-success btn-lg btn-block mt-2">Batal</button></a>
        </div>
    </div>
</div>

<?php include_once("../include/footer.php"); ?>    