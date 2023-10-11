<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Kasus</h1>
            <div class="section-header-breadcrumb">
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <?php

                foreach ($data_alpro as $key => $row) {; ?>
                    <div class="col-12">
                        <div class="card">
                            <form>
                                <div class="card-header">
                                    <h4>Detail</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label value="">Nama Teknisi</label>
                                        <input type="text" id="nama_teknisi" name="nama_teknisi" class="form-control" required="" autocomplete="off" value="<?= $row->nama_teknisi ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Gangguan</label>
                                        <input type="text" id="gangguan" name="gangguan" class="form-control" required="" autocomplete="off" value="<?= $row->gangguan ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input type="text" id="keterangan" name="keterangan" class="form-control" required="" autocomplete="off" value="<?= $row->keterangan ?>">
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Status Eksekusi</label>
                                        <input type="text" id="status" name="status" class="form-control" required="" autocomplete="off" value="<?= $row->status ?>">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="section-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Maps</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Detail Lokasi</label>
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div id="map" style="width: 100%; height: 400px;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Longitude & Latitude</label>
                                                            <input type="text" id="longitude" value="<?= $row->longitude ?>, <?= $row->latitude ?> " name="longitude" class="form-control" required="" autocomplete="off" placeholder="Longitude">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <input type="text" id="alamat" name="alamat" class="form-control" required="" autocomplete="off" value="<?= $row->alamat ?>">
                                                        </div>
                                                        <script>
                                                            navigator.geolocation.getCurrentPosition(function(location) {
                                                                var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);

                                                                //map view
                                                                console.log(location.coords.latitude, location.coords.longitude);
                                                                "<a href='https://www.google.com/maps/dir/?api=1&origin=" +
                                                                location.coords.latitude + "," + location.coords.longitude + "&destination=<?= $row->latitude ?>,<?= $row->longitude ?>' class='btn btn-sm btn-outline-success' target='_blank'>Rute</a>"
                                                            });
                                                        </script>
                                                    </div>

                                                    <script>
                                                        navigator.geolocation.getCurrentPosition(function(location) {
                                                            var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);

                                                            //map view
                                                            console.log(location.coords.latitude, location.coords.longitude);


                                                            var map = L.map('map').setView([-7.002135230480566, 110.42338802229673], 12);

                                                            var tiles = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                                                                maxZoom: 22,
                                                                subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                                                            }).addTo(map);

                                                            L.marker([<?= $row->latitude ?>, <?= $row->longitude ?>]).addTo(map).bindPopup("<a href='https://www.google.com/maps/dir/?api=1&origin=" +
                                                                location.coords.latitude + "," + location.coords.longitude + "&destination=<?= $row->latitude ?>,<?= $row->longitude ?>' class='btn btn-sm btn-outline-success' target='_blank'>Open in Google Maps</a>").openPopup();
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Gambar</h4>
                            </div>
                            <div class="card-body">
                                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src='<?= base_url() ?>uploads/file/<?= $row->file1; ?>' alt="File1">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src='<?= base_url() ?>uploads/file/<?= $row->file2; ?>' alt="File2">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src='<?= base_url() ?>uploads/file/<?= $row->file3; ?>' alt="File3">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>