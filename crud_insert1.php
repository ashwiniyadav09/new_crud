<?php

require 'connection.php';
require 'function.php';

$error_fname = '';
$error_lname = '';
$error_roll = '';
$error_age = '';
$error_contact = '';
$error_subject = '';
$error_school = '';

if(isset($_POST['submit'])){
	$count=0;
	if($_POST['fname']==""){
	  $error_fname= "Please enter fname";
	  $count++;	
	}
	if($_POST['lname']==""){
		$error_lname= "Please enter lname";
		$count++;
	}
	if($_POST['roll']==""){
		$error_roll = "Please enter your roll number";
		$count++;
	}
	if($_POST['age']==""){
		$error_age = "Please enter your age";
		$count++;
	}
	if($_POST['contact']==""){
		$error_contact = "Please enter valid contact number";
		$count++;
	}

	if($_POST['subject']==""){
		$error_subject= "Please enter your subject";
		$count++;
	}

	if($_POST['school']==""){
		$error_school= "Please enter school name";
		$count++;
	}

	if($count==0){
		echo 'fname='. $_POST['fname']. "<br>";
		echo 'lname='.$_POST['lname']. "<br>";
		echo 'roll='. $_POST['roll']. "<br>";
        echo 'age='. $_POST['age']. "<br>";
        echo 'contact='. $_POST['contact']. "<br>";
        echo 'subject='. $_POST['subject']. "<br>";
        echo 'school' . $_POST['school']. "<br>";

        $var = insert($_POST,$connection);
        if($var['succ']==1){
        	header('location:crud_insert.php');
        }
    }
}

?>

//FORM...

<form method="post">
    <div>
        <label for="fname">firstName:</label>
        <input type="text" name="fname">
    </div>

    <div>
        <label for="lname">lastName:</label>
        <input type="text" name="lname">
    </div>

    <div>
        <label for="roll">Roll</label>
        <input type="text" name="roll">
    </div>

    <div>
    	<label for="age">Age</label>
    	<input type="text" name="age">
    </div>

    <div>
    	<label for="contact">contact</label>
    	<input type= "text" name="contact">
    </div>

    <div>
    	<label for="subject">subject</label>
    	<input type="text" name="subject">
    </div>

    <div>
    	<label for="school">school</label>
    	<input type="text" name="school">
    </div>

    <div>
      <input type= "submit" name="submit" value="submit"/>
    </div>

</form>
