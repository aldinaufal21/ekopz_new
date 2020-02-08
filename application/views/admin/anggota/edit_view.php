<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Edit Anggota
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"> Home</a></li>
      <li><a href="#">Anggota</a></li>
      <li class="active">Edit Anggota</li>
    </ol>
  </section>

  <section class="content">
    <div class="box">
      <div class="box-body">
        <form action="<?php echo base_url('admin/Anggota/update/'.$anggota->id_anggota); ?>" method="post" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="nama">Nama</label>
        			<input type="text" class="form-control" value="<?php echo $anggota->nama; ?>" name="nama" placeholder="Nama">
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
                <input type="text" class="form-control pull-right" value="<?php echo $anggota->ttl; ?>" id="datepicker" name="ttl">
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="nama">Pekerjaan</label>
        			<input type="text" class="form-control" name="pekerjaan" value="<?php echo $anggota->pekerjaan; ?>" placeholder="Pekerjaan">
        		</div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="nama">Alamat</label>
              <textarea class="form-control"  name="alamat" rows="3"><?php echo $anggota->alamat; ?></textarea>
        		</div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="nama">email</label>
        			<input type="text" class="form-control" name="email" value="<?php echo $anggota->email; ?>" placeholder="email">
        		</div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="nama">Password</label>
        			<input type="text" class="form-control" name="password" value="<?php echo $anggota->password; ?>" placeholder="Password">
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
            <button type="submit"  class="btn btn-primary" >Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
