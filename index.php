<?php
include("vue/entete.php") ;
include("vue/menu.php") ;
if(!isset($_REQUEST['uc']))
     $uc = 'accueil';//Pour afficher la premiere page sur lequel on atterit
else
	$uc = $_REQUEST['uc'];
	 
switch($uc)
{
	case 'accueil':
		{include("vue/accueil.php");
		break;
		}
	case 'cv':
		{include("vue/cv.php");
		break;
		}
	case 'stage' :
		{include("vue/stage.php");
		break;
		}
	case 'ap': {
			include("vue/ap.php");
			break;
		}
	case 'veille': {
			include("vue/veilleTechno.php");
			break;
		}
	case 'contact': {
			include("vue/contact.php");
			break;
		}
	case 'complementaire': {
			include("vue/complementaire.php");
			break;
		}
	case 'veilleTechno': {
			include("vue/veilleTechno.php");
			break;
		}
}
include("vue/pied.php") ;
?>



