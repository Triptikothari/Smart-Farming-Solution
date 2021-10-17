<?php
if(isset($_POST['Login'])) {
    $servername = "localhost";
    $username = "root";
    $password = "admin123";
    $dbname = "smart_farming_solution";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $u = $_POST['useremail'];
    $p = $_POST['userpassword'];
    $sql = "SELECT u_email, u_password FROM user WHERE u_email = '" . $u . "' AND u_password = '" . $p . "' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['useremail'] = $row["u_email"];
        header('Location:home.html');
        exit();
    } else {
        echo "Incorrect Username and Password";
    }
}
?>