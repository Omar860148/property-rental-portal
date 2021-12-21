<HTML>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<BODY>
<div class="container">
<div style="width: 1100px;  border-width: 1px; height:150px; text-align:center; background-color:rgba(255, 99, 71, 0.6)"><h2 style="padding-top:50px">Property Renting Portal</h2></div>
<div style="width: 1100px;  border-width: 1px; height:30px; text-align:center; background-color:rgb(255, 99, 71)"></div>
<div>
      <div class="mh-100" style="width: 1100px; height:100%; border-style: groove; border-width: 1px;">
      <div class="mh-100" style="width: 400px; padding-top:30px; border-width: 1px; margin-left: auto; margin-top: 30px;  margin-right: auto; height:400px; text-align:center; background-color:rgba(255, 99, 71, 0.3)">
       
      <form action="home.php" Method="POST">
      <b>Login as </b> <input type="radio" name="user" value="Tenant" checked > Tenant </input><input type="radio" name="user" value="Owner">Property Owner</input><br><br><br>
      <div class="form-group">
       
                  <label for="exampleInputName">User Name</label>
                  <input type="string" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Your Name">
                   
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                   
              </div>
              <button type="submit" name="submit" class="btn btn-primary" style="border-color:rgb(255, 99, 71);background-color:rgb(255, 99, 71)">Submit</button>
              <a href="MemberReg.php"><input type="button" class="btn btn-primary" style="border-color:rgb(255, 99, 71);background-color:rgb(255, 99, 71)" value="Register as new user"></a>
               
              <?php
                  if (isset($_POST['submit']))
                  {
                  $con=mysqli_connect("localhost","root","","renting_db");
                  $uType=$_POST['user'];
                  $uname=$_POST['username'];
                  $pwd=$_POST['password'];
                  $qry="Select MemberID, password from member_tbl where MemberType='$uType' and MemberName='$uname'";
                  //echo $qry;
                  $res=mysqli_query($con,$qry);
                  while ($row=mysqli_fetch_array($res))
                  {
                        if ($pwd==$row['password']) 
                        {
                                    echo "<script> alert('Login Successful');</script>";
                                    session_start();
                                    $_SESSION['memID']=$row['MemberID'];
                                    $_SESSION['Uname']=$uname;
                                    $_SESSION['Utype']=$uType;
                                    header('refresh:0;url=Dashboard.php');
                        }
                        else
                        {
                              echo '<script> alert("Incorrect UserName/User Type/Password");</script>';
                              header('refresh:0;url=Home.php');
                        }
                  }
                  }
                  ?>
       </div>
      </form>
      </div>
      </div>
</div>
<BODY>
