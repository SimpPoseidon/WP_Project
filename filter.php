<?php
include "dbconnect.php";

$counter=2;
$cls_cnt=0;

$course;
$fdate;
$tdate;
$process;
$sql;

if(!empty($_POST["Course"]))
{
    $course=$_POST["Course"];
    $sql="SELECT * from iips where Program = '$course';";
    if(!empty($_POST["FromDate"]))
    {
        $fdate=$_POST["FromDate"];
        $sql="SELECT * from iips where Program = '$course' and Date_of_sub >= '$fdate';";
        if(!empty($_POST["ToDate"]))
        {
            $tdate=$_POST["ToDate"];
            $sql="SELECT * from iips where Program='$course' and Date_of_sub between '$fdate' and '$tdate';";
        }
    }
    else
    {
        if(!empty($_POST["ToDate"]))
        {
            $tdate=$_POST["ToDate"];
            $sql="SELECT * from iips where Program = '$course' and Date_of_sub <= '$tdate';";
        }
    }
}
else if(!empty($_POST["Process"]))
{
    $process=$_POST["Process"];
    $sql="SELECT * from iips where Amount_Refunded = '$process';";
    if(!empty($_POST["FromDate"]))
    {
        $fdate=$_POST["FromDate"];
        $sql="SELECT * from iips where Amount_Refunded = '$process' and Date_of_sub >= '$fdate';";
        if(!empty($_POST["ToDate"]))
        {
            $tdate=$_POST["ToDate"];
            $sql="SELECT * from iips where Amount_Refunded = '$process' and Date_of_sub between '$fdate' and '$tdate';";
        }
    }
    else
    {
        if(!empty($_POST["ToDate"]))
        {
            $tdate=$_POST["ToDate"];
            $sql="SELECT * from iips where Amount_Refunded = '$process' and Date_of_sub <= '$tdate';";
        }
    }
}
else if(!empty($_POST["FromDate"]))
{
    $fdate=$_POST["FromDate"];
    $sql="SELECT * from iips where Date_of_sub >= '$fdate';";
    if(!empty($_POST["ToDate"]))
    {
        $tdate=$_POST["ToDate"];
        $sql="SELECT * from iips where Date_of_sub between '$fdate' and '$tdate';";
    }
}
else if(!empty($_POST["ToDate"]))
{
    $tdate=$_POST["ToDate"];
    $sql="SELECT * from iips where Date_of_sub <= '$tdate';";
}
$result=$conn->query($sql);
if($result)
{
    echo "<h3 style='font-size:xx-large;'>Database</h3>
    <table border='3' cellpadding='7'>
    <tr>
    <th align='center'>Application_ID</th>
    <th align='center'>Name</th>
    <th align='center'>Fathers_Name</th>
    <th align='center'>Mothers_Name</th>
    <th align='center'>PermanentAddress</th>
    <th align='center'>Email</th>
    <th align='center'>Pincode</th>
    <th align='center'>MobileNo</th>
    <th align='center'>AltNo</th>
    <th align='center'>LocalAddress</th>
    <th align='center'>Program</th>
    <th align='center'>ClassRollNo</th>
    <th align='center'>EnrollmentNo</th>
    <th align='center'>ReceiptNo</th>
    <th align='center'>Date_Receipt</th>
    <th align='center'>Amount</th>
    <th align='center'>File</th>
    <th align='center'>Amount_Refunded</th>
    <th align='center'>Date_of_sub</th>
    <th align='center'>Time_of_sub</th>
    </tr>";
    while($row=$result->fetch_assoc())
    {
        echo"<tr class='cls_$cls_cnt'>
        <td align='center'>".$row["Application_ID"]."</td>
        <td align='center'>".$row["Name"]."</td>
        <td align='center'>".$row["Fathers_Name"]."</td>
        <td align='center'>".$row["Mothers_Name"]."</td>
        <td align='center'>".$row["PermanentAddress"]."</td>
        <td align='center'>".$row["Email"]."</td>
        <td align='center'>".$row["Pincode"]."</td>
        <td align='center'>".$row["MobileNo"]."</td>
        <td align='center'>".$row["AltNo"]."</td>
        <td align='center'>".$row["LocalAddress"]."</td>
        <td align='center'>".$row["Program"]."</td>
        <td align='center'>".$row["ClassRollNo"]."</td>
        <td align='center'>".$row["EnrollmentNo"]."</td>
        <td align='center'>".$row["ReceiptNo"]."</td>
        <td align='center'>".$row["Date_Receipt"]."</td>
        <td align='center'>".$row["Amount"]."</td>
        <td align='center'>".$row["File"]."</td>
        <td align='center'>".$row["Amount_Refunded"]."</td>
        <td align='center'>".$row["Date_of_sub"]."</td>
        <td align='center'>".$row["Time_of_sub"]."</td>
        </tr>";
        $counter++;
        $cls_cnt=$counter%2;
    }
    echo"</table>";
}
?>