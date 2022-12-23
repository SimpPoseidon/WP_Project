<?php
include "dbconnect.php";
$appid=$_POST["appid"];
$enroll=$_POST["enrollment"];
$sql="SELECT Amount_Refunded from iips where Application_ID = $appid and EnrollmentNo = '$enroll';";
$result=$conn->query($sql);
$response;
if($result)
{
    while($row=$result->fetch_assoc())
    {
        $response=$row["Amount_Refunded"];
    }
    if($response!=null)
    {
        if($response=='No')
        {
            echo"<script>window.alert('Your request for caution money is still in process!!!');</script>";
            echo"<script>window.location.reload();</script>";
        }
        if($response=='Yes')
        {
            echo"<script>window.alert('Your request for caution money is accepted and money is been transferred!!!');</script>";
            echo"<script>window.location.reload();</script>";
        }
    }
    else
    {
        echo"<script>window.alert('Enter correct Application ID and Enrollment No.!!!!');</script>";
        echo"<script>window.location.reload();</script>";
    }
}
else
{
    echo"$conn->error";
}
?>