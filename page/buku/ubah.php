<?php

	$id_buku= $_GET['id_buku'];

	$sql = $conn -> query("select * from buku where id_buku='$id_buku'");

	$tampil= $sql-> fetch_assoc();
	$tahun = $tampil['tahun_terbit'];
	$lokasi = $tampil['lokasi'];
?>

<div class="panel panel-primary">
<div class="panel-heading">
	Ubah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post">

                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" value="<?php echo $tampil['judul']?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" value="<?php echo $tampil['pengarang']?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" value="<?php echo $tampil['penerbit']?>"/>
                                        </div>
                                       
                                       
                                        <div class="form-group">
                                            <label>Tahun terbit</label>
                                            <select class="form-control" name="tahun_terbit">
                                            	
                                                <?php

                                                	$tahun_terbit = date("Y");

                                                	for ($i=$tahun_terbit-20; $i <= $tahun_terbit ; $i++) { 

                                                			if($tahun == $i){
                                                				echo '<option value="'.$i.'" selected>
	                                            				'.$i.'
	                                            				</option>';
                                                			}else{
	                                                			echo '<option value="'.$i.'">
	                                            				'.$i.'
	                                            				</option>';
                                                			}                                               			
                                                		                                             	
                                                	}


                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Stok</label>
                                            <input class="form-control" type="number" name="stok" value="<?php echo $tampil['stok']?>"/>
                                        </div>

                                       <div class="form-group">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="lokasi">
                                                <option value="rak1" <?php if($lokasi=='rak1') {echo "selected";}?> >Rak 1</option>
                                                <option value="rak2" <?php if($lokasi=='rak2') {echo "selected";}?> >Rak 2</option>
                                                <option value="rak3" <?php if($lokasi=='rak3') {echo "selected";}?> >Rak 3</option>
                                                <option value="rak4" <?php if($lokasi=='rak4') {echo "selected";}?> >Rak 4</option>
                                            </select>
                                        </div>

                                       <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" name="tgl_input" type="date" value="<?php echo $tampil['tgl_input']?>"/>
                                        </div>

                                        <div>
                                        	<input type="submit" name="simpan" value="ubah" class="btn btn-primary">
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
		$sql = $conn -> query("update buku set judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun_terbit', stok='$stok', lokasi='$lokasi', tgl_input='$tgl_input' where id_buku='$id_buku'");

		if ($sql) {
?>		
			<script type="text/javascript">

				alert ("Ubah data berhasil ");
				window.location.href="?page=buku"

			</script>
<?php 	}else{
	echo "gagal";
}

	}

?>
