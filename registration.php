<?php
if(isset($_POST['Registration'])) {
    $servername = "localhost";
    $username = "root";
    $password = "admin123";
    $dbname = "smart_farming_solution";

	//Created Table --> create table user ( userid int, fname varchar (50),  lname varchar(50), useremail varchar(50),  userpassword varchar(50), PRIMARY KEY (userid));
	

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection 
	 $first_name = $_POST['fname'];
	 $last_name = $_POST['lname'];
	 $useremail = $_POST['useremail'];
	 $passwords = $_POST['userpassword'];
	 $sql = "INSERT INTO employee (fname,lname,useremail,useremail)
	 VALUES ('$fname','$lname','$useremail','$userpassword')";
	 if (mysqli_query($conn, $sql)) {
		alert( "registered successfully !");
        header('Location:home.html');
	 } 
     else 
     {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);

}
?>
