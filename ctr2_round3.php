<?php
session_start();
$_SESSION['count']=0;
$conn=mysqli_connect('localhost','root','','clashofcoder');
$ansof3=$_POST['ans3'];
$answer="0101";
if($ansof3==$answer)
{
    $_SESSION['points']+=30;
}
if($ansof3!==NULL)
{
$insert="UPDATE coders SET ANS3='".$_POST['ans3']."',POINTS='".$_SESSION['points']."' WHERE TEAM_ID='".$_SESSION['userID']."'";
if(mysqli_query($conn,$insert))
{
    header('location:round3_phase3.php');
}
else{
    header('location:round3_phase2.php');
}
}



?>

?>