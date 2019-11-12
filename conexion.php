<?php

// Create connection
$conn = mysqli_connect("localhost", "wbcbox_survey201", ".Mana63r.", "wbcbox_survey2019");
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
//echo "Connected successfully";
 

if (isset($_POST)) {

				$staff_wbc = $_POST['staff_wbc'];
				$organization = $_POST['organization'];
				$hotel_oasis = $_POST['hotel_oasis'];
				$seminars_meetings = $_POST['seminars_meetings'];
				$main_events = $_POST['main_events'];
				$comments_convention = $_POST['comments_convention'];


		$sql = "INSERT INTO survey_records (staff_wbc,organization,hotel_oasis,seminars_meetings,main_events,comments_convention)".
				 " VALUES ('".$staff_wbc."','". $organization."','". $hotel_oasis."','".$seminars_meetings."','". 
				       $main_events."','".$comments_convention."'); ";
				 
				if (mysqli_query($conn, $sql)) {
					echo json_encode(array( "respuesta"=>true,"mensaje"=>"New record created successfully"
										));
				     
				} else {
					echo json_encode(array( "respuesta"=>false,"mensaje"=>"Error: " . $sql . "<br>" . mysqli_error($conn)
										));
				     
				      
				}



}else{
	echo json_encode(array( "respuesta"=>"Ups!, something went wrong. Please Try again."
		));
}



mysqli_close($conn);
?>