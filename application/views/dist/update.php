<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Data</h1>
            <div class="section-header-breadcrumb">
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <?php
                foreach ($data_alpro as $key => $row) {; ?>
                    <div class="col-12">
                        <div class="card">
                            <form action="<?= base_url('dist/update') ?>" method="post" enctype="multipart/form-data">
                                <div class="card-header">
                                    <h4>Detail</h4>
                                </div>
                                <div class="card-body">
                                    <input type="hidden" name="id" value="<?php echo $row->id ?>">
                                    <div class="form-group">
                                        <label>Status Eksekusi</label>
                                        <select id="status" name="status" onchange="changeStatus()" class="form-select">
                                            <option value="<?php echo $row->status ?>"><?php echo $row->status ?></option>
                                            <option value="Belum">Belum</option>
                                            <option value="Selesai">Selesai</option>
                                        </select>

                                    </div>
                                    <div id="evs" class="form-group" style="display:none;">
                                        <label>Evident Progress</label>
                                        <div class="form-group">
                                            <input type="file" name="file2" class="dropify">
                                        </div>

                                        <label>Evident Selesai</label>
                                        <div class="form-group">
                                            <input type="file" name="file3" class="dropify">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group mb-0">
                                            <div class="card text-right">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    <?php }; ?>
                    </div>
            </div>
    </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>