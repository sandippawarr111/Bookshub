
<?php
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
    // echo $name;

    $dbHost = "localhost";
    $dbUser = "root";
    $dbPassword = "@rishu14";
    $dbName = "bookhubs";

    $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    

    
    $sql="insert into hubs( email,password) 
    values('".$email."', '".$password."')";

    // $sql="INSERT INTO `donors` (name, email,blood_type)" ;
    $result=mysqli_query($conn, $sql);
    if ($result) {
        echo "login successful!";
    } else {
        echo "Error: ";
    }

    $conn->close();
    echo '<script>window.location.href="index.html";</script>';
}
?>
