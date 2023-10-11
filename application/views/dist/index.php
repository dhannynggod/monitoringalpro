<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <a href="<?= base_url('dist/detail_informasi'); ?>">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Belum Eksekusi</h4>
              </div>
              <div class="card-body">
                <?php echo $dataBelum->status; ?>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <a href="<?= base_url('dist/detail_informasi'); ?>">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Sudah Eksekusi</h4>
              </div>
              <div class="card-body">
                <?php echo $dataSelesai->status; ?>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>