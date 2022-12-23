<?php
    include "dbconnect.php";
    $counter=2;
    $cls_cnt=0;

    $u=$_POST["Username"];
    $p=$_POST["Password"];

    $sql="SELECT * from admin;";
    $result=$conn->query($sql);
    if($result)
    {
        $count=0;
        while($row=$result->fetch_assoc())
        {
            if($row["Username"]==$u && $row["Password"]==$p)
            {
                $count=1;
                break;
            }
        }
        if($count==1)
        {
            $disp="SELECT * from iips;";
            $display=$conn->query($disp);
            echo"
            <center>
            <div id='prev' style='font-family: Lucida Console; font-size:small; '>
            <h3 style='font-size:xx-large;'>Database</h3>
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
            while($row=$display->fetch_assoc())
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
            echo"</table>
                </div>
                </center>";
        }
        else
        {
            echo"<script>window.alert('Enter correct credentials');</script>";
            echo"<script>window.history.back();</script>";
        }
    }
    include "ajax.html";
?>
