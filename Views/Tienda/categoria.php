<?php 
headerTienda($data);
$arrProductos = $data['productos'];
 ?>
 <div class="breadcrumb-section container mx-auto px-2 xs:px-8 my-5">
        <ul class="flex flex-wrap gap-1 items-center">
            <li class="hover:text-primary-color transition-all duration-300">
                <a href="<?= base_url(); ?>"">Inicio</a>
            </li>
            <li>
                <i class="bi bi-caret-right-fill flex text-primary-color"></i>
            </li>
            <li class="hover:text-primary-color transition-all duration-300 active">
                <a href="<?= base_url(); ?>/tienda">Tienda</a>
            </li>
        </ul>
    </div>
    <div class="shop-section container mx-auto px-2 xs:px-8 my-5">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12">
                <div class="flex flex-wrap justify-between gap-2 items-center">
                    <span class="text-lg"><span class="text-primary-color"></span></span>
                    <div class="flex items-center gap-5">
                        <ul class="flex items-center gap-2 text-gray-200">
                            <li class="control tippy tippy-grid cursor-pointer hover:text-primary-hover transition-all duration-300 mixitup-control-active" data-filter=".mix-grid"><i class="bi bi-grid-3x3-gap-fill flex text-3xl"></i></li>
                            <li class="control tippy tippy-list cursor-pointer hover:text-primary-hover transition-all duration-300" data-filter=".mix-list"><i class="bi bi-list flex text-stroke-medium text-4xl"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-4 lg:col-span-4 xl:col-span-3">
                    <div class="flex items-center gap-2 mb-5">
                        <i class="bi bi-funnel flex text-sm text-primary-color"></i>
                        <h1 class="text-xl uppercase font-bold">Categorias</h1>
                    </div>
                    <div class="mb-5 pt-5 border-t-2">
                    <?php 
									if(count($data['categorias']) > 0){
										foreach ($data['categorias'] as $categoria) {	
								 ?>
                        <label class="flex items-center gap-2 my-1 select-none cursor-pointer hover:text-primary-color transition-all duration-300">
                            <a href="<?= base_url() ?>/tienda/categoria/<?= $categoria['idcategoria'].'/'.$categoria['ruta'] ?>">
                            <span class="text-gray-title"><?= $categoria['nombre'] ?></span>
                            </a>
                        </label>
                        <?php 
										}
									}
								 ?>
                    </div>
            </div>
            <div class="col-span-12 md:col-span-8 lg:col-span-8 xl:col-span-9">
                <div class="grid grid-cols-12 gap-5 products products-mixed">
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
                    <div class="mix mix-grid col-span-12 sm:col-span-6 lg:col-span-4">
                        <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                            <div class="absolute top-[10px] right-[10px]">
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-card-view l flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer js-addcart-detail" href="#"  id="<?= openssl_encrypt($arrProductos[$p]['idproducto'],METHODENCRIPT,KEY); ?>">
                                    <i class="bi bi-cart text-xl text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="h-[190px] overflow-hidden rounded-lg">
                                <a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>">
                                    <img class="card-object-fit w-full h-full" src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>" alt="<?= $arrProductos[$p]['nombre'] ?>">
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
                                    <a class="clamp font-medium break-all" href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>#">
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
                                    <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>">
                                        <span class="font-bold uppercase text-white">Ver detalle</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix mix-list col-span-12">
                        <div class="cardlist-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                        <div class="absolute top-[10px] right-[10px]">
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-card-view l flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer js-addwish-b2 js-addcart-detail" href="#" >
                                    <i class="bi bi-cart text-xl text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row">
                                <div class="h-[240px] sm:min-w-[240px] overflow-hidden rounded-lg">
                                    <a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>">
                                        <img class="card-object-fit w-full h-full"  src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>" alt="<?= $arrProductos[$p]['nombre'] ?>">
                                    </a>
                                </div>
                                <div class="w-full">
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all text-lg" href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>">
                                        <?= $arrProductos[$p]['nombre'] ?>
                                        </a>
                                    </div>
                                    <div class="my-2">
                                        <div class="fav-group flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                    </div>
                                    <div class="my-2">
                                        <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">Con stock</span>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400"><?= limitarPalabras($arrProductos[$p]['descripcion'],7) ?></p>
                                    </div>
                                    <hr>
                                    <div class="my-1">
                                        <span class="price-now text-lg font-bold"><?= SMONEY.formatMoney($arrProductos[$p]['precio']); ?></span>
                                    </div>
                                    <div class="mt-2">
                                        <a class="btn-effect text-center block lg:inline-flex p-2 px-5 bg-primary-color rounded-lg transition-all duration-300" href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>">
                                            <span class="font-bold uppercase text-white">Ver Detalle</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }

			}else{
			 ?>
			 <p>No hay productos para mostrar <a href="<?= base_url() ?>/tienda"> Ver productos</a></p>
			<?php } ?>
                </div>
            </div>
            <?php
if (count($data['productos']) > 0) {
    $category_id = $data['productos'][0]['categoriaid'];
    $category_keyword = $data['productos'][0]['categoria'];
    $base_url = base_url();
    $total_paginas = $data['total_paginas'];
    $pagina_actual = isset($data['pagina']) ? (int)$data['pagina'] : 1;

    echo '<div class="col-span-12">
            <div class="flex justify-center items-center">' .
                paginate($base_url, $total_paginas, $pagina_actual, [], false, true, $category_id, $category_keyword) .
            '</div>
        </div>';
}
?>

        </div>
    </div>
<?php 
	footerTienda($data);
?>