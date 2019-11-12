<?php 
if (isset($_POST)) {

		if ($_POST['name'] !="" &&  $_POST['lastName'] !="" &&  $_POST['country'] !="" && $_POST['mailingAdress'] !="" &&
			$_POST['city'] !="" &&  $_POST['state'] !="" && $_POST['zipCode'] !="" && $_POST['telephoneNumber'] !="" && 
			$_POST['emailAddress'] !="" )  
		 {

							 // mail
						$destb = "membership@wbcboxing.com";
						$headb = 'From: membership@wbcboxing.com' . "\r\n" .
				    	'Reply-To: membership@wbcboxing.com' . "\r\n" .
				    	'X-Mailer: PHP/' . phpversion();
						// Ahora creamos el cuerpo del mensaje
						$msgb = "------------------------------- \n";
						$msgb.= "   Verify New Membership    \n";
						$msgb.= "------------------------------- \n";		
						$msgb.= "Birthday: ".$_POST['birthday']."\n";
						$msgb.= "Name: ".$_POST['name']."\n";
						$msgb.= "Last Name: ".$_POST['lastName']."\n";
						$msgb.= "Country: ".$_POST['country']."\n";
						$msgb.= "Mailing Address: ".$_POST['mailingAdress']."\n";
						$msgb.= "City: ".$_POST['city']."\n";
						$msgb.= "State: ".$_POST['state']."\n";
						$msgb.= "Zip Code: ".$_POST['zipCode']."\n";
						$msgb.= "Membership Type: ".$_POST['membership']."\n";
						//$msgb.= "Payment Type: ".$MpaymentType."\n";
						$msgb.= "telephoneNumber: ".$_POST['telephoneNumber']."\n";
						//$msgb.= "mobile: ".$_POST['mobile']."\n";
						$msgb.= "email Address: ".$_POST['emailAddress']."\n";
						$msgb.= "Boxing Category: ".$_POST['category']."\n";
						$msgb.= "------------------------------- \n\n";
						$msgb.= "******PAGO PENDIENTE********\n";
						$msgb.= "------------------------------- \n";

						$msgb.= " Mensaje creado por wbcboxing.com \n";
					// Finalmente enviamos el mensaje
						 $respuesta_mail = mail($destb, "Nueva aplicacion WBC Membership", $msgb, $headb);
					      if (!$respuesta_mail) {
						     $errorMessage = error_get_last()['message'];
						 }
						//Las categorias como jueces, referis  o ambos, su membresia es de tipo GOLD obligatoriamente
						$membresia_tipo = '';
						if ($_POST['category'] == 'Referee' || $_POST['category'] == 'Judge' || $_POST['category'] == 'Both') {
							$membresia_tipo = 'GOLD';
						}else{
							$membresia_tipo = $_POST['membership'];
						}

					    echo json_encode(array( "respuesta"=>true,'tipo_membresia'=>$membresia_tipo,'correo_respuesta'=>$respuesta_mail
						));
							
		}else{
			
			echo json_encode(array( "respuesta"=>false,'tipo_membresia'=>'NO','correo_respuesta'=>'Fail to email your info.'));
		}

	 
}else{
	echo json_encode(array( "respuesta"=>"Ups!, something went wrong. Please Try again."
		));
}

 ?>