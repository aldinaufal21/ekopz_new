<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Input Simpanan
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"> Home</a></li>
      <li><a href="#">Simpan Pinjam</a></li>
      <li><a href="#">Simpanan</a></li>
      <li class="active">Input Simpanan</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-body">
        <form action="<?php echo base_url(); ?>admin/simpanpinjam/input_data_simpanan" method="post">
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="id">Kode Anggota</label>
        			<input type="text" class="form-control" name="id_pengguna" placeholder="Kode Anggota">
        		</div>
          </div>
          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="jenis">Bulan</label>
              <select class="form-control" name="bulan">
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="tahun">Tahun</label>
        			<input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun">
        		</div>
          </div>
          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="jenis">Jenis Simpanan</label>
              <select class="form-control" name="jenis">
                <option value="Pokok">Simpanan Pokok</option>
                <option value="Wajib">Simpanan Wajib</option>
                <option value="Usaha">Simpanan Usaha</option>
                <option value="Sukarela">Simpanan Sukarela</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="jumlah">Jumlah</label>
        			<input type="text" class="form-control" name="jumlah" placeholder="jumlah">
        		</div>
            <div class="form-row">
              <div class="form-group col-md-8">
              <button type="submit" class="btn btn-primary" >Input Data</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
