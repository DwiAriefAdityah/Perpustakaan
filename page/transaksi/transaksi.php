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
                                            <th>Judul</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Status</th>
                                            <th>Terlambat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	
                                    	<?php
                                    		$no = 1;
                                    		$sql = $conn -> query("select * from transaksi where status='pinjam'");

                                    		while ($data=$sql->fetch_assoc()) {
                                    		

                                    	?>

                                    	<tr>
                                    		<td><?php echo $no++; ?></td>
                                    		<td><?php echo $data['judul']; ?></td>
                                    		<td><?php echo $data['nim']; ?></td>
                                    		<td><?php echo $data['nama']; ?></td>
                                    		<td><?php echo $data['tgl_pinjam']; ?></td>
                                    		<td><?php echo $data['tgl_kembali']; ?></td>
                                            <td><?php echo $data['status']; ?></td>
                                    		<td>

                                    			<?php  
                                    				$denda = 1000;
                                    				$tgl_DeadL = $data['tgl_kembali'];
                                    				$tgl_back = date('Y-m-d');

                                    				$lambat = terlambat($tgl_DeadL,$tgl_back);
                                    				$denda1 = $lambat*$denda;



                                    				if ($lambat > 0) {
                                    					echo "
                                    						<font color='red'> $lambat hari <br> (Rp $denda1)</font>
                                    					";
                                    				}else{
                                    					echo $lambat . "Hari";
                                    				}
                                    			?>	
                                    		</td>
                                            

                                    		<td>
                                    			<a href="?page=anggota&aksi=ubah&nim=<?php echo $data['nim'];?>" class="btn btn-info fa fa-edit">  </a>
                                    			<a onclick="return confirm('Anda yakin ingin menghapus data')" href="?page=anggota&aksi=hapus&nim=<?php echo $data['nim'];?>" class="btn btn-danger fa fa-trash">  </a>
                                    		</td>
                                    	</tr>

                                    <?php  } ?>

                                    </tbody>
                                </table>

	                        </div>
                            <a href="?page=transaksi&aksi=tambah" class="btn btn-success fa fa-plus" style="margin: 5px 5px 0 0">Tambah Data</a>

                             <a href="./laporan/laporanAnggota.php" target="bllank" class="btn btn-default fa fa-print" style="margin: 5px 5px 0 0">Export to Execel</a>
	                    </div>
	                </div>
	            </div>