<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Simpanan
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"> Home</a></li>
      <li class="active">Simpana Pinjam</li>
      <li>Simpanaan</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="container">
        <br>
        <div class="form-group col-md-6">
          <label>Tahun</label>
          <select class="form-control" style="width: 100px;">
            <option>2019</option>
            <option>2018</option>
          </select>
        </div>


        <a href="<?php echo base_url(); ?>admin/simpanpinjam/form_input_simpanan" class="btn btn-success">+ Tambah Data</a>
        <a href="#" class="btn btn-primary"><i class="fa fa-print"> </i> Cetak Data</a>
      </div>

      <div class="box-body">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Daftar Simpanan</a></li>
              <li><a href="#spokok" data-toggle="tab">S.pokok</a></li>
              <li><a href="#swajib" data-toggle="tab">S.wajib</a></li>
              <li><a href="#susaha" data-toggle="tab">S.usaha</a></li>
              <li><a href="#ssukarela" data-toggle="tab">S.sukarela</a></li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">

            </div>
            <div class="tab-pane" id="spokok">

            </div>
            <div class="tab-pane" id="swajib">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.Anggota</th>
                    <th>Nama</th>
                    <th>Jan</th>
                    <th>Feb</th>
                    <th>Mar</th>
                    <th>Apr</th>
                    <th>Mei</th>
                    <th>Jun</th>
                    <th>Jul</th>
                    <th>Agt</th>
                    <th>Sep</th>
                    <th>Okt</th>
                    <th>Nov</th>
                    <th>Des</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($wajib as $w): ?>
                        <tr>
                          <td><?php echo $w['id_pengguna']; ?></td>
                          <td>Sudrajat</td>
                          <?php foreach ($bulan as $b): ?>
                            <td><?php echo $w[$b]['jumlah'] ?></td>
                          <?php endforeach; ?>
                          <td><?php echo $w['total'] ?></td>
                          <td>testes</td>
                        </tr>
                      <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane" id="susaha">
              
            </div>
            <div class="tab-pane" id="ssukarela">

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
