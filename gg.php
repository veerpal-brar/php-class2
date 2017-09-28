<!DOCTYPE html>
<html>
<body>
<?php
$errName="";
$name="";
$errEmail="";
$email="";

if($_SERVER["REQUEST_METHOD"] =="POST"){
	if (isset ($_POST["name"])){
		 if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {
      $errName = "Only letters and white space allowed"; 
    }
	else
	{
		$name=$_POST["name"];
		
	}
	}
		if(empty($_POST["name"])){
		$errName="please enter name.";
	}


	
	if(isset ($_POST["email"])){
		
  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errEmail = "Invalid email format"; 
    }
  else
		
		
		{
		
		
		
		$email=$_POST["email"];
		}
  }
	if(empty($_POST["email"])){
		$errEmail="please enter email.";
	}

}

?>


<form name="SurveyForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  First name:<br>
  <input type="text" name="name" placeholder="EnterName"
 value="<?php echo htmlspecialchars($name);?>">
  <span class="error"><?php echo $errName; ?></span>
  <br><br>
  Address:<br>
  <textarea name="Address" rows="10" cols="30">
</textarea>
  <br>
  Email:<br>
  <input type="text" name="email" placeholder="Enter mail id"
  value="<?php echo htmlspecialchars($email);?>">
  <span class="error"><?php echo $errEmail; ?></span>
  <br><br>
   LinkedIn Profile:<br>
  <input type="text"  placeholder="Enter your Linkedin profile URL">
  <br><br>
  
  
  
  <input type="checkbox" name="letter" placeholder="form"> would you like to subsribe our newsletter?
<br><br>
 <input type="radio" name="newsletter" value="week" checked> weekly<br>
  <input type="radio" name="newsletter" value="month"> monthly<br>
  <input type="radio" name="newsletter" value="occassion"> Occassionally<br><br>
  
  <input type="submit" value="Submit">
</form> 



</body>
</html>
