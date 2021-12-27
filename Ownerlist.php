HTML>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<BODY>
<div class="container">
 <div class="row">
    <div class="col">
<?php
session_start();
$oid=$_SESSION['memID'];
$con=mysqli_connect("localhost","root","","renting_db");
$qry="Select R.propertyid,city,M.MemberName,M.MemberID,R.RequestDate from rent_tbl R, Property_tbl P, member_tbl M, Owner_Tbl O where R.propertyid= O.propertyid and O.propertyid =P.propertyid and O.MemberID=$oid and R.MemberID=M.MemberID and status='A'";
$res=mysqli_query($con,$qry);
$htm=<<<_lbl
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Property ID</th>
      <th scope="col">City</th>
      <th scope="col">Requested by</th>
      <th scope="col">Request Date</th>
        <th scope="col">User Action</th>
    </tr>
  </thead>
  <tbody>
_lbl;
echo $htm;
foreach ($res as $prop)
      {
            echo "<tr>";
            echo "<td>".$prop['propertyid']. "</td>";
            $key=$prop['propertyid'];
            echo "<td>".$prop['city']. "</td>";
            $mid=$prop['MemberID'];
            echo "<td>".$prop['MemberName']. "</td>";
            echo "<td>".$prop['RequestDate']. "</td>";
                        echo '<td><a class="btn btn-primary" href="rentOut.php?pid='.$key.'&memid='.$mid.'" role="button" style="border-color:rgb(255, 99, 71);background-color:rgb(255, 99, 71)" >Rent Out</a></td>';
        echo "</tr>";
      }
?></div>
</div>
</div>
</form>      
</BODY>
</HTML>
