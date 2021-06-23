<?php
include("template/header.php");
include("template/sidebar.php");
?>
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Data Project</h5>
							<?php 
								include "koneksi.php";
								$id = $_GET['id'];
								$data =  "select a.id, nama_project, b.nama_cabang, tgl_project, deskripsi, status from project a INNER JOIN `helpdesk-jec`.`cabang` b on a.id_cabang = b.id WHERE a.id='$id'";
			                    $query = mysqli_query($koneksi, $data);
								$nomor = 1;
								while($mas = mysqli_fetch_array($query)){
							?>
							<form method="POST" action="aksi/update.php">
		                        <div class="row mb-3">
		                          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Project</label>
		                          <div class="col-sm-10">
		                            <input type="text" class="form-control" id="inputEmail3" name="nama_project" value="<?php echo $mas['nama_project'] ?>" readonly>
		                          </div>
		                        </div>
		                        <div class="row mb-3">
		                            <label for="validationCustom04" class="col-sm-2 col-form-label">Cabang</label>
		                            <div class="col-sm-10">
		                            <input type="text" class="form-control" id="inputEmail3" name="id_cabang" value="<?php echo $mas['nama_cabang'] ?>" readonly>
		                            </div>
		                        </div>
		                        <div class="row mb-3">
		                          <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Project</label>
		                          <div class="col-sm-10">
		                            <input type="date" class="form-control" id="inputEmail3" name="tgl_project" style="width: 200px;" value="<?php echo $mas['tgl_project'] ?>" readonly>
		                          </div>
		                        </div>
		                        <div class="row mb-3">
		                          <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi Project</label>
		                          <div class="col-sm-10">
		                            <textarea class="form-control" aria-label="With textarea" name="deskripsi" readonly><?php echo $mas['deskripsi'] ?></textarea>
		                          </div>
		                        </div>
		                        <div class="row mb-3">
		                          <label for="inputEmail3" class="col-sm-2 col-form-label">Status Project</label>
		                          <div class="col-sm-10">
		                            <select class="form-select" aria-label="Default select example" name="status">
										<option value="<?php echo $mas['status'] ?>"> <?php echo $mas['status'] ?> </option>
										<option value="Progress 25%">Progress 25%</option>
										<option value="Progress 50%">Progress 50%</option>
										<option value="Progress 75%">Progress 75%</option>
										<option value="Done">Done</option>
									</select>
		                          </div>
		                        </div>
		                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
		                      </form>
								<?php } ?>
							</div>
                    </div>
                </div>
            </div>          
        </div>
  </div>
<?php 
include("template/footer.php"); // memanggil file footer.php
?>
