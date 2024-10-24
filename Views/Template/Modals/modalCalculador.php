<div class="entry-modal modal bg-overlay flex flex-col justify-start items-center fixed z-50 h-full w-full inset-0 invisible opacity-0 transition-all duration-300 overflow-auto">
        <div class="flex justify-center my-10 w-full">
            <div class="entry-content modal-content w-[500px] min-w-[250px] bg-white rounded-lg px-3 pb-3 xs:px-5 xs:pb-5 pt-7 mx-3 md:m-5 relative transition-all duration-300">
                <button class="btn-close-modal absolute top-0 right-0 sm:text-white sm:bg-primary-color sm:hover:bg-primary-hover transition-all duration-300 sm:top-[-10px] sm:right-[-10px] sm:rounded-lg p-2">
                    <i class="bi bi-x-lg flex text-stroke-medium pointer-events-none"></i>
                </button>
                <div class="entry-container">
                    <ul class="flex justify-between">
                        <li class="btn-tabs w-full p-2 border text-center transition-all duration-300 cursor-pointer bg-gray-200 text-gray-400 active">Calculador</li>
                    </ul>
                    <div class="border border-t-transparent relative overflow-hidden">
                        <div class="tabs-block p-5 w-full absolute opacity-0 invisible">
                            <div class="my-5">
                                <img class="mx-auto" src="<?= media() ?>/tienda/images/logo2.png" alt="logo" />
                            </div>
                            <form id="calculadoraForm">
                                <div class="relative flex items-center h-[40px]">
                                    <i class="bi bi-currency-dollar absolute flex ml-2 text-gray-400 text-[24px]"></i>
                                    <input class="input pl-10" type="text" id="monto" placeholder="Ingrese el monto" required="">
                                </div>
                                <br>
                            <div class="form-group">
                            <label for="cuotas">Cantidad de Cuotas:</label>
                            <select class="input pl-10" id="cuotas" required="">
                                <option value="3">Cuota Simple 3</option>
                                <option value="6">Cuota Simple 6</option>
								<option value="9">Cuota Simple 9</option>
								<option value="12">Cuota Simple 12</option>
                            </select>
                            </div>
                            <br>
                            <button  class="btn-effect h-full w-full p-2 bg-primary-color rounded-lg transition-all duration-300" type="submit" class="btn btn-primary">  <span class="font-bold uppercase text-white">Calcular</span></button>
                            <!-- Resultado aquí -->
						    <br>
						    <br>
						    <br>
						    <p class="mb-3 valor-cuota-text">Valor de Cuota: <span id="resultadoCuota" class="underlined-animated after:bottom-0 text-[#3091ff]"></span></p> 
						    <p class="mb-3 precio-final-text">Precio Final: <span id="resultadoprecioFinal" class="underlined-animated after:bottom-0 text-[#3091ff]"></span></p> 
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Espera a que el documento esté listo
    document.addEventListener("DOMContentLoaded", function () {
        // Manejar la presentación del formulario
        var calculadoraForm = document.getElementById("calculadoraForm");
        var resultadoCuota = document.getElementById("resultadoCuota");
		var resultadoprecioFinal = document.getElementById("resultadoprecioFinal");

        calculadoraForm.addEventListener("submit", function (e) {
            e.preventDefault(); // Evita que se envíe el formulario

            // Obtener los valores ingresados por el usuario
            var monto = parseFloat(document.getElementById("monto").value);
            var cuotas = parseInt(document.getElementById("cuotas").value);

            // Coeficientes para las cuotas
            var coeficientes = {
                3: 1.31,
                6: 1.40,
				9:1.50,
				12:1.61
			};

            // Calcular el valor de la cuota
            var coeficiente = coeficientes[cuotas];
            var valorCuota = (monto * coeficiente) / cuotas;
			var precioFinal = valorCuota * cuotas;
            // Mostrar el resultado en el formulario y modal
            resultadoCuota.textContent = "$" + valorCuota.toFixed(2);
			resultadoprecioFinal.textContent = "$" + precioFinal.toFixed(2);
        });
    });
</script>