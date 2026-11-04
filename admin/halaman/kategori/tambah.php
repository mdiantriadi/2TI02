

<div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h1 class="mb-0 fs-3">Tambah Kategori</h1>
              </div>
              <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="app-content">
         <div class="col-md-6">
                <div class="card card-warning card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">Tambah</div>
                  </div>
                  <form name= "tambah" method="post">
                    <div class="card-body">
                        <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">kode kategori</label>
                        <div class="col-sm-10">
                          <input type="text" name="kd_kategori" class="form-control" id="inputEmail3" />
                        </div>
                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">kategori</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">keterangan</label>
                        <div class="col-sm-10">
                          <textarea name="keterangan" class="form-control" id="inputEmail3"></textarea>
                        </div>
                      </div>
                     
                             
                    <div class="card-footer">
                      <button type="submit" name="submit" class="btn btn-warning">Simpan</button>
                      <button type="reset" class="btn float-end">Batal</button>
                    </div>
                  </form>
            </div>
          </div>
        </div>
        <?php
include "../../koneksi.php";
global $conn;
        if (isset($_POST['submit'])) {
            $kd_kategori = $_POST['kd_kategori'];
            $kategori = $_POST['kategori'];
            $keterangan = $_POST['keterangan'];
            $sql= mysqli_query($conn, "INSERT INTO kategori (kd_kategori, nm_kategori, keterangan) VALUES ('$kategori', '$keterangan')");
            
        }
        ?>