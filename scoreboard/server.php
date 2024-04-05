<?php include 'connection.php';?>

<?php
if(isset($_POST['submit'])) {
	$college1 = strip_tags($_POST['col1']);
	$college2 = strip_tags($_POST['col2']);
	$score1 = strip_tags($_POST['s1']);
	$score2 = strip_tags($_POST['s2']);
	$ses = strip_tags($_POST['session_value']);
	
	
	$college1 = $connect->real_escape_string($college1);
	$college2 = $connect->real_escape_string($college2);
	$score1 = $connect->real_escape_string($score1);
	$score2 = $connect->real_escape_string($score2);
	$ses = $connect->real_escape_string($ses);
	
	
	
	$check_email = $connect->query("SELECT * FROM match_data");
	$count=$check_email->num_rows;
	
	if ($count>=0) {
		
		$query = "INSERT INTO match_data(t1_name, t1_score, t2_name, t2_score, 	session_value) VALUES('$college1','$score1','$college2','$score2', '$ses ')";

		if ($connect->query($query)) {

			echo "<div style='color:#73AD21;text-align:center; padding: 7px'> Information was submitted successfully!</div>";

		}else {
			echo "<div style='color:red;text-align:center;padding: 7x'>Error occured while submitting your information. Please try again</div>".$connect->connect_errno;
		}
		
	} else {
		
		
		echo "<div style='color:red;text-align:center;padding: 7px'>Sorry email already taken!</div>";
			
	}


	$connect->close();
}
?>
