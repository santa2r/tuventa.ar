<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="Assets/tienda/images/favicon.ico">
	<link rel="stylesheet" href="Assets/tienda/cdn.jsdelivr.net/npm/bootstrap-icons%401.7.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="Assets/tienda/unpkg.com/metismenujs%401.3.1/dist/metismenujs.min.css">
	<link rel="stylesheet" href="Assets/tienda/css/main.min.css">
	<title>Megabyte - Purchase Completed</title>
</head>

<body class="font-poppins text-txt bg-body overflow-hidden flex flex-col min-h-screen">
	<div class="loader fixed z-[999] flex justify-center items-center w-screen h-screen bg-body">
		<div class="loader-content flex flex-col items-center gap-2">
			<span class="text-3xl font-semibold text-gray-200">Megabyte</span>
			<div class="flex gap-1 h-1 w-40 bg-gray-200 overflow-hidden">
				<div class="animation-loader w-20 h-full bg-primary-color"></div>
			</div>
		</div>
	</div>

	<header class="header-section shadow-custom-1 relative z-30">
		<div class="hidden sm:flex bg-secondary-color">
			<div class="grid grid-cols-12 container mx-auto px-2 xs:px-8 py-[6px] h-full">
				<div class="col-span-8 self-center">
					<div class="flex gap-[15px]">
						<div class="flex items-center gap-2">
							<i class="bi bi-envelope text-2xl text-primary-color flex"></i>
							<a href="#" class="text-white font-light">megabyte@example.com</a>
						</div>
						<div class="flex items-center gap-2">
							<i class="bi bi-telephone text-xl text-primary-color flex"></i>
							<a href="#" class="text-white font-light">0101-010101</a>
						</div>
					</div>
				</div>
				<div class="col-span-4 justify-self-end self-center">
					<div class="flex items-center gap-[10px]">
						<a href="#">
							<i class="bi bi-instagram flex text-icon hover:text-white transition-all duration-300"></i>
						</a>
						<a href="#">
							<i class="bi bi-facebook flex text-icon hover:text-white transition-all duration-300"></i>
						</a>
						<a href="#">
							<i class="bi bi-twitter flex text-icon hover:text-white transition-all duration-300"></i>
						</a>
						<a href="#">
							<i class="bi bi-youtube flex text-icon hover:text-white transition-all duration-300"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-secondary-color">
			<div class="container mx-auto px-2 xs:px-8 py-5 h-full grid grid-cols-4 lg:grid-cols-12 gap-1 lg:gap-0">
				<div class="col-span-2 lg:col-span-3 order-1 lg:order-1 self-center">
					<a href="index-2.html">
						<img class="inline" src="Assets/tienda/images/logo.png" alt="logo" />
					</a>
				</div>
				<div class="header-search hidden lg:block col-span-4 lg:col-span-6 order-3 lg:order-2 self-center mt-[10px] lg:mt-0 transition-all duration-300">
					<form class="search" action="#">
						<div class="flex overflow-hidden h-[40px] rounded-[50px] bg-primary-rgba">
							<input class="search bg-transparent w-full border-none focus:ring-0 focus:ring-transparent focus:border-none py-[5px] pl-5 text-white placeholder-icon" type="search" placeholder="Search..." />
							<button class="btn-search text-white px-3" type="submit">
								<i class="bi bi-search text-xl flex"></i>
							</button>
						</div>
					</form>
				</div>
				<div class="col-span-2 lg:col-span-3 order-2 lg:order-3 justify-self-end self-center flex gap-2 xl:gap-[50px]">
					<div class="flex items-center lg:hidden">
						<button class="btn-search-mob text-white p-[5px]">
							<i class="bi bi-search flex text-2xl pointer-events-none"></i>
						</button>
					</div>
					<div class="flex items-center lg:hidden">
						<button class="btn-open-modal text-white" data-target=".menu-mob">
							<i class="bi bi-list flex text-3xl pointer-events-none"></i>
						</button>
					</div>
					<div class="group-items text-white items-center gap-5 hidden lg:flex">
						<div class="relative">
							<a class="btn-open-modal" data-target=".wishlist-modal" href="javascript:void(0)">
								<i class="bi bi-heart text-white text-[32px] transform translate-y-1 flex pointer-events-none"></i>
							</a>
							<span class="badge absolute top-0 right-[-6px] h-[15px] min-w-[15px] px-[2px]">0</span>
						</div>
						<div class="relative">
							<a class="btn-open-modal" data-target=".shopping-cart-modal" href="javascript:void(0)">
								<i class="bi bi-cart2 text-white text-[35px] flex pointer-events-none"></i>
							</a>
							<span class="badge absolute top-0 right-[-6px] h-[15px] min-w-[15px] px-[2px]">0</span>
						</div>
					</div>
					<div class="hidden lg:flex relative group">
						<div class="flex items-center gap-1 cursor-pointer select-none">
							<span class="font-semibold text-white">My account</span>
							<i class="bi bi-caret-down-fill text-white text-sm flex rotate-0 group-hover:rotate-180 transition-all duration-300"></i>
						</div>
						<div class="absolute top-full z-30 w-[120%] invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-300 pt-[10px]">
							<div class="relative arrow">
								<ul class="bg-white shadow-custom-1 rounded-md overflow-hidden p-[6px]">
									<li class="hover:font-semibold">
										<a href="#" class="btn-open-modal" data-tab="0" data-target=".entry-modal">
											<div class="flex items-center gap-2 p-1 pointer-events-none">
												<i class="bi bi-box-arrow-in-right text-xl text-primary-color flex"></i>
												<span>Login</span>
											</div>
										</a>
									</li>
									<li class="hover:font-semibold">
										<a href="#" class="btn-open-modal" data-tab="1" data-target=".entry-modal">
											<div class="flex items-center gap-2 p-1 pointer-events-none">
												<i class="bi bi-person text-xl text-primary-color flex"></i>
												<span>Sign up</span>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-white hidden lg:block">
			<nav class="container mx-auto px-2 xs:px-8">
				<ul class="menu flex flex-wrap justify-between items-center text-lg py-[10px]">
					<li class="group relative underlined-animated">
						<a href="#" class="btn-open font-semibold flex items-center gap-1">
							<span>Products</span>
							<i class="bi bi-caret-down-fill flex text-xs text-primary-color rotate-0 group-hover:rotate-180 transition-all duration-300"></i>
						</a>
						<div class="submenu absolute pt-[10px] left-0 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-300">
							<ul class="bg-white shadow-custom-1 text-base w-[250px] relative">
								<li class="group-1">
									<a href="#" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Pc components</span>
										<i class="bi bi-caret-right-fill flex text-xs text-primary-color ml-auto invisible group-1-hover-visible"></i>
									</a>
									<div class="submenu absolute top-0 left-full min-h-full min-w-[680px] invisible opacity-0 group-1-hover-visible transition-all duration-300">
										<div class="bg-white shadow-custom-2">
											<div class="border-b-2 border-primary-color py-[10px]">
												<span class="uppercase text-primary-color font-bold text-3xl px-5">Pc components</span>
											</div>
											<div class="submenu-categories flex flex-wrap">
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/pc_components/motherboards.jpg" alt="motherboard" />
														</div>
														<span class="block text-center group-2-hover-font">Motherboards</span>
													</a>
												</div>
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/pc_components/processors.jpg" alt="processors" />
														</div>
														<span class="block text-center group-2-hover-font">Processors</span>
													</a>
												</div>
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/pc_components/rams.jpg" alt="rams" />
														</div>
														<span class="block text-center group-2-hover-font">RAMS</span>
													</a>
												</div>
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/pc_components/video_cards.jpg" alt="video cards" />
														</div>
														<span class="block text-center group-2-hover-font">Video Cards</span>
													</a>
												</div>
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/pc_components/power_supplys.jpg" alt="video cards" />
														</div>
														<span class="block text-center object-contain group-2-hover-font">Power Supplys</span>
													</a>
												</div>
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/pc_components/hard_drives.jpg" alt="video cards" />
														</div>
														<span class="block text-center group-2-hover-font">Hard Drives</span>
													</a>
												</div>
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/pc_components/ssd_disk.jpg" alt="video cards" />
														</div>
														<span class="block text-center group-2-hover-font">SSD Disk</span>
													</a>
												</div>
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/pc_components/computer_case.jpg" alt="video cards" />
														</div>
														<span class="block text-center group-2-hover-font">Case</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="group-1">
									<a href="#" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Peripherals</span>
										<i class="bi bi-caret-right-fill flex text-xs text-primary-color ml-auto invisible group-1-hover-visible"></i>
									</a>
									<div class="submenu absolute top-0 left-full min-h-full min-w-[680px] invisible opacity-0 group-1-hover-visible transition-all duration-300">
										<div class="bg-white shadow-custom-2">
											<div class="border-b-2 border-primary-color py-[10px]">
												<span class="uppercase text-primary-color font-bold text-3xl px-5">Peripherals</span>
											</div>
											<div class="submenu-categories flex flex-wrap">
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/peripherals/keywords.jpg" alt="motherboard" />
														</div>
														<span class="block text-center group-2-hover-font">Keywords</span>
													</a>
												</div>
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/peripherals/mouse.jpg" alt="processors" />
														</div>
														<span class="block text-center group-2-hover-font">Mouses</span>
													</a>
												</div>
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/peripherals/mic.jpg" alt="rams" />
														</div>
														<span class="block text-center group-2-hover-font">Mics</span>
													</a>
												</div>
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/peripherals/webcam.jpg" alt="rams" />
														</div>
														<span class="block text-center group-2-hover-font">Webcam</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="group-1">
									<a href="#" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Computers</span>
										<i class="bi bi-caret-right-fill flex text-xs text-primary-color ml-auto invisible group-1-hover-visible"></i>
									</a>
									<div class="submenu absolute top-0 left-full min-h-full min-w-[680px] invisible opacity-0 group-1-hover-visible transition-all duration-300">
										<div class="bg-white shadow-custom-2">
											<div class="border-b-2 border-primary-color py-[10px]">
												<span class="uppercase text-primary-color font-bold text-3xl px-5">Computers</span>
											</div>
											<div class="submenu-categories flex flex-wrap">
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/computers/desktops.jpg" alt="motherboard" />
														</div>
														<span class="block text-center group-2-hover-font">Desktops</span>
													</a>
												</div>
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/computers/notebooks.jpg" alt="processors" />
														</div>
														<span class="block text-center group-2-hover-font">Notebooks</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="group-1">
									<a href="#" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Monitors</span>
									</a>
								</li>
								<li class="group-1">
									<a href="#" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Printers</span>
									</a>
								</li>
								<li class="group-1">
									<a href="#" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Gaming</span>
										<i class="bi bi-caret-right-fill flex text-xs text-primary-color ml-auto invisible group-1-hover-visible"></i>
									</a>
									<div class="submenu absolute top-0 left-full min-h-full min-w-[680px] invisible opacity-0 group-1-hover-visible transition-all duration-300">
										<div class="bg-white shadow-custom-2">
											<div class="border-b-2 border-primary-color py-[10px]">
												<span class="uppercase text-primary-color font-bold text-3xl px-5">Gaming</span>
											</div>
											<div class="submenu-categories flex flex-wrap">
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/gaming/consoles.jpg" alt="motherboard" />
														</div>
														<span class="block text-center group-2-hover-font">Consoles</span>
													</a>
												</div>
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/gaming/games.jpg" alt="processors" />
														</div>
														<span class="block text-center group-2-hover-font">Games</span>
													</a>
												</div>
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/gaming/accessories.jpg" alt="processors" />
														</div>
														<span class="block text-center group-2-hover-font">Accessories</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="group-1">
									<a href="#" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Tablets</span>
									</a>
								</li>
								<li class="group-1">
									<a href="#" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Smartphones</span>
									</a>
								</li>
								<li class="group-1">
									<a href="#" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Software</span>
										<i class="bi bi-caret-right-fill flex text-xs text-primary-color ml-auto invisible group-1-hover-visible"></i>
									</a>
									<div class="submenu absolute top-0 left-full min-h-full min-w-[680px] invisible opacity-0 group-1-hover-visible transition-all duration-300">
										<div class="bg-white shadow-custom-2">
											<div class="border-b-2 border-primary-color py-[10px]">
												<span class="uppercase text-primary-color font-bold text-3xl px-5">Software</span>
											</div>
											<div class="submenu-categories flex flex-wrap">
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/software/os.jpg" alt="motherboard" />
														</div>
														<span class="block text-center group-2-hover-font">Operating System</span>
													</a>
												</div>
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/software/office.jpg" alt="processors" />
														</div>
														<span class="block text-center group-2-hover-font">Office Package</span>
													</a>
												</div>
												<div class="p-[10px] group-2">
													<a class="categorie-container inline-block" href="#">
														<div class="categorie-img h-[150px] w-[150px]">
															<img class="img-product group-2-hover-img" src="Assets/tienda/images/categories/software/antivirus.jpg" alt="processors" />
														</div>
														<span class="block text-center group-2-hover-font">Antivirus</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li class="underlined-animated"><a href="index-2.html">Home</a></li>
					<li class="underlined-animated"><a href="#">Desktops</a></li>
					<li class="underlined-animated"><a href="#">Notebooks</a></li>
					<li class="underlined-animated"><a href="#">Smartphones</a></li>
					<li class="underlined-animated group">
						<a href="#" class="flex items-center gap-1">
							<span>Pages</span>
							<i class="bi bi-caret-down-fill flex text-xs text-primary-color rotate-0 group-hover:rotate-180 transition-all duration-300"></i>
						</a>
						<div class="absolute pt-[10px] left-0 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-300">
							<ul class="bg-white shadow-custom-1 text-base w-[250px] relative">
								<li class="group-1">
									<a href="wishlist.html" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Wishlist</span>
									</a>
								</li>
								<li class="group-1">
									<a href="shopping-cart.html" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Shopping Cart</span>
									</a>
								</li>
								<li class="group-1">
									<a href="product-details.html" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Product Details</span>
									</a>
								</li>
								<li class="group-1">
									<a href="checkout.html" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Checkout</span>
									</a>
								</li>
								<li class="group-1">
									<a href="shop-mixed.html" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Shop - Mixed</span>
									</a>
								</li>
								<li class="group-1">
									<a href="shop-listed.html" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Shop - Listed</span>
									</a>
								</li>
								<li class="group-1">
									<a href="shop-grid.html" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Shop - Grid</span>
									</a>
								</li>
								<li class="group-1">
									<a href="login.html" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Login</span>
									</a>
								</li>
								<li class="group-1">
									<a href="sign-up.html" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Sign Up</span>
									</a>
								</li>
								<li class="group-1">
									<a href="error404.html" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Error 404</span>
									</a>
								</li>
								<li class="group-1">
									<a href="purchase-completed.html" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Purchase Completed</span>
									</a>
								</li>
								<li class="group-1">
									<a href="purchase-failed.html" class="flex gap-2 items-center p-2">
										<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
										<span class="group-1-hover-font">Purchase Failed</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="underlined-animated"><a href="faqs.html">FAQ's</a></li>
					<li class="underlined-animated"><a href="contact-us.html">Contact Us</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="purchase-completed-section container mx-auto px-2 xs:px-8 my-5">
		<div class="flex flex-col gap-2 items-center text-center">
			<div class="max-w-[300px] max-h-[300px]">
				<img class="w-full h-full" src="Assets/tienda/images/purchase-done.png" alt="purchase completed" />
			</div>
			<h1 class="uppercase text-primary-color text-4xl">Purchase Completed</h1>
			<p class="text-lg">Your purchase has been successful, you can see the <a class="text-primary-color underlined-animated after:bottom-0" href="#">details of your purchase here</a>.</p>
			<p class="text-lg">We have sent the confirmation of your purchase to the email registered in your account.</p>
			<a class="btn-effect bg-primary-color rounded-lg p-2 text-white uppercase font-bold" href="index-2.html">
				<span>Go Back Home</span>
			</a>
		</div>
	</div>

	<!-- Modals -->
	<div class="menu-mob modal bg-overlay fixed z-50 h-full w-full inset-0 invisible opacity-0 transition-all duration-300">
		<div class="flex h-full w-full">
			<div class="modal-content relative bg-white h-full w-[288px] min-w-[250px] left-[-999px] mr-auto transition-all duration-300 flex flex-col">
				<div class="bg-secondary-color w-full">
					<button class="btn-close-modal absolute top-5 right-5 p-[3px] text-white transition-all duration-300">
						<i class="bi bi-x-lg flex text-xl text-stroke-medium pointer-events-none"></i>
					</button>
					<div class="py-12">
						<img src="Assets/tienda/images/logo.png" class="h-[40px] mx-auto" alt="logo" />
					</div>
				</div>
				<nav class="bg-white h-full w-full overflow-auto">
					<ul class="metismenu">
						<li class="border-b border-gray-200">
							<a class="flex items-center p-2 select-none" href="index-2.html">
								<i class="bi bi-house-door flex text-xl text-primary-color mr-3"></i>
								<span class="font-semibold">Home</span>
							</a>
						</li>
						<li class="border-b border-gray-200">
							<div class="metismenu-btn has-arrow p-2 flex items-center cursor-pointer select-none" aria-expanded="false" role="menu">
								<i class="bi bi-person flex text-xl text-primary-color mr-3"></i>
								<span class="font-semibold">My Account</span>
							</div>
							<div class="metismenu-content">
								<a class="btn-open-modal block ml-10 p-1" href="#" data-tab="0" data-target=".entry-modal">Login</a>
								<a class="btn-open-modal block ml-10 p-1" href="#" data-tab="1" data-target=".entry-modal">Sign Up</a>
							</div>
						</li>
						<li class="border-b border-gray-200">
							<div class="btn-open-modal p-2" data-target=".wishlist-modal">
								<div class="flex items-center cursor-pointer select-none pointer-events-none">
									<i class="bi bi-heart flex text-xl text-primary-color mr-3"></i>
									<span class="font-semibold">Wishlist</span>
									<span class="badge h-[22px] min-w-[22px] px-[6px] ml-auto">0</span>
								</div>
							</div>
						</li>
						<li class="border-b border-gray-200">
							<div class="btn-open-modal p-2" data-target=".shopping-cart-modal">
								<div class="flex items-center cursor-pointer select-none pointer-events-none">
									<i class="bi bi-cart flex text-xl text-primary-color mr-3"></i>
									<span class="font-semibold">Shopping Cart</span>
									<span class="badge h-[22px] min-w-[22px] px-[6px] ml-auto">0</span>
								</div>
							</div>
						</li>
						<li class="border-b border-gray-200">
							<div class="metismenu-btn has-arrow p-2 flex items-center cursor-pointer select-none" aria-expanded="false" role="menu">
								<i class="bi bi-motherboard flex text-xl text-primary-color mr-3"></i>
								<span class="font-semibold">Hardware</span>
							</div>
							<div class="metismenu-content">
								<a class="btn-open-modal block ml-10 p-1" href="#">Motherboards</a>
								<a class="btn-open-modal block ml-10 p-1" href="#">Processors</a>
								<a class="btn-open-modal block ml-10 p-1" href="#">Rams</a>
								<a class="btn-open-modal block ml-10 p-1" href="#">Video Cards</a>
								<a class="btn-open-modal block ml-10 p-1" href="#">Power Supplys</a>
								<a class="btn-open-modal block ml-10 p-1" href="#">Hard Drives</a>
								<a class="btn-open-modal block ml-10 p-1" href="#">SSD Disk</a>
							</div>
						</li>
						<li class="border-b border-gray-200">
							<div class="metismenu-btn has-arrow p-2 flex items-center cursor-pointer select-none" aria-expanded="false" role="menu">
								<i class="bi bi-mouse flex text-xl text-primary-color mr-3"></i>
								<span class="font-semibold">Peripherals</span>
							</div>
							<div class="metismenu-content">
								<a class="btn-open-modal block ml-10 p-1" href="#">Keywords</a>
								<a class="btn-open-modal block ml-10 p-1" href="#">Mouses</a>
								<a class="btn-open-modal block ml-10 p-1" href="#">Mics</a>
								<a class="btn-open-modal block ml-10 p-1" href="#">Webcam</a>
							</div>
						</li>
						<li class="border-b border-gray-200">
							<div class="metismenu-btn has-arrow p-2 flex items-center cursor-pointer select-none" aria-expanded="false" role="menu">
								<i class="bi bi-pc-display flex text-xl text-primary-color mr-3"></i>
								<span class="font-semibold">Computers</span>
							</div>
							<div class="metismenu-content">
								<a class="btn-open-modal block ml-10 p-1" href="#">Notebooks</a>
								<a class="btn-open-modal block ml-10 p-1" href="#">Desktops</a>
							</div>
						</li>
						<li class="border-b border-gray-200">
							<a class="p-2 flex items-center cursor-pointer select-none" href="#">
								<i class="bi bi-tv flex text-xl text-primary-color mr-3"></i>
								<span class="font-semibold">Monitors</span>
							</a>
						</li>
						<li class="border-b border-gray-200">
							<a class="p-2 flex items-center cursor-pointer select-none" href="#">
								<i class="bi bi-printer flex text-xl text-primary-color mr-3"></i>
								<span class="font-semibold">Printers</span>
							</a>
						</li>
						<li class="border-b border-gray-200">
							<a class="p-2 flex items-center cursor-pointer select-none" href="#">
								<i class="bi bi-phone flex text-xl text-primary-color mr-3"></i>
								<span class="font-semibold">Smartphones</span>
							</a>
						</li>
						<li class="border-b border-gray-200">
							<a class="flex items-center p-2 select-none" href="faqs.html">
								<i class="bi bi-question-circle flex text-xl text-primary-color mr-3"></i>
								<span class="font-semibold">FAQ's</span>
							</a>
						</li>
						<li class="border-b border-gray-200">
							<a class="flex items-center p-2 select-none" href="contact-us.html">
								<i class="bi bi-telephone flex text-xl text-primary-color mr-3"></i>
								<span class="font-semibold">Contact Us</span>
							</a>
						</li>
						<li class="border-b border-gray-200">
							<div class="metismenu-btn has-arrow p-2 flex items-center cursor-pointer select-none" aria-expanded="false" role="menu">
								<span class="font-semibold">Pages</span>
							</div>
							<div class="metismenu-content">
								<a class="btn-open-modal block ml-10 p-1" href="wishlist.html">Wishlist</a>
								<a class="btn-open-modal block ml-10 p-1" href="shopping-cart.html">Shopping Cart</a>
								<a class="btn-open-modal block ml-10 p-1" href="product-details.html">Product Details</a>
								<a class="btn-open-modal block ml-10 p-1" href="checkout.html">Checkout</a>
								<a class="btn-open-modal block ml-10 p-1" href="shop-mixed.html">Shop - Mixed</a>
								<a class="btn-open-modal block ml-10 p-1" href="shop-listed.html">Shop - Listed</a>
								<a class="btn-open-modal block ml-10 p-1" href="shop-grid.html">Shop - Grid</a>
								<a class="btn-open-modal block ml-10 p-1" href="login.html">Login</a>
								<a class="btn-open-modal block ml-10 p-1" href="sign-up.html">Sign Up</a>
								<a class="btn-open-modal block ml-10 p-1" href="error404.html">Error 404</a>
								<a class="btn-open-modal block ml-10 p-1" href="purchase-completed.html">Purchase Completed</a>
								<a class="btn-open-modal block ml-10 p-1" href="purchase-failed.html">Purchase Failed</a>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<div class="shopping-cart-modal modal bg-overlay fixed z-50 h-full w-full inset-0 invisible opacity-0 transition-all duration-300">
		<div class="flex h-full w-full">
			<div class="modal-content relative bg-white h-full w-[400px] min-w-[250px] right-[-999px] ml-auto transition-all duration-300 flex flex-col">
				<div class="w-full">
					<div class="border-b-2 border-gray-200 p-5">
						<h3 class="uppercase text-xl font-bold">Shopping Cart</h3>
					</div>
					<button class="btn-close-modal absolute top-5 right-5 p-[3px] hover:text-slate-400 transition-all duration-300">
						<i class="bi bi-x-lg flex text-xl text-stroke-medium pointer-events-none"></i>
					</button>
				</div>
				<div class="h-full overflow-auto">
					<!-- If the shopping cart is empty (replace hidden with flex) -->
					<div class="hidden flex-col justify-center items-center p-5 gap-4">
						<i class="bi bi-cart-x text-8xl text-gray-200"></i>
						<p class="font-semibold">There are no products in the cart.</p>
						<a class="btn-effect flex justify-center items-center p-2 bg-primary-color rounded-lg gap-2 transition-all duration-300" href="#">
							<span class="font-bold uppercase text-white">Go to the store</span>
						</a>
					</div>
					<!-- -->
					<a class="bg-white hover:bg-gray-50 flex justify-between items-center gap-5 h-[100px] w-full p-2" href="#">
						<div class="border rounded-lg h-[80px] w-[80px] min-w-[80px] overflow-hidden">
							<img class="w-full h-full object-cover" src="Assets/tienda/images/product/prod-1.jpg" alt="product" />
						</div>

						<div class="flex flex-col w-full">
							<h6 class="font-semibold text-lg clamp-2 break-all">Ryzen 5 3600x</h6>
							<div class="flex gap-2">
								<div class="flex gap-1 leading-7 text-gray-400">
									<span>1</span>
									<span>X</span>
								</div>
								<div class="flex gap-2 items-center">
									<span class="font-bold text-primary-color">$37.00</span>
									<small class="text-xs text-primary-color line-through">$50.00</small>
								</div>
							</div>
						</div>

						<div class="flex hover:text-primary-color transition-all duration-300">
							<i class="bi bi-trash text-2xl pointer-events-none"></i>
						</div>
					</a>
				</div>
				<div class="bg-white px-1 xs:px-5 pt-5 border-t-2 border-gray-200 mt-auto">
					<div class="flex justify-between">
						<span class="uppercase text-lg">Subtotal:</span>
						<span class="text-primary-color font-semibold text-lg">$37.00</span>
					</div>
					<a class="my-5 btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="shopping-cart.html">
						<span class="font-bold uppercase text-white">View Shopping Cart</span>
					</a>
					<a class="my-5 btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="checkout.html">
						<span class="font-bold uppercase text-white">Checkout now</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="wishlist-modal modal bg-overlay fixed z-50 h-full w-full inset-0 invisible opacity-0 transition-all duration-300">
		<div class="flex h-full w-full">
			<div class="modal-content relative bg-white h-full w-[400px] min-w-[250px] right-[-999px] ml-auto transition-all duration-300 flex flex-col">
				<div class="w-full">
					<div class="border-b-2 border-gray-200 p-5">
						<h3 class="uppercase text-xl font-bold">Wishlist</h3>
					</div>
					<button class="btn-close-modal absolute top-5 right-5 p-[3px] hover:text-slate-400 transition-all duration-300">
						<i class="bi bi-x-lg flex text-xl text-stroke-medium pointer-events-none"></i>
					</button>
				</div>
				<div class="h-full overflow-auto">
					<!-- If the wishlist is empty (replace hidden with flex) -->
					<div class="hidden flex-col justify-center items-center p-5 gap-4">
						<i class="bi bi-heart text-8xl text-gray-200"></i>
						<p class="font-semibold">There are no products in the wishlist.</p>
						<a class="btn-effect flex justify-center items-center p-2 bg-primary-color rounded-lg gap-2 transition-all duration-300" href="#">
							<span class="font-bold uppercase text-white">Go to the store</span>
						</a>
					</div>
					<a class="bg-white hover:bg-gray-50 flex justify-between items-center gap-5 h-[100px] w-full p-2" href="#">
						<div class="border rounded-lg h-[80px] w-[80px] min-w-[80px] overflow-hidden">
							<img class="w-full h-full object-cover" src="Assets/tienda/images/product/prod-1.jpg" alt="product" />
						</div>

						<div class="flex flex-col w-full">
							<h6 class="font-semibold text-lg clamp-2 break-all">Ryzen 5 3600x</h6>
							<div class="flex gap-2 items-center">
								<span class="font-bold text-primary-color">$37.00</span>
								<small class="text-xs text-primary-color line-through">$50.00</small>
							</div>
						</div>

						<div class="flex hover:text-primary-color transition-all duration-300">
							<i class="bi bi-trash text-2xl pointer-events-none"></i>
						</div>
					</a>
				</div>
				<div class="bg-white px-1 xs:px-5 border-t-2 border-gray-200 mt-auto">
					<a class="my-5 btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="wishlist.html">
						<span class="font-bold uppercase text-white">View Wishlist</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="entry-modal modal bg-overlay flex flex-col justify-start items-center fixed z-50 h-full w-full inset-0 invisible opacity-0 transition-all duration-300 overflow-auto">
		<div class="flex justify-center my-10 w-full">
			<div class="entry-content modal-content w-[500px] min-w-[250px] bg-white rounded-lg px-3 pb-3 xs:px-5 xs:pb-5 pt-7 mx-3 md:m-5 relative transition-all duration-300">
				<button class="btn-close-modal absolute top-0 right-0 sm:text-white sm:bg-primary-color sm:hover:bg-primary-hover transition-all duration-300 sm:top-[-10px] sm:right-[-10px] sm:rounded-lg p-2">
					<i class="bi bi-x-lg flex text-stroke-medium pointer-events-none"></i>
				</button>
				<div class="entry-container">
					<ul class="flex justify-between">
						<li class="btn-tabs w-full p-2 border text-center transition-all duration-300 cursor-pointer bg-gray-200 text-gray-400 active">Login</li>
						<li class="btn-tabs w-full p-2 border text-center transition-all duration-300 cursor-pointer bg-gray-200 text-gray-400">Sign Up</li>
					</ul>
					<div class="border border-t-transparent relative overflow-hidden">
						<div class="tabs-block p-5 w-full absolute opacity-0 invisible">
							<div class="my-5">
								<img class="mx-auto" src="Assets/tienda/images/logo2.png" alt="logo" />
							</div>
							<form action="#">
								<div class="flex flex-col gap-4">
									<div class="relative flex items-center h-[40px]">
										<i class="bi bi-person absolute flex ml-2 text-gray-400 text-[24px]"></i>
										<input class="input pl-10" type="text" placeholder="Username or Email" required="" />
									</div>
									<div class="relative flex items-center h-[40px]">
										<i class="bi bi-lock absolute flex ml-2 text-gray-400 text-[24px]"></i>
										<input class="input pl-10" type="password" placeholder="Password" required="" />
									</div>
									<button class="btn-effect h-full w-full p-2 bg-primary-color rounded-lg transition-all duration-300" type="submit">
										<span class="font-bold uppercase text-white">Login</span>
									</button>
								</div>
								<div class="flex flex-wrap gap-2 justify-between items-center my-2">
									<label class="flex items-center gap-2 select-none">
										<input class="checkbox" type="checkbox">
										<span class="text-gray-title">Remember</span>
									</label>
									<a class="underlined-animated after:bottom-0 text-[#3091ff]" href="#">Forgot Password?</a>
								</div>
							</form>
							<span class="or text-gray-title py-2 flex items-center h-[50px]">
								<span class="text-sm uppercase mx-2">Or</span>
							</span>
							<div class="flex flex-col sm:flex-row justify-center flex-wrap gap-5">
								<button class="bg-facebook flex justify-center items-center h-[50px] min-w-[100px] rounded-lg hover:scale-110 transition-all duration-300">
									<i class="bi bi-facebook flex text-white text-3xl"></i>
								</button>
								<button class="bg-twitter flex justify-center items-center h-[50px] min-w-[100px] rounded-lg hover:scale-110 transition-all duration-300">
									<i class="bi bi-twitter flex text-white text-3xl"></i>
								</button>
								<button class="bg-google flex justify-center items-center h-[50px] min-w-[100px] rounded-lg hover:scale-110 transition-all duration-300">
									<i class="bi bi-google flex text-white text-3xl"></i>
								</button>
							</div>
						</div>
						<div class="tabs-block p-5 bg-white w-full absolute opacity-0 invisible">
							<div class="my-5">
								<img class="mx-auto" src="Assets/tienda/images/logo2.png" alt="logo" />
							</div>
							<form action="#">
								<div class="flex flex-col gap-4">
									<div class="relative flex items-center h-[40px]">
										<i class="bi bi-person absolute flex ml-2 text-gray-400 text-[24px]"></i>
										<input class="input pl-10" type="text" placeholder="Name" required="" />
									</div>
									<div class="relative flex items-center h-[40px]">
										<i class="bi bi-envelope absolute flex ml-2 text-gray-400 text-[24px]"></i>
										<input class="input pl-10" type="text" placeholder="Email" required="" />
									</div>
									<div class="relative flex items-center h-[40px]">
										<i class="bi bi-lock absolute flex ml-2 text-gray-400 text-[24px]"></i>
										<input class="input pl-10" type="password" placeholder="Password" required="" />
									</div>
									<div class="relative flex items-center h-[40px]">
										<i class="bi bi-lock-fill absolute flex ml-2 text-gray-400 text-[24px]"></i>
										<input class="input pl-10" type="password" placeholder="Confirm Password" required="" />
									</div>
									<button class="btn-effect h-full w-full p-2 bg-primary-color rounded-lg transition-all duration-300" type="submit">
										<span class="font-bold uppercase text-white">Sign Up</span>
									</button>
								</div>
								<div class="flex justify-between items-center my-2">
									<label class="flex items-center gap-2 select-none">
										<input class="checkbox" type="checkbox">
										<span class="text-gray-title">I agree with all <a class="underlined-animated after:bottom-0 text-[#3091ff]" href="#">Terms of Use</a> & <a class="underlined-animated after:bottom-0 text-[#3091ff]" href="#">Privacy Policy</a>.</span>
									</label>
								</div>
							</form>
							<span class="or text-gray-title py-2 flex items-center h-[50px]">
								<span class="text-sm uppercase mx-2">Or</span>
							</span>
							<div class="flex flex-col sm:flex-row justify-center flex-wrap gap-5">
								<button class="bg-facebook flex justify-center items-center h-[50px] min-w-[100px] rounded-lg hover:scale-110 transition-all duration-300">
									<i class="bi bi-facebook flex text-white text-3xl"></i>
								</button>
								<button class="bg-twitter flex justify-center items-center h-[50px] min-w-[100px] rounded-lg hover:scale-110 transition-all duration-300">
									<i class="bi bi-twitter flex text-white text-3xl"></i>
								</button>
								<button class="bg-google flex justify-center items-center h-[50px] min-w-[100px] rounded-lg hover:scale-110 transition-all duration-300">
									<i class="bi bi-google flex text-white text-3xl"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- -->

	<div class="btn-gotop break- fixed bottom-[-999px] right-10 z-50 invisible opacity-0 transition-all duration-300">
		<div class="bg-[rgba(0,0,0,.3)] hover:bg-primary-color rounded-lg p-3 cursor-pointer transition-all duration-300">
			<i class="bi bi-chevron-compact-up flex text-white text-2xl pointer-events-none"></i>
		</div>
	</div>

	<footer class="footer-section bg-[#0b0d17] text-gray-400 w-full mt-auto">
		<div class="grid grid-cols-12 container mx-auto px-4 xs:px-8">
			<div class="col-span-12 py-[50px]">
				<div class="grid grid-cols-12 gap-2">
					<div class="col-span-12 sm:col-span-6 lg:col-span-4">
						<div class="pb-6">
							<img src="Assets/tienda/images/logo.png" class="h-[40px]" alt="logo" />
						</div>
						<div>
							<div class="flex items-center gap-[10px] py-2">
								<i class="bi bi-envelope-fill text-xl text-primary-color flex"></i>
								<a class="break-all" href="#">megabyte@example.com</a>
							</div>
							<div class="flex items-center gap-[10px] py-2">
								<i class="bi bi-telephone-fill text-xl text-primary-color flex"></i>
								<a class="break-all" href="#">0101-010101</a>
							</div>
							<div class="flex items-center gap-[10px] py-2">
								<i class="bi bi-geo-alt-fill text-xl text-primary-color flex"></i>
								<span class="break-all">Colón 0101, Olavarría</span>
							</div>
						</div>
					</div>
					<div class="py-5 col-span-12 sm:col-span-6 sm:py-0 lg:col-span-4">
						<h3 class="text-gray-300 font-semibold pb-2">Useful Links</h3>
						<div>
							<ul class="text-sm flex flex-col flex-wrap xs:max-h-[200px] gap-2">
								<li class="group relative flex items-center hover:text-primary-color">
									<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
									<a href="#" class="group-hover:text-white transition-all duration-300">Terms &amp; Conditions</a>
								</li>
								<li class="group relative flex items-center hover:text-primary-color">
									<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
									<a href="#" class="group-hover:text-white transition-all duration-300">New products</a>
								</li>
								<li class="group relative flex items-center hover:text-primary-color">
									<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
									<a href="#" class="group-hover:text-white transition-all duration-300">Best sales</a>
								</li>
								<li class="group relative flex items-center hover:text-primary-color">
									<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
									<a href="#" class="group-hover:text-white transition-all duration-300">Secure payment</a>
								</li>
								<li class="group relative flex items-center hover:text-primary-color">
									<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
									<a href="#" class="group-hover:text-white transition-all duration-300">Services</a>
								</li>
								<li class="group relative flex items-center hover:text-primary-color">
									<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
									<a href="#" class="group-hover:text-white transition-all duration-300">Delivery</a>
								</li>
								<li class="group relative flex items-center hover:text-primary-color">
									<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
									<a href="#" class="group-hover:text-white transition-all duration-300">Legal Notice</a>
								</li>
								<li class="group relative flex items-center hover:text-primary-color">
									<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
									<a href="#" class="group-hover:text-white transition-all duration-300">About us</a>
								</li>
								<li class="group relative flex items-center hover:text-primary-color">
									<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
									<a href="#" class="group-hover:text-white transition-all duration-300">Contact us</a>
								</li>
								<li class="group relative flex items-center hover:text-primary-color">
									<i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
									<a href="#" class="group-hover:text-white transition-all duration-300">Stores</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-span-12 lg:col-span-4">
						<h3 class="text-gray-300 font-semibold pb-2">Be the first to know it</h3>
						<span class="text-sm py-2">Subscribe to receive updates on our store and special offers</span>
						<form class="py-2">
							<div class="bg-gray-rgba rounded-lg overflow-hidden p-2 flex">
								<input class="bg-transparent w-full pl-2 border-none focus:ring-0 focus:ring-transparent focus:border-none" type="text" placeholder="Your email address" />
								<button class="p-1" type="submit">
									<i class="bi bi-send text-lg text-white flex"></i>
								</button>
							</div>
						</form>
						<div class="py-2 flex gap-2">
							<div class="relative rounded-full h-8 w-8 overflow-hidden">
								<a class="instagram-before flex justify-center items-center text-white bg-gray-rgba text-center h-8 w-8" href="#">
									<i class="bi bi-instagram flex relative z-[2]"></i>
								</a>
							</div>
							<div class="bg-gray-rgba hover:bg-facebook rounded-full h-8 w-8 transition-all duration-300">
								<a class="h-8 w-8 flex justify-center items-center" href="#">
									<i class="bi bi-facebook text-white flex"></i>
								</a>
							</div>
							<div class="bg-gray-rgba hover:bg-twitter rounded-full h-8 w-8 transition-all duration-300">
								<a class="h-8 w-8 flex justify-center items-center" href="#">
									<i class="bi bi-twitter text-white flex"></i>
								</a>
							</div>
							<div class="bg-gray-rgba hover:bg-youtube rounded-full h-8 w-8 transition-all duration-300">
								<a class="h-8 w-8 flex justify-center items-center" href="#">
									<i class="bi bi-youtube text-white flex"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-span-12 pb-5">
				<p class="text-center">© 2022 Example. All rights reserved</p>
			</div>
		</div>
	</footer>

	<script src="Assets/tienda/unpkg.com/metismenujs%401.3.1/dist/metismenujs.min.js"></script>
	<script src="Assets/tienda/js/main.js"></script>
</body>
</html>