<?php 
	//const BASE_URL = "http://localhost/tuventa/tienda1";
	const BASE_URL = "https://tuventa.ar";

	//Zona horaria
	date_default_timezone_set('America/Argentina/Buenos_Aires');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "u549248595_tiendavirtual";
	const DB_USER = "u549248595_tiendavirtual";
	const DB_PASSWORD = "Swm*495975";
	const DB_CHARSET = "utf8";
	 
	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "ARS";

	//Api PayPal
	//SANDBOX PAYPAL
	/*const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "";
	const SECRET = "";*/
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";

	//API Mobbex
	//Sandbox mobbex
	//const APIKEY = "zJ8LFTBX6Ba8D611e9io13fDZAwj0QmKO1Hn1yIj";
	//const TOKEN = "d31f0721-2f85-44e7-bcc6-15e19d1a53cc"; 
	//Live Mobbex
	const APIKEY = "i7mbZTSBy61QyX2TBvDWiXCAcaR8paCNdlkxZpts";
	const TOKEN = "05746efe-27cb-4988-96cb-a586c815d310"; 

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tu Venta";
	const EMAIL_REMITENTE = "contacto@tuventa.ar";
	const NOMBRE_EMPESA = "Tu Venta";
	const WEB_EMPRESA = "www.tuventa.ar";

	const DESCRIPCION = "La mejor tienda en línea sobre tegnologia.";
	const SHAREDHASH = "TuVenta";

	//Datos Empresa
	const DIRECCION = "Av. Molina 133, Arrecifes (2740), Bs.As.";
	const TELEMPRESA = "+(54)1164333772";
	const WHATSAPP = "+541164333772";
	const EMAIL_EMPRESA = "contacto@tuventa.ar";
	const EMAIL_PEDIDOS = "contacto@tuventa.ar"; 
	const EMAIL_SUSCRIPCION = "contacto@tuventa.ar";
	const EMAIL_CONTACTO = "contacto@tuventa.ar";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'tuventa';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 0;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RVENDEDOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Rechazado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 9;
	const PROPORPAGINA = 9;
	const PROCATEGORIA = 9;
	const PROBUSCAR = 9;

	//Categorias para el home
	const CELULARES = 1;
	const NOTEBOOKS = 2;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/tuventa";
	const INSTAGRAM = "https://www.instagram.com/tuventa/";
	

 ?>