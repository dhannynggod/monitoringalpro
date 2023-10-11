<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Location</h1>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Map</h4>
            </div>
            <div class="card-body">
              <div id="map" style="width: 100%; height: 400px;"></div>

              <script>
                var data = [
                  <?php
                  foreach ($lokasi as $key => $value) { ?> {
                      "lokasi": [<?= $value->latitude ?>, <?= $value->longitude ?>],
                      "gangguan": "<?= $value->gangguan ?>",
                      "status": "<?= $value->status ?>"
                    },
                  <?php } ?>
                ];

                var map = new L.Map('map', {
                  zoom: 12,
                  center: new L.latLng(-7.002135230480566, 110.42338802229673)
                });

                googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                  maxZoom: 20,
                  subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                });
                googleStreets.addTo(map);

                var markersLayer = new L.LayerGroup();
                map.addLayer(markersLayer);


                var kabelteruntai = L.icon({
                  iconUrl: '<?= base_url('assets/modules/leaflet/icon/icon1.png') ?>',
                  iconSize: [20, 30]
                });

                var odpterbuka = L.icon({
                  iconUrl: '<?= base_url('assets/modules/leaflet/icon/icon2.png') ?>',
                  iconSize: [20, 30]
                });

                var tiangmiring = L.icon({
                  iconUrl: '<?= base_url('assets/modules/leaflet/icon/icon3.png') ?>',
                  iconSize: [20, 30]
                });

                var tiangroboh = L.icon({
                  iconUrl: '<?= base_url('assets/modules/leaflet/icon/icon4.png') ?>',
                  iconSize: [20, 30]
                });

                var icons = "";
                for (i in data) {
                  var lokasi = data[i].lokasi;
                  var gangguan = data[i].gangguan;
                  var status = data[i].status;

                  if (gangguan == "Kabel Teruntai") {
                    icons = kabelteruntai;
                  } else if (gangguan == "ODP Terbuka") {
                    icons = odpterbuka;
                  } else if (gangguan == "Tiang Miring") {
                    icons = tiangmiring;
                  } else if (gangguan == "Tiang Hampir Roboh") {
                    icons = tiangroboh;
                  }
                  var marker = new L.marker(new L.latLng(lokasi), {
                    title: gangguan,
                    icon: icons
                  });
                  marker.bindPopup('<b>Gangguan :</b> ' + gangguan + ' <br> <b> Status Eksekusi :</b> ' + status + '</b>');
                  markersLayer.addLayer(marker); 
                }
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>