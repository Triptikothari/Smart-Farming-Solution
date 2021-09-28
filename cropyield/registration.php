<?php
if(isset($_POST['Registration'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $useremail = $_POST['Useremail'];
	 $passwords = $_POST['passwords'];
	 $sql = "INSERT INTO employee (first_name,last_name,useremail,passwords)
	 VALUES ('$first_name','$last_name','$city_name','$email','$passwords')";
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