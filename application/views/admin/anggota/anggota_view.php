<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Daftar Anggota
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"> Home</a></li>
      <li class="active">Anggota</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="container">
        <br>
        <a href="<?php echo base_url(); ?>admin/anggota/form_input" class="btn btn-success">+ Tambah Data</a>
        <a href="#" class="btn btn-primary"><i class="fa fa-print"> </i> Cetak Data</a>
      </div>

      <div class="box-body">
        <div class="col-md-12">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>id Anggota</th>
              <th>id Koperasi</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Tanggal lahir</th>
              <th>Pekerjaan</th>
              <th>Alamat</th>
              <th>email</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($status as $s) : ?>
            <tr>
              <td><?php echo $s->id_pengguna ?></td>
              <td><?php echo $s->id_koperasi ?></td>
              <td><?php echo $s->nama ?></td>
              <td><?php echo $s->jk ?></td>
              <td><?php echo $s->ttl ?></td>
              <td><?php echo $s->pekerjaan?></td>
              <td><?php echo $s->alamat ?></td>
              <td><?php echo $s->email ?></td>
              <td>
                <a href="<?php echo base_url(); ?>admin/anggota/edit/<?php echo $s->id_pengguna; ?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo base_url(); ?>admin/anggota/delete/<?php echo $s->id_pengguna; ?>" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
