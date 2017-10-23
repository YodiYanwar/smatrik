			<form class="form-horizontal" method="POST">
					<div class="form-group row">
						<label for="nim" class="col-sm-1 col-form-label">NIM :</label>
						<div class="col-sm-5">
							<input type="text" name="nim" placeholder="NIM" id="nim" class="form-control" />
						</div>
					</div>			
					<div class="form-group row">
						<label for="nama" class="col-sm-1 col-form-label">Nama :</label>
						<div class="col-sm-5">
							<input type="text" name="nama" placeholder="Nama" id="nama" class="form-control" />
						</div>
					</div> 	
					<div class="form-group row">
						<label for="fakultas" class="col-sm-1 col-form-label">Fakultas :</label>
						<div class="col-sm-5">
							<input type="text" name="fakultas" placeholder="Fakultas" id="fakultas" class="form-control" />
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-1">
						</div>
						<div class="col-sm-4">
							<button type="submit" class="btn btn-primary" name="tambahMahasiswa">Submit</button>
						</div>
						<div class="col-sm-2">
							<a href="/smatrik">Kembali</a>
						</div>						
					</div>
				</form>

<?php 

	if (isset($_POST['tambahMahasiswa'])) {
		$mhs->tambahMahasiswa($_POST['nim'],$_POST['nama'],$_POST['fakultas']);
		echo "<script>alert('Data Mahasiswa telah ditambah')</script>";
		echo "<script>window.location='/smatrik'</script>";
	}
 ?>