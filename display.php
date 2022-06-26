
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location: index.php");
    exit;
}
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
  $Rollno= $_SESSION['Rollno'];
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
<?php
if($_SESSION['semester']=="1"){
echo'<section class="background firstsection">
  <div class="textbig disp" >
    Graphic Era University
  </div>
  <div class="textmiddle disp" >Result Odd Semester</div>
    <table class="table">
        <thead>
        <th>Name </th>
        <th>Rollno </th>
        <th>Maths </th>
        <th>Physics </th>
        <th>Electrical </th>
        <th>Computers </th>
        <th>Communication Skills </th>
        <th>Electrical lab </th>
        <th>Physics Lab </th>
        <th>Computer lab </th> 
        </thead>
        <tbody>';
              $sql="select * from sem1 where Rollno= $Rollno";
              $result=mysqli_query($conn,$sql);
              $num=mysqli_num_rows($result);
              if($num>0)
              {
                $row=mysqli_fetch_assoc($result);
                  echo'<tr><td data-label="Name">'.$row['Name'].'</td><td data-label="Rollno">'.$row['Rollno'].'</td><td data-label="Maths">'.$row['Maths'].'</td><td data-label="Physics">'.$row['Physics'].'</td><td data-label="Electrical">'.$row['Electrical'].'</td><td data-label="Computers">'.$row['Computers'].'</td><td data-label="Communication skills">'.$row['CommSkills'].'</td><td data-label="Electrical lab">'.$row['ElectricalLab'].'</td><td data-label="Physics Lab">'.$row['PhysicsLab'].'</td><td data-label="Computer Lab">'.$row['ComputerLab'].'</td></tr>';
              }
              $sum=($row['Maths']+$row['Physics']+$row['Electrical']+$row['CommSkills']+$row['Computers']+$row['ElectricalLab']+$row['PhysicsLab']+$row['ComputerLab'])/8;
              if($sum>35)
              $res="Pass";
              else
              $res="Fail";
        echo'</tbody>
    </table>
    <div class="details">
     Semester=',$_SESSION['semester']."\t".'   SGPA=',$sum."\t".'    Result=',$res,
    '</div>
    <a href="logout1.php" class="btn" style="text-decoration:none; margin-left:7px;">Log Out</a>
</section>';
}
if($_SESSION['semester']=="3"){
  echo'<section class="background firstsection">
    <div class="textbig disp" >
      Graphic Era University
    </div>
    <div class="textmiddle disp" >Result Odd Semester</div>
      <table class="table">
          <thead>
          <th>Name </th>
          <th>Rollno </th>
          <th>Logic Design </th>
          <th>Data Structure </th>
          <th>C++ </th>
          <th>Cloud </th>
          <th>Career Skills </th>
          <th>Logic Design Lab </th>
          <th>C++ Lab </th>
          <th>Data Structure Lab </th> 
          </thead>
          <tbody>';
          $sql="select * from sem3 where Rollno= $Rollno";
          $result=mysqli_query($conn,$sql);
          $num=mysqli_num_rows($result);
          if($num>0)
          {
            $row=mysqli_fetch_assoc($result);
              echo'<tr><td data-label="Name">'.$row['name'].'</td><td data-label="Rollno">'.$row['Rollno'].'</td><td data-label="Logic Design">'.$row['logicdesign'].'</td><td data-label="Data Structure">'.$row['datastructure'].'</td><td data-label="C++">'.$row['cpp'].'</td><td data-label="Cloud">'.$row['cloud'].'</td><td data-label="Career Skills">'.$row['careerskills'].'</td><td data-label="Logic Design lab">'.$row['logicdesignLab'].'</td><td data-label="C++ Lab">'.$row['cppLab'].'</td><td data-label="Data Structure Lab">'.$row['dsLab'].'</td></tr>';
          }
          $sum=($row['logicdesign']+$row['datastructure']+$row['cpp']+$row['cloud']+$row['careerskills']+$row['logicdesignLab']+$row['cppLab']+$row['dsLab'])/8;
          if($sum>35)
          $res="Pass";
          else
          $res="Fail";
    echo'</tbody>
</table>
<div class="details">
 Semester=',$_SESSION['semester']."\t".'   SGPA=',$sum."\t".'    Result=',$res,
'</div>
<a href="logout1.php" class="btn" style="text-decoration:none; margin-left:7px;">Log Out</a>
</section>';
}
if($_SESSION['semester']=="5"){
  echo'<section class="background firstsection">
    <div class="textbig disp" >
      Graphic Era University
    </div>
    <div class="textmiddle disp" >Result Odd Semester</div>
      <table class="table">
          <thead>
          <th>Name </th>
          <th>Rollno </th>
          <th>System Software </th>
          <th>Operating System </th>
          <th>DBMS </th>
          <th>DAA </th>
          <th>Machine Learning </th>
          <th>Database Lab </th>
          <th>DAA Lab </th>
          <th>Operating System Lab </th> 
          </thead>
          <tbody>';
          $sql="select * from sem5 where Rollno= $Rollno";
          $result=mysqli_query($conn,$sql);
          $num=mysqli_num_rows($result);
          if($num>0)
          {
            $row=mysqli_fetch_assoc($result);
              echo'<tr><td data-label="Name">'.$row['name'].'</td><td data-label="Rollno">'.$row['Rollno'].'</td><td data-label="System Software">'.$row['syssoftware'].'</td><td data-label="Operating System">'.$row['OS'].'</td><td data-label="DBMS">'.$row['DBMS'].'</td><td data-label="DAA">'.$row['DAA'].'</td><td data-label="Machine Learning">'.$row['ML'].'</td><td data-label="Database lab">'.$row['DBMSLab'].'</td><td data-label="DAA Lab">'.$row['DAALab'].'</td><td data-label="Operating System Lab">'.$row['OSLab'].'</td></tr>';
          }
          $sum=($row['syssoftware']+$row['OS']+$row['DBMS']+$row['DAA']+$row['ML']+$row['DBMSLab']+$row['DAALab']+$row['OSLab'])/8;
          if($sum>35)
          $res="Pass";
          else
          $res="Fail";
    echo'</tbody>
</table>
<div class="details">
 Semester=',$_SESSION['semester']."\t".'   SGPA=',$sum."\t".'    Result=',$res,
'</div>
<a href="logout1.php" class="btn" style="text-decoration:none; margin-left:7px;">Log Out</a>
</section>';
}
if($_SESSION['semester']=="7"){
  echo'<section class="background firstsection">
    <div class="textbig disp" >
      Graphic Era University
    </div>
    <div class="textmiddle disp" >Result Odd Semester</div>
      <table class="table">
          <thead>
          <th>Name </th>
          <th>Rollno </th>
          <th>Lang Processor </th>
          <th>Artificial Intelligence </th>
          <th>Visual Programming </th>
          <th>Computer Architecture </th>
          <th>Web Development </th>
          <th>Artificial Intelligence Lab </th>
          <th>Technology Lab </th>
          <th>Project </th> 
          </thead>
          <tbody>';
          $sql="select * from sem7 where Rollno= $Rollno";
          $result=mysqli_query($conn,$sql);
          $num=mysqli_num_rows($result);
          if($num>0)
          {
            $row=mysqli_fetch_assoc($result);
              echo'<tr><td data-label="Name">'.$row['name'].'</td><td data-label="Rollno">'.$row['Rollno'].'</td><td data-label="Lang Processor">'.$row['langprocessor'].'</td><td data-label="Artificial Intelligence">'.$row['AI'].'</td><td data-label="Visual programming">'.$row['visualprog'].'</td><td data-label="Computer Architecture">'.$row['compArchi'].'</td><td data-label="Web Development">'.$row['wbdev'].'</td><td data-label="artificial Intelligence Lab">'.$row['AILab'].'</td><td data-label="Technology Lab">'.$row['techLab'].'</td><td data-label="Project">'.$row['project'].'</td></tr>';
          }
          $sum=($row['langprocessor']+$row['AI']+$row['visualprog']+$row['compArchi']+$row['wbdev']+$row['AILab']+$row['techLab']+$row['project'])/8;
          if($sum>35)
          $res="Pass";
          else
          $res="Fail";
    echo'</tbody>
</table>
<div class="details">
 Semester= ',$_SESSION['semester']."\t".'   SGPA= ',$sum."\t".'    Result= ',$res,
'</div>
<a href="logout1.php" class="btn" style="text-decoration:none; margin-left:7px;">Log Out</a>
</section>';
}
?>
<footer>
        Copyright &COPY; Kanika Kala
    </footer>
</body>
</html>

 