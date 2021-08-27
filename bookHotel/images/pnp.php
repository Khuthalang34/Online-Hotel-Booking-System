<?php
 ob_start();
 session_start();

 if( !isset($_SESSION['id']) ) {
  header("Location: index.php");
  exit;
 }
 include_once 'dbconnect.php';
 $query1="select * from myTable where id=".$_SESSION['id'];
 $result1= mysqli_query($conn,$query1);
 $row1= mysqli_fetch_assoc($result1);
 $email=$row1['email'];
 $query2="SELECT * FROM bookings ORDER BY idx DESC LIMIT 1";
 $result2= mysqli_query($conn,$query2);
 $row2= mysqli_fetch_assoc($result2);
?>
