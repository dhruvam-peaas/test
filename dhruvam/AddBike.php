<?php
$link = mysqli_connect("localhost", "root", "", "parking");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM space WHERE id='1'";
if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){

         while($row = mysqli_fetch_array($result)){
         	if ($row["bspace"] > 0) {
         		         	
         	$row["bspace"] = $row["bspace"] - 1;
         	$sql = "UPDATE space SET bspace=" . $row["bspace"]. " WHERE id='1'";
         	
			 if (mysqli_query($link, $sql) === TRUE) {
    				 echo "Record updated successfully";
			 		} else {
			 		    echo "Error updating record: " . $conn->error;
			 		}
           // elseif ($row["bspace"] == 0) {
           //        	echo "Parking at level 2";
           //        }     
        }
        elseif ($row["bspace"] == 0) {
        	$sql = "SELECT * FROM space WHERE id='3'";
        	$result = mysqli_query($link, $sql);
        	if(mysqli_num_rows($result) > 0){

         while($row = mysqli_fetch_array($result)){ 
         	if ($row["bspace"] > 0) {
         		         	
         	$row["bspace"] = $row["bspace"] - 1;
         	$sql = "UPDATE space SET bspace=" . $row["bspace"]. " WHERE id='3'";
         	
			 if (mysqli_query($link, $sql) === TRUE) {
    				 echo "Record updated successfully";
			 		} else {
			 		    echo "Error updating record: " . $conn->error;
			 		}
        }
        elseif ($row["bspace"] == 0) {
        	echo "Reached Level 3";
        	$sql = "SELECT * FROM space WHERE id='5'";
        	$result = mysqli_query($link, $sql);
        	if(mysqli_num_rows($result) > 0){

         while($row = mysqli_fetch_array($result)){
         	if ($row["bspace"] > 0) {
         		         	
         	$row["bspace"] = $row["bspace"] - 1;
         	$sql = "UPDATE space SET bspace=" . $row["bspace"]. " WHERE id='5'";
         	
			 if (mysqli_query($link, $sql) === TRUE) {
    				 echo "Record updated successfully";
			 		} else {
			 		    echo "Error updating record: " . $conn->error;
			 		}

        }
        else{
        	echo "<br>No Parking Space Available For You";
        }
    }
       
        // Close result set
        //mysqli_free_result($result);
    } }else{
        echo "No records matching your query were found.";
    }
} 
}}
}
}
}

else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>




