<?php
$con=mysqli_connect("localhost","root","","renting_db");
$pid=$_GET['pid'];
$mid=$_GET['memid'];
$qry="update rent_tbl set RentDate='".date("Y/m/d")."' where MemberID=$mid and PropertyID=$pid";
echo $qry;
$res=mysqli_query($con,$qry);
if (mysqli_affected_rows($con)>0)
{
            $qry="update property_tbl set status='R' where PropertyID=$pid";
            //echo $qry;
            $res=mysqli_query($con,$qry);
            echo "<script>alert('Property Rented Successfully');</script>";
            header('refresh:0;url=dashboard.php');
}
      else
      {            
            echo"<script>alert('Could not complete process');</script>";
            header('refresh:0;url=dashboard.php');
      }
?>
