<?php
error_reporting(E_ERROR | E_PARSE);
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
  $Rollno=$_POST["rollno"];
  $password=$_POST["password"];
  $semester=$_POST["semester"];

  $sql="select * from students where Rollno='$Rollno' AND password='$password'";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
  if($num==1)
   {
     $login=true;
     //session start for logged in user
     session_start();
     $_SESSION['loggedin']=true;
     $_SESSION['Rollno']=$Rollno;
     $_SESSION['semester']=$semester;
     header("location:display.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Result</title>
</head>

<body>
    <nav class="navbar background h-nav-resp">
        <ul class="navlist v-class-resp">
            <div class="logo"><img src="images/logo.jpg" alt="logo"></div>
            <li> <a href="https://www.geu.ac.in/" target="_main">Home</a></li>
            <li> <a href="https://www.geu.ac.in/content/geu/en/about.html" target="_main">About</a></li>
            <li> <a href="https://www.geu.ac.in/content/geu/en/contact-us.html" target="_main">Contact</a></li>
            <li><a href="faculty.php">Faculty Login</a></li>
        </ul>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <?php
    if($_POST["Submit"]){
    $num="";
    if($num!=1)
    {
    echo '<div id="alert">username or password invalid</div>';
    } 
  }
    ?>

    <section class="background firstsection">
        <div class="boxmain">
             <div class="firsthalf">
                <div class="textbig">
                    Graphic Era University
                </div>
                <div class="textmiddle">Result Odd Semester</div>
                <form action="index.php" method="post">
                <div class="textsmall">
                    <label for="rollno">Enter your roll number</label>
                    <br>
                    <input type="text" id="rollno" name="rollno">
                    <br>
                    <label for="semester">Choose semester</label>
                    <br>
                    <select name="semester" id="semester">
                        <option value="semester" disabled selected>select semester</option>
                        <option value="1">1</option>
                        <option value="3">3</option>
                        <option value="5">5</option>
                        <option value="7">7</option>
                    </select>
                    <br>
                    <label for="password">Enter Password</label>
                    <br>
                    <input type="password"  id="password" name="password">
                    <span>
                    <i class="fa fa-eye" aria-hidden="true" onclick="toggle()" id="eye"></i>
                    </span>
                </div>
                <input type="submit" class="btn" name="Submit" value="Submit">
                </form>
            </div>
        </div>
    </section>
    <footer>
        Copyright &COPY; Kanika Kala
    </footer>
    <script src="js/resp.js"></script>
    <script src="js/alerts.js"></script>
     <script> 
  var state=false;
  function toggle(){
      if(state){
        document.getElementById("password").setAttribute("type","password");
        document.getElementById("eye").style.color='black';
        state=false;
      }
      else{
        document.getElementById("password").setAttribute("type","text");
        document.getElementById("eye").style.color='#7a797e';
        state=true;
      }
  }
</script>
</body>

</html>