<div class="panel panel-primary">
<div class="panel-heading">
	Tambah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <script type="text/javascript">
                                        function cek_kosong(){
                                            var a = document.forms["form"]["nim"].value;
                                            var b = document.forms["form"]["nama"].value;
                                            var c = document.forms["form"]["tempat_lahir"].value;
                                            var d = document.forms["form"]["tgl_lahir"].value;
                                            var e = document.forms["form"]["jk"].value;
                                            var f = document.forms["form"]["prodi"].value;
                                            var g = document.forms["form"]["email"].value;

                                            if (a== "" || b == "" || c== "" || d == "" || e== "" || f == "" || g== "" ) {
                                                alert ("Data kosong");
                                                return false;
                                            }else{
                                                return true;
                                            }
                                        }    
                                    </script>


                                    <form method="post" name="form" id="form" onsubmit="return cek_kosong()" action="">

                                        <div class="form-group">
                                            <label>NiM</label>
                                            <input  class="form-control" name="nim" id="nim" maxlength="9" minlength="9" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" id="nama" />
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat lahir</label>
                                            <input class="form-control" name="tempat_lahir" id="tempat_lahir"/>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Tanggal lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" required />
                                        </div>       

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br>
                                            <label class="checkbox-inline">
                                                <input type="radio" value="l" name="jk" id="jk" /> Laki-laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="radio" value="p" name="jk" id="jk" /> Wanita
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>Program Studi</label>
                                            <select class="form-control" name="prodi" id="prodi">
                                                <option value=""></option>
                                            	<option value="TI">Teknologi Informasi</option>
                                            	<option value="IK">Ilmu Komputer</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" id="email" />
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
    $email=$_POST['email'];
	

	$simpan=$_POST['simpan'];

	if ($simpan) {
		$sql = $conn -> query("insert into anggota (nim, nama, tempat_lahir, tgl_lahir, jk, prodi, email) value ('$nim', '$nama', '$tempat_lahir', '$tgl_lahir' ,'$jk' ,'$prodi', '$email' )");

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
