<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- General JS Scripts -->
<script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/popper.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/tooltip.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/dropify/js/dropify.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>

<script src="<?php echo base_url(); ?>assets/modules/leaflet/leaflet.js"></script>
<script>
  $(document).ready(function() {
    $('.dropify').dropify({
      messages: {
        default: 'Drag / Drop / Click untuk memilih gambar (Wajib Menggunakan Timestamp)',
        replace: 'Ganti',
        remove: 'Hapus',
        error: 'error'
      }
    });
  });
</script>

<!-- JS Libraies -->
<script src="<?= base_url(); ?>assets/modules/sweetalert/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/page/modules-datatables.js"></script>

<!-- Page Specific JS File -->
<script src="<?= base_url(); ?>assets/js/page/modules-sweetalert.js"></script>

<!-- Template JS File -->
<script src="<?= base_url(); ?>assets/js/scripts.js"></script>

</html>