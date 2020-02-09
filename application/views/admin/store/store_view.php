<div class="content-wrapper">


  <!-- Main content -->
  <section class="content">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Kelola Barang</h3>
          </div>
          <div class="container">
            <!-- select -->
              <div class="form-group">
                <label>Bulan</label>
                <select class="form-control" style="width: 100px;">
                  <option>Januari</option>
                  <option>Februari</option>
                </select>
              </div>

              <a href="<?php echo base_url(); ?>admin/Store/form_input" class="btn btn-success">+ Tambah Data</a>
              <a href="#" class="btn btn-primary"><i class="fa fa-print"> </i> Cetak Data</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>no</th>
                <th>Nama Barang</th>
                <th>Deskripsi Barang</th>
                <th>Foto</th>
                <th>Kategori</th>
                <th>Satuan</th>
                <th>Stok</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php
                $nomor = 1;
                foreach ($barang as $brg) { ?>
                  <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $brg->nama_barang; ?></td>
                    <td><?php echo $brg->deskripsi; ?></td>
                    <td><img style="width: 150px;" src="<?php echo base_url(); ?>assets/admin/upload_barang/<?php echo $brg->foto; ?>"></td>
                    <td><?php echo $brg->kategori; ?></td>
                    <td><?php echo $brg->satuan; ?></td>
                    <td><?php echo $brg->stok; ?></td>
                    <td><?php echo $brg->harga_beli; ?></td>
                    <td><?php echo $brg->harga_jual; ?></td>
                    <td>
                      <a href="<?php echo base_url(); ?>admin/Store/form_edit/<?php echo $brg->id_barang; ?>" class="btn btn-warning">Edit</a>
                      <a href="<?php echo base_url(); ?>admin/Store/delete/<?php echo $brg->id_barang; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
  </section>
  <!-- /.content -->

</div>
