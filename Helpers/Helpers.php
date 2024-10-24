<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'Libraries/phpmailer/Exception.php';
    require 'Libraries/phpmailer/PHPMailer.php';
    require 'Libraries/phpmailer/SMTP.php';

	//Retorla la url del proyecto
	function base_url()
	{
		return BASE_URL;
	}
    //Retorla la url de Assets
    function media()
    {
        return BASE_URL."/Assets";
    }
    function headerAdmin($data="")
    {
        $view_header = "Views/Template/header_admin.php";
        require_once ($view_header);
    }
    function footerAdmin($data="")
    {
        $view_footer = "Views/Template/footer_admin.php";
        require_once ($view_footer);        
    }
    function headerTienda($data="")
    {
        $view_header = "Views/Template/header_tienda.php";
        require_once ($view_header);
    }
    function footerTienda($data="")
    {
        $view_footer = "Views/Template/footer_tienda.php";
        require_once ($view_footer);        
    }
	//Muestra información formateada
	function dep($data)
    {
        $format  = print_r('<pre>');
        $format .= print_r($data);
        $format .= print_r('</pre>');
        return $format;
    }
    function getModal(string $nameModal, $data)
    {
        $view_modal = "Views/Template/Modals/{$nameModal}.php";
        require_once $view_modal;        
    }
    function getFile(string $url, $data)
    {
        ob_start();
        require_once("Views/{$url}.php");
        $file = ob_get_clean();
        return $file;        
    }
    //Envio de correos
    function sendEmail($data,$template)
    {
        if(ENVIRONMENT == 1){
            $asunto = $data['asunto'];
            $emailDestino = $data['email'];
            $empresa = NOMBRE_REMITENTE;
            $remitente = EMAIL_REMITENTE;
            $emailCopia = !empty($data['emailCopia']) ? $data['emailCopia'] : "";
            //ENVIO DE CORREO
            $de = "MIME-Version: 1.0\r\n";
            $de .= "Content-type: text/html; charset=UTF-8\r\n";
            $de .= "From: {$empresa} <{$remitente}>\r\n";
            $de .= "Bcc: $emailCopia\r\n";
            ob_start();
            require_once("Views/Template/Email/".$template.".php");
            $mensaje = ob_get_clean();
            $send = mail($emailDestino, $asunto, $mensaje, $de);
            return $send;
        }else{
           //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);
            ob_start();
            require_once("Views/Template/Email/".$template.".php");
            $mensaje = ob_get_clean();

            try {
                //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'toolsfordeveloper@gmail.com';          //SMTP username
                $mail->Password   = '@dmin08a';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('toolsfordeveloper@gmail.com', 'Servidor Local');
                $mail->addAddress($data['email']);     //Add a recipient
                if(!empty($data['emailCopia'])){
                    $mail->addBCC($data['emailCopia']);
                }
                $mail->CharSet = 'UTF-8';
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $data['asunto'];
                $mail->Body    = $mensaje;
                
                $mail->send();
                return true;
            } catch (Exception $e) {
                return false;
            } 
        }
    }

    function sendMailLocal($data,$template){
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        ob_start();
        require_once("Views/Template/Email/".$template.".php");
        $mensaje = ob_get_clean();

        try {
            //Server settings
            $mail->SMTPDebug = 1;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'toolsfordeveloper@gmail.com';                     //SMTP username
            $mail->Password   = '';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('toolsfordeveloper@gmail.com', 'Servidor Local');
            $mail->addAddress($data['email']);     //Add a recipient
            if(!empty($data['emailCopia'])){
                $mail->addBCC($data['emailCopia']);
            }

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $data['asunto'];
            $mail->Body    = $mensaje;
            
            $mail->send();
            echo 'Mensaje enviado';
        } catch (Exception $e) {
            echo "Error en el envío del mensaje: {$mail->ErrorInfo}";
        }
    }

    function getPermisos(int $idmodulo){
        require_once ("Models/PermisosModel.php");
        $objPermisos = new PermisosModel();
        if(!empty($_SESSION['userData'])){
            $idrol = $_SESSION['userData']['idrol'];
            $arrPermisos = $objPermisos->permisosModulo($idrol);
            $permisos = '';
            $permisosMod = '';
            if(count($arrPermisos) > 0 ){
                $permisos = $arrPermisos;
                $permisosMod = isset($arrPermisos[$idmodulo]) ? $arrPermisos[$idmodulo] : "";
            }
            $_SESSION['permisos'] = $permisos;
            $_SESSION['permisosMod'] = $permisosMod;
        }
    }

    function sessionUser(int $idpersona){
        require_once ("Models/LoginModel.php");
        $objLogin = new LoginModel();
        $request = $objLogin->sessionLogin($idpersona);
        return $request;
    }

    function uploadImage(array $data, string $name){
        $url_temp = $data['tmp_name'];
        $destino    = 'Assets/images/uploads/'.$name;        
        $move = move_uploaded_file($url_temp, $destino);
        return $move;
    }

    function deleteFile(string $name){
        unlink('Assets/images/uploads/'.$name);
    }

    //Elimina exceso de espacios entre palabras
    function strClean($strCadena){
        $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $strCadena);
        $string = trim($string); //Elimina espacios en blanco al inicio y al final
        $string = stripslashes($string); // Elimina las \ invertidas
        $string = str_ireplace("<script>","",$string);
        $string = str_ireplace("</script>","",$string);
        $string = str_ireplace("<script src>","",$string);
        $string = str_ireplace("<script type=>","",$string);
        $string = str_ireplace("SELECT * FROM","",$string);
        $string = str_ireplace("DELETE FROM","",$string);
        $string = str_ireplace("INSERT INTO","",$string);
        $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
        $string = str_ireplace("DROP TABLE","",$string);
        $string = str_ireplace("OR '1'='1","",$string);
        $string = str_ireplace('OR "1"="1"',"",$string);
        $string = str_ireplace('OR ´1´=´1´',"",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("LIKE '","",$string);
        $string = str_ireplace('LIKE "',"",$string);
        $string = str_ireplace("LIKE ´","",$string);
        $string = str_ireplace("OR 'a'='a","",$string);
        $string = str_ireplace('OR "a"="a',"",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("--","",$string);
        $string = str_ireplace("^","",$string);
        $string = str_ireplace("[","",$string);
        $string = str_ireplace("]","",$string);
        $string = str_ireplace("==","",$string);
        return $string;
    }

    function clear_cadena(string $cadena){
        //Reemplazamos la A y a
        $cadena = str_replace(
        array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
        array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
        $cadena
        );
 
        //Reemplazamos la E y e
        $cadena = str_replace(
        array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
        array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
        $cadena );
 
        //Reemplazamos la I y i
        $cadena = str_replace(
        array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
        array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
        $cadena );
 
        //Reemplazamos la O y o
        $cadena = str_replace(
        array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
        array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
        $cadena );
 
        //Reemplazamos la U y u
        $cadena = str_replace(
        array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
        array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
        $cadena );
 
        //Reemplazamos la N, n, C y c
        $cadena = str_replace(
        array('Ñ', 'ñ', 'Ç', 'ç',',','.',';',':'),
        array('N', 'n', 'C', 'c','','','',''),
        $cadena
        );
        return $cadena;
    }
    //Genera una contraseña de 10 caracteres
	function passGenerator($length = 10)
    {
        $pass = "";
        $longitudPass=$length;
        $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $longitudCadena=strlen($cadena);

        for($i=1; $i<=$longitudPass; $i++)
        {
            $pos = rand(0,$longitudCadena-1);
            $pass .= substr($cadena,$pos,1);
        }
        return $pass;
    }
    //Genera un token
    function token()
    {
        $r1 = bin2hex(random_bytes(10));
        $r2 = bin2hex(random_bytes(10));
        $r3 = bin2hex(random_bytes(10));
        $r4 = bin2hex(random_bytes(10));
        $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
        return $token;
    }
    //Formato para valores monetarios
    function formatMoney($cantidad){
        $cantidad = number_format($cantidad,2,SPD,SPM);
        return $cantidad;
    }
    
    function getTokenPaypal(){
        $payLogin = curl_init(URLPAYPAL."/v1/oauth2/token");
        curl_setopt($payLogin, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($payLogin, CURLOPT_RETURNTRANSFER,TRUE);
        curl_setopt($payLogin, CURLOPT_USERPWD, IDCLIENTE.":".SECRET);
        curl_setopt($payLogin, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
        $result = curl_exec($payLogin);
        $err = curl_error($payLogin);
        curl_close($payLogin);
        if($err){
            $request = "CURL Error #:" . $err;
        }else{
            $objData = json_decode($result);
             $request =  $objData->access_token;
        }
        return $request;
    }

    function CurlConnectionGet(string $ruta, string $contentType = null, string $token){
        $content_type = $contentType != null ? $contentType : "application/x-www-form-urlencoded";
        if($token != null){
            $arrHeader = array('Content-Type:'.$content_type,
                            'Authorization: Bearer '.$token);
        }else{
            $arrHeader = array('Content-Type:'.$content_type);
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $ruta);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
        $result = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        if($err){
            $request = "CURL Error #:" . $err;
        }else{
            $request = json_decode($result);
        }
        return $request;
    }

    function CurlConnectionPost(string $ruta, string $contentType = null, string $token){
        $content_type = $contentType != null ? $contentType : "application/x-www-form-urlencoded";
        if($token != null){
            $arrHeader = array('Content-Type:'.$content_type,
                            'Authorization: Bearer '.$token);
        }else{
            $arrHeader = array('Content-Type:'.$content_type);
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $ruta);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
        $result = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        if($err){
            $request = "CURL Error #:" . $err;
        }else{
            $request = json_decode($result);
        }
        return $request;
    }

    function Meses(){
        $meses = array("Enero", 
                      "Febrero", 
                      "Marzo", 
                      "Abril", 
                      "Mayo", 
                      "Junio", 
                      "Julio", 
                      "Agosto", 
                      "Septiembre", 
                      "Octubre", 
                      "Noviembre", 
                      "Diciembre");
        return $meses;
    }

    function getCatFooter(){
        require_once ("Models/CategoriasModel.php");
        $objCategoria = new CategoriasModel();
        $request = $objCategoria->getCategoriasFooter();
        return $request;
    }

    function getInfoPage(int $idpagina){
        require_once("Libraries/Core/Mysql.php");
        $con = new Mysql();
        $sql = "SELECT * FROM post WHERE idpost = $idpagina";
        $request = $con->select($sql);
        return $request;
    }

    function getPageRout(string $ruta){
        require_once("Libraries/Core/Mysql.php");
        $con = new Mysql();
        $sql = "SELECT * FROM post WHERE ruta = '$ruta' AND status != 0 ";
        $request = $con->select($sql);
        if(!empty($request)){
            $request['portada'] = $request['portada'] != "" ? media()."/images/uploads/".$request['portada'] : "";
        }
        return $request;
    }

    function viewPage(int $idpagina){
        require_once("Libraries/Core/Mysql.php");
        $con = new Mysql();
        $sql = "SELECT * FROM post WHERE idpost = $idpagina ";
        $request = $con->select($sql);
        if( ($request['status'] == 2 AND isset($_SESSION['permisosMod']) AND $_SESSION['permisosMod']['u'] == true) OR $request['status'] == 1){
            return true;        
        }else{
            return false;
        }
    }
    

    //Limita las palabras a mostrar en un texto
    function limitarPalabras($cadena, $longitud){
        $palabras = explode(' ', $cadena);
        if (count($palabras) > $longitud){
            return implode(' ', array_slice($palabras, 0, $longitud));
        }    
        else{
            return $cadena;
        }
    }

    //Obtengo el modelo de la descripcion
    function obtenerModelo($descripcion) {
        $dom = new DOMDocument;
    // Cargar la cadena HTML en DOMDocument
    @$dom->loadHTML(mb_convert_encoding($descripcion, 'HTML-ENTITIES', 'UTF-8'));
    $xpath = new DOMXPath($dom);

    // Buscar todas las etiquetas <strong>
    $nodes = $xpath->query('//strong');
    $result = [];

    foreach ($nodes as $node) {
        // Obtener el texto dentro de <strong>
        $label = trim($node->textContent);
        $nextSibling = $node->nextSibling;
        // Obtener el texto que sigue a la etiqueta <strong>
        $value = trim($nextSibling ? $nextSibling->textContent : '');
        $result[$label] = $value;
    }

    // Devolver el valor para 'Modelo'
    return isset($result['Modelo:']) ? '<strong>Modelo:</strong> ' . $result['Modelo:'] : 'Modelo no encontrado';
}
    

    //Sistema de paginacion
    
    function paginate($base_url, $total_paginas, $pagina_actual, $params = [], $is_query_params = false, $is_category = false, $category_id = null, $category_keyword = null) {
        $pagination_html = '<ul class="pagination flex items-center">';
    
        // Construir la cadena de consulta si existen parámetros adicionales
        $query_string = http_build_query($params);
    
        // Botón Primero
        if ($pagina_actual > 1) {
            if ($is_query_params) {
                $pagination_html .= '<a href="' . $base_url . '?p=1' . ($query_string ? '&' . $query_string : '') . '" title="Primera página">
                                        <li class="py-2 px-3 cursor-pointer text-primary-color">«</li>
                                    </a>';
            } elseif ($is_category) {
                $pagination_html .= '<a href="' . $base_url . '/tienda/categoria/' . $category_id . '/' . $category_keyword . '/1" title="Primera página">
                                        <li class="py-2 px-3 cursor-pointer text-primary-color">«</li>
                                    </a>';
            } else {
                $pagination_html .= '<a href="' . $base_url . '/1" title="Primera página">
                                        <li class="py-2 px-3 cursor-pointer text-primary-color">«</li>
                                    </a>';
            }
        }
    
        // Botón Anterior
        if ($pagina_actual > 1) {
            $prevPagina = $pagina_actual - 1;
            if ($is_query_params) {
                $pagination_html .= '<a href="' . $base_url . '?p=' . $prevPagina . ($query_string ? '&' . $query_string : '') . '" title="Anterior">
                                        <li class="py-2 px-3 pointer-events-none text-gray-200">
                                            <i class="bi bi-arrow-left-short flex"></i>
                                        </li>
                                    </a>';
            } elseif ($is_category) {
                $pagination_html .= '<a href="' . $base_url . '/tienda/categoria/' . $category_id . '/' . $category_keyword . '/' . $prevPagina . '" title="Anterior">
                                        <li class="py-2 px-3 pointer-events-none text-gray-200">
                                            <i class="bi bi-arrow-left-short flex"></i>
                                        </li>
                                    </a>';
            } else {
                $pagination_html .= '<a href="' . $base_url . '/' . $prevPagina . '" title="Anterior">
                                        <li class="py-2 px-3 pointer-events-none text-gray-200">
                                            <i class="bi bi-arrow-left-short flex"></i>
                                        </li>
                                    </a>';
            }
        }
    
        // Calcular el rango de páginas a mostrar
        $start = max(1, $pagina_actual - 5);
        $end = min($total_paginas, $pagina_actual + 5);
    
        // Mostrar los enlaces de páginas
        for ($i = $start; $i <= $end; $i++) {
            if ($pagina_actual == $i) {
                $pagination_html .= '<li class="py-2 px-3 cursor-pointer active">' . $i . '</li>';
            } else {
                if ($is_query_params) {
                    $pagination_html .= '<a href="' . $base_url . '?p=' . $i . ($query_string ? '&' . $query_string : '') . '">
                                            <li class="py-2 px-3 cursor-pointer">' . $i . '</li>
                                        </a>';
                } elseif ($is_category) {
                    $pagination_html .= '<a href="' . $base_url . '/tienda/categoria/' . $category_id . '/' . $category_keyword . '/' . $i . '">
                                            <li class="py-2 px-3 cursor-pointer">' . $i . '</li>
                                        </a>';
                } else {
                    $pagination_html .= '<a href="' . $base_url . '/' . $i . '">
                                            <li class="py-2 px-3 cursor-pointer">' . $i . '</li>
                                        </a>';
                }
            }
        }
    
        // Botón Siguiente
        if ($pagina_actual < $total_paginas) {
            $nextPagina = $pagina_actual + 1;
            if ($is_query_params) {
                $pagination_html .= '<a href="' . $base_url . '?p=' . $nextPagina . ($query_string ? '&' . $query_string : '') . '" title="Siguiente">
                                        <li class="py-2 px-3 cursor-pointer text-primary-color">
                                            <i class="bi bi-arrow-right-short flex"></i>
                                        </li>
                                    </a>';
            } elseif ($is_category) {
                $pagination_html .= '<a href="' . $base_url . '/tienda/categoria/' . $category_id . '/' . $category_keyword . '/' . $nextPagina . '" title="Siguiente">
                                        <li class="py-2 px-3 cursor-pointer text-primary-color">
                                            <i class="bi bi-arrow-right-short flex"></i>
                                        </li>
                                    </a>';
            } else {
                $pagination_html .= '<a href="' . $base_url . '/' . $nextPagina . '" title="Siguiente">
                                        <li class="py-2 px-3 cursor-pointer text-primary-color">
                                            <i class="bi bi-arrow-right-short flex"></i>
                                        </li>
                                    </a>';
            }
        }
    
        // Botón Último
        if ($pagina_actual < $total_paginas) {
            if ($is_query_params) {
                $pagination_html .= '<a href="' . $base_url . '?p=' . $total_paginas . ($query_string ? '&' . $query_string : '') . '" title="Última página">
                                        <li class="py-2 px-3 cursor-pointer text-primary-color" alt="Final">»</li>
                                    </a>';
            } elseif ($is_category) {
                $pagination_html .= '<a href="' . $base_url . '/tienda/categoria/' . $category_id . '/' . $category_keyword . '/' . $total_paginas . '" title="Última página">
                                        <li class="py-2 px-3 cursor-pointer text-primary-color" alt="Final">»</li>
                                    </a>';
            } else {
                $pagination_html .= '<a href="' . $base_url . '/' . $total_paginas . '" title="Última página">
                                        <li class="py-2 px-3 cursor-pointer text-primary-color" alt="Final">»</li>
                                    </a>';
            }
        }
    
        $pagination_html .= '</ul>';
    
        return $pagination_html;
    }
    
    
    
   /* //Funcion para cargar todas la imagenes del banner en carpeta
    function loadBannerImages($directoryUrl) {
        // Convertir la URL en un camino de archivo local
        $directory = str_replace(BASE_URL, $_SERVER['DOCUMENT_ROOT'] . '/tienda', $directoryUrl);
    
        // Comprobar si el directorio existe
        if (!is_dir($directory)) {
            return "El directorio especificado no existe.";
        }
    
        // Obtener una lista de todos los archivos en el directorio
        $files = scandir($directory);
    
        // Filtrar los archivos para obtener solo los que cumplen con el patrón `banner-*.jpg`
        $bannerFiles = array_filter($files, function($file) {
            return preg_match('/^banner-\d+\.jpg$/', $file);
        });
    
        // Ordenar los archivos por su número
        usort($bannerFiles, function($a, $b) {
            // Extraer los números de los nombres de archivo
            preg_match('/banner-(\d+)\.jpg/', $a, $matchesA);
            preg_match('/banner-(\d+)\.jpg/', $b, $matchesB);
            return $matchesA[1] - $matchesB[1];
        });
    
        // Generar el HTML para mostrar las imágenes
        $html = '';
        foreach ($bannerFiles as $file) {
            $html .= '<div class="swiper-slide">';
            $html .= '<img src="' . $directoryUrl . '/' . $file . '" alt="' . $file . '">';
            $html .= '</div>';
        }
    
        return $html;
    }*/
 ?>