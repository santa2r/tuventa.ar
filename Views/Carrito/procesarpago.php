<?php 
headerTienda($data);
$subtotal = 0;
$total = 0;
foreach ($_SESSION['arrCarrito'] as $producto) {
	$subtotal += $producto['precio'] * $producto['cantidad'];
}

$total = $subtotal + COSTOENVIO;

?>
    <div class="breadcrumb-section container mx-auto px-2 xs:px-8 my-5">
		<ul class="flex flex-wrap gap-1 items-center">
			<li class="hover:text-primary-color transition-all duration-300">
				<a href="<?= base_url(); ?>">Inicio</a>
			</li>
			<li>
				<i class="bi bi-caret-right-fill flex text-primary-color"></i>
			</li>
			<li class="hover:text-primary-color transition-all duration-300">
				<a href="<?= base_url(); ?>/tienda">Tienda</a>
			</li>
			<li>
				<i class="bi bi-caret-right-fill flex text-primary-color"></i>
			</li>
			<li class="hover:text-primary-color transition-all duration-300 active">
				<a href="<?= base_url(); ?>/preocesarpago">Procesar Pago</a>
			</li>
		</ul>
	</div>

	<div class="banner-title-section container mx-auto px-2 xs:px-8 my-5">
		<div class="liner-container flex justify-center border-b-2 border-[rgba(119,119,119,.17)] my-5">
			<h1 class="uppercase text-2xl font-bold inline-block border-b-2 border-primary-color mb-[-2px] pb-3">Procesar Pago</h1>
		</div>
	</div>
	<?php 
						if(isset($_SESSION['login'])){
					?>
	<div class="checkout-section container mx-auto px-2 xs:px-8 my-5">
		<form class="grid grid-cols-12 gap-5 bg-white rounded-lg p-2 xs:p-8" action="#">
			<div class="col-span-12 lg:col-span-8">
				<span class="font-semibold text-lg">Dirección de envío</span>
				<div class="grid grid-cols-12 gap-5 pt-5">
					<div class="col-span-12 xs:col-span-6">
						<input id="txtDireccion" class="input" type="text" placeholder="Direccion de envio calle y altura" required />
					</div>
					<div class="col-span-12 xs:col-span-6">
						<input id="txtCiudad" class="input" type="text" placeholder="Ciudad / Provincia" required />
					</div>
				</div>
                <br>
                <hr>
                <br>
				<span class="font-semibold text-lg">Datos Clientes</span>
				<div class="grid grid-cols-12 gap-5 pt-5">
					<div class="col-span-12 xs:col-span-6">
						<input id="txtNombre" class="input" type="text" placeholder="Nombre" required />
					</div>
					<div class="col-span-12 xs:col-span-6">
						<input id="txtApellido" class="input" type="text" placeholder="Apellido" required />
					</div>
					<div class="col-span-12">
						<input id="txtDni" class="input" type="number" placeholder="Numero de DNI" required />
					</div>
					<div class="col-span-12">
						<input id="txtCorreo" class="input" type="email" placeholder="Correo Electronico" required />
					</div>
					<div class="col-span-12">
						<input id="txtCelular" class="input" type="number" placeholder="Celular sin 0 y 15" required />
					</div>
					<div class="col-span-12">
						<input id="txtDomicilio" class="input" type="text" placeholder="Direccion de envio calle y altura" required />
					</div>
                    <div class="col-span-12">
						<input id="txtProvincia" class="input" type="text" placeholder="Ciudad / Provincia" required />
					</div>
					<div class="col-span-12 flex flex-wrap gap-5 justify-between">
						<a class="flex items-center gap-2 hover:text-primary-color transition-all duration-300" href="<?= base_url(); ?>/tienda">
							<i class="bi bi-arrow-return-left flex text-xl stroke-medium"></i>
							<span>Volver a la tienda</span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-span-12 lg:col-span-4">
				<div class="max-h-60 overflow-auto">
					<span class="font-semibold text-lg">Tu Compra</span>
					<?php 
								foreach ($_SESSION['arrCarrito'] as $producto) {
								
							 ?>
					<a class="bg-white hover:bg-gray-50 flex justify-between items-center gap-5 h-[100px] w-full p-2" href="#">
						<div class="border rounded-lg h-[80px] w-[80px] min-w-[80px] overflow-hidden">
							<img class="w-full h-full object-cover"  src="<?= $producto['imagen'] ?>" alt="<?= $producto['producto'] ?>" />
						</div>
						<div class="flex flex-col w-full">
							<h6 class="font-semibold text-lg clamp-2 break-all"><?= $producto['producto'] ?></h6>
							<div class="flex gap-2">
								<div class="flex gap-1 leading-7 text-gray-400">
									<span><?= $producto['cantidad'] ?></span>
									<span>X</span>
								</div>
								<div class="flex items-center">
									<span class="font-bold text-primary-color"><?= SMONEY.formatMoney($producto['precio']) ?></span>
								</div>
							</div>
						</div>
					</a>
					<?php } ?>	
				</div>
				<br>
                <!--
				<div class="mb-5">
					<span class="font-semibold text-lg">Discount Coupon</span>
					<div class="flex my-3">
						<input class="input-rounded-l" type="text" placeholder="Your code here" />
						<button class="btn-view-shopping-cart btn-effect rounded-r-lg flex justify-center items-center w-[100px] bg-primary-color transition-all duration-300" type="submit">
							<span class="font-bold uppercase text-white">Apply</span>
						</button>
					</div>
				</div>
                -->
				<div class="border-2 rounded-lg p-4">
					<span class="font-bold text-lg text-center inline-block mb-10">Resumen de tu compra:</span>
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
					<div class="uppercase flex justify-between font-bold text-xl pt-4 border-t-2 border-gray-200">
						<span>Total:</span>
						<span  id="totalCompra"><?= SMONEY.formatMoney($total) ?></span>
					</div>
				</div>
				<div id="divMetodoPago" class="hide mb-5">
                    <div class="flex my-3">
                        <select  id="listtipopago" class="nice-select country select flex items-center w-full h-full" name="listtipopago" required />
                        <option></option>
                        <?php 
											if(count($data['tiposPago']) > 0){ 
												foreach ($data['tiposPago'] as $tipopago) {
													if($tipopago['idtipopago'] != 1){
										 ?>
										 	<option value="<?= $tipopago['idtipopago']?>"><?= $tipopago['tipopago']?></option>
										<?php
													}
												}
										 } ?>
                        </select> 
                    </div>
                </div>
                <div class="mb-5">
                    <div class="flex my-3">
                        <button id="btnComprar" class="hide btn-effect bg-primary-color text-white uppercase font-bold rounded-lg p-4 w-full h-full " type="submit">
						<span>Pagar</span>
						</button>
                    </div>
                </div>
			</div>
		</form>
	</div>
	<?php }else{ ?>
	<div class="login-section container mx-auto px-2 xs:px-8 my-5">
		<div class="p-5 bg-white max-w-[500px] rounded-lg mx-auto">
			<div class="my-5">
				<img class="mx-auto" src="<?= media(); ?>/tienda/images/logo2.png" alt="logo" />
			</div>
			<form id="formLogin">
				<div class="flex flex-col gap-4">
					<div class="relative flex items-center h-[40px]">
						<i class="bi bi-person absolute flex ml-2 text-gray-400 text-[24px]"></i>
						<input class="input pl-10" type="email" placeholder="Email" id="txtEmail" name="txtEmail" required="" />
					</div>
					<div class="relative flex items-center h-[40px]">
						<i class="bi bi-lock absolute flex ml-2 text-gray-400 text-[24px]"></i>
						<input class="input pl-10" type="password" placeholder="Contraseña" id="txtPassword" name="txtPassword" required="" />
					</div>
					<button class="btn-effect h-full w-full p-2 bg-primary-color rounded-lg transition-all duration-300" type="submit">
						<span class="font-bold uppercase text-white">Login</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	<?php } ?>
<?php 
	footerTienda($data);
 ?>