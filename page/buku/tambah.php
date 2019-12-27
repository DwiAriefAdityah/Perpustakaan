<div class="panel panel-primary">
<div class="panel-heading">
	Tambah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" onsubmit="return validasi(this)">

                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" required />
                                        </div>

                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" />
                                        </div>

                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" />
                                        </div>
                                                                                                              
                                        <div class="form-group">
                                            <label>Tahun terbit</label>
                                            <select class="form-control" name="tahun_terbit">
                                            	
                                                <?php

                                                	$tahun_terbit = date("Y");

                                                	for ($i=$tahun_terbit-20; $i <= $tahun_terbit ; $i++) { 
                                                		echo '
                                                			<option value="'.$i.'">
                                            				'.$i.'
                                            				</option>
                                                		';                                                	
                                                	}


                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Stok</label>
                                            <input class="form-control" type="number" name="stok" />
                                        </div>

                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="lokasi">
                                                <option value="rak1">Rak 1</option>
                                                <option value="rak2">Rak 2</option>
                                                <option value="rak3">Rak 3</option>
                                                <option value="rak4">Rak 4</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" name="tgl_input" type="date" />
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

	$judul=$_POST['judul'];
    $pengarang=$_POST['pengarang'];
	$penerbit=$_POST['penerbit'];
	$tahun_terbit=$_POST['tahun_terbit'];
	$stok=$_POST['stok'];
	$lokasi=$_POST['lokasi'];
	$tgl_input=$_POST['tgl_input'];

	$simpan=$_POST['simpan'];

	if ($simpan) {
		$sql = $conn -> query("insert into buku (judul, pengarang, penerbit, tahun_terbit, stok, lokasi ,tgl_input) value ('$judul', '$penerbit', '$pengarang', '$tahun_terbit' ,'$stok' ,'$lokasi' ,'$tgl_input' )");

		if ($sql) {
?>		
			<script type="text/javascript">

				alert ("Data berhasil di simpan");
				window.location.href="?page=buku"

			</script>
<?php 	}else{
    echo "gagal";
}

	}

?>
