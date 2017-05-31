<?php
include 'includes/config.php';
include 'includes/header.php';

$p = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Status > 0');
$p = mysql_fetch_array($p);

$lspd = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Status > 0 and Member = 1');
$lspd = mysql_fetch_array($lspd);

$fbi = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Status > 0 and Member = 2');
$fbi = mysql_fetch_array($fbi);

$ng = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Status > 0 and Member = 3');
$ng = mysql_fetch_array($ng);

$para = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Status > 0 and Member = 4');
$para = mysql_fetch_array($para);

$lvpd = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Status > 0 and Member = 5');
$lvpd = mysql_fetch_array($lvpd);

$rus = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Status > 0 and Member = 6');
$rus = mysql_fetch_array($rus);

$grove = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Status > 0 and Member = 7');
$grove = mysql_fetch_array($grove);

$aztec = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Status > 0 and Member = 8');
$aztec = mysql_fetch_array($aztec);

$rifa = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Status > 0 and Member = 9');
$rifa = mysql_fetch_array($rifa);

$balas = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Status > 0 and Member = 10');
$balas = mysql_fetch_array($balas);

$vagos = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Status > 0 and Member = 11');
$vagos = mysql_fetch_array($vagos);

$civil = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Status > 0 and Member = 0');
$civil = mysql_fetch_array($civil);

?>

<div class="main-content">
<div class="page-content">
<div class="row-fluid">

<?php $query = mysql_query('SELECT * FROM players WHERE Member="1" AND Status > 0 ORDER by Rank ASC'); ?>
<div class="row-fluid"><div class="span12">
<h4 class="groupcolor g1">Los Santos Police Department (<?=$lspd['total']?> online)</h4>
<?php while($dnn = mysql_fetch_array($query)) { ?>
<div class="span2 center">
<a href="cont.php?id=<?php echo htmlentities($dnn['ID']); ?>">
<img src="images/avatars/40/<?php echo htmlentities($dnn['Skin']);?>.png"><Br />
<?php echo htmlentities($dnn['Name']); ?>
</a>
</div>
<?php } ?>
</div>

<?php $query = mysql_query('Select * from players where Member="2" and Status > 0 ORDER by MemberRank ASC'); ?>
<div class="row-fluid"><div class="span12">
<h4 class="groupcolor g2">Federal Bureau of Investigations (<?=$fbi['total']?> online)</h4>
<?php while($dnn = mysql_fetch_array($query)) { ?>
<div class="span2 center">
<a href="cont.php?id=<?php echo htmlentities($dnn['ID']); ?>">
<img src="images/avatars/40/<?php echo htmlentities($dnn['Skin']);?>.png"><Br />
<?php echo htmlentities($dnn['Name']); ?>
</a>
</div>
<?php } ?>
</div>

<?php $query = mysql_query('Select * from players where Member="3" and Status > 0 ORDER by MemberRank ASC'); ?>
<div class="row-fluid"><div class="span12">
<h4 class="groupcolor g3">National Guard (<?=$ng['total']?> online)</h4>
<?php while($dnn = mysql_fetch_array($query)) { ?>
<div class="span2 center">
<a href="cont.php?id=<?php echo htmlentities($dnn['ID']); ?>">
<img src="images/avatars/40/<?php echo htmlentities($dnn['Skin']);?>.png"><Br />
<?php echo htmlentities($dnn['Name']); ?>
</a>
</div>
<?php } ?>
</div>

<?php $query = mysql_query('Select * from players where Member="4" and Status > 0 ORDER by MemberRank ASC'); ?>
<div class="row-fluid"><div class="span12">
<h4 class="groupcolor g5">Paramedic Department (<?=$para['total']?> online)</h4>
<?php while($dnn = mysql_fetch_array($query)) { ?>
<div class="span2 center">
<a href="cont.php?id=<?php echo htmlentities($dnn['ID']); ?>">
<img src="images/avatars/40/<?php echo htmlentities($dnn['Skin']);?>.png"><Br />
<?php echo htmlentities($dnn['Name']); ?>
</a>
</div>
<?php } ?>
</div>

<?php $query = mysql_query('Select * from players where Member="5" and Status > 0 ORDER by MemberRank ASC'); ?>
<div class="row-fluid"><div class="span12">
<h4 class="groupcolor g6">Guvernment (<?=$lvpd['total']?> online)</h4>
<?php while($dnn = mysql_fetch_array($query)) { ?>
<div class="span2 center">
<a href="cont.php?id=<?php echo htmlentities($dnn['ID']); ?>">
<img src="images/avatars/40/<?php echo htmlentities($dnn['Skin']);?>.png"><Br />
<?php echo htmlentities($dnn['Name']); ?>
</a>
</div>
<?php } ?>
</div>

<?php $query = mysql_query('Select * from players where Member="6" and Status > 0 ORDER by MemberRank ASC'); ?>
<div class="row-fluid"><div class="span12">
<h4 class="groupcolor g7">The Russian Mafia (<?=$rus['total']?> online)</h4>
<?php while($dnn = mysql_fetch_array($query)) { ?>
<div class="span2 center">
<a href="cont.php?id=<?php echo htmlentities($dnn['ID']); ?>">
<img src="images/avatars/40/<?php echo htmlentities($dnn['Skin']);?>.png"><Br />
<?php echo htmlentities($dnn['Name']); ?>
</a>
</div>
<?php } ?>
</div>

<?php $query = mysql_query('Select * from players where Member="7" and Status > 0 ORDER by MemberRank ASC'); ?>
<div class="row-fluid"><div class="span12">
<h4 class="groupcolor g4">Grove Street (<?=$grove['total']?> online)</h4>
<?php while($dnn = mysql_fetch_array($query)) { ?>
<div class="span2 center">
<a href="cont.php?id=<?php echo htmlentities($dnn['ID']); ?>">
<img src="images/avatars/40/<?php echo htmlentities($dnn['Skin']);?>.png"><Br />
<?php echo htmlentities($dnn['Name']); ?>
</a>
</div>
<?php } ?>
</div>

<?php $query = mysql_query('Select * from players where Member="8" and Status > 0 ORDER by MemberRank ASC'); ?>
<div class="row-fluid"><div class="span12">
<h4 class="groupcolor g8">Los Aztecas (<?=$aztec['total']?> online)</h4>
<?php while($dnn = mysql_fetch_array($query)) { ?>
<div class="span2 center">
<a href="cont.php?id=<?php echo htmlentities($dnn['ID']); ?>">
<img src="images/avatars/40/<?php echo htmlentities($dnn['Skin']);?>.png"><Br />
<?php echo htmlentities($dnn['Name']); ?>
</a>
</div>
<?php } ?>
</div>

<?php $query = mysql_query('Select * from players where Member="9" and Status > 0 ORDER by MemberRank ASC'); ?>
<div class="row-fluid"><div class="span12">
<h4 class="groupcolor g9">The Rifa (<?=$rifa['total']?> online)</h4>
<?php while($dnn = mysql_fetch_array($query)) { ?>
<div class="span2 center">
<a href="cont.php?id=<?php echo htmlentities($dnn['ID']); ?>">
<img src="images/avatars/40/<?php echo htmlentities($dnn['Skin']);?>.png"><Br />
<?php echo htmlentities($dnn['Name']); ?>
</a>
</div>
<?php } ?>
</div>

<?php $query = mysql_query('Select * from players where Member="10" and Status > 0 ORDER by MemberRank ASC'); ?>
<div class="row-fluid"><div class="span12">
<h4 class="groupcolor g10">Balas (<?=$balas['total']?> online)</h4>
<?php while($dnn = mysql_fetch_array($query)) { ?>
<div class="span2 center">
<a href="cont.php?id=<?php echo htmlentities($dnn['ID']); ?>">
<img src="images/avatars/40/<?php echo htmlentities($dnn['Skin']);?>.png"><Br />
<?php echo htmlentities($dnn['Name']); ?>
</a>
</div>
<?php } ?>
</div>

<?php $query = mysql_query('Select * from players where Member="11" and Status > 0 ORDER by playerGroupRank ASC'); ?>
<div class="row-fluid"><div class="span12">
<h4 class="groupcolor g11">Los Vagos (<?=$vagos['total']?> online)</h4>
<?php while($dnn = mysql_fetch_array($query)) { ?>
<div class="span2 center">
<a href="cont.php?id=<?php echo htmlentities($dnn['ID']); ?>">
<img src="images/avatars/40/<?php echo htmlentities($dnn['Skin']);?>.png"><Br />
<?php echo htmlentities($dnn['Name']); ?>
</a>
</div>
<?php } ?>
</div>

<b <h4 class="groupcolor g15">Civili online (<?=$civil['total']?> online)</h4></b>



<table class="table table-condensed">
<tbody>
<tr class="success">
<td style="width: 143px;">Nume</td>
<td >Nivel</td>
<td>Ore jucate</td>
<td>Puncte de respect</td>
</tr>
<?php $query = mysql_query('SELECT * from players WHERE Status > 0 and Member = 0 order by ID desc'); 
	  while($dnn=mysql_fetch_array($query)) { ?>
<tr> 
<td><a href="cont.php?id=<?=$dnn['ID']?>"><font color='#1a1a1a'><?=$dnn['Name']?></a></font></td>
<td>
<?php echo htmlentities($dnn['Level']); ?>
</td>

<td>
<?php echo htmlentities($dnn['HoursPlayed']); ?>
</td>

</td>
<td><?php echo htmlentities($dnn['Age']); ?></td>
</tr>
<?php } ?>

</tbody></table> 
<!-- do not affect this divs, or your design will fuck up -->
</div>

</div>
</div>
<!-- do not affect this divs, or your design will fuck up -->