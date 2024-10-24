	<?php 
		$catFotter = getCatFooter();
	 ?>
	<!-- Footer -->
    <footer class="footer-section bg-[#0b0d17] text-gray-400 w-full mt-auto">
        <div class="grid grid-cols-12 container mx-auto px-4 xs:px-8">
            <div class="col-span-12 py-[50px]">
                <div class="grid grid-cols-12 gap-2">
                    <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                        <div class="pb-6">
                            <img src="<?= media() ?>/tienda/images/logo.png" class="h-[40px]" alt="logo" />
                        </div>
                        
                    </div>
                    <div class="py-5 col-span-12 sm:col-span-6 sm:py-0 lg:col-span-4">
                    <div>
                            <div class="flex items-center gap-[10px] py-2">
                                <i class="bi bi-envelope-fill text-xl text-primary-color flex"></i>
                                <a class="break-all" href="mailto:<?= EMAIL_EMPRESA ?>"><?= EMAIL_EMPRESA ?></a>
                            </div>
                            <div class="flex items-center gap-[10px] py-2">
                                <i class="bi bi-telephone-fill text-xl text-primary-color flex"></i>
                                <a class="break-all" href="tel:<?= WHATSAPP ?>"><?= WHATSAPP ?></a>
                            </div>
                            <div class="flex items-center gap-[10px] py-2">
                                <i class="bi bi-geo-alt-fill text-xl text-primary-color flex"></i>
                                <span class="break-all"><?= DIRECCION ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-4">
                        <h3 class="text-gray-300 font-semibold pb-2">Se el primero en saberlo</h3>
                        <span class="text-sm py-2">Suscríbete para recibir actualizaciones sobre nuestra tienda y ofertas especiales.</span>
                        <form class="py-2" id="frmSuscripcion" name="frmSuscripcion">
                            <div class="bg-gray-rgba rounded-lg overflow-hidden p-2 flex">
                                <input class="bg-transparent w-full pl-2 border-none focus:ring-0 focus:ring-transparent focus:border-none" type="text" id="nombreSuscripcion" name="nombreSuscripcion" placeholder="Tu Nombre" required />
                                <input class="bg-transparent w-full pl-2 border-none focus:ring-0 focus:ring-transparent focus:border-none" type="email" id="emailSuscripcion" name="emailSuscripcion" placeholder="Dejanos tu Email" required/>
                                <button class="p-1" type="submit">
                                    <i class="bi bi-send text-lg text-white flex"></i>
                                </button>
                            </div>
                        </form>
                        <div class="py-2 flex gap-2">
                            <div class="relative rounded-full h-8 w-8 overflow-hidden">
                                <a class="instagram-before flex justify-center items-center text-white bg-gray-rgba text-center h-8 w-8" href="<?= INSTAGRAM?>" target="_blanck">
                                    <i class="bi bi-instagram flex relative z-[2]"></i>
                                </a>
                            </div>
                            <div class="bg-gray-rgba hover:bg-facebook rounded-full h-8 w-8 transition-all duration-300">
                                <a class="h-8 w-8 flex justify-center items-center" href="<?= FACEBOOK?>" target="_blanck">
                                    <i class="bi bi-facebook text-white flex"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 pb-5">
                <p class="text-center">Derechos reservados © 2024 </p>
            </div>
        </div>
    </footer>
    <script>
        const base_url = "<?= base_url(); ?>";
        const smony = "<?= SMONEY; ?>";
    </script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <script src="<?= media() ?>/tienda/unpkg.com/swiper%408.1.4/swiper-bundle.min.js"></script>
    <script src="<?= media() ?>/tienda/unpkg.com/metismenujs%401.3.1/dist/metismenujs.min.js"></script>
    <script src="<?= media() ?>/tienda/plugins/iziToast/iziToast.min.js"></script>
    <script src="<?= media() ?>/tienda/plugins/nice-select2/nice-select2.js"></script>
    <script src="<?= media() ?>/tienda/plugins/mixitup/mixitup.min.js"></script>
    <!--===============================================================================================-->	
	<script src="<?= media() ?>/tienda/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= media() ?>/tienda/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= media() ?>/tienda/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/slick/slick.min.js"></script>
	<script src="<?= media() ?>/tienda/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/parallax100/parallax100.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/sweetalert/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media();?>/js/fontawesome.js"></script>
    <script src="<?= media() ?>/tienda/plugins/nice-select2/nice-select2.js"></script>
	<script src="<?= media() ?>/tienda/js/main.js"></script>
	<script src="<?= media();?>/js/functions_admin.js"></script>
	<script src="<?= media() ?>/js/functions_login.js"></script>
	<script src="<?= media() ?>/tienda/js/functions.js"></script>
</body>
</html>