 <?php
 $query = "select * from kategori";
 $dataKategori = tampilData($query);
// var_dump($dataKategori);
 ?>

<div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h1 class="mb-0 fs-3">Data Tables</h1>
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
          <div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 16rem">
                    <input type="button" value="tambah" class="btn btn-primary">
                    
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table id="myTable" class="display">
    <thead>
        <tr>
            <th>No</th>
            <th>kode Kategori</th>
            <th>Kategori</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($dataKategori as $row) {
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row['kd_kategori']; ?></td>
          <td><?php echo $row['nm_kategori']; ?></td>
          <td>edit | hapus</td>
        </tr>
        <?php $no++; } ?>

    </tbody>
</table>
              </div>
            </div>
          </div>
        </div>
        <link rel="stylesheet" href="https://cdn.datatables.net/3.1.5/css/dataTables.dataTables.css" />
 
<script src="https://cdn.datatables.net/3.1.5/js/dataTables.js"></script>

<script>
  let table = new DataTable('#myTable', {
    responsive: true
});
</script>