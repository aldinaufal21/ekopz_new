<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Barang
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Tambah Data</li>
    </ol>
  </section>


  <!-- Main content -->
  <!-- form tambah Data -->
  <section class="content">
    <div class="box box-primary">
      <!-- /.box-header -->
      <!-- form start -->
      <form action="<?php echo base_url(); ?>admin/store/input_data" method="post" enctype="multipart/form-data">
        <div class="box-body">
         <div class="form-group">
            <label>Nama Barang</label>
             <input type="text" class="form-control" name="nama" required="">
         </div>
         <div class="form-group">
          <label>Deskripsi Barang</label>
          <textarea class="form-control" required="" rows="3" name="deskripsi"></textarea>
         </div>
         <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="kategori">
              <option value="pakaian">pakaian</option>
              <option value="kosmetik">kosmetik</option>
              <option value="sembako">sembako</option>
              <option value="listrik/pulsa">listrik/pulsa</option>
              <option value="PDAM">PDAM</option>
              <option value="tiket">tiket</option>
              <option value="alat tulis kerja">alat tulis kerja</option>
              <option value="hewan ternak">hewan ternak</option>
              <option value="Elektronik">Elektronik</option>
            </select>
         </div>
         <div class="form-group">
            <label>Satuan</label>
            <select class="form-control" name="satuan">
              <option value="unit">unit</option>
              <option value="kilogram">kilogram</option>
            </select>
         </div>
         <div class="form-group">
            <label>Stok</label>
             <input type="int" class="form-control" name="stok" required="">
         </div>
         <div class="form-group">
            <label>Harga Beli</label>
             <input type="text" class="form-control" name="harga_beli" required="">
         </div>
         <div class="form-group">
            <label>Harga Jual</label>
             <input type="text" class="form-control" name="harga_jual" required="">
         </div>
        <div class="form-group">
          <label for="gambar">Upload Gambar Barang</label>
          <input type="file" name="foto" id="foto" required="">
          <p class="help-block">ukuran gambar tidak boleh lebih dari 2MB </p>
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <input type="submit" class="btn btn-primary" name="tambah" value="TAMBAH">
        <a href="<?php echo base_url(); ?>admin/store" class="btn btn-primary">KEMBALI</a>
      </div>
    </form>
  </div>
</section>
<!-- /.content -->
</div>
