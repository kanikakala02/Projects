<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  //database connection
  $server="localhost";
  $username="root";
  $password="";
  $database="result";
  $login=false;
  $conn=mysqli_connect($server,$username,$password,$database);
  if(!$conn)
  {
    die("error".mysqli_connect_error());
  }
  //retrieving data from database
  $facultyid=$_POST["facultyid"];
  $password=$_POST["password"];

  $sql="select * from faculty where id='$facultyid' AND password='$password'";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
  if($num==1)
   {
     $login=true;
     //session start for logged in user
     session_start();
     $_SESSION['loggedin']=true;
     $_SESSION['facultyid']=$facultyid;
     header("location:operation.php");
   }
  else
   echo "username or password invalid";

}
?>
