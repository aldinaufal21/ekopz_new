<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Input Kas
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"> Home</a></li>
      <li><a href="#">Kas</a></li>
      <li class="active">Input Kas</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-body">
        <form action="<?php echo base_url(); ?>admin/kas/input_data" method="post">
          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="ttl">Tanggal</label>
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
        			<label for="keterangan">Kode Slip Bukti</label>
        			<input type="text" class="form-control" name="bukti" placeholder="Kode SlipBukti">
        		</div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
        			<label for="keterangan">Rincian</label>
        			<input type="text" class="form-control" name="rincian" id="rincian" placeholder="Rincian">
        		</div>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
