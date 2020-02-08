<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Input Anggota
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"> Home</a></li>
      <li><a href="#">Anggota</a></li>
      <li class="active">Input Anggota</li>
    </ol>
  </section>

  <section class="content">
    <div class="box">
      <div class="box-body">
        <form action="<?php echo base_url(); ?>admin/anggota/input_data" method="post" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="nama">Nama</label>
        			<input type="text" class="form-control" name="nama" placeholder="Nama">
        		</div>
          </div>
          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="jk">Jenis Kelamin</label>
              <select  class="form-control" name="jk">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="ttl">Tanggal Lahir</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="datepicker" name="ttl">
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="nama">Pekerjaan</label>
        			<input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
        		</div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="nama">Alamat</label>
              <textarea class="form-control" placeholder="Alamat" name="alamat" rows="3"></textarea>
        		</div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="nama">email</label>
        			<input type="text" class="form-control" name="email" placeholder="email">
        		</div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="nama">Password</label>
        			<input type="text" class="form-control" name="password" placeholder="Password">
        		</div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="nama">Foto</label>
        			<input id="exampleInputFile" type="file" class="form-control" name="foto" placeholder="foto">
        		</div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
            <button type="submit"  class="btn btn-primary" >Input Data</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
