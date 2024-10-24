<?php 
headerTienda($data);

// Verificar si los parámetros existen en la URL
if (isset($_GET['status']) && isset($_GET['transactionId'])) {
    // Obtener los valores de los parámetros
    $status = $_GET['status'];
    $transactionId = $_GET['transactionId'];
} else { ?>
    <script>window.location.href = "<?= base_url();?>"</script>
<?php
}
?>
<div class="purchase-completed-section container mx-auto px-2 xs:px-8 my-5">
		<?php if($status == '200'){?>
		<div class="flex flex-col gap-2 items-center text-center">
			<div class="max-w-[300px] max-h-[300px]">
				<img class="w-full h-full" src="<?= media(); ?>/tienda/images/purchase-done.png" alt="compra completada" />
			</div>
			<h1 class="uppercase text-primary-color text-4xl">compra completada</h1>
			<p class="text-lg">Tu compra ha sido exitosa, gracias por confiar en nosotros</p>
			<p class="text-lg">Hemos enviado la confirmación de tu compra al correo electrónico registrado en tu cuenta.</p>
			<a class="btn-effect bg-primary-color rounded-lg p-2 text-white uppercase font-bold" href="index-2.html">
				<span>Volver a la Tienda</span>
			</a>
		</div>
		<?php } elseif($status == '133'){?>
			<div class="purchase-failed-section container mx-auto px-2 xs:px-8 my-5">
				<div class="flex flex-col gap-2 items-center text-center">
					<div class="max-w-[300px] max-h-[300px]">
						<img class="w-full h-full" src="<?= media(); ?>/tienda/images/purchase-i.png" alt="purchase completed">
					</div>
					<h1 class="uppercase text-primary-color text-4xl">Compra Pendiente</h1>
					<p class="text-lg">Su compra quedo pendiente, para completar tu compra, dirijase a su dashboard y siga las intrucciones desde ahi.</p>
					<p class="text-lg">Si tiene alguna duda, comuníquese con el  <a class="text-primary-color underlined-animated after:bottom-0" href="mailto:contacto@tuventa.ar">soporte técnico.</a></p>
					<a class="btn-effect bg-primary-color rounded-lg p-2 text-white uppercase font-bold" href="<?= base_url();?>/tienda">
					<span>Volver a la Tienda</span>
					</a>
				</div>
			</div>
		</div>
		<?php }else{?>
			<div class="purchase-failed-section container mx-auto px-2 xs:px-8 my-5">
				<div class="flex flex-col gap-2 items-center text-center">
					<div class="max-w-[300px] max-h-[300px]">
						<img class="w-full h-full" src="<?= media(); ?>/tienda/images/purchase-x.png" alt="purchase completed">
					</div>
					<h1 class="uppercase text-primary-color text-4xl">La Compra Fallo</h1>
					<p class="text-lg">Se produjo un error al completar tu compra, inténtalo nuevamente.</p>
					<p class="text-lg">Si continúa teniendo este problema, comuníquese con el  <a class="text-primary-color underlined-animated after:bottom-0" href="mailto:contacto@tuventa.ar">soporte técnico.</a>.</p>
					<a class="btn-effect bg-primary-color rounded-lg p-2 text-white uppercase font-bold" href="<?= base_url();?>/tienda">
					<span>Volver a la Tienda</span>
					</a>
				</div>
			</div>
		<?php } ?>
</div>
<?php 
	footerTienda($data);
?>