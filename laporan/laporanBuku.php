<?php

	$koneksi = new mysqli("localhost","root","","perpustakaan");


	$filename = "Daftar_buku-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename='$filename'");
	header("content-type: application/vdn.ms-exel");

?>

 <h2>Daftar Buku</h2>

 <table border="1">
 	<tr>
      <th>Id Buku</th>
      <th>Judul</th>
      <th>Penerbit</th>
      <th>Tahun Terbit</th>
      <th>Lokasi</th>
      <th>Stok</th>
      <th>Tanggal Input</th>
    </tr>

    <?php
      $no = 1;
      $sql = $koneksi -> query("select * from buku");

      while ($data=$sql->fetch_assoc()) {
    ?>
 	
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['judul']; ?></td>
      <td><?php echo $data['penerbit']; ?></td>
      <td><?php echo $data['tahun_terbit']; ?></td>
      <td><?php echo $data['lokasi']; ?></td>
      <td><?php echo $data['stok']; ?></td>
      <td><?php echo $data['tgl_input']; ?></td>
    </tr>

       <?php  } ?>

 </table>