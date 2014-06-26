<?php
class BodegasController extends BaseController{

	public function mostrarBodegas(){
		$bodegas=Bodega::all();//devuelve un array con todas las bodegas
		return View::make('bodegas.lista',array('bodegas'=>$bodegas));
		//se pasa como parametro todo lo que queramos mostrar por la vista, en
		//este caso un array con bodegas

	}

}
?>