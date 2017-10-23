<?php 
			if(isset($_GET['hapusMahasiswa'])){
				$mhs->hapus_mhs($_GET['id']);
				echo "<script>window.location='/smatrik'</script>";
			}

 ?>	

	<button class="btn btn-outline-primary" data-toggle="modal" data-target="#tambahMhs"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Tambah Mahasiswa</button>

	<div class="modal fade" id="tambahMhs" role="dialog">
        <div class="modal-dialog" role="document">
        <form class="form-horizontal" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;Tambah Data Mahasiswa</h4>
                </div>
                <div class="modal-body">
					
							
								
								
									<input type="text" name="nim" placeholder="NIM" id="nim" class="form-control" required/><br>
									<input type="text" name="nama" placeholder="Nama" id="nama" class="form-control" required/><br>
									<input type="text" name="fakultas" placeholder="Fakultas" id="fakultas" class="form-control" required />

						                
                </div>
                <div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i>&nbsp;Batal</button>                
                	<button type="submit" class="btn btn-outline-primary" name="tambahMahasiswa"><i class="fa fa-save" aria-hidden="true"></i>&nbsp;Submit</button>
                </div>
            </div>
            </form>
    	</div>
    	</div>

		<?php 

			if (isset($_POST['tambahMahasiswa'])) {
				$mhs->tambahMahasiswa($_POST['nim'],$_POST['nama'],$_POST['fakultas']);
				echo "<script>window.location='/smatrik'</script>";
			}
		 ?>    	

	<div class="col-md-6">
		<table class="table table-hover table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Fakultas</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$datamhs = $mhs->tampil_mhs();
					
					$no = 1;
					foreach($datamhs as $dat){

				 ?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $dat['nim'] ?></td>
					<td><?php echo $dat['nama'] ?></td>
					<td><?php echo $dat['fakultas'] ?></td>
					<td>
						<button class="btn btn-outline-warning btn-sm" title="Edit <?php echo $dat['nama'] ?>" data-toggle="modal" data-target="#editMhs"><i class="fa fa-edit" aria-hidden="true"></i></button>&nbsp;
							
                  		<?php echo "<button class='btn btn-outline-danger btn-sm' title='Edit ".$dat['nama']."' data-toggle='modal' data-target='#hapusMhs' data-href='hapusmhs.php?id=".$dat['id']."'><i class='fa fa-trash' aria-hidden='true'></i>&nbsp;</button>"; ?>													
						
					</td>
				</tr>
				<?php 
					$no++; }
				 ?>
			</tbody>
		</table>

		<!-- Modal -->
		<div class="modal fade" id="hapusMhs" tabindex="-1" role="dialog" aria-labelledby="hapusMhsTitle" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data ? </h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i>&nbsp;Batal</button>
		        <a class="btn btn-danger btn-ok"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Hapus</a>
		      </div>
		    </div>
		  </div>
		</div>	
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

		<script type="text/javascript">
		    //Hapus Data
		    $(document).ready(function() {
		        $('#hapusMhs').on('show.bs.modal', function(e) {
		            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
		        });
		    });			
		</script>	



		
</div>		