<?php
//Author:Sumaiya Sultana
  // ID:20222029010
  // Semester:3.1
  // Description:This is a php file that retrive data from server display the data.
include("connect.php");
error_reporting(0);
$query = "SELECT * FROM registation";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Information</title>
    <style>
		*{ 
		padding: 0; 
		margin: 0; 
		box-sizing: border-box; 
		}
		body{ 
		   background:rgb(166, 215, 231);
			 } 
        .container {
            max-width: 600px;
            margin: 200px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
			
        }
        .container h1 {
            text-align: center;
			margin: 10px;
        }
       
        .container p {
            line-height: 2;
        }
        .button {
            display: inline-block;
			margin-top: 20px;
			padding: 10px 20px;
			color: #000;
			background-color: rgb(93 177 205);
			text-decoration: none;
			border: none;
			border-radius: 5px;
			text-align: center;
			cursor: pointert;
        }
        .button:hover {
            background-color: rgba(76,68,182,0.808);
        }
    </style>
</head>
<body>
    <?php
    if ($total > 0) {
        while ($row = mysqli_fetch_assoc($data)) {
            $result = $row; // Overwrite $result until the last row
        }
        echo "<div class='container'>";
        echo "<h1>YOUR SUBMITTED INFORMATION</h1>";
        echo "<p><strong>Full Name:</strong> " . $result['FullName'] . "</p>";
        echo "<p><strong>ID:</strong> " . $result['ID'] . "</p>";
        echo "<p><strong>Email:</strong> " . $result['Email'] . "</p>";
        echo "<p><strong>Password:</strong> " . $result['password'] . "</p>";
        echo "<p><strong>Department:</strong> " . $result['Department'] . "</p>";
        echo "<p><strong>Date of Birth:</strong> " . $result['Date of Birth'] . "</p>";
        echo "<p><strong>Religion:</strong> " . $result['Religion'] . "</p>";
        echo "<p><strong>Gender:</strong> " . $result['Gender'] . "</p>";
        echo "<p><strong>Start Term:</strong> " . $result['Start Term'] . "</p>";
        echo "<p><strong>Phone Number:</strong> " . $result['Phone Number'] . "</p>";
        echo "<p><strong>Emergency Phone Number:</strong> " . $result['Emergency Phone Number'] . "</p>";
        echo "<a href='cgpacalculator.html' class='button'>Calculate CGPA</a>";
        echo "</div>";
    } else {
        echo "<div class='container'><h1>No Data Found</h1></div>";
    }
    ?>
</body>
</html>