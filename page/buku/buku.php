<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                            <tr>
                                                <th>Id Buku</th>
                                                <th>Judul</th>
                                                <th>Penerbit</th>
                                                <th>Tahun Terbit</th>
                                                <th>Lokasi</th>
                                                <th>Stok</th>
                                                <th>Tanggal Input</th>                                            
                                                <th>Aksi</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    	
                                    	<?php
                                    		$no = 1;
                                    		$sql = $conn -> query("select * from buku");

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

                                    		<td>
                                    			<a href="?page=buku&aksi=ubah&id_buku=<?php echo $data['id_buku'];?>" class="btn btn-info fa fa-edit"> </a>
                                    			<a onclick="return confirm('Anda yakin ingin menghapus data')" href="?page=buku&aksi=hapus&id_buku=<?php echo $data['id_buku'];?>" class="btn btn-danger fa fa-trash">  </a>
                                    		</td>
                                    	</tr>

                                    <?php  } ?>

                                    </tbody>
                                </table>

	                        </div>
                            <a href="?page=buku&aksi=tambah" class="btn btn-success fa fa-plus" style="margin: 5px 5px 0 0">Tambah Data</a>

                            <a href="./laporan/laporanBuku.php" target="bllank" class="btn btn-default fa fa-print" style="margin: 5px 5px 0 0">Export to Execel</a>

	                    </div>
	                </div>
	            </div>