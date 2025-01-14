<?php
   //Author:Sumaiya Sultana
  // ID:20222029010
  // Semester:3.1
  // Description:This is a php file that bring marks fron cgpacalculation convert them into GPA and calculate average CGPA .
	if (isset($_POST['Submit'])) {
    $one = $_POST['one'];
    $two = $_POST['two'];
    $three = $_POST['three'];
    $four = $_POST['four'];
    $five = $_POST['five'];
    
	function gradeconversion($grade) {
		if($grade>=80){
			return 4;
		}
		else if($grade>=75 && $grade<=79){
			return 3.75;
		}
		else if($grade>=70 && $grade<=74){
			return 3.50;
		}
		else if($grade>=65 && $grade<=69){
			return 3.25;
		}
		else if($grade>=60 && $grade<=64){
			return 3;
		}
		else if($grade>=55 && $grade<=59){
			return 2.75;
		}
		else if($grade>=50 && $grade<=54){
			return 2.50;
		}
		else if($grade>=45 && $grade<=49){
			return 2.25;
		}
		else if($grade>=40 && $grade<=44){
			return 2;
		}
		else{
			return 0;
		}
		
	}
	$gpa_one = gradeconversion($one);
    $gpa_two = gradeconversion($two);
    $gpa_three = gradeconversion($three);
    $gpa_four = gradeconversion($four);
    $gpa_five = gradeconversion($five);

           
           $cgpa = ($gpa_one + $gpa_two + $gpa_three + $gpa_four + $gpa_five) / 5;

          
           echo "<div class='container'>";
           echo "<h2>Your provide Marks :</h2>";
           echo "<p><strong>Mark of 1st subject:</strong> " . $one;
           echo "<p><strong>Mark of 2nd subject:</strong> " . $two;
           echo "<p><strong>Mark of 3rd subject:</strong> " . $three;
           echo "<p><strong>Mark of 4th subject:</strong> " . $four;
           echo "<p><strong>Mark of 5th subject:</strong> " . $five;
           echo "<h3><strong>Your CGPA is: </strong>" . number_format($cgpa, 2) . "</h3>";
           echo "</div>";
       } else {
          
           echo "<div class='container'>";
           echo "<h2>Please fill in all the fields.</h2>";
           echo "</div>";
       }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGPA Result</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
           
            background-color: rgb(166, 215, 231);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 24px;
          
        }
        p {
            font-size: 18px;
            margin-bottom: 10px;
        }
        h3 {
            margin-top: 20px;
            font-size: 22px;
        }
    </style>
</head>
<body>

</body>
</html>
