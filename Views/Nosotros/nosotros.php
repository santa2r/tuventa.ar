<?php 
headerTienda($data);
//$banner = media()."/tienda/images/bg-01.jpg";
 $banner = $data['page']['portada'];
 $idpagina = $data['page']['idpost'];
 ?>
 <script>
 	document.querySelector('header').classList.add('header-v4');
 </script>
<!-- Content page -->
<div class="breadcrumb-section container mx-auto my-5 px-2 sm:px-8">
      <ul class="flex flex-wrap items-center gap-1">
        <li class="transition-all duration-300 hover:text-primary-500">
		<a href="<?= base_url(); ?>"">Inicio</a>
        </li>
        <li>
          <i class="bi bi-caret-right-fill flex text-primary-500"></i>
        </li>
        <li class="hover:text-primary-color transition-all duration-300 active">
                <a href="<?= base_url(); ?>/nosotros">Operatoria</a>
            </li>
      </ul>
    </div>

    <div class="banner-title-section container mx-auto my-5 px-2 sm:px-8">
      <div
        class="liner-container my-5 flex justify-center border-b-2 border-[rgba(119,119,119,.17)]">
        <h1
          class="mb-[-2px] inline-block border-b-2 border-primary-500 pb-3 text-2xl font-bold uppercase">
          Operatoria
        </h1>
      </div>
    </div>
<?php
	if(viewPage($idpagina)){
		echo $data['page']['contenido'];
	}else{
  ?>
<div>
	<div class="container-fluid py-5 text-center" >
		<img src="<?= media() ?>/images/construction.png" alt="En construcción">
		<h3>Estamos trabajando para usted.</h3>
	</div>
</div>
<?php 
	}

	footerTienda($data);
?>