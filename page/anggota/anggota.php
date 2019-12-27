<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Prodi</th>
                                            <th>Email</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	
                                    	<?php
                                    		$no = 1;
                                    		$sql = $conn -> query("select * from anggota");

                                    		while ($data=$sql->fetch_assoc()) {
                                    		
                                    		$jk =($data['jk']==l)?"Laki-laki":"wanita";
                                            $prodi =($data['prodi']==TI)?"Teknologi Informasi":"Ilmu Komputer";

                                    	?>

                                    	<tr>
                                    		<td><?php echo $no++; ?></td>
                                    		<td><?php echo $data['nim']; ?></td>
                                    		<td><?php echo $data['nama']; ?></td>
                                    		<td><?php echo $data['tempat_lahir']; ?></td>
                                    		<td><?php echo $data['tgl_lahir']; ?></td>
                                            <td><?php echo $jk ?></td>
                                    		<td><?php echo $prodi ?></td>
                                            <td><?php echo $data['email']; ?></td>
                                    		<td>
                                    			<a href="?page=anggota&aksi=ubah&nim=<?php echo $data['nim'];?>" class="btn btn-info fa fa-edit">  </a>
                                    			<a onclick="return confirm('Anda yakin ingin menghapus data')" href="?page=anggota&aksi=hapus&nim=<?php echo $data['nim'];?>" class="btn btn-danger fa fa-trash">  </a>
                                    		</td>
                                    	</tr>

                                    <?php  } ?>

                                    </tbody>
                                </table>

	                        </div>
                            <a href="?page=anggota&aksi=tambah" class="btn btn-success fa fa-plus" style="margin: 5px 5px 0 0">Tambah Data</a>

                             <a href="./laporan/laporanAnggota.php" target="bllank" class="btn btn-default fa fa-print" style="margin: 5px 5px 0 0">Export to Execel</a>
	                    </div>
	                </div>
	            </div>