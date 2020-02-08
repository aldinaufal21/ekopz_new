<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Input Neraca
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"> Home</a></li>
      <li><a href="#">Neraca</a></li>
      <li class="active">Input Neraca</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-body">
        <form action="<?php echo base_url(); ?>admin/neraca/input_data" method="post">
          <div class="form-group">
            <div class="form-group col-md-8">
              <select id="neracaJenis" class="form-control" name="ap">
                <option value="aktiva">Aktiva</option>
                <option value="pasiva">Pasiva</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="jenis">Jenis</label>
              <select class="form-control pasiva" name="jenis">
                <option value="Hutang Jangka Panjang">Hutang Jangka Panjang</option>
                <option value="Hutang Jangka Pendek">Hutang Jangka Pendek</option>
                <option value="Modal Sendiri">Modal Sendiri</option>
              </select>
              <select class="form-control aktiva" name="jenis">
                <option value="Aktiva Lancar">Aktiva Lancar</option>
                <option value="Aktiva Tetap">Aktiva Tetap</option>
              </select>
        		</div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="keterangan">Rincian</label>
        			<input type="text" class="form-control" name="rincian" id="rincian" placeholder="Rincian">
        		</div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="tahun">Tahun</label>
        			<input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun">
        		</div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="Jumlah">Jumlah</label>
        			<input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah">
        		</div>
            <div class="form-row">
              <div class="form-group col-md-8">
              <button type="submit" name="button" class="btn btn-primary" >Input Data</button>
              </div>
            </div>
          </div>

        </form>
      </div>
    </div>
  </section>
</div>
