<?php
include 'includes/config.php';

include 'includes/header.php';



?>
<div class="main-content">
<div class="breadcrumbs" id="breadcrumbs">
<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>
<div class="page-content">




<div class="infobox infobox-pink  ">
<div class="infobox-icon">
<i class="icon-user"></i>
</div>
<div class="infobox-data">
<?php $query3 = mysql_query('SELECT ID from players'); $num_rows = mysql_num_rows($query3);?>
<span class="infobox-data-number"><?php echo $num_rows; ?></span>
<div class="infobox-content">Persoane întregistrate</div>
</div>
</div>
<div class="infobox infobox-red  ">
<div class="infobox-icon">
<i class="icon-shield"></i>
</div>
<div class="infobox-data">
<?php 
$q1 = mysql_query('SELECT ID from players WHERE AdminLevel > 0');
$admins = mysql_num_rows($q1);
$staff = $admins; ?>
<span class="infobox-data-number"><?php echo $staff; ?></span>
<div class="infobox-content">Staff</div>
</div>
</div>
</div>

</div>

</div>
</div>
