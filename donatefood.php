<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="food_donation";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{
	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
	 $email = $_POST['email'];
   $address = $_POST['address'];
   $address2 = $_POST['address2'];
   $prepared = $_POST['prepared'];
   $meal = $_POST['meal'];
   $box1 = $_POST['box1'];

	 $sql_query = "INSERT INTO food (firstname,lastname,email,address,address2,prepared,meal,box1)
	 VALUES ('$firstname','$lastname','$email','$address','$address2','$prepared','$meal','$box1')";

	 if (mysqli_query($conn, $sql_query))
	 {
		echo "New Details Entry inserted successfully !";
	 }
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
