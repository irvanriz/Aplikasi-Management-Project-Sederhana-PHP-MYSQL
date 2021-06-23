<?php 
include("template/header.php");
include("template/sidebar.php");
include("config.php");
?>
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Data Project</h5>
                            <form method="POST" action="aksi/tambah.php">
                                <div class="row mb-3">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Project</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="nama_project">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="validationCustom04" class="col-sm-2 col-form-label">Cabang</label>
                                    <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="id_cabang">
                                        <option selected>-- Pilih Cabang --</option>
                                        <?php
                                            $cabang="select * from cabang";
                                            $hasil=mysqli_query($link,$cabang);
                                            while ($data = mysqli_fetch_array($hasil)) {
                                        ?>
                                        <option value="<?php echo $data['id'];?>"><?php echo $data['nama_cabang'];?></option>
                                        <?php 
                                            }
                                        ?>
                                      </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Project</label>
                                  <div class="col-sm-10">
                                    <input type="date" class="form-control" id="inputEmail3" name="tgl_project" style="width: 200px;">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi Project</label>
                                  <div class="col-sm-10">
                                    <textarea class="form-control" aria-label="With textarea" name="deskripsi"></textarea>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label">Status Project</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="status" value="On Proses" readonly>
                                  </div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
  </div>
<?php 
include("template/footer.php"); // memanggil file footer.php
?>
