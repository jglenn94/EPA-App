<!--Menu-->
<ul>
	<li><a href = index.php>Home</a></li>
   <li><a href = table1.php>About Climate Change</a></li>
   <li><a href = table2.php>Locations</a></li>
   <!--li><a href = table2.php>User</a></li--> <!--until user profile is added -->
</ul>
<!-- The start of home page-->
<h1 align = "center">EPA Web App</h1>
<h2 align = "center">About Climate Change</h2>
<!-- Climate change about fpr the home page-->
<p align = "center">Climate Change is defined by the EPA as the long-term change in average weather conditions such as temperature, wind patterns, and precipitation. These occur over the span of many years, beyond lifetimes. Climate change is slowly influenced by the passage of time; in recent years a leading cause of climate change is human activity. Climate change is not the same as global warming, as global warming is a byproduct of climate change in and of itself.  This can be best seen through the burning of fossil fuels and the release of other greenhouse gasses. These can have devastating impacts on the environment and safety of organisms.</p>
	
	
	
<!-- PHP -->

<!--Locations-->
<h1 align = "center">Locations</h1>

<p align = "center">Detroit Weather:</p>
<p> Average Rain: 2.23 in </p>
<p> Average Temp: 61.2 F </p>
<p> Air Quality: 64 </p>
<p> Disaster Risk: Tornado </p>
<p> Drought Index: 1 </p>
<?php
$servername = "localhost";
$username = "username";
$password = "YES";
$dbname = "mcs2513";

// Create connection
<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM cities WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row["name"];
                $address = $row["address"];
                $salary = $row["salary"];
				$salary = $row["salary"];
				$salary = $row["salary"];
				$salary = $row["salary"];
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
} else{
    // URL doesn't contain id parameter. Redirect to error page
}
?>
