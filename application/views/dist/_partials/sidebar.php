<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?php echo base_url(); ?>dist/index">Monitoring Alpro</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?php echo base_url(); ?>dist/index">MA</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="<?php echo $this->uri->segment(2) == 'index' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/index"><i class="far fa-square"></i> <span>Dashboard</span></a></li>

      <li class="menu-header">Components</li>
      <li class="<?php echo $this->uri->segment(2) == 'reporting' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/reporting"><i class="fas fa-calendar"></i> <span>Reporting</span></a></li>
      <li class="<?php echo $this->uri->segment(2) == 'detail_informasi' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/detail_informasi"><i class="fas fa-server"></i> <span>Information</span></a></li>
      <li class="<?php echo $this->uri->segment(2) == 'gmaps_simple' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/gmaps_simple"><i class="fas fa-map-marker-alt"></i> <span>Location</span></a></li>
  </aside>
</div>