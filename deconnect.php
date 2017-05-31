<?php
include 'includes/config.php';
redirect_not_logged();

$id = isset($_GET['id']) ? $_GET['id'] : 1;
if($id==0)$id=1;
 
if(isset($_GET['X']))
{
	$id = (int)$_GET['X'];
	if($udata['ID'] == $id)
	{
		mysql_query('UPDATE players SET Status = 0 WHERE ID='.$id);
		header("location: cont.php?id=$id.php");
	}
	else
	{
		header("location: cont.php?id=$id.php");
	}
}
include 'includes/header.php';

?>
<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">

<div class="alert alert-block alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									Esti sigur ca vrei sa te deconectezi din joc?
								</div>
								
<a href= "?X=<?=$id?>"><button class="btn btn-success">Deconecteaza-te</button></a> 



<a href= "cont.php?id=<?=$id?>"><button class="btn btn-danger">Anuleaza</button>	</a>				

</div>
</div>
</div>
</div>