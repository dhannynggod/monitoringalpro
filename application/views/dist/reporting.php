<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Reporting</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <form action="<?= base_url('dist/file') ?>" method="post" enctype="multipart/form-data">
              <div class="card-header">
                <h4>Masukkan Informasi Gangguan</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Nama Teknisi</label>
                  <input type="text" id="nama_teknisi" name="nama_teknisi" class="form-control" required="" autocomplete="off" placeholder="Masukkan Nama Teknisi">
                </div>
                <div class="form-group">
                  <label>Pilih Lokasi</label>
                  <div class="row">
                    <div class="col-sm-8">
                      <div id="map" style="width: 100%; height: 400px;"></div>
                    </div>
                    <div class="col-sm-4">
                      <?php echo form_open() ?>
                      <div class="form-group">
                        <label>Longitude</label>
                        <input type="text" id="longitude" name="longitude" class="form-control" required="" autocomplete="off" placeholder="Longitude">
                      </div>
                      <div class="form-group">
                        <label>Latitude</label>
                        <input type="text" id="latitude" name="latitude" class="form-control" required="" autocomplete="off" placeholder="Latitude">
                      </div>
                      <?php echo form_close() ?>
                    </div>

                    <script>
                      var map = L.map('map').setView([-7.002135230480566, 110.42338802229673], 12);

                      var tiles = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                        maxZoom: 22,
                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                      }).addTo(map);

                      //get Koordinat
                      //new
                      getLocation();
                      setInterval(() => {
                        getLocation();
                      }, 1000);

                      function getLocation() {
                        if (navigator.geolocation) {
                          navigator.geolocation.getCurrentPosition(showPosition);
                        } else {
                          x.innerHTML = "Geolocation is not supported by this browser.";
                        }
                      }

                      function showPosition(position) {
                        $("#latitude").val(position.coords.latitude);
                        $("#longitude").val(position.coords.longitude);
                      }
                      //new
                      var lngInput = document.querySelector("[name=longitude]");
                      var latInput = document.querySelector("[name=latitude]");

                      navigator.geolocation.getCurrentPosition(function(location) {
                        var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);

                        var curLocation = [location.coords.latitude, location.coords.longitude];
                        map.attributionControl.setPrefix(false);
                        var marker = new L.marker(curLocation, {
                          draggable: 'true',
                        });

                        marker.on('dragend', function(e) {
                          var position = marker.getLatLng();
                          marker.setLatLng(position, {
                            curLocation
                          }).bindPopup(position).update();
                          $("#latitude").val(position.lat);
                          $("#longitude").val(position.lng);
                        });

                        map.on('click', function(e) {
                          var lat = e.latlng.lat;
                          var lng = e.latlng.lng;
                          if (!marker) {
                            marker = L.marker(e.latlng).addTo(map);
                          } else {
                            marker.setLatLng(e.latlng);
                          }
                          lngInput.value = lng;
                          latInput.value = lat;
                        });

                        map.addLayer(marker);
                      });
                    </script>
                  </div>
                </div>

                <div class="form-group">
                  <label>Alamat Lengkap</label>
                  <input type="text" id="alamat" name="alamat" class="form-control" required="" autocomplete="off" placeholder="Masukkan Alamat Lengkap">
                </div>
                <div class="form-group">
                  <label>Jenis Gangguan</label>
                  <select id="gangguan" name="gangguan" class="form-control">
                    <option selected>Pilih Jenis Gangguan</option>
                    <option>Kabel Teruntai</option>
                    <option>ODP Terbuka</option>
                    <option>Tiang Miring</option>
                    <option>Tiang Hampir Roboh</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" id="keterangan" name="keterangan" class="form-control" required="" autocomplete="off" placeholder="Masukkan Keterangan">
                </div>
                <div class="form-group" hidden>
                  <label>Status Eksekusi</label>
                  <input id="status" name="status" value="Belum" class="form-control">
                  </input>
                </div>

                <div class="form-group">
                  <label>Evident TKP (Wajib)</label>
                  <div class="form-group">
                    <input type="file" name="file1" class="dropify" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="card text-right">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                  </div>
                </div>

            </form>
          </div>
        </div>

      </div>

    </div>
</div>


</section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>