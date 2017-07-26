<?php

class EnlacesModels{

	public function enlacesModel($enlaces){

		if($enlaces == "inicio" ||
		   $enlaces == "slide" ||
		   $enlaces == "articulos" ||
		   $enlaces == "galeria" ||
		   $enlaces == "videos" ||
		   $enlaces == "salir"){

			$module = "views/modules/".$enlaces.".php";
		}	

		else if($enlaces == "index"){
			$module = "views/modules/inicio.php";
		}

		else{
			$module = "views/modules/inicio.php";		
		}

		return $module;

	}


}