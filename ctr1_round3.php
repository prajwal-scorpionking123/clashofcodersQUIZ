<?php
session_start();
$_SESSION['points']=0;
$conn=mysqli_connect('localhost','root','','clashofcoder');
$ansof1=$_POST['ans1'];
$ansof2=$_POST['ans2'];
$ansSetOne=array('000','111','000');
if($ansof1==$ansSetOne[0]||$ansof1==$ansSetOne[1]||$ansof1==$ansSetOne[2])
{
    $_SESSION['points']+=30;
}
if($ansof1!==NULL)
{
$insert1="UPDATE coders SET ANS1='".$_POST['ans1']."',POINTS='".$_SESSION['points']."' WHERE TEAM_ID='".$_SESSION['userID']."'";
if(mysqli_query($conn,$insert1))
{
    header('location:round3_phase2.php');
}
else{
    header('location:round3_phase1.php');
}
}
if($ansof2!==NULL)
{
    $insert2="UPDATE coders SET ANS2='".$_POST['ans2']."',POINTS='".$_SESSION['points']."' WHERE TEAM_ID='".$_SESSION['userID']."'";
    if(mysqli_query($conn,$insert2))
    {
    header('location:round3_phase2.php');
    }
    else
    {
    header('location:round3_phase1.php');
    }
}


?>