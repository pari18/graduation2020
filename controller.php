<?php
session_start();
include('connect.php');

if(isset($_POST['sendq']))
{
$uname=$_POST['uname'];
$name = $_POST['name'];
$message = $_POST['image'];

    $qry = "insert into query(subject, msg, username) values('$name', '$message', '$uname' )";
    $ani = mysqli_query($conn, $qry);
    if($ani){
	$msg =  "Your query is successfully submitted";
	header('location:queries.php?msg='.$msg);
    }else{
	$msg =  "error";
	header('location:queries.php?msg='.$msg);
    } 
}

if(isset($_POST['aditya'])){
    
$ID=$_POST['name'];
$NAME=$_POST['enroll'];
$ENROLLID=$_POST['course'];
$SEM=$_POST['sem'];
$COURSE=$_POST['email'];
$MOBILE_NO=$_POST['mob'];
$EMAIL=$_POST['uname'];
$PWD=$_POST['pwd'];

$image = $_FILES['image']['name'];
$tmpimage = $_FILES['image']['tmp_name'];
$folder = 'uimage';
$target_file = $folder.'/'.basename($_FILES['image']['name']);
if (move_uploaded_file($tmpimage, $target_file)){
        $qry="insert into reg(username, password, name, enroll_id, sem, course, mobileno, email, image) values('$EMAIL','$PWD','$ID','$NAME','$SEM','$ENROLLID', '$MOBILE_NO', '$COURSE', '$target_file')";
        $ani = mysqli_query($conn, $qry);
        if($ani){
	   $msg =  "Your query is successfully submitted";
	   header('location:registration.php?msg='.$msg);
        }else{
	   $msg =  "error";
	   header('location:registration.php?msg='.$msg);
        } 
  }else{
	   $msg =  "Image not Uploaded";
	   header('location:registration.php?msg='.$msg);
        } 
}


$adi="ashwiniiojha1014";

$ani="123456";
if(isset($_POST['login']))
{
  $b=$_POST['uname'];
  $b1=$_POST['pwd'];
  
  $result=mysqli_query($conn,"select * from reg where username='$b' and password='$b1' ");
  $coun=mysqli_num_rows($result); 
  if($coun==1)
   {
      $_SESSION['uname']=$b;
	header('location:user.php');
    }
    elseif($b!="" && $b1!="")
      {
         $result1=mysqli_query($conn,"select * from tec_reg where username='$b' and password='$b1' ");
            $coun1=mysqli_num_rows($result1); 
        if($coun1==1)
            {
                $_SESSION['uname']=$b;
                header('location:staff.php');
            }
    
}
else{
    $msg =  "Either Username or Password is wrong";
	header("location:index.php?msg=".$msg);
}

}


if(isset($_POST['richa']))
{
$NAME=$_POST['name'];
$DESGINATION=$_POST['emp'];
$EMAILID=$_POST['sub1'];
$STATUS1=$_POST['sub2'];
$CONTACTNO=$_POST['sub3'];
$EMPLOYEEID=$_POST['deg'];
$SUBJECT=$_POST['email'];
$MOBILE=$_POST['mob'];
$STATUS=$_POST['status'];
$UNAME=$_POST['uname'];
$PASSWORD=$_POST['pwd'];
    
$image = $_FILES['image']['name'];
$tmpimage = $_FILES['image']['tmp_name'];
$folder = 'userimage';
$target_file = $folder.'/'.basename($_FILES['image']['name']);
 
    if(move_uploaded_file($tmpimage, $target_file)){   
        $qry="insert into tec_reg(username, password, name, desgination, emailid, status, contactno, employeeid, subject, image, sub2, sub3) values('$UNAME','$PASSWORD','$NAME','$EMPLOYEEID','$SUBJECT','$STATUS','$MOBILE','$DESGINATION','$EMAILID','$target_file','$STATUS1','$CONTACTNO')";
        $ani = mysqli_query($conn, $qry);   
        if($ani){
	   $msg =  "Your query is successfully submitted";
	   header('location:facregis.php?msg='.$msg);
        }else{
	   $msg =  "error";
	   header('location:facregis.php?msg='.$msg);
        } 
    }
    else{
	   $msg =  "Image not uploaded";
	   header('location:facregis.php?msg='.$msg);
        } 
    
}



// sample

if(isset($_POST['upassign'])){
    
    $sub = $_POST['sub'];
    $course = $_POST['course'];
    $sem = $_POST['sem'];
    $an = $_POST['an'];
    $adate=$_POST['adate'];
        
    $image = $_FILES['pdf']['name'];
    $tmpimage = $_FILES['pdf']['tmp_name'];
    $folder = 'assignment';
    $target_file = $folder.'/'.basename($_FILES["pdf"]["name"]);
    
    if (move_uploaded_file($tmpimage, $target_file)){
    
        $qry = "INSERT INTO uassignment (subject_name,course, docs, sem,num,assignment_date)values('$sub', '$course', '$target_file', '$sem','$an','$adate')";
        $result = mysqli_query($conn, $qry);
        if($result){
        $msg =  "Assignment are successfully uploaded";
        header('location:upassig.php?msg='.$msg);
        }else{
        $msg =  "error";
        header('location:upassig.php?msg='.$msg);
        } 
    }
        else{
        $msg =  "error in uploading file";
        print_r($msg);
    
        header('location:upassig.php?msg='.$msg);
        } 
    }
// sample end



if(isset($_POST['upnotes'])){
    
$sub = $_POST['sub'];
$course = $_POST['course'];
$sem = $_POST['sem'];
    
$image = $_FILES['pdf']['name'];
$tmpimage = $_FILES['pdf']['tmp_name'];
$folder = 'docs';
$target_file = $folder.'/'.basename($_FILES["pdf"]["name"]);

if (move_uploaded_file($tmpimage, $target_file)){

    $qry = "INSERT INTO notes (subject_name,course, docs, sem)values('$sub', '$course', '$target_file', '$sem')";
    $result = mysqli_query($conn, $qry);
    if($result){
	$msg =  "Notes are successfully uploaded";
	header('location:upnotes.php?msg='.$msg);
    }else{
	$msg =  "error";
	header('location:upnotes.php?msg='.$msg);
     } 
}
    else{
    $msg =  "error in uploading file";
    print_r($msg);

	header('location:upnotes.php?msg='.$msg);
    } 
}




if(isset($_POST['upmarks'])){
    
    $sub = $_POST['sub'];
    $course = $_POST['course'];
    $sem = $_POST['sem'];

    $image = $_FILES['pdf']['name'];
    $tmpimage = $_FILES['pdf']['tmp_name'];
    $folder = 'marks_docs';
    $target_file = $folder.'/'.basename($_FILES["pdf"]["name"]);
    
    if (move_uploaded_file($tmpimage, $target_file)){ 
    
        $qry = "INSERT INTO marks (subject_name,course, docs, sem)values('$sub', '$course', '$target_file', '$sem')";
        $result = mysqli_query($conn, $qry);
        if($result){
        $msg =  "Marks are successfully uploaded";
        header('location:addmark.php?msg='.$msg);
        }else{
        $msg =  "error";
        header('location:addmark.php?msg='.$msg);
        } 
    }
        else{
        $msg =  "error in uploading file";
        print_r($msg);
    
        header('location:addmark.php?msg='.$msg);
        } 
    }
    
            // queries

            if(isset($_POST['sendq'])){
    
                $sub = $_POST['sub'];
                $uname = $_POST['uname'];
                $msg = $_POST['msg'];
            
                $image = $_FILES['pdf']['name'];
                $tmpimage = $_FILES['pdf']['tmp_name'];
                $folder = 'marks_docs';
                $target_file = $folder.'/'.basename($_FILES["pdf"]["name"]);
                
                if (move_uploaded_file($tmpimage, $target_file)){ 
                
                    $qry = "INSERT INTO query (sub,uname,msg)values('$sub', '$uname', '$msg')";
                    $result = mysqli_query($conn, $qry);
                    if($result){
                    $msg =  "QUERIES are successfully uploaded";
                    header('location:queries.php?msg='.$msg);
                    }else{
                    $msg =  "error";
                    header('location:queries.php?msg='.$msg);
                    } 
                }
                    else{
                    $msg =  "error in uploading file";
                    print_r($msg);
                
                    header('location:queries.php?msg='.$msg);
                    } 
                }
                
        // response query

        if(isset($_POST['sendqresponse'])){
    
            $id = $_POST['id'];
           
            $msg = $_POST['msg'];

            $uname=$_POST['uname'];
            $sub=$_POST['sub'];

        
           
            
                $qry = "INSERT INTO queryresponse (id,sub,uname,msg)values('$id','$sub','$uname' ,'$msg')";
                $result = mysqli_query($conn, $qry);
                if($result){
                $msg1 =  "Response are successfully uploaded";
                header('location:queries.php?msg='.$msg1);
                }else{
                $msg1 =  "error";
                header('location:queries.php?msg='.$msg1);
                } 
               
            }

?>





