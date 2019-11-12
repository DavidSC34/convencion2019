<?php 

 session_start();
 $response = array();
 if(isset($_POST)){
 	if ( $_POST['username'] =='wbcmember' && $_POST['password'] =='greenandgold') {
 		$_SESSION["member-logeado"]=true;
        $response = array('exito' => true,'sesion'=> $_SESSION["member-logeado"]);
 	}else{

   	$response = array('exito' => false,'sesion'=> false);
   }
}else{
	$response = array('exito' => 'Ups!, something went wrong. Please Try again.','sesion'=> false);
}
 
 echo json_encode($response);
 ?>