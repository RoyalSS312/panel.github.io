<?php
include 'includes/config.php';
redirect_not_logged();

$f = isset($_GET['f']) ? $_GET['f'] : 1;
if($f==0)$f=1;

$numepl = $udata['Name'];
$playerid = $udata['ID'];


if(isset($_POST['q_261']))
{
	if(isset($_POST['q_262']))
	{
		if(isset($_POST['q_263']))
		{
			if(isset($_POST['q_528']))
			{
				if(isset($_POST['q_529']))
				{
					if(isset($_POST['q_459']))
					{				
						$intrebarea1 = mysql_real_escape_string($_POST['q_261']);
						$intrebarea2 = mysql_real_escape_string($_POST['q_262']);
						$intrebarea3 = mysql_real_escape_string($_POST['q_263']);
						$intrebarea4 = mysql_real_escape_string($_POST['q_528']);
						$intrebarea5 = mysql_real_escape_string($_POST['q_529']);
						$intrebarea6 = mysql_real_escape_string($_POST['q_459']);
						mysql_query("INSERT INTO aplications (name, intrebarea1, intrebarea2,intrebarea3,intrebarea4,intrebarea5,intrebarea6, factionid, id) VALUES ('$numepl','$intrebarea1','$intrebarea2','$intrebarea3','$intrebarea4','$intrebarea5','$intrebarea6', '$f', '$playerid')");
						header("location: aplications.php?f=$f");
					}	
				}	
			}
		}		
	}
}
include 'includes/header.php';




?>

<div class="main-content">
<div class="page-content">
<div class="span11">
<div class="row-fluid">

<div class="span12">
 
 
<?php if($udata['Leader'] == 0 && $udata['Member'] == 0 && $udata['FPunish'] == 0 && $udata['Level'] >= 3) { ?>
<div class="row-fluid">
<div class="span8">


<?php $query = mysql_query("SELECT * from groups WHERE groupID = '$f'"); 
	  while($dnn=mysql_fetch_array($query)) { ?>

<h3>Aplica pentru <?php echo htmlentities($dnn['groupName']); ?></h3>
<?php } ?>			
<hr>


<div class="alert alert-info">
TINE MINTE: Daca ai creat o aplicatie, nu o poti sterge.
</div>
<form method="POST">
Varsta reala:<br>
<textarea name='q_261' class="span6" rows="2" required></textarea>
<br>
Cat timp petreci zilnic jucand SA:MP?:<br>
<textarea name='q_262' class="span6" rows="2" required></textarea>
<br>
Esti de acord sa stai minim 14 zile in factiune pentru a nu primi Faction Punish cand iesi din factiune?:<br>
<textarea name='q_263' class="span6" rows="2" required></textarea>
<br>
Care a fost ultima factiune si motivul pentru care ai iesit:<br>
<textarea name='q_528' class="span6" rows="2" required></textarea>
<br>
De ce doresti sa te alaturi acestei factiuni?:<br>
<textarea name='q_529' class="span6" rows="2" required></textarea>
<br>
Alte precizari?:<br>
<textarea name='q_459' class="span6" rows="2" required></textarea>
<br>
<br>
<input type="hidden" name="_token" value="UdzZbtCD4JBQZ061f0BxazIcmx7OLoVQAwD41aLF">
<input type="submit" value="Aplica!" class="btn btn-info btn-small"/>
</form>
 
<?php } ?>
<?php if($udata['Leader'] != 0 || $udata['Member'] != 0 ||  $udata['FPunish'] != 0 || $udata['Level'] < 3) { ?>

<legend><center>Pentru a aplica trebuie sa nu apartii niciunei factiuni, sa ai 0 fp-uri si level 3+</center></legend>

<?php } ?>
</div>




</div>
</div>
</div>
</div>