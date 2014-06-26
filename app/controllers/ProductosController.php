<?php
class ProductosController extends BaseController{

	public function mostrarProductos(){
		$productos=Producto::all();//devuelve un array con todas los productos
		return View::make('productos.lista',array('productos'=>$productos));
		//se pasa como parametro todo lo que queramos mostrar por la vista, en
		//este caso un array con productos

	}

}
?>