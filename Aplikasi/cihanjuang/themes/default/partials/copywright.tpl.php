<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

	<p>
		&copy; <?php echo date("Y");?> <a target="_blank" href="https://opendesa.id">OpenDesa</a> <i class="fa fa-circle" style="font-size: smaller;"></i>
		<a target="_blank" href="https://github.com/OpenSID/OpenSID">OpenSID</a> <?php echo AmbilVersi()?>
		<br>
	  <a target="_blank" href="<?php echo base_url()?>index.php/siteman">This Village Information System</a> Modify by <a target="_blank" href="http://poltekpos.ac.id">PKM Poltekpos</a></br>

	  <?php if (file_exists('mitra')): ?>
	  	Hosting didukung <a target="_blank" href="https://idcloudhost.com"><img src="<?= base_url('/assets/images/Logo-IDcloudhost.png')?>" height='15px' alt="Logo-IDCloudHost" title="Logo-IDCloudHost"></a>
	  <?php endif; ?>
	</p>
