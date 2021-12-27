<HTML>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#newprop").click(function(){
    $("#contents").load("Property.php");
  });
  $("#rentprop").click(function(){
    $("#contents").load("OwnerList.php");
  });
  $("#searchprop").click(function(){
    $("#contents").load("Search.php");
  });
    
});
</script>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<BODY>
<div class="container">
<div style="width: 1100px;  border-width: 1px; height:150px; text-align:center; background-color:rgba(255, 99, 71, 0.6)"><h2 style="padding-top:50px">Property Renting Portal</h2></div>
<div style="width: 1100px;  border-width: 1px; height:30px; text-align:right; background-color:rgb(255, 99, 71); padding-right:30px;"><?php
            session_start();
            $utype=$_SESSION['Utype'];
            $uname=$_SESSION['Uname'];
            $memID=$_SESSION['memID'];
            echo '<a href="logout.php" style="color:white;">Log out '.$uname.'</a>';
            ?></div>
<div>
      <div class="mh-100" style="width: 200px; height:100%; border-style: groove; border-width: 1px; float:left">
            <nav class="navbar navbar-light bg-light">
            <?php
            if ($utype=='Owner')
            {
                  echo '<a class="navbar-brand" id="newprop" href="#" >Add Property</a>';
                  echo '<a class="navbar-brand" id="rentprop" href="#">Rentout Property</a>';
            }
            else
            {      
                  echo '<a class="navbar-brand" id="searchprop" href="#">Search Property</a>';
                               
            }
             
             
            ?>
            </nav>
      </div>
      <div>
       
      </div>
      <div class="mh-100" id="contents" style="width: 900px;height:100%; border-style: groove; border-width: 1px;  float:left; padding-left:30px; padding-top:30px;"><?php
      if (isset($_SESSION['datahtm']))
            {
                  $tt=$_SESSION['datahtm'];
                  echo $tt;
                  unset($_SESSION['datahtm']);
            }
            else
            {
                  $con=mysqli_connect("localhost","root","","renting_db");
                  $qry="select * from property_tbl where propertyID in (select propertyID from rent_tbl where memberID=$memID and rentdate<>'0000-00-00')";
                  $res=mysqli_query($con,$qry);
                  while ($row=mysqli_fetch_array($res))
                  {
                        echo "Congratulations!!!<br>Your rent request for property ID:".$row['PropertyID']."  ".$row['PropertyType']. " in ". $row['City']. " has been accepted";
                  }
            }
      ?></div>
      </div>
</div>
<BODY>
