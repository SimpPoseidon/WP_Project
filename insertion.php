<?php
  include "dbconnect.php";

    function datacheck()
    {
        if(strlen($_POST["name"])>30 || strlen($_POST["father"])>30 || strlen($_POST["mother"])>30)
        {
            echo"<script>window.alert('Name should not be more than 30 characters');</script>";
            return false;
        }
        if(strlen($_POST["email"])>40)
        {
            echo"<script>window.alert('E Mail Address shouldn't exceed 40 characters');</script>";
            return false;
        }
        if(strlen($_POST["permanent"])>50 || strlen($_POST["local"])>50)
        {
            echo"<script>window.alert('Address should not exceed 50 characters');</script>";
            return false;
        }
        if(strlen(strval($_POST["pin"]))>6)
        {
            echo"<script>window.alert('Pincode should not exceed 6 characters');</script>";
            return false;
        }
        if(strlen(strval($_POST["alt"]))>11)
        {
            echo"<script>window.alert('Alternate No. should not exceed 11 characters');</script>";
            return false;
        }
        if(strlen(strval($_POST["amount"]))>11)
        {
            echo"<script>window.alert('Amount value limit reached!!!!');</script>";
            return false;
        }
        if(strlen(strval($_POST["mobile"]))>11 || strlen($_POST["enroll"])>10)
        {
            echo"<script>window.alert('Mobile No. should not exceed 11 character and Enrollment No. should not exceed 10 characters');</script>";
            return false;
        }
        if(strlen($_POST["roll"])>12)
        {
            echo"<script>window.alert('Roll No. should not exceed 12 characters');</script>";
            return false;
        }
        if(strlen($_POST["receipt"])>20)
        {
            echo"<script>window.alert('Receipt No. or Last Examination Attended should not exceed 20 characters');</script>";
            return false;
        }
        if(!FileUplod_check()){
            echo"<script>window.alert('Coudn't upload file');</script>";
            return false;
        }

        return true;
    }

    //input file check
    function FileUplod_check(){
        if ($_FILES["fileToUpload"]["error"] !== UPLOAD_ERR_OK) {

            switch ($_FILES["fileToUpload"]["error"]) {
                case UPLOAD_ERR_PARTIAL:
                    echo"<script>window.alert('File only partially uploaded');</script>";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    echo"<script>window.alert('No file was uploaded');</script>";
                    break;
                case UPLOAD_ERR_EXTENSION:
                    echo"<script>window.alert('File upload stopped by a PHP extension');</script>";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    echo"<script>window.alert('File exceeds MAX_FILE_SIZE in the HTML form');</script>";
                    break;
                case UPLOAD_ERR_INI_SIZE:
                    echo"<script>window.alert('File exceeds upload_max_filesize in php.ini');</script>";
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    echo"<script>window.alert('Temporary folder not found');</script>";
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    echo"<script>window.alert('Failed to write file');</script>";
                    break;
                default:
                echo"<script>window.alert('Unknown upload error');</script>";
                    break;
            }
        return false;
        }

        // Reject uploaded file larger than _X_MB
        if ($_FILES["fileToUpload"]["size"] > (1048576*5)) {
            echo"<script>window.alert('max 5Mb');</script>";
            return false;
        }

        // Use fileinfo to get the required file type
       
        $allowed = array('png', 'jpg','jpeg','pdf');
        $filename = $_FILES['fileToUpload']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        
        if ( ! in_array($ext, $allowed)) {
            echo"<script>window.alert('Invalid file type');</script>";
        return false;
        }

       
    return true;
    }

    //File Rename and uplode
    function uplodeFile($AppNo){
         // Replace any characters not \w- in the original filename
         $pathinfo = pathinfo($_FILES["fileToUpload"]["name"]);

         $base = $pathinfo["filename"];
 
         $base = preg_replace("/[^\w-]/", "_", $base);
 
         $filename = $AppNo . "." . $pathinfo["extension"];
 
         $destination = __DIR__ . "/Doc/" . $filename;
 
         
         if ( ! move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $destination)) {
 
            echo"<script>window.alert('Can't move uploaded file');</script>";
         
         }
    return $destination;
        
    }

    session_start();
    //Captcha code
    if(!isset($_REQUEST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response']) )
    {
        
        $error = "Please fill the captcha.";
        //you can use this error var later to show error message on your page
        echo"<script>window.alert($error);</script>";
    }
    
    else if(urlencode($_REQUEST['g-recaptcha-response'])!=$_SESSION['custom_captcha'])
    {
    // $cresponse = ;
	 $error = "INVALID CAPTCHA";
	 //you can use this var to show error invalid captcha
     echo"<script>window.alert('$error');</script>";
     echo"<script>window.history.back();</script>";
	
    }
    //captcha code end

    else if(!datacheck())
    {
        echo"<script>window.history.back();</script>";
    }

    //data uplode surver
    else
    {
        $name=$_POST["name"];
        $fname=$_POST["father"];
        $mname=$_POST["mother"];
        $pa=$_POST["permanent"];
        $emailad=$_POST["email"];
        $pin=$_POST["pin"];
        $an=$_POST["alt"];
        $mn=$_POST["mobile"];
        $la=$_POST["local"];
        $pr=filter_input(INPUT_POST,'program');
        $rn=$_POST["roll"];
        $en=$_POST["enroll"];
        $ren=$_POST["receipt"];
        $d=$_POST["date"];
        $a=$_POST["amount"];
        $dos=date("Y/m/d");
        date_default_timezone_set("Asia/Kolkata");
        $time=date("h:i:s a");

        //insertion query
        $sql="INSERT INTO IIPS (Name,Fathers_Name,Mothers_Name,PermanentAddress,Email,
        Pincode,AltNo,MobileNo,LocalAddress,Program,ClassRollNo,EnrollmentNo,
        ReceiptNo,Date_Receipt,Amount,Date_of_sub,Time_of_sub) 
        values ('$name','$fname','$mname','$pa','$emailad',$pin,$an,$mn,'$la','$pr','$rn','$en',
        '$ren','$d',$a,'$dos','$time');";
        $result=$conn->query($sql);
        if($result)
        {
            
            echo"<script>window.alert('Data stored successfully');</script>";
            $appquery="SELECT Application_ID from iips where Date_of_sub = '$dos' and Time_of_sub = '$time';";
            $appid=$conn->query($appquery);

            while($row=$appid->fetch_assoc())
            {
                $id=$row["Application_ID"];
                echo"<script>window.alert('Your Application ID is: $id . Kindly keep it safe for further usage!!!!');</script>";
            }

            //File uplode at Doc folder and address of file insertion in data base
            $FileAdd_=uplodeFile($id);
            $File = "UPDATE iips set File='$FileAdd_' where Application_ID=$id;";
            $insertAdd = $conn->query($File);

            //calling php code to send confermation of regestration via Email
            include "Confirmation_email.php";
            
            echo"<script>window.history.back();</script>";     
        }
        else
        {
            echo"$conn->error";
        }
    }
