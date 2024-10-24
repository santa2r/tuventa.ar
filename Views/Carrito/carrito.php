<?php 
headerTienda($data);
?>	
	<!-- Shoping Cart -->
    <div class="breadcrumb-section container mx-auto px-2 xs:px-8 my-5">
		<ul class="flex flex-wrap gap-1 items-center">
			<li class="hover:text-primary-color transition-all duration-300">
				<a href="<?= base_url() ?>">Inicio</a>
			</li>
			<li>
				<i class="bi bi-caret-right-fill flex text-primary-color"></i>
			</li>
			<li class="hover:text-primary-color transition-all duration-300 active">
				<a href="<?= base_url() ?>/carrito">Carrito</a>
			</li>
		</ul>
	</div>

	<div class="banner-title-section container mx-auto px-2 xs:px-8 my-5">
		<div class="liner-container flex justify-center border-b-2 border-[rgba(119,119,119,.17)] my-5">
			<h1 class="uppercase text-2xl font-bold inline-block border-b-2 border-primary-color mb-[-2px] pb-3">Carrito de compras</h1>
		</div>
	</div>
	<div class="shopping-cart-page container mx-auto px-2 xs:px-8 my-5">
        <?php 
        $subtotal = 0;
        $total = 0;
        if(isset($_SESSION['arrCarrito']) and count($_SESSION['arrCarrito']) > 0){ 
        ?>	
		<form class="grid grid-cols-12 gap-5 bg-white rounded-lg p-2 xs:p-5">
			<div class="col-span-12 lg:col-span-8">
				<div class="overflow-x-auto">
					<table id="tblCarrito" class="w-full min-w-[800px] text-left">
						<thead>
							<tr>
								<th></th>
								<th class="p-2">Producto</th>
								<th class="p-2">Precio</th>
								<th class="p-2">Cantidad</th>
								<th class="p-2">Subtotal</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						<?php 
								foreach ($_SESSION['arrCarrito'] as $producto) {
									$totalProducto = $producto['precio'] * $producto['cantidad'];
									$subtotal += $totalProducto;
									$idProducto = openssl_encrypt($producto['idproducto'],METHODENCRIPT,KEY);
								
							 ?>
							<tr class="hover:bg-gray-50">
								<td class="p-2">
									<div class="border rounded-lg h-[100px] w-[100px] min-w-[100px] overflow-hidden">
										<a href="#">
											<img class="w-full h-full object-cover" src="<?= $producto['imagen'] ?>" alt="<?= $producto['producto'] ?>">
										</a>
									</div>
								</td>
								<td class="p-2">
									<a class="font-bold clamp-2 break-all" href="#"><?= $producto['producto'] ?></a>
								</td>
								<td class="p-2">
									<span class="font-bold text-primary-color"><?= SMONEY.formatMoney($producto['precio']) ?></span>
								</td>
								<td class="p-2">
									<div class="quantity inline-flex bg-white rounded-lg shadow">
										<input class="quantity-value input-number w-12 text-center text-lg p-1 bg-transparent text-gray-400 border-none focus:ring-0 focus:border-none num-product" type="number" name="num-product" value="<?= $producto['cantidad'] ?>" idpr="<?= $idProducto ?>" data-id="<?= $idProducto ?>">
										<div class="flex flex-col justify-between w-5">
											<button class="btn-num-product-up quantity-btn increment text-primary-color" type="button" idpr="<?= $idProducto ?>" data-id="<?= $idProducto ?>"><i class="bi bi-caret-up-fill"></i></button>
											<button class="btn-num-product-down quantity-btn decrement text-primary-color" type="button" idpr="<?= $idProducto ?>" data-id="<?= $idProducto ?>"><i class="bi bi-caret-down-fill"></i></button>
										</div>
									</div>
								</td>
								<td class="p-2">
									<span class="font-bold text-primary-color totalProducto"><?= SMONEY.formatMoney($totalProducto) ?></span>
								</td>
								<td class="p-2">
									<button class="tippy tippy-remove btn-delete hover:text-primary-color transition-all duration-300" idpr="<?= $idProducto ?>" op="2" onclick="fntdelItem(this)">
										<i class="bi bi-trash text-2xl flex pointer-events-none"></i>
									</button>
								</td>
							</tr>
						
						<?php } ?>	
						</tbody>			
					</table>
				</div>
			</div>
			<div class="col-span-12 lg:col-span-4">
				<!--
				<div class="mb-5">
					<span class="font-semibold text-lg">Discount Coupon</span>
					<div class="flex my-3">
						<input class="input-rounded-l" type="text" placeholder="Your code here">
						<button class="btn-view-shopping-cart btn-effect rounded-r-lg flex justify-center items-center w-[100px] bg-primary-color transition-all duration-300" type="submit">
							<span class="font-bold uppercase text-white">Apply</span>
						</button>
					</div>
				</div>
				 -->    
				<div class="border-2 rounded-lg p-4">
					<span class="font-bold text-lg text-center inline-block mb-10">Totales:</span>
					<div class="py-4">
						<div class="flex justify-between my-2">
							<span>Subtotal:</span>
							<span id="subTotalCompra"><?= SMONEY.formatMoney($subtotal) ?></span>
						</div>
						<div class="flex justify-between my-2">
							<span>Envio:</span>
							<span><?= SMONEY.formatMoney(COSTOENVIO) ?></span>
						</div>
					</div>
					<div class="uppercase flex justify-between font-bold text-xl py-4 border-t-2 border-gray-200">
						<span>Total:</span>
						<span  id="totalCompra"><?= SMONEY.formatMoney($subtotal + COSTOENVIO) ?></span>
					</div>
					<a href="<?= base_url() ?>/carrito/procesarpago" class="btn-view-shopping-cart btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" id="btnComprar" >
						<span class="font-bold uppercase text-white">Procesar Pago</span>
				    </a>
				</div>
				<a class="flex justify-center items-center gap-2 my-5 hover:text-primary-color transition-all duration-300" href="<?= base_url() ?>/carrito">
					<i class="bi bi-arrow-repeat flex text-xl stroke-medium"></i>
					<span>Actualizar Carrito</span>
				</a>
				<a class="flex justify-center items-center gap-2 my-5 hover:text-primary-color transition-all duration-300" href="<?= base_url() ?>/tienda">
					<i class="bi bi-cart-plus flex text-xl stroke-medium"></i>
					<span>Agregar mas productos</span>
				</a>
			</div>
		</div>
		</form>
        <?php }else{ ?>
        <!-- If the Shopping Cart is empty (replace hidden with flex) -->
		<div class="shopping-cart-empty flex flex-col justify-center items-center p-5 gap-4">
			<i class="bi bi-cart-x text-8xl text-gray-200"></i>
			<p class="font-semibold text-lg">No hay producto en el carrito.</p>
			<a class="btn-effect flex justify-center items-center p-2 bg-primary-color rounded-lg gap-2 transition-all duration-300" href="<?= base_url() ?>/tienda">
				<span class="font-bold uppercase text-white">Volver a la tienda</span>
			</a>
		</div>
		
	</div>
<?php 
	}
	footerTienda($data);
 ?>
	