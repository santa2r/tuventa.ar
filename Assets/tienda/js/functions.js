$(".js-select2").each(function(){
	$(this).select2({
		minimumResultsForSearch: 20,
		dropdownParent: $(this).next('.dropDownSelect2')
	});
});

$('.parallax100').parallax100();

$('.gallery-lb').each(function() { // the containers for all your galleries
	$(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
        	enabled:true
        },
        mainClass: 'mfp-fade'
    });
});

$('.js-addwish-b2').on('click', function(e){
	e.preventDefault();
});

$('.js-addwish-b2').each(function(){
	var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
	$(this).on('click', function(){
		swal(nameProduct, "¡Se agrego al corrito!", "success");
		//$(this).addClass('js-addedwish-b2');
		//$(this).off('click');
	});
});

$('.js-addwish-detail').each(function(){
	var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

	$(this).on('click', function(){
		swal(nameProduct, "is added to wishlist !", "success");

		$(this).addClass('js-addedwish-detail');
		$(this).off('click');
	});
});

/*---------------------------------------------*/

$('.js-addcart-detail').each(function(){
	let nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
	let cant = 1;
	$(this).on('click', function(){
		let id = this.getAttribute('id');
		console.log('Producto ID:', id); // Log para verificar el ID del producto
        console.log('Cantidad inicial:', cant); 
		if(document.querySelector('#cant-product')){
			cant = document.querySelector('#cant-product').value;
		}
		if(this.getAttribute('pr')){
			cant = this.getAttribute('pr');
		}

		if(isNaN(cant) || cant < 1){
			swal("","La cantidad debe ser mayor o igual que 1" , "error");
			return;
		} 
		let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	    let ajaxUrl = base_url+'/Tienda/addCarrito'; 
	    let formData = new FormData();
	    formData.append('id',id);
	    formData.append('cant',cant);
	    request.open("POST",ajaxUrl,true);
	    request.send(formData);
	    request.onreadystatechange = function(){
	        if(request.readyState != 4) return;
	        if(request.status == 200){
	        	let objData = JSON.parse(request.responseText);
	        	if(objData.status){
		            document.querySelector("#productosCarrito").innerHTML = objData.htmlCarrito;
		            //document.querySelectorAll(".cantCarrito")[0].setAttribute("data-notify",objData.cantCarrito);
		            //document.querySelectorAll(".cantCarrito")[1].setAttribute("data-notify",objData.cantCarrito);
		            const cants = document.querySelectorAll(".cantCarrito");
					cants.forEach(element => {
						element.setAttribute("data-notify",objData.cantCarrito);
						element.textContent = objData.cantCarrito; // Actualiza el texto del badge
					});
					swal(nameProduct, "¡Se agrego al corrito!", "success");
					// Cierra el modal después de agregar el producto
                    const modal = document.querySelector('.modal.visible'); // Suponiendo que solo hay un modal abierto
                    if (modal) {
                        const closeButton = modal.querySelector('.btn-close-modal');
                        if (closeButton) {
                            closeButton.click();
                        } else {
                            modal.click(); // Cierra el modal haciendo clic fuera de él
                        }
                    }
	        	}else{
	        		swal("", objData.msg , "error");
	        	}
	        } 
	        return false;
	    }
	});
});

$('.js-pscroll').each(function(){
	$(this).css('position','relative');
	$(this).css('overflow','hidden');
	var ps = new PerfectScrollbar(this, {
		wheelSpeed: 1,
		scrollingThreshold: 1000,
		wheelPropagation: false,
	});

	$(window).on('resize', function(){
		ps.update();
	})
});


/*==================================================================
[ +/- num product ]*/
/* 
$('.btn-num-product-down').on('click', function(){
    let numProduct = Number($(this).next().val());
    let idpr = this.getAttribute('idpr');
    if(numProduct > 1) $(this).next().val(numProduct - 1);
    let cant = $(this).next().val();
    if(idpr != null){
    	fntUpdateCant(idpr,cant);
    }
});



$('.btn-num-product-up').on('click', function(){
    let numProduct = Number($(this).prev().val());
    let idpr = this.getAttribute('idpr');
    $(this).prev().val(numProduct + 1);
    let cant = $(this).prev().val();
	if(idpr != null){
    	fntUpdateCant(idpr,cant);
    }
});*/

// Evento para el botón de disminuir
$('.btn-num-product-down').on('click', function() {
    let $input = $(this).closest('.quantity').find('.num-product');
    let rawValue = $input.val(); // Obtén el valor crudo del campo
    let numProduct = parseFloat(rawValue); // Convierte a número

    if (isNaN(numProduct)) {
        console.error('El valor del campo de entrada no es un número');
        swal("Error", "Cantidad no válida", "error");
        return; // Salir de la función si el valor no es un número
    }

    if (numProduct < 1) {
        swal("Error", "La cantidad no puede ser menor a 1", "warning");
        return; // Salir de la función si la cantidad es inválida
    }

    let cant = parseFloat($input.val()); // Asegúrate de que sea un número
    if ($(this).attr('data-id') != null) {
        fntUpdateCant($(this).attr('data-id'), cant);
    }
});

// Evento para el botón de aumentar
$('.btn-num-product-up').on('click', function() {
    let $input = $(this).closest('.quantity').find('.num-product');
    let rawValue = $input.val(); // Obtén el valor crudo del campo
    let numProduct = parseFloat(rawValue); // Convierte a número

    if (isNaN(numProduct)) {
        console.error('El valor del campo de entrada no es un número');
        swal("Error", "Cantidad no válida", "error");
        return; // Salir de la función si el valor no es un número
    }

    //$input.val(numProduct + 1); // Incrementar cantidad

    let cant = parseFloat($input.val()); // Asegúrate de que sea un número
    if ($(this).attr('data-id') != null) {
        fntUpdateCant($(this).attr('data-id'), cant);
    }
});

// Función para actualizar la cantidad del producto en el carrito
function fntUpdateCant(pro, cant) {
    if (cant <= 0) {
        swal("Error", "La cantidad no puede ser menor a 1", "error");
        // Aquí puedes deshabilitar el botón de comprar si es necesario
        // document.querySelector("#btnComprar").classList.add("notblock");
    } else {
        // document.querySelector("#btnComprar").classList.remove("notblock");
        let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        let ajaxUrl = base_url + '/Tienda/updCarrito'; 
        let formData = new FormData();
        formData.append('id', pro);    
        formData.append('cantidad', cant);
        request.open("POST", ajaxUrl, true);
        request.send(formData);
        request.onreadystatechange = function() {
            if (request.readyState != 4) return;
            if (request.status == 200) {
                let objData = JSON.parse(request.responseText);
				if (objData.status) {
                    // Encuentra el elemento de la fila de la tabla usando el atributo data-id
                    let rowElement = document.querySelector(`[data-id="${pro}"]`).closest('tr');
                    if (rowElement) { // Verifica si rowElement no es null o undefined
                        let totalProductoElement = rowElement.querySelector('.totalProducto');
                        if (totalProductoElement) { // Verifica si totalProductoElement no es null o undefined
                            totalProductoElement.textContent = objData.totalProducto;
                        }
                    }
                    document.querySelector("#subTotalCompra").innerHTML = objData.subTotal;
                    document.querySelector("#totalCompra").innerHTML = objData.total;
                } else {
                    swal("", objData.msg, "error");
                }
            }
        }
    }
    return false;
}


//Actualizar producto
if(document.querySelector(".num-product")){
	let inputCant = document.querySelectorAll(".num-product");
	inputCant.forEach(function(inputCant) {
		inputCant.addEventListener('keyup', function(){
			let idpr = this.getAttribute('idpr');
			let cant = this.value;
			if(idpr != null){
		    	fntUpdateCant(idpr,cant);
		    }
		});
	});
}

if(document.querySelector("#formRegister")){
    let formRegister = document.querySelector("#formRegister");
    formRegister.onsubmit = function(e) {
        e.preventDefault();
        let strNombre = document.querySelector('#txtNombre').value;
        let strApellido = document.querySelector('#txtApellido').value;
        let strEmail = document.querySelector('#txtEmailCliente').value;
        let intTelefono = document.querySelector('#txtTelefono').value;

        if(strApellido == '' || strNombre == '' || strEmail == '' || intTelefono == '' )
        {
            swal("Atención", "Todos los campos son obligatorios." , "error");
            return false;
        }

        let elementsValid = document.getElementsByClassName("valid");
        for (let i = 0; i < elementsValid.length; i++) { 
            if(elementsValid[i].classList.contains('is-invalid')) { 
                swal("Atención", "Por favor verifique los campos en rojo." , "error");
                return false;
            } 
        } 
        divLoading.style.display = "flex";
        let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        let ajaxUrl = base_url+'/Tienda/registro'; 
        let formData = new FormData(formRegister);
        request.open("POST",ajaxUrl,true);
        request.send(formData);
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                let objData = JSON.parse(request.responseText);
                if(objData.status)
                {
                    window.location.reload(false);
                }else{
                    swal("Error", objData.msg , "error");
                }
            }
            divLoading.style.display = "none";
            return false;
        }
    }
}

if(document.querySelector(".methodpago")){

	let optmetodo = document.querySelectorAll(".methodpago");
    optmetodo.forEach(function(optmetodo) {
        optmetodo.addEventListener('click', function(){
        	if(this.value == "Paypal"){
        		document.querySelector("#divpaypal").classList.remove("notblock");
        		document.querySelector("#divtipopago").classList.add("notblock");
        	}else{
        		document.querySelector("#divpaypal").classList.add("notblock");
        		document.querySelector("#divtipopago").classList.remove("notblock");
        	}
        });
    });
}

function fntdelItem(element){
	//Option 1 = Modal
	//Option 2 = Vista Carrito
	let option = element.getAttribute("op");
	let idpr = element.getAttribute("idpr");
	if(option == 1 || option == 2 ){

		let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	    let ajaxUrl = base_url+'/Tienda/delCarrito'; 
	    let formData = new FormData();
	    formData.append('id',idpr);
	    formData.append('option',option);
	    request.open("POST",ajaxUrl,true);
	    request.send(formData);
	    request.onreadystatechange = function(){
	        if(request.readyState != 4) return;
	        if(request.status == 200){
	        	let objData = JSON.parse(request.responseText);
	        	if(objData.status){
	        		if(option == 1){
			            document.querySelector("#productosCarrito").innerHTML = objData.htmlCarrito;
			            const cants = document.querySelectorAll(".cantCarrito");
						cants.forEach(element => {
							element.setAttribute("data-notify",objData.cantCarrito)
							element.textContent = objData.cantCarrito;
						});
						// Cierra el modal después de agregar el producto
						const modal = document.querySelector('.modal.visible'); // Suponiendo que solo hay un modal abierto
						if (modal) {
							const closeButton = modal.querySelector('.btn-close-modal');
							if (closeButton) {
								closeButton.click();
							} else {
								modal.click(); // Cierra el modal haciendo clic fuera de él
							}
						}
	        		}else{
	        			element.parentNode.parentNode.remove();
	        			document.querySelector("#subTotalCompra").innerHTML = objData.subTotal;
	        			document.querySelector("#totalCompra").innerHTML = objData.total;
	        			if(document.querySelectorAll("#tblCarrito tr").length == 1){
	            			window.location.href = base_url+"/tienda";
	            		}
	        		}
	        	}else{
	        		swal("", objData.msg , "error");
	        	}
	        } 
	        return false;
	    }

	}
}
/*
function fntUpdateCant(pro,cant){
	if(cant <= 0){
		swal("HOAL","error");
		//document.querySelector("#btnComprar").classList.add("notblock");
	}else{
		//document.querySelector("#btnComprar").classList.remove("notblock");
		let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	    let ajaxUrl = base_url+'/Tienda/updCarrito'; 
	    let formData = new FormData();
	    formData.append('id',pro);    
	   	formData.append('cantidad',cant);
	   	request.open("POST",ajaxUrl,true);
	    request.send(formData);
	    request.onreadystatechange = function(){
	    	if(request.readyState != 4) return;
	    	if(request.status == 200){
	    		let objData = JSON.parse(request.responseText);
	    		if(objData.status){
	    			let colSubtotal = document.getElementsByClassName(pro)[0];
	    			colSubtotal.cells[4].textContent = objData.totalProducto;
	    			document.querySelector("#subTotalCompra").innerHTML = objData.subTotal;
	    			document.querySelector("#totalCompra").innerHTML = objData.total;
	    		}else{
	    			swal("", objData.msg , "error");
	    		}
	    	}

	    }
	}
	return false;
}
*/

if(document.querySelector("#txtDireccion")){
	let direccion = document.querySelector("#txtDireccion");
	direccion.addEventListener('keyup', function(){
		let dir = this.value;
		fntViewPago();
	});
}

if(document.querySelector("#txtCiudad")){
	let ciudad = document.querySelector("#txtCiudad");
	ciudad.addEventListener('keyup', function(){
		let c = this.value;
		fntViewPago();
	});
}

if(document.querySelector("#txtNombre")){
	let nombre = document.querySelector("#txtNombre");
	nombre.addEventListener('keyup', function(){
		let nom = this.value;
		fntViewPago();
	});
}

if(document.querySelector("#txtApellido")){
	let apellido = document.querySelector("#txtApellido");
	apellido.addEventListener('keyup', function(){
		let ape = this.value;
		fntViewPago();
	});
}

if(document.querySelector("#txtDni")){
	let dni = document.querySelector("#txtDni");
	dni.addEventListener('keyup', function(){
		let d = this.value;
		fntViewPago();
	});
}

if(document.querySelector("#txtCorreo")){
	let correo = document.querySelector("#txtCorreo");
	correo.addEventListener('keyup', function(){
		let mail = this.value;
		fntViewPago();
	});
}

if(document.querySelector("#txtCelular")){
	let celular = document.querySelector("#txtCelular");
	celular.addEventListener('keyup', function(){
		let cel = this.value;
		fntViewPago();
	});
}

if(document.querySelector("#txtDomicilio")){
	let domicilio = document.querySelector("#txtDomicilio");
	domicilio.addEventListener('keyup', function(){
		let dom = this.value;
		fntViewPago();
	});
}

if(document.querySelector("#txtProvincia")){
	let provincia = document.querySelector("#txtProvincia");
	provincia.addEventListener('keyup', function(){
		let pro = this.value;
		fntViewPago();
	});
}


if(document.querySelector("#condiciones")){
	let opt = document.querySelector("#condiciones");
	opt.addEventListener('click', function(){
		let opcion = this.checked;
		if(opcion){
			document.querySelector('#optMetodoPago').classList.remove("notblock");
		}else{
			document.querySelector('#optMetodoPago').classList.add("notblock");
		}
	});
}

function fntViewPago(){
	let direccion = document.querySelector("#txtDireccion").value;
	let ciudad = document.querySelector("#txtCiudad").value;
	let nombre = document.querySelector("#txtNombre").value;
	let apellido = document.querySelector("#txtApellido").value;
	let dni = document.querySelector("#txtDni").value;
	let correo = document.querySelector("#txtCorreo").value;
	let celular = document.querySelector("#txtCelular").value;
	let domicilio = document.querySelector("#txtDomicilio").value;
	let provincia = document.querySelector("#txtProvincia").value;

	if(direccion == "" || ciudad == "" || nombre == "" || apellido == "" || dni == "" || correo == "" || celular == "" || domicilio == "" || provincia == ""){
		document.querySelector('#divMetodoPago').classList.add("hide");
		document.querySelector('#btnComprar').classList.add("hide");
	}else{
		document.querySelector('#divMetodoPago').classList.remove("hide");
		document.querySelector('#btnComprar').classList.remove("hide");
	}
}

if(document.querySelector("#btnComprar")){
	let btnPago = document.querySelector("#btnComprar");
	btnPago.addEventListener('click',function() { 
		let dir = document.querySelector("#txtDireccion").value;
	    let ciudad = document.querySelector("#txtCiudad").value;
	    let inttipopago = document.querySelector("#listtipopago").value;
		let nombre = document.querySelector("#txtNombre").value;
		let apellido = document.querySelector("#txtApellido").value;
		let dni = document.querySelector("#txtDni").value;
		let correo = document.querySelector("#txtCorreo").value;
		let celular = document.querySelector("#txtCelular").value;
		let domicilio = document.querySelector("#txtDomicilio").value;
		let provincia = document.querySelector("#txtProvincia").value;

	    if( txtDireccion == "" || txtCiudad == "" || inttipopago =="" ){
			swal("", "Complete datos de envío" , "error");
			return;
		}else{
			let request = (window.XMLHttpRequest) ? 
	                    new XMLHttpRequest() : 
	                    new ActiveXObject('Microsoft.XMLHTTP');
			let ajaxUrl = base_url+'/Tienda/procesarVenta';
			let formData = new FormData();
		    formData.append('direccion',dir);    
		   	formData.append('ciudad',ciudad);
			formData.append('inttipopago',inttipopago);
			formData.append('nombre',nombre);
			formData.append('apellido',apellido);
			formData.append('dni',dni);
			formData.append('correo',correo);
			formData.append('celular',celular);
			formData.append('domicilio',domicilio);
			formData.append('provincia',provincia);
		   	request.open("POST",ajaxUrl,true);
		    request.send(formData);
		    request.onreadystatechange = function(){
		    	if(request.readyState != 4) return;
		    	if(request.status == 200){
		    		let objData = JSON.parse(request.responseText);
		    		if(objData.status){
		    			window.location = base_url+"/tienda/confirmarpedido/";
		    		}else{
		    			swal("", objData.msg , "error");
		    		}
		    	}
		    	
            	return false;
		    }
		}

	},false);
}

if(document.querySelector("#frmSuscripcion")){
	let frmSuscripcion = document.querySelector("#frmSuscripcion");
	frmSuscripcion.addEventListener('submit',function(e) { 
		e.preventDefault();

		let nombre = document.querySelector("#nombreSuscripcion").value;
		let email = document.querySelector("#emailSuscripcion").value;

		if(nombre == ""){
			swal("", "El nombre es obligatorio" ,"error");
			return false;
		}

		if(!fntEmailValidate(email)){
			swal("", "El email no es válido." ,"error");
			return false;
		}	
		
		let request = (window.XMLHttpRequest) ? 
                    new XMLHttpRequest() : 
                    new ActiveXObject('Microsoft.XMLHTTP');
		let ajaxUrl = base_url+'/Tienda/suscripcion';
		let formData = new FormData(frmSuscripcion);
	   	request.open("POST",ajaxUrl,true);
	    request.send(formData);
	    request.onreadystatechange = function(){
	    	if(request.readyState != 4) return;
	    	if(request.status == 200){
	    		let objData = JSON.parse(request.responseText);
	    		if(objData.status){
	    			swal("", objData.msg , "success");
                	document.querySelector("#frmSuscripcion").reset();
	    		}else{
	    			swal("", objData.msg , "error");
	    		}
	    	}
        	return false;
	    
		}

	},false);
}

/*if(document.querySelector("#frmContacto")){
	let frmContacto = document.querySelector("#frmContacto");
	frmContacto.addEventListener('submit',function(e) { 
		e.preventDefault();

		let nombre = document.querySelector("#nombreContacto").value;
		let email = document.querySelector("#emailContacto").value;
		let mensaje = document.querySelector("#mensaje").value;

		if(nombre == ""){
			swal("", "El nombre es obligatorio" ,"error");
			return false;
		}

		if(!fntEmailValidate(email)){
			swal("", "El email no es válido." ,"error");
			return false;
		}

		if(mensaje == ""){
			swal("", "Por favor escribe el mensaje." ,"error");
			return false;
		}	
		
		divLoading.style.display = "flex";
		let request = (window.XMLHttpRequest) ? 
                    new XMLHttpRequest() : 
                    new ActiveXObject('Microsoft.XMLHTTP');
		let ajaxUrl = base_url+'/Tienda/contacto';
		let formData = new FormData(frmContacto);
	   	request.open("POST",ajaxUrl,true);
	    request.send(formData);
	    request.onreadystatechange = function(){
	    	if(request.readyState != 4) return;
	    	if(request.status == 200){
	    		let objData = JSON.parse(request.responseText);
	    		if(objData.status){
	    			swal("", objData.msg , "success");
                	document.querySelector("#frmContacto").reset();
	    		}else{
	    			swal("", objData.msg , "error");
	    		}
	    	}
	    	divLoading.style.display = "none";
        	return false;
		}

	},false);
}*/