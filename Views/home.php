<?php 
	headerTienda($data);
	$arrSlider = $data['slider'];
	$arrBanner = $data['banner'];
	$arrProductos = $data['productos'];
    //dep($arrProductos);

	$contentPage = "";
	if(!empty($data['page'])){
		$contentPage = $data['page']['contenido'];
	}
 ?>
 
 <div class="banners-section container mx-auto px-2 xs:px-8 my-5">
        <div class="grid grid-cols-12 gap-5">
            <div class="swiper-container col-span-12 md:col-span-8 rounded-lg overflow-hidden">
                <div class="swiper swiper-banner group relative flex items-center">
                    <div class="swiper-wrapper max-h-[377px]">
                    <?= $contentPage ?>
                    </div>
                    <div class="button-next btn-slider-1 -right-16 transition-all duration-300 group-hover:right-4">&#10095;</div>
                    <div class="button-prev btn-slider-1 -left-16 transition-all duration-300 group-hover:left-4">&#10094;</div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="hidden md:block col-span-4 rounded-lg overflow-hidden relative group">
                <div class="overlay-gradient absolute h-full w-full z-[1]"></div>
                <img class="w-full h-full object-cover transition-all duration-300 hover:transform group-hover:scale-110" src="<?= media() ?>/tienda/images/categories/sec-desktop-g.jpg" alt="banner-img">
                <div class="absolute top-0 left-0 flex items-center h-full w-full">
                    <div class="p-5 z-[2]">
                        <h3 class="uppercase text-lg font-bold text-primary-color drop-shadow-xl">Tenemos tu pc gamer</h3>
                        <p class="text-white my-5 drop-shadow-md">Elije tu pc y juega muy pronto!</p>
                        <a class="btn-effect inline-block text-white bg-primary-color rounded-lg py-2 px-3" href="#">
                            <span>Ver Tienda</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="information-section container mx-auto px-2 xs:px-8 my-5">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 flex">
                <div class="flex items-center w-full gap-4 p-5 xs:pl-[20%] sm:pl-5 rounded-lg bg-white hover:shadow-lg transition-all duration-300">
                    <div class="rounded-full border-2">
                        <i class="bi bi-truck text-primary-color text-[40px] p-3 flex"></i>
                    </div>
                    <div>
                        <h6 class="font-bold capitalize">Envio Seguro</h6>
                        <p class="text-sm text-gray-400 break-all">Correo privado</p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 flex">
                <div class="flex items-center w-full gap-4 p-5 xs:pl-[20%] sm:pl-5 rounded-lg bg-white hover:shadow-lg transition-all duration-300">
                    <div class="rounded-full border-2">
                        <i class="bi bi-cash-coin text-primary-color text-[40px] p-3 flex"></i>
                    </div>
                    <div>
                        <h6 class="font-bold capitalize">Reemlboso</h6>
                        <p class="text-sm text-gray-400 break-all">Dentro de los 30 dias</p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 flex">
                <div class="flex items-center w-full gap-4 p-5 xs:pl-[20%] sm:pl-5 rounded-lg bg-white hover:shadow-lg transition-all duration-300">
                    <div class="rounded-full border-2">
                        <i class="bi bi-shield-check text-primary-color text-[40px] p-3 flex"></i>
                    </div>
                    <div>
                        <h6 class="font-bold capitalize">Pago Seguro</h6>
                        <p class="text-sm text-gray-400 break-all">Con Mobbex</p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 flex">
                <div class="flex items-center w-full gap-4 p-5 xs:pl-[20%] sm:pl-5 rounded-lg bg-white hover:shadow-lg transition-all duration-300">
                    <div class="rounded-full border-2">
                        <i class="bi bi-headset text-primary-color text-[40px] p-3 flex"></i>
                    </div>
                    <div>
                        <h6 class="font-bold capitalize">Soporte Online</h6>
                        <p class="text-sm text-gray-400 break-all">Por Distintos Canales</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banners-section-2 container mx-auto px-2 xs:px-8 my-5">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 sm:col-span-6 rounded-lg overflow-hidden relative group h-[300px]">
                <div class="overlay-gradient absolute h-full w-full z-[1]"></div>
                <img class="w-full h-full object-cover transition-all duration-300 hover:transform group-hover:scale-110" src="<?= media() ?>/tienda/images/categories/sec-notebooks.jpg" alt="banner-img">
                <div class="absolute top-0 left-0 flex items-center h-full w-full">
                    <div class="p-5 z-[2]">
                        <h3 class="uppercase text-lg font-bold text-primary-color drop-shadow-xl">Notebooks</h3>
                        <p class="text-white my-5 drop-shadow-md">Elige el portátil ideal para ti!</p>
                        <a class="btn-effect inline-block text-white bg-primary-color rounded-lg py-2 px-3" href="#">
                            <span>Ver Tienda</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 rounded-lg overflow-hidden relative group h-[300px]">
                <div class="overlay-gradient absolute h-full w-full z-[1]"></div>
                <img class="w-full h-full object-cover transition-all duration-300 hover:transform group-hover:scale-110" src="<?= media() ?>/tienda/images/categories/sec-desktops.jpg" alt="banner-img">
                <div class="absolute top-0 left-0 flex items-center h-full w-full">
                    <div class="p-5 z-[2]">
                        <h3 class="uppercase text-lg font-bold text-primary-color drop-shadow-xl">Escritorio</h3>
                        <p class="text-white my-5 drop-shadow-md">¡Tenemos tu PC al mejor precio!</p>
                        <a class="btn-effect inline-block text-white bg-primary-color rounded-lg py-2 px-3" href="#">
                            <span>Ver Tienda</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products-1-section container mx-auto px-2 xs:px-8 my-5">
        <div class="liner-container flex justify-center border-b-2 border-[rgba(119,119,119,.17)] mt-5">
            <h1 class="uppercase text-2xl font-bold inline-block border-b-2 border-primary-color mb-[-2px] pb-3">Notebooks</h1>
        </div>
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-3 rounded-l-lg relative group overflow-hidden hidden xl:block my-5">
                <div class="overlay-gradient absolute h-full w-full z-[1]"></div>
                <img class="w-full h-full object-cover transition-all duration-300 hover:transform group-hover:scale-110" src="<?= media() ?>/tienda/images/categories/sliders/notebooks.jpg" alt="banner-img">
                <div class="absolute top-0 left-0 flex items-center h-full w-full">
                    <div class="p-5 z-[2]">
                        <h3 class="uppercase text-lg font-bold text-primary-color drop-shadow-xl">Notebooks</h3>
                        <p class="text-white my-5 drop-shadow-md">Elige tu portátil ahora!</p>
                        <a class="btn-effect inline-block text-white bg-primary-color rounded-lg py-2 px-3" href="#">
                            <span>Ver Tienda</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-12 xl:col-span-9 cards-slider-2 swiper-container">
                <div class="swiper swiper-cards-2 group relative flex items-center py-5">
                    <div class="swiper-wrapper">
                    <?php 
                        for ($p=0; $p < count($arrProductos) ; $p++) {
                            if($arrProductos[$p]['categoriaid'] == NOTEBOOKS){;
                            $rutaProducto = $arrProductos[$p]['ruta']; 
                                if(count($arrProductos[$p]['images']) > 0 ){
                                    $portada = $arrProductos[$p]['images'][0]['url_image'];
                                }else{
                                    $portada = media().'/images/uploads/product.png';
                                }
			        ?>
                        <div class="swiper-slide">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                    <a class="tippy tippy-left-card-view l flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer  js-addcart-detail" href="#"   id="<?= openssl_encrypt($arrProductos[$p]['idproducto'],METHODENCRIPT,KEY); ?>">
                                            <i class="bi bi-cart text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$rutaProducto; ?>">
                                        <img class="card-object-fit w-full h-full" src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">Con stock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$rutaProducto; ?>">
                                        <?= $arrProductos[$p]['nombre'] ?>
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-black-400"><?= obtenerModelo($arrProductos[$p]['descripcion']) ?></p>
                                    </div>
                                    <hr>
                                    <div class="my-1">
                                        <span class="text-lg font-bold"><?= SMONEY.formatMoney($arrProductos[$p]['precio']); ?></span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$rutaProducto; ?>">
                                            <span class="font-bold uppercase text-white">Ver Detalle</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php } } ?>
                    </div>
                    <div class="button-next btn-slider-1 -right-16 transition-all duration-300 group-hover:right-4">&#10095;</div>
                    <div class="button-prev btn-slider-1 -left-16 transition-all duration-300 group-hover:left-4">&#10094;</div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="products-2-section container mx-auto px-2 xs:px-8 my-5">
        <div class="liner-container flex justify-center border-b-2 border-[rgba(119,119,119,.17)] mt-5">
            <h1 class="uppercase text-2xl font-bold inline-block border-b-2 border-primary-color mb-[-2px] pb-3">Smartphones</h1>
        </div>
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-3 rounded-l-lg relative group overflow-hidden hidden xl:block my-5">
                <div class="overlay-gradient absolute h-full w-full z-[1]"></div>
                <img class="w-full h-full object-cover transition-all duration-300 hover:transform group-hover:scale-110" src="<?= media() ?>/tienda/images/categories/sliders/smartphones.jpg" alt="banner-img">
                <div class="absolute top-0 left-0 flex items-center h-full w-full">
                    <div class="p-5 z-[2]">
                        <h3 class="uppercase text-lg font-bold text-primary-color drop-shadow-xl">Smartphones</h3>
                        <p class="text-white my-5 drop-shadow-md">Elige tu smartphone ahora!</p>
                        <a class="btn-effect inline-block text-white bg-primary-color rounded-lg py-2 px-3" href="#">
                            <span>Ver Tienda</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-12 xl:col-span-9 cards-slider-2 swiper-container">
                <div class="swiper swiper-cards-2 group relative flex items-center py-5">
                    <div class="swiper-wrapper">
                    <?php 
                        for ($p=0; $p < count($arrProductos) ; $p++) {
                            if($arrProductos[$p]['categoriaid'] == CELULARES){;
                            $rutaProducto = $arrProductos[$p]['ruta']; 
                                if(count($arrProductos[$p]['images']) > 0 ){
                                    $portada = $arrProductos[$p]['images'][0]['url_image'];
                                }else{
                                    $portada = media().'/images/uploads/product.png';
                                }
			        ?>
                        <div class="swiper-slide">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view l flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer  js-addcart-detail" href="#"   id="<?= openssl_encrypt($arrProductos[$p]['idproducto'],METHODENCRIPT,KEY); ?>">
                                            <i class="bi bi-cart text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$rutaProducto; ?>">
                                        <img class="card-object-fit w-full h-full" src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">Con stock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$rutaProducto; ?>">
                                        <?= $arrProductos[$p]['nombre'] ?>
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-black-400"><?= obtenerModelo($arrProductos[$p]['descripcion']) ?></p>
                                    </div>
                                    <hr>
                                    <div class="my-1">
                                        <span class="text-lg font-bold"><?= SMONEY.formatMoney($arrProductos[$p]['precio']); ?></span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$rutaProducto; ?>">
                                            <span class="font-bold uppercase text-white">Ver Detalle</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php } } ?>
                    </div>
                    <div class="button-next btn-slider-1 -right-16 transition-all duration-300 group-hover:right-4">&#10095;</div>
                    <div class="button-prev btn-slider-1 -left-16 transition-all duration-300 group-hover:left-4">&#10094;</div>
                </div>
            </div>
        </div>
    </div>

    <div class="categories-section container mx-auto px-2 xs:px-8 my-5">
        <div class="liner-container flex justify-center border-b-2 border-[rgba(119,119,119,.17)] mb-5">
            <h1 class="uppercase text-2xl font-bold inline-block border-b-2 border-primary-color mb-[-2px] pb-3">Muy Pronto</h1>
        </div>
        <div class="swiper-container col-span-12 md:col-span-8 rounded-lg overflow-hidden">
            <div class="swiper swiper-default group relative flex items-center py-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="grid grid-cols-3 xs:grid-cols-6 sm:grid-cols-9 lg:grid-cols-12">
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-gpu-card text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Tarjetas de videos</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-plug-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Fuentes de alimentacion</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-motherboard-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Placas madre</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-cpu-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Procesadores</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-memory text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Memorias Ram</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-device-hdd-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">HD</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-device-ssd-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">SSD</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-pc text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Gabinetes</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="grid grid-cols-3 xs:grid-cols-6 sm:grid-cols-9 lg:grid-cols-12">
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-mouse-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Mouses</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-keyboard-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Teclados</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-printer-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Impresoras</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-laptop text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Notebooks</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-phone-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Celulares</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-tablet-landscape-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Tablets</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-display text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Monitores</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-usb-drive-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Pendrives</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination top-[-5px] bottom-[unset!important] text-right"></div>
            </div>
        </div>
    </div>

    <div class="brands-section container mx-auto px-2 xs:px-8 my-5">
        <div class="swiper swiper-brands group relative flex items-center">
            <div class="swiper-wrapper flex items-center select-none">
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/amd-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/asrock-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/asus-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/corsair-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/genius-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/gigabyte-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/hp-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/intel-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/kingston-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/lenovo-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/logitech-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/msi-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/nvidia-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/philips-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/redragon-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/samsung-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/motorola-logo.png" alt="logo">
                </div>
                <div class="swiper-slide">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="<?= media() ?>/tienda/images/brands/xiaomi-logo.png" alt="logo">
                </div>
            </div>
            <div class="button-next btn-slider-2 -right-16 transition-all duration-300 group-hover:right-4 hover:text-primary-color">&#10095;</div>
            <div class="button-prev btn-slider-2 -left-16 transition-all duration-300 group-hover:left-4 hover:text-primary-color">&#10094;</div>
        </div>
    </div>
    <div class="btn-gotop fixed bottom-[-999px] right-10 z-50 invisible opacity-0 transition-all duration-300">
        <div class="bg-[rgba(0,0,0,.3)] hover:bg-primary-color rounded-lg p-3 cursor-pointer transition-all duration-300">
            <i class="bi bi-chevron-compact-up flex text-white text-2xl pointer-events-none"></i>
        </div>
    </div>
<?php 
	footerTienda($data);
 ?>

