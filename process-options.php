<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $Dtype = $_POST["Dtype"];
  $income = $_POST["income"]; 
  $perD =  $_POST["perD"];
  
  $Resident =   filter_input(INPUT_POST, "Resident", FILTER_VALIDATE_BOOLEAN);
  $Age =  $_POST["btnradio"];
  $Category =  $_POST["flexRadioDefault"];
  $AccessMode = filter_input(INPUT_POST, "accessM", FILTER_VALIDATE_BOOLEAN);

	$sql_query = "INSERT INTO options (Disability_Type, Family_Income, Percentage_of_Disability, Resident_of_Goa, Age, Category, Accessibility_Mode)
	VALUES ('$Dtype','$income','$perD','$Resident','$Age','$Category','$AccessMode')";

	if (mysqli_query($conn, $sql_query)) 
	{
		echo "Details Entry inserted successfully !";
	} 
	else
  {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>
