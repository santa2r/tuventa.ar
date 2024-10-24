<?php 
headerTienda($data);
$banner = $data['page']['portada'];
$idpagina = $data['page']['idpost'];

 ?>
<script>
 	document.querySelector('header').classList.add('header-v4');
 </script>
 
<?php
	if(viewPage($idpagina)){	
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
            <a href="<?= base_url(); ?>/contacto">Contacto</a>
			</li>
		</ul>
	</div>

	<div class="banner-title-section container mx-auto px-2 xs:px-8 my-5">
		<div class="liner-container flex justify-center border-b-2 border-[rgba(119,119,119,.17)] my-5">
			<h1 class="uppercase text-2xl font-bold inline-block border-b-2 border-primary-color mb-[-2px] pb-3">Contacto</h1>
		</div>
	</div>

	<div class="information-section container mx-auto px-2 xs:px-8 my-5">
		<div class="grid grid-cols-12 gap-5">
			<div class="col-span-12 sm:col-span-6 lg:col-span-3 flex">
				<div class="flex items-center w-full gap-4 p-5 xs:pl-[20%] sm:pl-5 rounded-lg bg-white hover:shadow-lg transition-all duration-300">
					<div class="rounded-full border-2">
						<i class="bi bi-telephone text-primary-color text-[40px] p-3 flex"></i>
					</div>
					<div>
						<h6 class="font-bold capitalize">Telefono</h6>
						<p class="text-sm text-gray-400 break-all"><a href="tel:<?= TELEMPRESA ?>"><?= TELEMPRESA ?></a></p>
					</div>
				</div>
			</div>
			<div class="col-span-12 sm:col-span-6 lg:col-span-3 flex">
				<div class="flex items-center w-full gap-4 p-5 xs:pl-[20%] sm:pl-5 rounded-lg bg-white hover:shadow-lg transition-all duration-300">
					<div class="rounded-full border-2">
						<i class="bi bi-envelope text-primary-color text-[40px] p-3 flex"></i>
					</div>
					<div>
						<h6 class="font-bold capitalize">E-mail</h6>
						<p class="text-sm text-gray-400 break-all"><a href="mailto:<?= EMAIL_EMPRESA ?>"><?= EMAIL_EMPRESA ?></a></p>
					</div>
				</div>
			</div>
			<div class="col-span-12 sm:col-span-6 lg:col-span-3 flex">
				<div class="flex items-center w-full gap-4 p-5 xs:pl-[20%] sm:pl-5 rounded-lg bg-white hover:shadow-lg transition-all duration-300">
					<div class="rounded-full border-2">
						<i class="bi bi-geo-alt text-primary-color text-[40px] p-3 flex"></i>
					</div>
					<div>
						<h6 class="font-bold capitalize">Ubicacion</h6>
						<p class="text-sm text-gray-400 break-all"><?= DIRECCION ?></p>
					</div>
				</div>
			</div>
			<div class="col-span-12 sm:col-span-6 lg:col-span-3 flex">
				<div class="flex items-center w-full gap-4 p-5 xs:pl-[20%] sm:pl-5 rounded-lg bg-white hover:shadow-lg transition-all duration-300">
					<div class="rounded-full border-2">
						<i class="bi bi-clock text-primary-color text-[40px] p-3 flex"></i>
					</div>
					<div>
						<h6 class="font-bold capitalize">Atencios</h6>
						<p class="text-sm text-gray-400 break-all">Lunes a Viernes <br> 8:00 am a 8:00pm</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="leave-message-section container mx-auto px-2 xs:px-8 my-5">
		<div class="grid grid-cols-12 rounded-lg overflow-hidden">
			<div class="col-span-12 sm:col-span-6 h-60 sm:h-full">
            <?php 
            echo $data['page']['contenido']; 
        } 
            else{
                ?>
                <div>
                    <div class="container-fluid py-5 text-center" >
                        <img src="<?= media() ?>/images/construction.png" alt="En construcción">
                        <h3>Estamos trabajando para usted.</h3>
                    </div>
                </div>
            <?php }?>
			</div>
			<div class="col-span-12 sm:col-span-6 bg-white p-5">
				<h1 class="uppercase text-xl font-bold inline-block pb-3">Realiza tu consulta</h1>
				<form id="frmContacto"class="form-leave-message flex flex-col gap-5" action="javascript:void(0)">
					<div>
						<input class="input" type="text" id="nombreContacto" name="nombreContacto" placeholder="Nombre completo" required="" />
					</div>
					<div>
						<input class="input" type="email" id="emailContacto" name="emailContacto" placeholder="Correo electrónico" required="" />
					</div>
                    <div>
                    <input class="input" type="number" id="telContacto" name="telContacto" placeholder="Telefono" required="">
					</div>
                    <div class="h-32">
						<textarea class="input resize-none" id="mensaje" name="mensaje" placeholder="Cual es tu pregunta o mensaje?" required=""></textarea>
					</div>
					<div>
						<button class="btn-view-shopping-cart btn-effect flex justify-center items-center p-4 bg-primary-color rounded-lg transition-all duration-300">
							<span class="font-bold uppercase text-white">Enviar Mensaje</span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php 
	footerTienda($data);
?>