<?php
include 'connect.php';
if($_POST){
    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $email=$_POST['email'];
    //validation
    if(empty($first_name) or empty($last_name) or empty($email)) 
    {
       echo "Please Fill all fields";
        return 0;
    }
    $sql="insert into contact_messages (id,first_name, last_name, email)values(NULL, :first_name,:last_name, :email)";
    $obj=$connect->prepare($sql);
    $obj->execute(array(":email"=>$email,":first_name"=>$first_name,":last_name"=>$last_name)); 
    if($obj->rowCount()>0){
      echo "Your Request has been registered";
      return 0;   
    }
    else{
        echo "error happens try again";
        return 0;
    }
}
else{
    // if user access this file in wrong method.
    echo "error 501 not authorized";
    return 0;
}
?>