<div class="flex h-full w-full">
        <div class="modal-content relative bg-white h-full w-[400px] min-w-[250px] right-[-999px] ml-auto transition-all duration-300 flex flex-col">
            <div class="w-full">
                <div class="border-b-2 border-gray-200 p-5">
                    <h3 class="uppercase text-xl font-bold">Tu Carrito</h3>
                </div>
                <button class="btn-close-modal absolute top-5 right-5 p-[3px] hover:text-slate-400 transition-all duration-300">
                    <i class="bi bi-x-lg flex text-xl text-stroke-medium pointer-events-none"></i>
                </button>
            </div>
<?php 
$total = 0;
if(isset($_SESSION['arrCarrito']) and count($_SESSION['arrCarrito']) > 0){ 
 ?>
  <div class="h-full overflow-auto">
<?php 
	foreach ($_SESSION['arrCarrito'] as $producto) {
	$total += $producto['cantidad'] * $producto['precio'];
	$idProducto = openssl_encrypt($producto['idproducto'],METHODENCRIPT,KEY);	
 ?>	
    <a class="bg-white hover:bg-gray-50 flex justify-between items-center gap-5 h-[100px] w-full p-2" href="#">
                    <div class="border rounded-lg h-[80px] w-[80px] min-w-[80px] overflow-hidden" >
                        <img class="w-full h-full object-cover" src="<?= $producto['imagen'] ?>" alt="<?= $producto['producto'] ?>" />
                    </div>
                    <div class="flex flex-col w-full">
                        <h6 class="font-semibold text-lg clamp-2 break-all"><?= $producto['producto'] ?></h6>
                        <div class="flex gap-2">
                            <div class="flex gap-1 leading-7 text-gray-400">
                                <span><?= $producto['cantidad'] ?></span>
                                <span>X</span>
                            </div>
                            <div class="flex gap-2 items-center">
                                <span class="font-bold text-primary-color"><?= SMONEY.formatMoney($producto['precio']) ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="flex hover:text-primary-color transition-all duration-300" idpr="<?= $idProducto ?>" op="1" onclick="fntdelItem(this)">
                        <i class="bi bi-trash text-2xl pointer-events-none"></i>
                    </div>
                </a>   
<?php } ?>
</div>
        <div class="bg-white px-1 xs:px-5 pt-5 border-t-2 border-gray-200 mt-auto">
            <div class="flex justify-between">
                <span class="uppercase text-lg">Subtotal:</span>
                <span class="text-primary-color font-semibold text-lg"><?= SMONEY.formatMoney($total); ?></span>
            </div>
            <a class="my-5 btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="<?= base_url() ?>/carrito">
                <span class="font-bold uppercase text-white">Ver Carrito</span>
            </a>
            <a class="my-5 btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="<?= base_url() ?>/carrito/procesarpago">
                <span class="font-bold uppercase text-white">Procesar Pago</span>
            </a>
            </div>
        </div>

<?php 
}else{
    ?>
     <!-- If the shopping cart is empty (replace hidden with flex) -->
     <div class="flex flex-col justify-center items-center p-5 gap-4">
                    <i class="bi bi-cart-x text-8xl text-gray-200"></i>
                    <p class="font-semibold">No hay productos en el Carrito
                        
                    .</p>
                    <a class="btn-effect flex justify-center items-center p-2 bg-primary-color rounded-lg gap-2 transition-all duration-300" href="<?= base_url() ?>/tienda">
                        <span class="font-bold uppercase text-white">Volver a la tienda</span>
                    </a>
                </div>
                <!-- -->
    
    <?php
}

 ?>
 </div>
</div>