<?php

	$nim= $_GET['nim'];

	$sql = $conn -> query("select * from anggota where nim='$nim'");

	$tampil= $sql-> fetch_assoc();
	$jkl = $tampil['jk'];
	$prodi = $tampil['prodi'];
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
                                            <label>NiM</label>
                                            <input class="form-control" name="nim" value="<?php echo $tampil['nim']?>" disabled/>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama']?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat lahir</label>
                                            <input class="form-control" name="tempat_lahir" value="<?php echo $tampil['tempat_lahir']?>"/>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Tanggal lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir" value="<?php echo $tampil['tgl_lahir']?>"/>
                                        </div>       

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="l" name="jk" <?php echo ($jkl==l)?"checked":"";?>/> Laki-laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="p" name="jk" <?php echo ($jkl==p)?"checked":"";?> /> Wanita
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>Program Studi</label>
                                            <select class="form-control" name="prodi">
                                            	<option value=""></option>
                                                <option value="TI" <?php if($prodi=='TI') {echo "selected";}?> >Teknologi Informasi</option>
                                                <option value="IK" <?php if($prodi=='IK') {echo "selected";}?> >Ilmu Komputer</option>
                                            </select>
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
