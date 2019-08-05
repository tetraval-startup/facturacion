<?php
// RUTA para enviar documentos: Tu puedes definir tu propia ruta, en nustro caso la tenemos en la siguiente dirección
$num_documento = $_POST['num_documento'];
$tipo = $_POST['tipo'];
$password = ''; //AQUÍ TU PASSWORD

if($tipo == 'dni') 
{
		//$ruta = "http://aplicaciones007.jne.gob.pe/srop_publico/Consulta/Afiliado/GetNombresCiudadano?DNI=".$num_documento;

	/*****CODIGO INSETADO 20/02******/
	//API URL
	$url = 'http://aplicaciones007.jne.gob.pe/srop_publico/Consulta/Afiliado/GetNombresCiudadano?DNI='.$num_documento;

	//API key

	//Auth credentials

	//create a new cURL resource
	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);



	$result = curl_exec($ch);

	//close cURL resource
	curl_close($ch);

	//echo $result;


	$partes = explode("|", $result);
	if( $partes[0] == ""){

		$resp = array('nombre' => 'Anomimo', 'mensaje' =>'kujhsadugfiñuasoif', 'respuesta' => 'ok');

	}
	else
	{
		$resp = array('nombre' => $partes[0].' '.$partes[2], 'mensaje' =>'kujhsadugfiñuasoif', 'respuesta' => 'ok');
	}




	echo json_encode($resp);
	exit();

}elseif($tipo == 'ruc'){
	$ruta = "https://sistemadefacturacionelectronicasunat.com/api/empresa/".$num_documento.'/'.$password;
}else{
	$resp['repsuesta'] = 'error';
	echo json_encode();
}

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $ruta,
    CURLOPT_USERAGENT => 'Consulta Datos'
));

$resp = curl_exec($curl);
echo $resp;
curl_close($curl);
exit();
?>