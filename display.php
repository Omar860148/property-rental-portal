<?php
echo '<script type="text/javascript">location.href = "dashboard.php#contents";</script>';
session_start();
if (isset($_POST['submit']))
{
       
$con=mysqli_connect("localhost","root","","renting_db");
$pType=$_POST['pType'];
$pCity=$_POST['pCity'];
$pRooms=$_POST['pRooms'];
$pRentFAmt=$_POST['pRentfrom'];
$pRentTAmt=$_POST['pRentTo'];
$AreaType=$_POST['AreaType'];
$LocalityType=$_POST['LocalityType'];
$pFur=$_POST['pFur'];
$qry="Select * from Property_tbl  where PropertyType='$pType' and AreaType='$AreaType' and City='$pCity' and SocietyLocality='$LocalityType'  and Rooms= $pRooms and RentAmt between $pRentFAmt and $pRentTAmt and Status='A'";
//echo $qry;
$res=mysqli_query($con,$qry);
$htm=<<<_lbl
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Property ID</th>
      <th scope="col">Floor</th>
      <th scope="col">Rooms</th>
      <th scope="col">Bathrooms</th>
        <th scope="col">Toilets</th>
        <th scope="col">User Action</th>
    </tr>
  </thead>
  <tbody>
_lbl;
foreach ($res as $prop)
      {
            $htm=$htm. "<tr>";
            $htm=$htm. "<td>".$prop['PropertyID']. "</td>";
            $key=$prop['PropertyID'];
            $htm=$htm. "<td>".$prop['Floor']. "</td>";
            $htm=$htm. "<td>".$prop['Rooms']. "</td>";
            $htm=$htm. "<td>".$prop['Bathrooms']. "</td>";
            $htm=$htm. "<td>".$prop['Toilets']. "</td>";
            $htm=$htm. '<td><a class="btn btn-primary" href="rentReq.php?pid='.$key.'" role="button" style="border-color:rgb(255, 99, 71);background-color:rgb(255, 99, 71)">Request for Rent</a></td>';
        $htm=$htm. "</tr>";
      }
      $_SESSION['datahtm']=$htm;
}
?>
