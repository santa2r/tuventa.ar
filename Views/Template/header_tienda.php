<?php 
	$cantCarrito = 0;
	if(isset($_SESSION['arrCarrito']) and count($_SESSION['arrCarrito']) > 0){ 
		foreach($_SESSION['arrCarrito'] as $product) {
			$cantCarrito += $product['cantidad'];
		}
	}
	$tituloPreguntas = !empty(getInfoPage(PPREGUNTAS)) ? getInfoPage(PPREGUNTAS)['titulo'] : "";
	$infoPreguntas = !empty(getInfoPage(PPREGUNTAS)) ? getInfoPage(PPREGUNTAS)['contenido'] : "";
 ?>
<!DOCTYPE html>
<html lang="es_AR">
<head>
	<title><?= $data['page_tag']; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<?php 
		$nombreSitio = NOMBRE_EMPESA;
		$descripcion = DESCRIPCION;
		$nombreProducto = NOMBRE_EMPESA;
		$urlWeb = base_url();
		$urlimages = media()."/images/portada.jpg";
		if(!empty($data['producto'])){
			//$descripcion = $data['producto']['descripcion'];
			$descripcion = DESCRIPCION;
			$nombreProducto = $data['producto']['nombre'];
			$urlWeb = base_url()."/tienda/producto/".$data['producto']['idproducto']."/".$data['producto']['ruta'];
			$urlimages = $data['producto']['images'][0]['url_image'];
		}
	?>
	<meta property="og:locale" 		content='es_ES'/>
	<meta property="og:type"        content="website" />
	<meta property="og:site_name"	content="<?= $nombreSitio; ?>"/>
	<meta property="og:description" content="<?= $descripcion; ?>" />
	<meta property="og:title"       content="<?= $nombreProducto; ?>" />
	<meta property="og:url"         content="<?= $urlWeb; ?>" />
	<meta property="og:image"       content="<?= $urlimages; ?>" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= media() ?>/tienda/images/favicon.png">
    <link rel="stylesheet" href="<?= media() ?>/tienda/unpkg.com/swiper%408.1.4/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= media() ?>/tienda/cdn.jsdelivr.net/npm/bootstrap-icons%401.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= media() ?>/tienda/unpkg.com/metismenujs%401.3.1/dist/metismenujs.min.css">
    <link rel="stylesheet" href="<?= media() ?>/tienda/plugins/iziToast/iziToast.min.css">
    <link rel="stylesheet" href="<?= media() ?>/tienda/plugins/nice-select2/nice-select2.css">
    <link rel="stylesheet" href="<?= media() ?>/tienda/css/main.min.css">
</head>
<body class="font-poppins text-txt bg-body overflow-hidden flex flex-col min-h-screen">
    <div class="loader fixed z-[999] flex justify-center items-center w-screen h-screen bg-body">
        <div class="loader-content flex flex-col items-center gap-2">
            <span class="text-3xl font-semibold text-gray-200">Cargando</span>
            <div class="flex gap-1 h-1 w-40 bg-gray-200 overflow-hidden">
                <div class="animation-loader w-20 h-full bg-primary-color"></div>
            </div>
        </div>
    </div>
    <header class="header-section shadow-custom-1 relative z-30">
        <div class="bg-secondary-color">
            <div class="container mx-auto px-2 xs:px-8 py-5 h-full grid grid-cols-4 lg:grid-cols-12 gap-1 lg:gap-0">
                <div class="col-span-2 lg:col-span-3 order-1 lg:order-1 self-center">
                    <a href="<?= base_url(); ?>">
                        <img class="inline" src="<?= media() ?>/tienda/images/logo.png"  alt="logo">
                    </a>
                </div>
                <div class="header-search hidden lg:block col-span-4 lg:col-span-6 order-3 lg:order-2 self-center mt-[10px] lg:mt-0 transition-all duration-300">
                    <form class="search" method="get" action="<?= base_url(); ?>/tienda/search">
                        <div class="flex overflow-hidden h-[40px] rounded-[50px] bg-primary-rgba">
                            <input type="hidden" name="p" value="1">
                            <input class="search bg-transparent w-full border-none focus:ring-0 focus:ring-transparent focus:border-none py-[5px] pl-5 text-white placeholder-icon" type="text" name="s" placeholder="Buscar..." />
                            <button class="text-white px-3" >
                                <i class="bi bi-search text-xl flex"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-span-2 lg:col-span-3 order-2 lg:order-3 justify-self-end self-center flex gap-2 xl:gap-[50px]">
                    <div class="flex items-center lg:hidden">
                        <button class="btn-search-mob text-white p-[5px]">
                            <i class="bi bi-search flex text-2xl pointer-events-none"></i>
                        </button>
                    </div>
                    <div class="flex items-center lg:hidden">
                        <button class="btn-open-modal text-white" data-target=".menu-mob">
                            <i class="bi bi-list flex text-3xl pointer-events-none"></i>
                        </button>
                    </div>
                    <?php if($data['page_name'] != "carrito" and $data['page_name'] != "procesarpago"){ ?>
                    <div class=" group-items text-white items-center gap-5 hidden lg:flex">
                        <div class="relative">
                        <a class="btn-open-modal" data-target=".shopping-cart-modal" href="javascript:void(0)">
                                <i class="bi bi-cart2 text-white text-[35px] flex pointer-events-none"></i>
                            </a>
                            <span class="cantCarrito badge absolute top-0 right-[-6px] h-[15px] min-w-[15px] px-[2px] js-show-cart" data-notify="<?= $cantCarrito; ?>"><?= $cantCarrito; ?></span>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="hidden lg:flex relative group">
                        <div class="flex items-center gap-1 cursor-pointer select-none">
                            <?php if(isset($_SESSION['login'])){ ?>
                            <span class="font-semibold text-white"><?= $_SESSION['userData']['nombres'] ?></span>
                            <?php }else{ ?>
                                <span class="font-semibold text-white">Mi Cuenta</span>
						<?php } ?>
                            <i class="bi bi-caret-down-fill text-white text-sm flex rotate-0 group-hover:rotate-180 transition-all duration-300"></i>
                        </div>
                        <div class="absolute top-full z-30 w-[120%] invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-300 pt-[10px]">
                            <div class="relative arrow">
                                <ul class="bg-white shadow-custom-1 rounded-md overflow-hidden p-[6px]">
                                <?php if(isset($_SESSION['login'])){ ?>
                                    <li class="hover:font-semibold">
                                        <a href="<?= base_url(); ?>/dashboard">
                                            <div class="flex items-center gap-2 p-1 pointer-events-none">
                                                <i class="bi bi-speedometer2 text-xl text-primary-color flex"></i>
                                                <span>Dashboard</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="hover:font-semibold">
                                        <a href="<?= base_url(); ?>/logout">
                                            <div class="flex items-center gap-2 p-1 pointer-events-none">
                                                <i class="bi bi-box-arrow-left text-xl text-primary-color flex"></i>
                                                <span>Salir</span>
                                            </div>
                                        </a>
                                    </li>
                                    <?php }else{ ?>
                                    <li class="hover:font-semibold">
                                        <a href="<?= base_url(); ?>/login">
                                            <div class="flex items-center gap-2 p-1 pointer-events-none">
                                                <i class="bi bi-box-arrow-in-right text-xl text-primary-color flex"></i>
                                                <span>Login</span>
                                            </div>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white hidden lg:block">
            <nav class="container mx-auto px-2 xs:px-8">
                <ul class="menu flex flex-wrap justify-between items-center text-lg py-[10px]">
                    <li class="group relative underlined-animated">
                        <a href="#" class="btn-open font-semibold flex items-center gap-1">
                            <span>Productos</span>
                            <i class="bi bi-caret-down-fill flex text-xs text-primary-color rotate-0 group-hover:rotate-180 transition-all duration-300"></i>
                        </a>
                        <div class="submenu absolute pt-[10px] left-0 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-300">
                            <ul class="bg-white shadow-custom-1 text-base w-[250px] relative">
                            <?php 
									if(count($data['categorias']) > 0){
										foreach ($data['categorias'] as $categoria) {	
								 ?>
                                <li class="group-1">
                                    <a href="<?= base_url() ?>/tienda/categoria/<?= $categoria['idcategoria'].'/'.$categoria['ruta'] ?>" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font"><?= $categoria['nombre'] ?></span>
                                    </a>
                                </li>
                                <?php 
										}
									}
								 ?>
                            </ul>
                        </div>
                    </li>
                    <li class="underlined-animated"><a href="<?= base_url(); ?>">Inicio</a></li>
                    <li class="underlined-animated"><a href="<?= base_url(); ?>/tienda">Tienda</a></li>
                    <li class="underlined-animated"><a href="<?= base_url(); ?>/nosotros">Operatoria</a></li>
                    <li class="underlined-animated"><a href="#" class="btn-open-modal" data-tab="0" data-target=".entry-modal">Calculador</a></li>
                    <li class="underlined-animated"><a href="<?= base_url(); ?>/carrito">Carrito</a></li>
                    <li class="underlined-animated"><a href="<?= base_url(); ?>/contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
	<!-- Carrito -->
    <div id="productosCarrito" class="shopping-cart-modal modal bg-overlay fixed z-50 h-full w-full inset-0 invisible opacity-0 transition-all duration-300">
    <?php 
    getModal('modalCarrito',$data); 
    ?>
    </div>
    <?php
    getModal('modalCalculador',$data); 
    ?>
	    <!-- Modals menu mobile -->
        <div class="menu-mob modal bg-overlay fixed z-50 h-full w-full inset-0 invisible opacity-0 transition-all duration-300">
        <div class="flex h-full w-full">
            <div class="modal-content relative bg-white h-full w-[288px] min-w-[250px] left-[-999px] mr-auto transition-all duration-300 flex flex-col">
                <div class="bg-secondary-color w-full">
                    <button class="btn-close-modal absolute top-5 right-5 p-[3px] text-white transition-all duration-300">
                        <i class="bi bi-x-lg flex text-xl text-stroke-medium pointer-events-none"></i>
                    </button>
                    <div class="py-12">
                        <img src="<?= media() ?>/tienda/images/logo.png" class="h-[40px] mx-auto" alt="logo" />
                    </div>
                </div>
                <nav class="bg-white h-full w-full overflow-auto">
                    <ul class="metismenu">
                        <li class="border-b border-gray-200">
                            <a class="flex items-center p-2 select-none" href="<?= base_url(); ?>">
                                <i class="bi bi-house-door flex text-xl text-primary-color mr-3"></i>
                                <span class="font-semibold">Inicio</span>
                            </a>
                        </li>
                        <li class="border-b border-gray-200">
                            <div class="metismenu-btn has-arrow p-2 flex items-center cursor-pointer select-none" aria-expanded="false" role="menu">
                                <i class="bi bi-person flex text-xl text-primary-color mr-3"></i>
                                <?php if(isset($_SESSION['login'])){ ?>
                            <span class="font-semibold"><?= $_SESSION['userData']['nombres'] ?></span>
                            <?php }else{ ?>
                                <span class="font-semibold">Mi Cuenta</span>
						<?php } ?>
                            </div>
                            <div class="metismenu-content">
                            <?php if(isset($_SESSION['login'])){ ?>
                                <a class="btn-open-modal block ml-10 p-1" href="<?= base_url(); ?>/dashboard" data-tab="0" data-target=".entry-modal">Dashboard</a>
                                <a class="btn-open-modal block ml-10 p-1" href="<?= base_url(); ?>/logout" data-tab="0" data-target=".entry-modal">Salir</a>
                                    <?php }else{ ?>
                                        <a class="btn-open-modal block ml-10 p-1" href="<?= base_url(); ?>/login" data-tab="0" data-target=".entry-modal">Login</a>
                                    <?php } ?>
                            </div>
                        </li>
                        <?php if($data['page_name'] != "carrito" and $data['page_name'] != "procesarpago"){ ?>
                        <li class="border-b border-gray-200">
                            <div class="btn-open-modal p-2" data-target=".shopping-cart-modal">
                                <div class="flex items-center cursor-pointer select-none pointer-events-none">
                                    <i class="bi bi-cart flex text-xl text-primary-color mr-3"></i>
                                    <span class="font-semibold">Carrito</span>
                                    <span class="badge h-[22px] min-w-[22px] px-[6px] ml-auto">0</span>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                        <?php 
									if(count($data['categorias']) > 0){
										foreach ($data['categorias'] as $categoria) {	
								 ?>
                        <li class="border-b border-gray-200">
                            <a class="p-2 flex items-center cursor-pointer select-none" href="<?= base_url() ?>/tienda/categoria/<?= $categoria['idcategoria'].'/'.$categoria['ruta'] ?>">
                                <i class="bi bi-phone flex text-xl text-primary-color mr-3"></i>
                                <span class="font-semibold"><?= $categoria['nombre'] ?></span>
                            </a>
                        </li>
                        <?php 
										}
									}
								 ?>
                        <li class="border-b border-gray-200">
                            <a class="p-2 flex items-center cursor-pointer select-none" href="<?= base_url(); ?>/tienda">
                                <i class="bi bi-shop flex text-xl text-primary-color mr-3"></i>
                                <span class="font-semibold">Tienda</span>
                            </a>
                        </li>
                        <li class="border-b border-gray-200">
                            <a class="btn-open-modal p-2 flex items-center cursor-pointer select-none font-semibold" href="#" data-tab="0" data-target=".entry-modal">
                                <i class="bi bi-calculator flex text-xl text-primary-color mr-3"></i>
                                Calculador
                            </a>
                        </li>
                        <li class="border-b border-gray-200">
                            <a class="flex items-center p-2 select-none" href="<?= base_url(); ?>/contacto">
                                <i class="bi bi-telephone flex text-xl text-primary-color mr-3"></i>
                                <span class="font-semibold">Contacto</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>

    <!-- -->		
	