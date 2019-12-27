<?php

	$tgl_pinjam = date("d-m-Y");
	$tujuh_hari = mktime(0,0,0, date("n"),date("j")+7,date("Y"));
	$kembali = date("d-m-Y", $tujuh_hari);

?>

<div class="panel panel-primary">
<div class="panel-heading">
	Tambah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" onsubmit="return validasi(this)">

                                    	 <div class="form-group">
                                            <label>Judul Buku</label>
                                            <select class="form-control" name="buku">
                                            	<?php
                                            		$sql=$conn->query(" select * from buku order by id_buku");

                                            		while ($data=$sql->fetch_assoc()) {
                                            			echo "<option value='$data[id_buku].$data[judul]'>$data[judul]</option>";
                                            		}
                                            	?>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>Nama</label>
                                            <select class="form-control" name="nama">
                                            	<?php
                                            		$sql=$conn->query(" select * from anggota order by nim");

                                            		while ($data=$sql->fetch_assoc()) {
                                            			echo "<option value='$data[nim].$data[nama]'>$data[nim].$data[nama]</option>";
                                            		}
                                            	?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Pinjam</label>
                                            <input class="form-control" type="text" name="tgl_pinjam" value="<?php echo $tgl_pinjam ?>" readonly/>
                                        </div>  

                                        <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input class="form-control" type="text" name="tgl_kembali" value="<?php echo $kembali ?>" readonly/>
                                        </div>  

                                        <div>
                                        	<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                        </div>

                                    </form>
                                </div>
                            </div>
</div>
</div>
</div>

<?php

	$nim=$_POST['nim'];
    $nama=$_POST['nama'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$jk=$_POST['jk'];
	$prodi=$_POST['prodi'];
	

	$simpan=$_POST['simpan'];

	if ($simpan) {
		$sql = $conn -> query("insert into anggota (nim, nama, tempat_lahir, tgl_lahir, jk, prodi) value ('$nim', '$nama', '$tempat_lahir', '$tgl_lahir' ,'$jk' ,'$prodi' )");

		if ($sql) {
?>		
			<script type="text/javascript">

				alert ("Data berhasil di simpan");
				window.location.href="?page=anggota"

			</script>
<?php 	}else{
    echo "gagal";
}

	}

?>
