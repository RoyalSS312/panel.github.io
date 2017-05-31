<?php function redirect_not_logged()
{
    $id = $udata['ID'];
    $q = mysql_query("SELECT * FROM `players` WHERE ID = $id");
	while($row = mysql_fetch_array($q))
	{
	     $rpg = $row['rpgon'];
	}
	if($rpg == 0) { echo " Neautentificat "; die(); }
	
}
?>