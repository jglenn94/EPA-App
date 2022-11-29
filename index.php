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
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>