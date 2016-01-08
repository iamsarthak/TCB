<?php



$data = json_decode(file_get_contents('php://input'), true);


$data = array_values($data);

$conn= new mysqli("localhost", "senester_dbs", "senester_dbs", "senester_dbs");


					 $sql ="INSERT INTO sellerdata (name,email,image,lastname)VALUES ('{$data[0]}','{$data[1]}','{$data[2]}','{$data[3]}')";
						

						if($conn->query($sql))
						{
							echo "Yes";
							$_SESSION['$status']=1;
							
						}
					    else{
					    	echo"No";
					    	
					    }
						$conn->close();



?>