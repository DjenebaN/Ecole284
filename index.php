<?php 

include('view/commun/header.php');

//system de routing

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

switch ($page) {
	case 'Alleleve':
		include('view/eleve.php');
		break;

	case 'detailEleve':
		include('view/detailEleve.php');
		break;

	case 'Allprof':
		include('view/prof.php');
		break;

	case 'detailProf':
		include('view/detailProf.php');
		break;

	default:
		include('view/accueil.php');
		break;
}


include('view/commun/footer.php');


?>