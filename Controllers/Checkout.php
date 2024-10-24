<?php 
	require_once("Models/TCategoria.php");
	require_once("Models/TProducto.php");
	class Checkout extends Controllers{
		use TCategoria, TProducto;
		public function __construct()
		{
			parent::__construct();
			session_start();
		}

		public function checkout()
		{
			$pageContent = getPageRout('checkout');
			$data['page_tag'] = NOMBRE_EMPESA;
			$data['page_title'] = NOMBRE_EMPESA;
			$data['page_name'] = "tienda_virtual";
			$data['page'] = $pageContent;
			$data['productos'] = $this->getProductosT();
			$data['categorias'] = $this->getCategorias();
			$this->views->getView($this,"checkout",$data); 
		}

	}
 ?>