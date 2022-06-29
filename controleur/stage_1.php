<?php
if(!isset($_REQUEST['action']))
     $action = 'entreprise';
else
	$action = $_REQUEST['action'];
	 
switch($action)
{
	case 'entreprise':
		{include("vue/entreprise.php");
		break;
		}
	case 'stage1_mission1':
		{include("vue/stage1_mission1.php");
		break;
		}
	/* a compléter */
}
?>