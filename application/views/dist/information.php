<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Information</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Belum Eksekusi</h4>
              <div class="card-header-action">
                <a title="Export Excel" href="<?= base_url('dist/export'); ?>" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Export Excel</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center" width="5%">
                        No
                      </th>
                      <th>Nama Teknisi</th>
                      <th>Koordinat Lokasi</th>
                      <th>Gangguan</th>
                      <th>Tanggal</th>
                      <th class="text-center">Status Eksekusi</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_alpro_belum as $key => $row) {; ?>
                      <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td><?= $row->nama_teknisi ?></td>
                        <td><?= $row->latitude ?>, <?= $row->longitude ?></td>
                        <td><?= $row->gangguan ?></td>
                        <td><?= $row->created ?></td>
                        <td class="text-center"><?php if ($row->status == "Belum") : ?> <span class="badge badge-info"><?= $row->status ?></span>
                          <?php elseif ($row->status == "On Progress") : ?> <span class="badge badge-warning"><?= $row->status ?>
                            <?php elseif ($row->status == "Selesai") : ?> <span class="badge badge-success"><?= $row->status ?></span>
                        </td>
                      <?php endif; ?>
                      <td class="text-center">
                        <a title="Detail" href="<?php echo base_url(); ?>dist/detail/<?php echo $row->id; ?>" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>
                        <a title="Edit" href="<?php echo base_url(); ?>dist/detail_update/<?php echo $row->id; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <a id="AlertaEliminarCliente1" title="Hapus" href="<?php echo base_url(); ?>dist/delete_img1/<?php echo $row->id; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </td>

                      </tr>
                    <?php }; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Selesai Eksekusi</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="table-2">
                  <thead>
                    <tr>
                      <th class="text-center" width="5%">
                        No
                      </th>
                      <th>Nama Teknisi</th>
                      <th>Koordinat Lokasi</th>
                      <th>Gangguan</th>
                      <th>Tanggal</th>
                      <th class="text-center">Status Eksekusi</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_alpro_selesai as $key => $row) {; ?>
                      <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td><?= $row->nama_teknisi ?></td>
                        <td><?= $row->latitude ?>, <?= $row->longitude ?></td>
                        <td><?= $row->gangguan ?></td>
                        <td><?= $row->created ?></td>
                        <td class="text-center"><?php if ($row->status == "Belum") : ?> <span class="badge badge-info"><?= $row->status ?></span>
                          <?php elseif ($row->status == "On Progress") : ?> <span class="badge badge-warning"><?= $row->status ?>
                            <?php elseif ($row->status == "Selesai") : ?> <span class="badge badge-success"><?= $row->status ?></span>
                        </td>
                      <?php endif; ?>
                      <td class="text-center">
                        <a title="Detail" href="<?php echo base_url(); ?>dist/detail/<?php echo $row->id; ?>" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>
                        <a title="Edit" href="<?php echo base_url(); ?>dist/detail_update/<?php echo $row->id; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <a id="AlertaEliminarCliente" title="Hapus" href="<?php echo base_url(); ?>dist/delete_img2/<?php echo $row->id; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </td>

                      </tr>
                    <?php }; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>