<!--Menu-->
<ul>
   <li><a href = index.php>Home</a></li>
   <li><a href = table1.php>About Climate Change</a></li>
   <li><a href = table2.php>Locations</a></li>
   <!--li><a href = table2.php>User Page when finished/a></li-->
</ul>

<h1 align = "center">Locations</h1>
        <form id="form1" name="form1" method="post" action="<?php echo $PHP_SELF; ?>" align = "center">  
            Choose one:  
            <select Emp Name='NEW'>  
            <option value="">--- Select ---</option>
			<option value="">Detroit</option> 
			<option value="">New York</option> 
			<option value="">Los Angles</option> 
            </select> 
			
			
        </form>  
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mcs2513";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>