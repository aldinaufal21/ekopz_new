<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Neraca
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"> Home</a></li>
      <li class="active">Neraca</li>
    </ol>
  </section>

  <section class="content">
    <div class="box">
      <div class="container">
        <!-- select -->
          <div class="form-group">
            <label>Tahun</label>
            <select class="form-control" style="width: 100px;">
              <option>2019</option>
              <option>2018</option>
            </select>
          </div>

          <a href="<?php echo base_url(); ?>admin/neraca/form_input" class="btn btn-success">+ Tambah Data</a>
          <a href="#" class="btn btn-primary"><i class="fa fa-print"> </i> Cetak Data</a>

      </div>

      <div class="box-body">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Aktiva</a></li>
              <li><a href="#timeline" data-toggle="tab">Pasiva</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Aktiva</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $jns='';
                  foreach ($aktiva as $nrc){
                      if ($jns != $nrc->Jenis) {
                        if ($jns!='') {
                          echo "<tr>
                          <td colspan='2'><b>Jumlah ".$jns."</b>"."</td>
                          <td colspan = '2'>"."<b>".$jumlah[$jns]."</b>"."</td>
                          </tr>";
                        }
                        $jns = $nrc->Jenis;
                        $jumlah[$jns]=0;
                      }
                      $jumlah[$jns]+=$nrc->Jumlah;
                    ?>
                  <tr>
                    <td><?php echo $nrc->rincian ?></td>
                    <td><?php echo $nrc->Jenis ?></td>
                    <td><?php echo $nrc->Jumlah ?></td>
                    <td>
                      <a href="<?php echo base_url(); ?>admin/neraca/edit/<?php echo $nrc->Id_Neraca; ?>" class="btn btn-warning">Edit</a>
                      <a href="<?php echo base_url(); ?>admin/neraca/delete/<?php echo $nrc->Id_Neraca; ?>" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Pasiva</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach ($pasiva as $nrc) {
                    if ($jns != $nrc->Jenis) {
                      if ($jns!='') {
                        echo "<tr>
                        <td colspan='2'><b>Jumlah ".$jns."</b>"."</td>
                        <td colspan = '2'>"."<b>".$jumlah[$jns]."</b>"."</td>
                        </tr>";
                      }
                      $jns = $nrc->Jenis;
                      $jumlah[$jns]=0;
                    }
                    $jumlah[$jns]+=$nrc->Jumlah;
                    ?>
                  <tr>
                    <td><?php echo $nrc->rincian; ?></td>
                    <td><?php echo $nrc->Jenis; ?></td>
                    <td><?php echo $nrc->Jumlah; ?></td>
                    <td>
                      <a href="<?php echo base_url(); ?>admin/neraca/edit/<?php echo $nrc->Id_Neraca; ?>" class="btn btn-warning">Edit</a>
                      <a href="<?php echo base_url(); ?>admin/neraca/delete/<?php echo $nrc->Id_Neraca; ?>" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
    </div>
  </section>
</div>
