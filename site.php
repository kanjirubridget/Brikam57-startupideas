<?php
$servername="localhost";
$username="root";
$password="";
$database_name="startup";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn){
  die("connection failed:" .mysqli_connect_error());
}
if(isset($_POST['save'])){
  $name=$_POST['name'];
    $Date_of_birth=$_POST['Date_of_birth'];
      $email=$_POST['email'];
        $country=$_POST['country'];
          $password=$_POST['password'];
            $password2=$_POST['password2'];
            $sql_query="INSERT INTO sign_up (name, Date_of_birth, email, country, password, password2 )
            VALUES('$name', ' $Date_of_birth', '  $email', '  $country', '  $password' ,'  $password2')";
if(mysqli_query($conn,$sql_query)){
  echo "you have successfully signed up";
}else{
  echo "error:" .$sqli ."".mysqli_error($conn);
}
mysqli_close($conn);
}
 ?>
