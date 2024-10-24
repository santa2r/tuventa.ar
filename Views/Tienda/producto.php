<?php 
headerTienda($data);
$arrProducto = $data['producto'];
$arrProductos = $data['productos'];
$arrImages = $arrProducto['images']; 
$rutacategoria = $arrProducto['categoriaid'].'/'.$arrProducto['ruta_categoria'];
$urlShared = base_url()."/tienda/producto/".$arrProducto['idproducto']."/".$arrProducto['ruta'];
 //dep($arrProducto);
 ?>
  <div class="breadcrumb-section container mx-auto px-2 xs:px-8 my-5">
        <ul class="flex flex-wrap gap-1 items-center">
            <li class="hover:text-primary-color transition-all duration-300">
                <a href="<?= base_url(); ?>">Inicio</a>
            </li>
            <li>
                <i class="bi bi-caret-right-fill flex text-primary-color"></i>
            </li>
            <li class="hover:text-primary-color transition-all duration-300 active">
                <a href="<?= base_url().'/tienda/categoria/'.$rutacategoria; ?>"><?= $arrProducto['categoria'] ?></a>
            </li>
            <i class="bi bi-caret-right-fill flex text-primary-color"></i>
            <li class="hover:text-primary-color transition-all duration-300 active">
            <?= $arrProducto['nombre'] ?>
            </li>
        </ul>
    </div>
    <div class="product-details container mx-auto px-2 xs:px-8 my-5">
        <div class="grid grid-cols-12 gap-5 bg-white rounded-lg p-2 xs:p-8">
            <div class="col-span-12 md:col-span-6 max-h-[500px]">
                <div class="swiper swiper-top group relative flex items-center rounded-lg">
                    <div class="swiper-wrapper">
                    <?php 
						if(!empty($arrImages)){
							for ($img=0; $img < count($arrImages) ; $img++) { 
										
					?>    
                    <div class="swiper-slide">
                            <div class="swiper-zoom-container">
                                <img src="<?= $arrImages[$img]['url_image']; ?>" alt="<?= $arrProducto['nombre'] ?>" />
                            </div>
                        </div>
                    <?php 
						    }
						} 
					?>
                    </div>
                    <div class="button-next btn-slider-1 -right-16 transition-all duration-300 group-hover:right-4">&#10095;</div>
                    <div class="button-prev btn-slider-1 -left-16 transition-all duration-300 group-hover:left-4">&#10094;</div>
                </div>
                <div class="swiper swiper-thumbs">
                    <div class="swiper-wrapper">
                    <?php 
						if(!empty($arrImages)){
							for ($img=0; $img < count($arrImages) ; $img++) { 
										
					?>    
                        <div class="swiper-slide cursor-pointer rounded-lg">
                            <img src="<?= $arrImages[$img]['url_image']; ?>" alt="<?= $arrProducto['nombre'] ?>" />
                        </div>
                    <?php 
						}
					} 
					?>
                    </div>
                    <div class="button-next btn-slider-1 -right-16 transition-all duration-300 group-hover:right-4">&#10095;</div>
                    <div class="button-prev btn-slider-1 -left-16 transition-all duration-300 group-hover:left-4">&#10094;</div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6">
                <div class="product-title my-1">
                    <span class="js-name-detail clamp-2 text-2xl font-medium break-all hover:text-primary-color transition-all duration-300">
                    <?= $arrProducto['nombre'] ?>
                </span>
                </div>
                <div class="product-val-stock my-2 flex justify-between">
                    <div class="modal-fav-group flex">
                        <i class="bi bi-star-fill text-base text-star flex"></i>
                        <i class="bi bi-star-fill text-base text-star flex"></i>
                        <i class="bi bi-star-fill text-base text-star flex"></i>
                        <i class="bi bi-star-fill text-base text-star flex"></i>
                        <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                    </div>
                    <div class="modal-stock ml-auto">
                        <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">Con stock</span>
                    </div>
                </div>
                <div class="product-price flex items-center my-5 gap-5">
                    <div class="price-now flex text-primary-color bg-white shadow rounded-lg py-2 px-3">
                        <span class="text-2xl font-semibold leading-7"><?= SMONEY.formatMoney($arrProducto['precio']); ?></span>
                    </div>
                    <div class="discount-price flex flex-col">
                        <span class="text-green-400 text-md font-semibold uppercase"> 25% Off</span>
                    </div>
                </div>
                <div class="product-info my-5">
                    <p class="clamp-5 break-all">Descubre nuestra exclusiva selección de tecnología avanzada, que incluye celulares, tablets, accesorios, notebooks y PCs de escritorio. Cada artículo ha sido cuidadosamente elegido para ofrecerte la mejor calidad y rendimiento.</p>
                </div>
                <div class="product-group-btn flex gap-1">
                        <br>       
                        <br>
                        <div class="product-info-form flex justify-start flex-wrap gap-5">
                            <div class="quantity inline-flex bg-white shadow rounded-lg">
                                <input id="cant-product" class="quantity-value input-number w-12 text-center text-lg p-1 bg-transparent text-gray-400 border-none focus:ring-0 focus:border-none num-product" type="number" name="num-product" value="1" min="1" >
                                <div class="flex flex-col justify-between w-5">
                                    <button class="quantity-btn increment text-primary-color" ><i class="bi bi-caret-up-fill"></i></button>
                                    <button class="quantity-btn decrement text-primary-color" ><i class="bi bi-caret-down-fill"></i></button>
                                </div>
                            </div>
                            <div class="add-to-cart flex gap-2">
                                <button id="<?= openssl_encrypt($arrProducto['idproducto'],METHODENCRIPT,KEY); ?>" class="btn-effect flex justify-center items-center h-full w-full p-2 bg-primary-color rounded-lg gap-2 transition-all duration-300 js-addcart-detail">
                                    <i class="bi bi-cart-fill text-xl text-white flex"></i>
                                    <span class="font-bold uppercase text-white">Agregar al carrito</span>
                                </button>
                            </div>
                        </div>
                </div>
                <div class="product-bottom mt-5 pt-5 border-t border-gray-200">
                    <div class="product-categories">
                        <b>Categoria: </b>
                        <span><a href="<?= base_url().'/tienda/categoria/'.$rutacategoria; ?>" class="text-zinc-500"><?= $arrProducto['categoria'] ?></a></span>
                    </div>
                </div>
            </div>
            <div class="col-span-12">
                <div class="liner-container flex border-b-2 border-[rgba(119,119,119,.17)] mb-5">
                    <h1 class="uppercase text-xl font-bold inline-block border-b-2 border-primary-color mb-[-2px] pb-3">Especificaciones</h1>
                </div>
                <div class="grid grid-cols-3 gap-5">
                <?= $arrProducto['descripcion']; ?>
                </div>
            </div>
            <div class="col-span-12">
                <div class="liner-container flex border-b-2 border-[rgba(119,119,119,.17)] mb-5">
                    <h1 class="uppercase text-xl font-bold inline-block border-b-2 border-primary-color mb-[-2px] pb-3">
                        En nuestra tienda</h1>
                </div>
                <div class="see-more relative pb-5">
                    <div class="see-more-container max-h-[220px] gradient-bottom overflow-hidden">
                        <div class="see-more-content">
                            <p>En nuestra tienda, ofrecemos una variedad de dispositivos tecnológicos de última generación. Desde los celulares más innovadores hasta las notebooks más potentes, cada artículo está diseñado para brindar eficiencia y conveniencia. Nuestros productos se destacan por su durabilidad, rendimiento y diseño elegante, ideales para cualquier tipo de usuario.</p>
                            <p>Los celulares que ofrecemos incluyen modelos de las marcas más reconocidas. Estos dispositivos cuentan con las más recientes actualizaciones de software y hardware, asegurando una experiencia de usuario fluida y satisfactoria. Con cámaras de alta resolución y baterías de larga duración, nuestros celulares están listos para acompañarte en tu día a día.</p>
                            <p>Nuestras tablets son perfectas tanto para el entretenimiento como para el trabajo. Equipadas con pantallas de alta definición y potentes procesadores, estas tablets ofrecen una excelente experiencia de visualización y rendimiento multitarea. Además, su portabilidad las convierte en una opción ideal para quienes necesitan un dispositivo versátil y compacto.</p>
                            <p>Los accesorios disponibles incluyen una amplia gama de productos que complementan y mejoran la funcionalidad de tus dispositivos. Desde cargadores rápidos hasta audífonos inalámbricos, cada accesorio ha sido seleccionado por su calidad y desempeño. Estos productos no solo son prácticos, sino que también añaden un toque de estilo a tu tecnología.</p>
                            <p>En cuanto a las notebooks, contamos con modelos que van desde opciones ligeras y portátiles hasta potentes estaciones de trabajo. Nuestras notebooks están equipadas con los últimos procesadores y amplias capacidades de almacenamiento, lo que las hace perfectas para profesionales y estudiantes. Además, su diseño moderno y ergonómico asegura comodidad y facilidad de uso.</p>
                            <p>Finalmente, nuestras PCs de escritorio ofrecen un rendimiento incomparable para tareas que requieren alta potencia de procesamiento. Ideales para el hogar o la oficina, estos equipos son perfectos para trabajos de diseño, edición de video y juegos avanzados. Con componentes de alta calidad y la posibilidad de personalización, nuestras PCs de escritorio se adaptan a tus necesidades específicas.</p>
                        </div>
                    </div>
                    <button class="btn-see-more absolute bottom-0 w-full flex justify-center z-10 hover:text-primary-color">
                        <i class="bi bi-chevron-compact-down flex text-xl text-stroke-medium transition-all duration-300"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="related-products container mx-auto px-2 xs:px-8 my-5">
        <div>
            <div class="liner-container flex justify-center border-b-2 border-[rgba(119,119,119,.17)] mt-5">
                <h1 class="uppercase text-2xl font-bold inline-block border-b-2 border-primary-color mb-[-2px] pb-3">Productos Relacionados</h1>
            </div>
            <div class="swiper-container">
                <div class="swiper swiper-cards group relative flex items-center py-5">
                    <div class="swiper-wrapper">
                    <?php 
					if(!empty($arrProductos)){
						for ($p=0; $p < count($arrProductos); $p++) { 
							$ruta = $arrProductos[$p]['ruta'];
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
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-cart text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>">
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
                                        <a class="clamp font-medium break-all" href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>">
                                        <?= $arrProductos[$p]['nombre'] ?>
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400"><?= limitarPalabras($arrProductos[$p]['descripcion'],7) ?></p>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold"><?= SMONEY.formatMoney($arrProductos[$p]['precio']); ?></span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>">
                                            <span class="font-bold uppercase text-white">Ver Detalle</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
						}
					}	
				    ?>
                    </div>
                    <div class="button-next btn-slider-1 -right-16 transition-all duration-300 group-hover:right-4">&#10095;</div>
                    <div class="button-prev btn-slider-1 -left-16 transition-all duration-300 group-hover:left-4">&#10094;</div>
                </div>
            </div>
        </div>
    </div>

<?php 
	footerTienda($data);
?>
