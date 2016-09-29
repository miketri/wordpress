<?php 
	include('db-connect.php');
	$current_user = wp_get_current_user();	//get our current user info from the wordpress user table
	$cimy_field_name = LITSCORE; //we use a variable to store the custom field name we're looking for
	
	//we need the user ID as well as the name of the custom field to query the cimy custom user data tables
	$query_string = "SELECT VALUE FROM WP_CIMY_UEF_DATA WHERE
						USER_ ID = " . $current_user->ID .
						"AND FIELD_ID =
							(SELECT ID FROM WP_CIMY_UEF_FIELDS WHERE NAME =" . $cimy_field_name . ")";
	
	echo $query_string;//for debugging
	
	$query_result = $conn->query($query_string);
	
	$row = mysqli_fetch_assoc($query_result);
	
	$conn->close();
	
	header('Location: login.php?rc=invalid');
		exit;
	
?>