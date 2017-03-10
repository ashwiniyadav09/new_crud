<?php

function insert($var,$connection){
	$msg= array();
	if($var){
		$insert= "INSERT INTO school(fname,lname,roll,age,contact,subject,school)VALUES('".$var['fname']."', '".$var['lname']."',
			'".$var['roll']."', '".$var['age']."', '".$var['contact']."', '".$var['subject']."',
			'".$var['school']."')";
        $exe= mysqli_query($connection,$insert);
        $msg['succ']='1';
	}else{
		$msg['[succ']='0';
	}
	return $msg;
  

}

function update($data,$connection,$id){
	$msg= array();
	if($data){
      
      $update = mysqli_query($connection,"UPDATE school SET fname= '".$data['fname']."', lname= '".$data['lname']."',
                             '".$data['roll']."', '".$data['age']."', '".$data['contact']."', subject=
                             '".$data['subject']."', school= '".$data['school']."' WHERE id= '".$id."' " );

          $msg['succ']='1';

	}else{
		$msg['succ']='0';
	}
	return $msg;
}



function listing($connection){
  $ashwini = array();
  $select = mysqli_query($connection,"SELECT * FROM school");
  $counter = 0;
  while($query= mysqli_fetch_array($select)){
  	$ashwini['all_data'][$counter]['id'] = $query['id'];
  	$ashwini['all_data'][$counter]['fname'] = $query['fname'];
  	$ashwini['all_data'][$counter]['lname'] = $query['lname'];
  	$ashwini['all_data'][$counter]['roll'] = $query['roll'];
  	$ashwini['all_data'][$counter]['age'] = $query['age'];
  	$ashwini['all_data'][$counter]['contact'] = $query['contact'];
  	$ashwini['all_data'][$counter]['subject'] = $query['subject'];
  	$ashwini['all_data'][$counter]['school'] = $query['school'];

  	$counter++;

  }
  return $ashwini;

}

function delete($connection,$id){

	$msg= array();
	if($id){
	 $delete = mysqli_query($connection,"DELETE FROM school WHERE id= '".$id."' ");	
	 $msg['succ']='1'; 
	}else{
		$msg['succ']='0';
	}
	return $msg;

}



?>