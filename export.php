<?php

// Include Database connection
include "dbconnect.php";
// Include SimpleXLSXGen library
include("SimpleXLSXGen.php");

$Application = [
  ['Application_ID', 'Name','ClassRollNo','EnrollmentNo','Program', 'Fathers_Name', 'Mothers_Name', 'Email','MobileNo','AltNo','PermanentAddress',
  'LocalAddress','Pincode', 'ReceiptNo','Date_Receipt','Amount','File','Date_of_sub','Time_of_sub','Amount_Refunded']
];
$lastid;
$count=0;
$sql = "SELECT * FROM iips where Amount_Refunded= 'No'; ";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
  foreach ($res as $row) {
    $Application = array_merge($Application, array(array( $row['Application_ID'], $row['Name'], $row['ClassRollNo'], $row['EnrollmentNo'], $row['Program'],
     $row['Fathers_Name'], $row['Mothers_Name'], $row['Email'], $row['MobileNo'], $row['AltNo'], $row['PermanentAddress'], $row['LocalAddress'], $row['Pincode'],
      $row['ReceiptNo'], $row['Date_Receipt'], $row['Amount'], $row['File'], $row['Date_of_sub'], $row['Time_of_sub'], $row['Amount_Refunded'])));
      $lastid=$row["Application_ID"];
    $count=1;
  }
}
if($count==0)
{
  echo"<script>window.alert('No update!!!');</script>";
  echo"<script>window.history.back();</script>";
}
else
{
  $filename = "Caution-Money-application" . date('Ymd') . ".xlsx";
  $xlsx = SimpleXLSXGen::fromArray($Application);
  $xlsx->downloadAs($filename); // This will download the file to your local system

  // $xlsx->saveAs('Application.xlsx'); // This will save the file to your server

  $x="UPDATE iips set Amount_Refunded='Yes' 
  where Amount_Refunded='No' and Application_ID <= $lastid; ";
  $conn->query($x);
}
?>