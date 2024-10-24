<?php 
    headerTienda($data);
?>
<script>
  document.querySelector('header').classList.add('header-v4');
</script>
<div class="error-section container m-auto px-2 xs:px-8 my-5">
		<div class="flex flex-col gap-2 items-center text-center">
    <?= $data['page']['contenido']; ?>
			<a class="btn-effect bg-primary-color rounded-lg p-2 text-white uppercase font-bold" href="javascript:window.history.back();">
				<span>Regresar</span>
			</a>
		</div>
	</div>
<?php footerTienda($data); ?>

