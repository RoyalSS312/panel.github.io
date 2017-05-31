<?php
include 'includes/config.php';

include 'includes/header.php';


$tmp = array();
foreach($member_types as $id => $member){
	if($id > 0){
		$tmp[] = '<a class="active" href="aplications.php?f='.$id.'">'.$member.'</a>';
	}
} ?>

<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">
<div class="tabbable tabs-right">


<?php 
$f = isset($_GET['f']) ? $_GET['f'] : 1;
if($f==0)$f=1;
else if($f > 11)$f=1;
else if($f < 0)$f=1;


$nume = mysql_query("SELECT groupName from groups where groupID = '$f'");
?>
<div class="span12">
 
 
 <?php $query = mysql_query("SELECT * from groups WHERE groupID = '$f'"); 
	  while($dnn=mysql_fetch_array($query)) { ?>

<div class="page-header">
<h1>Aplicatii pentru <?php echo htmlentities($dnn['groupName']); ?></h1>
</div>


<?php } ?>



 <?php $query = mysql_query("SELECT * from aplications WHERE factionid = '$f'"); 
	  while($a=mysql_fetch_array($query)) { ?>

	
<?php

$new = mysql_query("SELECT COUNT(id) as total FROM aplications WHERE factionid = '$f' and status = 0");
$new = mysql_fetch_array($new);


$acceptedfortests = mysql_query("SELECT COUNT(id) as total FROM aplications WHERE factionid = '$f' and status = 1");
$acceptedfortests = mysql_fetch_array($acceptedfortests);


$accepted = mysql_query("SELECT COUNT(id) as total FROM aplications WHERE factionid = '$f' and status = 2");
$accepted = mysql_fetch_array($accepted);



$rejected = mysql_query("SELECT COUNT(id) as total FROM aplications WHERE factionid = '$f' and status = 3");
$rejected = mysql_fetch_array($rejected);


?>	
<h4 class="blue">
<i class="icon-sun"></i>
Aplicatii noi (<?=$new['total']?>)
</h4>
<table class="table table-striped table-condensed table-hover">
<thead>
<tr>
<th class="center">ID</th>
<th>Jucator</th>
<th class="hidden-100">Data</th>
<th class="hidden-480">Vezi</th>
</tr>
</thead>
<tbody>

<?php $query = mysql_query("SELECT * from aplications WHERE factionid = '$f' and status = 0"); 
	while($new1=mysql_fetch_array($query)) { ?>
	  
<tr>
<td class="center"><?php echo htmlentities($new1['id']); ?></td>
<td>

<?php

$idu = $new1['name'];
$check = get_row("SELECT * FROM players WHERE Name='$idu'")
?>
<a href="cont.php?id=<?php echo $check['ID']; ?>"><?php echo htmlentities($new1['Name']); ?></a>
</td>
<td class="hidden-100">
<?php echo htmlentities($new1['time']); ?>
</td>
<td class="hidden-480"><a href="viewaplication.php?a=<?php echo htmlentities($new1['id']); ?>" class="">Citeste aplicatia</a></td>
</tr>


<?php } ?>

</tbody>
</table>

<h4 class="purple">
<i class="icon-list-ul"></i>
Aplicatiile jucatorilor acceptati pentru teste (<?=$acceptedfortests['total']?>)
</h4>
<table class="table table-striped table-condensed table-hover">
<thead>
<tr>
<th class="center">ID</th>
<th>Jucator</th>
<th class="hidden-100">Data</th>
<th class="hidden-480">Vezi</th>
</tr>
</thead>
<tbody>
<?php $query = mysql_query("SELECT * from aplications WHERE factionid = '$f' and status = 1"); 
	while($new1=mysql_fetch_array($query)) { ?>
	  
<tr>
<td class="center"><?php echo htmlentities($new1['id']); ?></td>
<td>

<?php

$idu = $new1['name'];
$check = get_row("SELECT * FROM players WHERE Name='$idu'")
?>
<a href="cont.php?id=<?php echo $check['ID']; ?>"><?php echo htmlentities($new1['name']); ?></a>
</td>
<td class="hidden-100">
<?php echo htmlentities($new1['time']); ?>
</td>
<td class="hidden-480"><a href="viewaplication.php?a=<?php echo htmlentities($new1['id']); ?>" class="">Citeste aplicatia</a></td>
</tr>


<?php } ?>

</tbody>
</table>

<h4 class="green">
<i class="icon-thumbs-up"></i>
Aplicatiile jucatorilor acceptati (<?=$accepted['total']?>)
</h4>
<table class="table table-striped table-condensed table-hover">
<thead>
<tr>
<th class="center">ID</th>
<th>Jucator</th>
<th class="hidden-100">Data</th>
<th class="hidden-480">Vezi</th>
</tr>
</thead>
<tbody>
<?php $query = mysql_query("SELECT * from aplications WHERE factionid = '$f' and status = 2"); 
	while($new1=mysql_fetch_array($query)) { ?>
	  
<tr>
<td class="center"><?php echo htmlentities($new1['id']); ?></td>
<td>

<?php

$idu = $new1['name'];
$check = get_row("SELECT * FROM players WHERE Name='$idu'")
?>
<a href="cont.php?id=<?php echo $check['ID']; ?>"><?php echo htmlentities($new1['name']); ?></a>
</td>
<td class="hidden-100">
<?php echo htmlentities($new1['time']); ?>
</td>
<td class="hidden-480"><a href="viewaplication.php?a=<?php echo htmlentities($new1['id']); ?>" class="">Citeste aplicatia</a></td>
</tr>


<?php } ?>

</tbody>
</table>


<h4 class="red">
<i class="icon-thumbs-down"></i>
Aplicatiile jucatorilor respinsi (<?=$rejected['total']?>)
</h4>
<table class="table table-striped table-condensed table-hover">
<thead>
<tr>
<th class="center">ID</th>
<th>Jucator</th>
<th class="hidden-100">Data</th>
<th class="hidden-480">Vezi</th>
</tr>
</thead>
<tbody>
<?php $query = mysql_query("SELECT * from aplications WHERE factionid = '$f' and status = 3"); 
	while($new1=mysql_fetch_array($query)) { ?>
	  
<tr>
<td class="center"><?php echo htmlentities($new1['id']); ?></td>
<td>

<?php

$idu = $new1['name'];
$check = get_row("SELECT * FROM players WHERE Name='$idu'")
?>
<a href="cont.php?id=<?php echo $check['ID']; ?>"><?php echo htmlentities($new1['name']); ?></a>
</td>
<td class="hidden-100">
<?php echo htmlentities($new1['time']); ?>
</td>
<td class="hidden-480"><a href="viewaplication.php?a=<?php echo htmlentities($new1['id']); ?>" class="">Citeste aplicatia</a></td>
</tr>


<?php } ?>

																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									</tbody>
</table>




 
 

<?php } ?>




 
</div>
</div>
</div>
</div>
