<?php 
	
	$conn = new mysqli("localhost", "root", "", "lmsproject");
	$result = $conn->query("SELECT * FROM user");
	$arr1 =  array();

	if ($result->num_rows > 0) {
		// code...
		while ($row = $result->fetch_assoc()) {
			// code...
			array_push($arr1, array('Name' => $row['Name'],'Birthday' => $row['Birthday'],'Religion' => $row['Religion'],'Email' => $row['Email'],'Phone' => $row['Phone'],'Gender' => $row['Gender'],'UserType' => $row['UserType'],'Username' => $row['Username'] ));

		}
		echo json_encode($arr1);
	}


 ?>