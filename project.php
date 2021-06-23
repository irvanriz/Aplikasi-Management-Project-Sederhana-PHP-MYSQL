<?php 
include("template/header.php");
include("template/sidebar.php");
include("koneksi.php");?>
  <div class="page-content">
    <div class="main-wrapper">
            <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">List Data Project</h5>
                                <a href="tambah_project.php">
                                  <button type="button" class="btn btn-outline-primary m-b-xs">Tambah Data Project</button>
                                </a>
                                <br>
                                <br>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Project</th>
                                            <th>Cabang</th>
                                            <th>Tanggal Project</th>
                                            <th>Deskripsi</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $host     = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname   = "management_project";

                                    $kon = mysqli_connect($host, $username, $password, $dbname) or die(mysqli_error());

                                    $halaman = 25;
                                    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                                    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;

                                    $data =  "select a.id, nama_project, b.nama_cabang, tgl_project, deskripsi, status from project a INNER JOIN `helpdesk-jec`.`cabang` b on a.id_cabang = b.id order by id";
                                    $query = mysqli_query($kon, $data);
                                    $no =$mulai+1;
                                    while ($mas = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $mas['nama_project'] ?></td>
                                            <td><?php echo $mas['nama_cabang'] ?></td>
                                            <td><?php echo $mas['tgl_project'] ?></td>
                                            <td><?php echo $mas['deskripsi'] ?></td>
                                            <td><?php echo $mas['status'] ?></td>
                                            <td>
                                              <?php
                                              if($mas['status'] == "Done") {
                                                  echo "";                                                    
                                              }
                                              else{
                                                ?>
                                                          <a href='respon_project.php?id=<?php echo $mas['id'] ?>' type='button' class='btn btn-outline-warning m-b-xs'>Respon</a>
                                              <?php } ?>
                                            </td>
                                        </tr>
                                      <?php               
                                      } 
                                      ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
              </div>
<?php 
include("template/footer.php"); // memanggil file footer.php
?>
