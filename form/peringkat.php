<?php include_once("../include/header.php"); ?>    

<?php include_once("../include/navbar.php"); ?>

<div class="table-responsive">
<table class="table-hover table-light text-dark mt-4">
  <thead align="center">
    <tr class="bg-danger text-white">
      <th scope="col" style="width: 10%; padding: 1%;">Peringkat</th>
      <th scope="col" style="width: 20%;">Personal</th>
      <th scope="col">Grafik</th>          
    </tr>
  </thead>
  <tbody align="center">
    <tr>
      <th>1</th>
      <td>
        <img src="../img/profile.png" style="width: 20%;"><br>
        Username 1
      </td>
      <td><div id="gsifat_utama"></div></td>
    </tr>
    <tr>
      <th>2</th>
      <td>
        <img src="../img/profile.png" style="width: 20%;"><br>
        Username 2
      </td>
      <td><div id="ghsifat_utama"></td>
    </tr>
      <th>n</th>
      <td>
        <img src="../img/profile.png" style="width: 20%;"><br>
        Username n
      </td>
      <td>Grafik n</td>
    </tr>
  </tbody>
</table>
</div>

<?php include_once("../include/footer.php"); ?>    