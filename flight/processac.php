<?php
if(isset($_POST['save']))
{	 
	 
	 $a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
}

$mysqli = new mysqli("localhost", "root", "", "tms"); 
  
if($mysqli === false){ 
    die("ERROR: Could not connect. " 
            . $mysqli->connect_error); 
} 
 $sql = "INSERT INTO sens (a,b,c,d)
VALUES ('$a', '$b','$c','')";

if($mysqli->query($sql) === true){ 
    echo "Records was updated successfully."; 
} else{ 
    echo "ERROR: Could not able to execute $sql. "  
                                        . $mysqli->error; 
} 
$mysqli->close(); 

?>
<?php
header( "Location: manage-users.php");
exit ;
?>
