<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
//if not loggedin then go back to login page
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location: fcaulty.php");
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

  if($_SESSION['semester']=="1"){
  if($_SESSION['operation']=="Add Entry"){
  if(isset($_POST['submit'])){
    $maths=$_POST["maths"];
    $physics=$_POST["physics"];
    $electrical=$_POST["electrical"];
    $computer=$_POST["computer"];
    $commskills=$_POST["commskills"];
    $electricallab=$_POST["electricallab"];
    $physicslab=$_POST["physicslab"];
    $computerlab=$_POST["computerlab"];
    $name=$_POST["name"];
    $rollno=$_POST["rollno"];

    $sql="insert into sem1 values ('$maths','$physics','$electrical','$computer','$commskills','$electricallab','$physicslab','$computerlab','$name','$rollno')";
    $sql2="insert into students values($rollno,'password1')";
    $result2=mysqli_query($conn,$sql2);
    $result=mysqli_query($conn,$sql);
    $added=0;
    if($result){
         echo "record added successfully";  
    }
    else{
        echo"record could not be added ",mysqli_error($conn);
    }
  }
}

if($_SESSION['operation']=="Delete Entry"){
    if(isset($_POST['submit'])){
    $rollno=$_POST["rollno"];
    $sql="delete from sem1 where Rollno='$rollno'";
    $sql2="delete from students where Rollno='$rollno'";
    $result2=mysqli_query($conn,$sql2);
    $result=mysqli_query($conn,$sql);
    $delete="";
    if($result){
         echo "record deleted successfully";
    }
    else{
         echo"record could not be deleted ",mysqli_error($conn);
    }
  }
}
if($_SESSION['operation']=="Modify Entry"){
    if(isset($_POST['submit'])){
        $maths=$_POST["maths"];
        $physics=$_POST["physics"];
        $electrical=$_POST["electrical"];
        $computer=$_POST["computer"];
        $commskills=$_POST["commskills"];
        $electricallab=$_POST["electricallab"];
        $physicslab=$_POST["physicslab"];
        $computerlab=$_POST["computerlab"];
        $name=$_POST["name"];
        $rollno=$_POST["rollno"];
    $sql="update sem1 set Maths='$maths', Physics='$physics', Electrical='$electrical', Computers='$computer', CommSkills='$commskills',ElectricalLab='$electricallab', PhysicsLab='$physicslab', ComputerLab='$computerlab',
    Name='$name' where Rollno='$rollno'";
    $result=mysqli_query($conn,$sql);
    $modify="";
    if($result){
       echo "updated successfully";
        $modify=1;
    }
    else{
        echo"could not update because",mysqli_error($conn);
    }
  }
}
}

if($_SESSION['semester']=="3"){
  if($_SESSION['operation']=="Add Entry"){
    if(isset($_POST['submit'])){
      $logicdesign=$_POST["logicdesign"];
      $DS=$_POST["DS"];
      $cpp=$_POST["cpp"];
      $cloud=$_POST["cloud"];
      $careerkills=$_POST["careerkills"];
      $LDlab=$_POST["LDlab"];
      $cpplab=$_POST["cpplab"];
      $DSlab=$_POST["DSlab"];
      $name=$_POST["name"];
      $rollno=$_POST["rollno"];

      $sql="insert into sem3 values ('$logicdesign','$DS','$cpp','$cloud','$careerkills','$LDlab','$cpplab','$DSlab','$name','$rollno')";
      $sql2="insert into students values($rollno,'password2')";
    $result2=mysqli_query($conn,$sql2);
    $result=mysqli_query($conn,$sql);
    $added=0;
    if($result){
        echo "record added successfully";
        $added=1;  
    }
    else{
        echo"record could not be added ",mysqli_error($conn);
    }
  }
}


if($_SESSION['operation']=="Delete Entry"){
  if(isset($_POST['submit'])){
  $rollno=$_POST["rollno"];
  $sql="delete from sem3 where Rollno='$rollno'";
  $sql2="delete from students where Rollno='$rollno'";
  $result2=mysqli_query($conn,$sql2);
  $result=mysqli_query($conn,$sql);

  if($result){
      echo "record deleted successfully";
  }
  else{
      echo"record could not be deleted ",mysqli_error($conn);
  }
}
}

if($_SESSION['operation']=="Modify Entry"){
  if(isset($_POST['submit'])){
    $logicdesign=$_POST["logicdesign"];
    $DS=$_POST["DS"];
    $cpp=$_POST["cpp"];
    $cloud=$_POST["cloud"];
    $careerkills=$_POST["careerkills"];
    $LDlab=$_POST["LDlab"];
    $cpplab=$_POST["cpplab"];
    $DSlab=$_POST["DSlab"];
    $name=$_POST["name"];
    $rollno=$_POST["rollno"];

    $sql="update sem3 set logicdesign='$logicdesign',datastructure='$DS',cpp='$cpp',cloud='$cloud',careerskills='$careerkills',logicdesignLab='$LDlab',cppLab='$cpplab',dsLab='$DSlab',name='$name' where Rollno='$rollno'";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "updated successfully";
    }
    else{
        echo"could not update because",mysqli_error($conn);
    }
  }
 }
}


if($_SESSION['semester']=="5"){
  if($_SESSION['operation']=="Add Entry"){
    if(isset($_POST['submit'])){
      $ss=$_POST["ss"];
      $OS=$_POST["OS"];
      $DBMS=$_POST["DBMS"];
      $DAA=$_POST["DAA"];
      $ML=$_POST["ML"];
      $DBMSlab=$_POST["DBMSlab"];
      $DAAlab=$_POST["DAAlab"];
      $OSlab=$_POST["OSlab"];
      $name=$_POST["name"];
      $rollno=$_POST["rollno"];

      $sql="insert into sem5 values ('$ss','$OS','$DBMS','$DAA','$ML','$DBMSlab','$DAAlab','$OSlab','$name','$rollno')";
      $sql2="insert into students values($rollno,'password3')";
    $result2=mysqli_query($conn,$sql2);
      $result=mysqli_query($conn,$sql);
      $added=0;
      if($result){
        echo "record added successfully";
        $added=1;  
      }
      else{
        echo"record could not be added ",mysqli_error($conn);
      }
    }
  }

  if($_SESSION['operation']=="Delete Entry"){
    if(isset($_POST['submit'])){
      $rollno=$_POST["rollno"];
      $sql="delete from sem5 where Rollno='$rollno'";
      $sql2="delete from students where Rollno='$rollno'";
      $result2=mysqli_query($conn,$sql2);
      $result=mysqli_query($conn,$sql);
    
      if($result){
          echo "record deleted successfully";
      }
      else{
          echo"record could not be deleted ",mysqli_error($conn);
      }
    }
  }

  if($_SESSION['operation']=="Modify Entry"){
    if(isset($_POST['submit'])){
      $ss=$_POST["ss"];
      $OS=$_POST["OS"];
      $DBMS=$_POST["DBMS"];
      $DAA=$_POST["DAA"];
      $ML=$_POST["ML"];
      $DBMSlab=$_POST["DBMSlab"];
      $DAAlab=$_POST["DAAlab"];
      $OSlab=$_POST["OSlab"];
      $name=$_POST["name"];
      $rollno=$_POST["rollno"];

      $sql="update sem5 set syssoftware='$ss',OS='$OS',DBMS='$DBMS',DAA='$DAA',ML='$ML',DBMSLab='$DBMSlab',DAALab='$DAAlab',OSLab='$OSlab',name='$name' where Rollno='$rollno'";
      $result=mysqli_query($conn,$sql);
      if($result){
        echo "updated successfully";
      }
      else{
        echo"could not update because",mysqli_error($conn);
      }
    }
  }
 }

if($_SESSION['semester']=="7"){
  if($_SESSION['operation']=="Add Entry"){
    if(isset($_POST['submit'])){
      $lp=$_POST["lp"];
      $AI=$_POST["AI"];
      $vp=$_POST["vp"];
      $ca=$_POST["ca"];
      $webdev=$_POST["webdev"];
      $AIlab=$_POST["AIlab"];
      $techlab=$_POST["techlab"];
      $project=$_POST["project"];
      $name=$_POST["name"];
      $rollno=$_POST["rollno"];

      $sql="insert into sem7 values ('$lp','$AI','$vp','$ca','$webdev','$AIlab','$techlab','$project','$name','$rollno')";
      $sql2="insert into students values($rollno,'password4')";
    $result2=mysqli_query($conn,$sql2);
      $result=mysqli_query($conn,$sql);
      $added=0;
      if($result){
        echo "record added successfully";
        $added=1;  
      }
      else{
        echo"record could not be added ",mysqli_error($conn);
      }
    }
  }

  if($_SESSION['operation']=="Delete Entry"){
    if(isset($_POST['submit'])){
      $rollno=$_POST["rollno"];
      $sql="delete from sem7 where Rollno='$rollno'";
      $sql2="delete from students where Rollno='$rollno'";
      $result2=mysqli_query($conn,$sql2);
      $result=mysqli_query($conn,$sql);
    
      if($result){
          echo "record deleted successfully";
      }
      else{
          echo"record could not be deleted ",mysqli_error($conn);
      }
    }
  }  

  if($_SESSION['operation']=="Modify Entry"){
    if(isset($_POST['submit'])){
      $lp=$_POST["lp"];
      $AI=$_POST["AI"];
      $vp=$_POST["vp"];
      $ca=$_POST["ca"];
      $webdev=$_POST["webdev"];
      $AIlab=$_POST["AIlab"];
      $techlab=$_POST["techlab"];
      $project=$_POST["project"];
      $name=$_POST["name"];
      $rollno=$_POST["rollno"];

      $sql="update sem7 set langprocessor='$lp',AI='$AI',visualprog='$vp',compArchi='$ca',wbdev='$webdev',AILab='$AIlab',techLab='$techlab',project='$project',name='$name' where Rollno='$rollno'";
      $result=mysqli_query($conn,$sql);
      $added=0;
      if($result){
        echo "record updated successfully";
        $added=1;  
      }
      else{
        echo"record could not be updated ",mysqli_error($conn);
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Enter Details</title>
</head>
<body>
  
<?php
if($_SESSION['semester']=="1"){
 if($_SESSION['operation']=="Add Entry"){
  echo ' <section class="background firstsection">
  <div class="boxmain">
       <div class="firsthalf">
          <div class="textbig" style="margin-top:25px;">
              Add Entry
          </div>
          <div class="textmiddle">Logged in as ',$_SESSION['facultyid'],'</div>

          <form action="operation.php" method="POST">
          <div class="op">
              <label for="maths">Mathematics</label>
              <br>
              <input type="text" id="maths" name="maths">
              <br>
              <label for="physics">Physics</label>
              <br>
              <input type="text" id="physics" name="physics">
              <br>
              <label for="electrical">Electrical</label>
              <br>
              <input type="text" id="electrical" name="electrical">
              <br>
              <label for="computer">Computer</label>
              <br>
              <input type="text" id="computer" name="computer">
              <br>
              <label for="commskills">Communication Skill</label>
              <br>
              <input type="text" id="commskills" name="commskills">
              <br>
              <label for="electricallab">Electrical Lab</label>
              <br>
              <input type="text" id="electricallab" name="electricallab">
              <br>
              <label for="physicslab">Physics Lab</label>
              <br>
              <input type="text" id="physicslab" name="physicslab">
              <br>
              <label for="computerlab">Computer lab</label>
              <br>
              <input type="text" id="computerlab" name="computerlab">
              <br>
              <label for="name">Name</label>
              <br>
              <input type="text" id="name" name="name">
              <br>
              <label for="rollno">Enter Student Rollno</label>
              <br>
              <input type="text" name="rollno" id="rollno">
              <br>
              
          </div>
          <input type="submit" name="submit" class="btn" value="Submit">
          <a href="logout.php" class="btn" style="text-decoration:none; margin-left:7px;">Log Out</a>
          </form>
      </div>
  </div>
</section>
<footer>
  Copyright &COPY; Kanika Kala
</footer>';

}


if($_SESSION['operation']=="Delete Entry"){
  
  echo ' <section class="background firstsection">
  <div class="boxmain">
       <div class="firsthalf">
          <div class="textbig">
              Delete Entry
          </div>
          <div class="textmiddle">logged in as ',$_SESSION['facultyid'],'</div>

          <form action="operation.php" method="POST">
          <div class="textsmall">
              <label for="rollno">Enter Student Rollno</label>
              <br>
              <input type="text" name="rollno" id="rollno">
              <br>
              <label for="name">Student Name</label>
              <br>
              <input type="text" id="name" name="name">
              <br>
          </div>
          <input type="submit" class="btn" name="submit" value="Submit">
          <a href="logout.php" class="btn" style="text-decoration:none; margin-left:7px;">Log Out</a>
          </form>
      </div>
  </div>
</section>
<footer>
  Copyright &COPY; Kanika Kala
</footer>';
}


if($_SESSION['operation']=="Modify Entry"){
  
    echo ' <section class="background firstsection">
    <div class="boxmain">
         <div class="firsthalf">
            <div class="textbig" style="margin-top:25px;">
                Modify Entry
            </div>
            <div class="textmiddle">logged in as ',$_SESSION['facultyid'],'</div>

            <form action="operation.php" method="POST">
            <div class="op">
            <label for="maths">Mathematics</label>
            <br>
            <input type="text" id="maths" name="maths">
            <br>
            <label for="physics">Physics</label>
            <br>
            <input type="text" id="physics" name="physics">
            <br>
            <label for="electrical">Electrical</label>
            <br>
            <input type="text" id="electrical" name="electrical">
            <br>
            <label for="computer">Computer</label>
            <br>
            <input type="text" id="computer" name="computer">
            <br>
            <label for="commskills">Communication Skill</label>
            <br>
            <input type="text" id="commskills" name="commskills">
            <br>
            <label for="electricallab">Electrical Lab</label>
            <br>
            <input type="text" id="electricallab" name="electricallab">
            <br>
            <label for="physicslab">Physics Lab</label>
            <br>
            <input type="text" id="physicslab" name="physicslab">
            <br>
            <label for="computerlab">Computer lab</label>
            <br>
            <input type="text" id="computerlab" name="computerlab">
            <br>
            <label for="name">Name</label>
            <br>
            <input type="text" id="name" name="name">
            <br>
            <label for="rollno">Enter Student Rollno</label>
            <br>
            <input type="text" name="rollno" id="rollno">
            </div>
            <input type="submit" class="btn" name="submit" value="Submit">
            <a href="logout.php" class="btn" style="text-decoration:none; margin-left:7px;">Log Out</a>
            </form>
        </div>
    </div>
</section>
<footer>
    Copyright &COPY; Kanika Kala
</footer>';
  }
}

if($_SESSION['semester']=="3"){
  if($_SESSION['operation']=="Add Entry"){
    echo ' <section class="background firstsection">
    <div class="boxmain">
         <div class="firsthalf">
            <div class="textbig" style="margin-top:25px;">
                Add Entry
            </div>
            <div class="textmiddle">Logged in as ',$_SESSION['facultyid'],'</div>
  
            <form action="operation.php" method="POST">
            <div class="op">
                <label for="logicdesign">Logic Design</label>
                <br>
                <input type="text" id="logicdesign" name="logicdesign">
                <br>
                <label for="DS">Data Structure</label>
                <br>
                <input type="text" id="DS" name="DS">
                <br>
                <label for="cpp">C++</label>
                <br>
                <input type="text" id="cpp" name="cpp">
                <br>
                <label for="cloud">Cloud Computing</label>
                <br>
                <input type="text" id="cloud" name="cloud">
                <br>
                <label for="careerkills">Career Skill</label>
                <br>
                <input type="text" id="careerkills" name="careerkills">
                <br>
                <label for="LDlab">Logic Design Lab</label>
                <br>
                <input type="text" id="LDlab" name="LDlab">
                <br>
                <label for="cpplab">C++ Lab</label>
                <br>
                <input type="text" id="cpplab" name="cpplab">
                <br>
                <label for="DSlab">Data Structure lab</label>
                <br>
                <input type="text" id="DSlab" name="DSlab">
                <br>
                <label for="name">Name</label>
                <br>
                <input type="text" id="name" name="name">
                <br>
                <label for="rollno">Enter Student Rollno</label>
                <br>
                <input type="text" name="rollno" id="rollno">
                <br>
                
            </div>
            <input type="submit" name="submit" class="btn" value="Submit">
            <a href="logout.php" class="btn" style="text-decoration:none; margin-left:7px;">Log Out</a>
            </form>
        </div>
    </div>
  </section>
  <footer>
    Copyright &COPY; Kanika Kala
  </footer>';
  }

  if($_SESSION['operation']=="Delete Entry"){
  
    echo ' <section class="background firstsection">
    <div class="boxmain">
         <div class="firsthalf">
            <div class="textbig">
                Delete Entry
            </div>
            <div class="textmiddle">logged in as ',$_SESSION['facultyid'],'</div>
  
            <form action="operation.php" method="POST">
            <div class="textsmall">
                <label for="rollno">Enter Student Rollno</label>
                <br>
                <input type="text" name="rollno" id="rollno">
                <br>
                <label for="name">Student Name</label>
                <br>
                <input type="text" id="name" name="name">
                <br>
            </div>
            <input type="submit" class="btn" name="submit" value="Submit">
            <a href="logout.php" class="btn" style="text-decoration:none; margin-left:7px;">Log Out</a>
            </form>
        </div>
    </div>
  </section>
  <footer>
    Copyright &COPY; Kanika Kala
  </footer>';
  }
  
  if($_SESSION['operation']=="Modify Entry"){
    echo ' <section class="background firstsection">
    <div class="boxmain">
         <div class="firsthalf">
            <div class="textbig" style="margin-top:25px;">
                Modify Entry
            </div>
            <div class="textmiddle">Logged in as ',$_SESSION['facultyid'],'</div>
  
            <form action="operation.php" method="POST">
            <div class="op">
                <label for="logicdesign">Logic Design</label>
                <br>
                <input type="text" id="logicdesign" name="logicdesign">
                <br>
                <label for="DS">Data Structure</label>
                <br>
                <input type="text" id="DS" name="DS">
                <br>
                <label for="cpp">C++</label>
                <br>
                <input type="text" id="cpp" name="cpp">
                <br>
                <label for="cloud">Cloud Computing</label>
                <br>
                <input type="text" id="cloud" name="cloud">
                <br>
                <label for="careerkills">Career Skill</label>
                <br>
                <input type="text" id="careerkills" name="careerkills">
                <br>
                <label for="LDlab">Logic Design Lab</label>
                <br>
                <input type="text" id="LDlab" name="LDlab">
                <br>
                <label for="cpplab">C++ Lab</label>
                <br>
                <input type="text" id="cpplab" name="cpplab">
                <br>
                <label for="DSlab">Data Structure lab</label>
                <br>
                <input type="text" id="DSlab" name="DSlab">
                <br>
                <label for="name">Name</label>
                <br>
                <input type="text" id="name" name="name">
                <br>
                <label for="rollno">Enter Student Rollno</label>
                <br>
                <input type="text" name="rollno" id="rollno">
                <br>
                
            </div>
            <input type="submit" name="submit" class="btn" value="Submit">
            <a href="logout.php" class="btn" style="text-decoration:none; margin-left:7px;">Log Out</a>
            </form>
        </div>
    </div>
  </section>
  <footer>
    Copyright &COPY; Kanika Kala
  </footer>';
  }
}
 
if($_SESSION['semester']=="5"){
  if($_SESSION['operation']=="Add Entry"){
    echo ' <section class="background firstsection">
    <div class="boxmain">
         <div class="firsthalf">
            <div class="textbig" style="margin-top:25px;">
                Add Entry
            </div>
            <div class="textmiddle">Logged in as ',$_SESSION['facultyid'],'</div>
  
            <form action="operation.php" method="POST">
            <div class="op">
                <label for="ss">System Software</label>
                <br>
                <input type="text" id="ss" name="ss">
                <br>
                <label for="OS">Operating System</label>
                <br>
                <input type="text" id="OS" name="OS">
                <br>
                <label for="DBMS">Dtabase Management System</label>
                <br>
                <input type="text" id="DBMS" name="DBMS">
                <br>
                <label for="DAA">Design & Analysis of Algorithm</label>
                <br>
                <input type="text" id="DAA" name="DAA">
                <br>
                <label for="ML">Machine Learning</label>
                <br>
                <input type="text" id="ML" name="ML">
                <br>
                <label for="DBMSlab">Database Management System Lab</label>
                <br>
                <input type="text" id="DBMSlab" name="DBMSlab">
                <br>
                <label for="DAAlab">Design & Analysis of Algorithm Lab</label>
                <br>
                <input type="text" id="DAAlab" name="DAAlab">
                <br>
                <label for="OSlab">Operating System lab</label>
                <br>
                <input type="text" id="OSlab" name="OSlab">
                <br>
                <label for="name">Name</label>
                <br>
                <input type="text" id="name" name="name">
                <br>
                <label for="rollno">Enter Student Rollno</label>
                <br>
                <input type="text" name="rollno" id="rollno">
                <br>
                
            </div>
            <input type="submit" name="submit" class="btn" value="Submit">
            <a href="logout.php" class="btn" style="text-decoration:none; margin-left:7px;">Log Out</a>
            </form>
        </div>
    </div>
  </section>
  <footer>
    Copyright &COPY; Kanika Kala
  </footer>';
  }

  if($_SESSION['operation']=="Delete Entry"){
    echo ' <section class="background firstsection">
    <div class="boxmain">
         <div class="firsthalf">
            <div class="textbig">
                Delete Entry
            </div>
            <div class="textmiddle">logged in as ',$_SESSION['facultyid'],'</div>
  
            <form action="operation.php" method="POST">
            <div class="textsmall">
                <label for="rollno">Enter Student Rollno</label>
                <br>
                <input type="text" name="rollno" id="rollno">
                <br>
                <label for="name">Student Name</label>
                <br>
                <input type="text" id="name" name="name">
                <br>
            </div>
            <input type="submit" class="btn" name="submit" value="Submit">
            <a href="logout.php" class="btn" style="text-decoration:none; margin-left:7px;">Log Out</a>
            </form>
        </div>
    </div>
  </section>
  <footer>
    Copyright &COPY; Kanika Kala
  </footer>';
  }

  if($_SESSION['operation']=="Modify Entry"){
    echo ' <section class="background firstsection">
    <div class="boxmain">
         <div class="firsthalf">
            <div class="textbig" style="margin-top:25px;">
                Modify Entry
            </div>
            <div class="textmiddle">Logged in as ',$_SESSION['facultyid'],'</div>
  
            <form action="operation.php" method="POST">
            <div class="op">
                <label for="ss">System Software</label>
                <br>
                <input type="text" id="ss" name="ss">
                <br>
                <label for="OS">Operating System</label>
                <br>
                <input type="text" id="OS" name="OS">
                <br>
                <label for="DBMS">Dtabase Management System</label>
                <br>
                <input type="text" id="DBMS" name="DBMS">
                <br>
                <label for="DAA">Design & Analysis of Algorithm</label>
                <br>
                <input type="text" id="DAA" name="DAA">
                <br>
                <label for="ML">Machine Learning</label>
                <br>
                <input type="text" id="ML" name="ML">
                <br>
                <label for="DBMSlab">Database Management System Lab</label>
                <br>
                <input type="text" id="DBMSlab" name="DBMSlab">
                <br>
                <label for="DAAlab">Design & Analysis of Algorithm Lab</label>
                <br>
                <input type="text" id="DAAlab" name="DAAlab">
                <br>
                <label for="OSlab">Operating System lab</label>
                <br>
                <input type="text" id="OSlab" name="OSlab">
                <br>
                <label for="name">Name</label>
                <br>
                <input type="text" id="name" name="name">
                <br>
                <label for="rollno">Enter Student Rollno</label>
                <br>
                <input type="text" name="rollno" id="rollno">
                <br>
                
            </div>
            <input type="submit" name="submit" class="btn" value="Submit">
            <a href="logout.php" class="btn" style="text-decoration:none; margin-left:7px;">Log Out</a>
            </form>
        </div>
    </div>
  </section>
  <footer>
    Copyright &COPY; Kanika Kala
  </footer>';
  }
}

if($_SESSION['semester']=="7"){
  if($_SESSION['operation']=="Add Entry"){
    echo ' <section class="background firstsection">
    <div class="boxmain">
         <div class="firsthalf">
            <div class="textbig" style="margin-top:25px;">
                Add Entry
            </div>
            <div class="textmiddle">Logged in as ',$_SESSION['facultyid'],'</div>
  
            <form action="operation.php" method="POST">
            <div class="op">
                <label for="lp">Language Processor</label>
                <br>
                <input type="text" id="lp" name="lp">
                <br>
                <label for="AI">Artificial Intelligence</label>
                <br>
                <input type="text" id="AI" name="AI">
                <br>
                <label for="vp">Visual Programming System</label>
                <br>
                <input type="text" id="vp" name="vp">
                <br>
                <label for="ca">Computer Architecture</label>
                <br>
                <input type="text" id="ca" name="ca">
                <br>
                <label for="webdev">Web Development</label>
                <br>
                <input type="text" id="webdev" name="webdev">
                <br>
                <label for="AIlab">Artificial Intelligence Lab</label>
                <br>
                <input type="text" id="AIlab" name="AIlab">
                <br>
                <label for="techlab">Tech Lab</label>
                <br>
                <input type="text" id="techlab" name="techlab">
                <br>
                <label for="project">Project</label>
                <br>
                <input type="text" id="project" name="project">
                <br>
                <label for="name">Name</label>
                <br>
                <input type="text" id="name" name="name">
                <br>
                <label for="rollno">Enter Student Rollno</label>
                <br>
                <input type="text" name="rollno" id="rollno">
                <br>
                
            </div>
            <input type="submit" name="submit" class="btn" value="Submit">
            <a href="logout.php" class="btn" style="text-decoration:none; margin-left:7px;">Log Out</a>
            </form>
        </div>
    </div>
  </section>
  <footer>
    Copyright &COPY; Kanika Kala
  </footer>';
  }

  if($_SESSION['operation']=="Delete Entry"){
    echo ' <section class="background firstsection">
    <div class="boxmain">
         <div class="firsthalf">
            <div class="textbig">
                Delete Entry
            </div>
            <div class="textmiddle">logged in as ',$_SESSION['facultyid'],'</div>
  
            <form action="operation.php" method="POST">
            <div class="textsmall">
                <label for="rollno">Enter Student Rollno</label>
                <br>
                <input type="text" name="rollno" id="rollno">
                <br>
                <label for="name">Student Name</label>
                <br>
                <input type="text" id="name" name="name">
                <br>
            </div>
            <input type="submit" class="btn" name="submit" value="Submit">
            <a href="logout.php" class="btn" style="text-decoration:none; margin-left:7px;">Log Out</a>
            </form>
        </div>
    </div>
  </section>
  <footer>
    Copyright &COPY; Kanika Kala
  </footer>';
  }


  if($_SESSION['operation']=="Modify Entry"){
    echo ' <section class="background firstsection">
    <div class="boxmain">
         <div class="firsthalf">
            <div class="textbig" style="margin-top:25px;">
                Add Entry
            </div>
            <div class="textmiddle">Logged in as ',$_SESSION['facultyid'],'</div>
  
            <form action="operation.php" method="POST">
            <div class="op">
                <label for="lp">Language Processor</label>
                <br>
                <input type="text" id="lp" name="lp">
                <br>
                <label for="AI">Artificial Intelligence</label>
                <br>
                <input type="text" id="AI" name="AI">
                <br>
                <label for="vp">Visual Programming System</label>
                <br>
                <input type="text" id="vp" name="vp">
                <br>
                <label for="ca">Computer Architecture</label>
                <br>
                <input type="text" id="ca" name="ca">
                <br>
                <label for="webdev">Web Development</label>
                <br>
                <input type="text" id="webdev" name="webdev">
                <br>
                <label for="AIlab">Artificial Intelligence Lab</label>
                <br>
                <input type="text" id="AIlab" name="AIlab">
                <br>
                <label for="techlab">Tech Lab</label>
                <br>
                <input type="text" id="techlab" name="techlab">
                <br>
                <label for="project">Project</label>
                <br>
                <input type="text" id="project" name="project">
                <br>
                <label for="name">Name</label>
                <br>
                <input type="text" id="name" name="name">
                <br>
                <label for="rollno">Enter Student Rollno</label>
                <br>
                <input type="text" name="rollno" id="rollno">
                <br>
                
            </div>
            <input type="submit" name="submit" class="btn" value="Submit">
            <a href="logout.php" class="btn" style="text-decoration:none; margin-left:7px;">Log Out</a>
            </form>
        </div>
    </div>
  </section>
  <footer>
    Copyright &COPY; Kanika Kala
  </footer>';
  } 
}
?>
<script src="js/resp.js"></script>
<script src="js/alerts.js"></script>
</body>
</html>