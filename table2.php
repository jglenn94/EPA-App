<!--Menu-->
<ul>
   <li><a href = index.php>Home</a></li>
   <li><a href = table1.php>About Climate Change</a></li>
   <li><a href = table2.php>Locations</a></li>
   <!--li><a href = table2.php> User Page when finished/a></li-->
</ul>

<h1 align = "center">Locations</h1>

<table style="width:100%">
  <tr>
    <th>Cities</th>
    <th>Average Rain</th>
    <th>Air Quality</th>
	<th>Disater Risk</th>
    <th>Drought Index</th>
  </tr>
  <tr>
    <td><?php echo $row["Cities"]; ?></td>
    <td><?php echo $row["AvgRain"]; ?></td>
    <td><?php echo $row["AvgTemp"]; ?></td>
	<td><?php echo $row["AirQuality"]; ?></td>
    <td><?php echo $row["DisasterRisk"]; ?></td>
	<td><?php echo $row["DroughtIndex"]; ?></td>
	  
  </tr>
</table>

<?php
// Check existence of id parameter before processing further
if(isset($_GET["AirQuality"]) && !empty(trim($_GET["AirQuality"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = 'SELECT * FROM cities WHERE AirQuality 64';
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "AirQuality", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["AirQuality"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $Cities = $row["Cities"];
                $AvgRain = $row["AvgRain"];
                $AvgTemp = $row["AvgTemp"];
				$AirQuality = $row["AirQuality"];
				$DisasterRisk = $row["DisasterRisk"];
				$DroughtIndex = $row["DroughtIndex"];
            } else{
				
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
}
?>
