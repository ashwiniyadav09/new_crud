<html>
<style> table { font-family: arial, sans-serif; border-collapse: collapse; width: 100%; } td, th { border: 1px solid #dddddd; text-align: left; padding: 8px; } tr:nth-child(even) { background-color: #dddddd; } </style>
<body>


<?php
require 'connection.php';
require 'function.php';
 echo "<table><tr><th>id</th><th>fname</th><th>lname</th><th>roll</th><th>age</th><th>contact</th><th>subject</th><th>school</th><th>Edit</th><th>Delete</th><tr>";
     
      //function call....

     $query_data = listing($connection);
    
    foreach($query_data['all_data'] as $key => $value){
        
    echo "<tr><td>".$value['id']."</td>";
    echo "<td>".$value['fname']."</td>";
    echo "<td>".$value['lname']."</td>";
    echo "<td>".$value['roll']."</td>";
    echo "<td>".$value['age']."</td>";
    echo "<td>".$value['contact']."</td>";
    echo "<td>".$value['subject']."</td>";
    echo "<td>".$value['school']."</td>";


    echo "<td><a href='crud_edit.php?id=".$value['id']."'>EDIT</a></td>";
    echo "<td><a href='crud_delete.php?id=".$value['id']."'>DELETE</a></td><tr>";
   

}

 
?>
</ol>
</table>
</body>
</html>