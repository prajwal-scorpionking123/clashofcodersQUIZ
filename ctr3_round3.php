<?php
session_start();
$ansof1=$_POST['ans1'];
$ansof2=$_POST['ans2'];
$ansof3=$_POST['ans3'];
$ansof4=$_POST['ans4'];
$answers=array("4","3","27","4");
if($ansof1==$answers[0]||$ansof2==$answers[1]||$ansof3==$answers[2]||$ansof4==$answers[0])
{
  $_SESSION['points']+=30;
}
if($ansof1!==NULL)
{
  $conn=mysqli_connect('localhost','root','','clashofcoder');
    $insert="UPDATE coders SET ANS4='".$_POST['ans1']."',POINTS='".$_SESSION['points']."' WHERE TEAM_ID='".$_SESSION['userID']."'";
    if(mysqli_query($conn,$insert))
    {
        header('location:complete.php');
    }
    else{
        header('location:round3_phase3.php');
    }
}
if($ansof2!==NULL)
{
    $conn=mysqli_connect('localhost','root','','clashofcoder');
    $insert="UPDATE coders SET ANS5='".$_POST['ans2']."',POINTS='".$_SESSION['points']."' WHERE TEAM_ID='".$_SESSION['userID']."'";
    if(mysqli_query($conn,$insert))
    {
        header('location:complete.php');
    }
    else{
        header('location:round3_phase3.php');
    }
}
if($ansof3!==NULL)
{
    $conn=mysqli_connect('localhost','root','','clashofcoder');
    $insert="UPDATE coders SET ANS6='".$_POST['ans3']."',POINTS='".$_SESSION['points']."' WHERE TEAM_ID='".$_SESSION['userID']."'";
    if(mysqli_query($conn,$insert))
    {
        header('location:complete.php');
    }
    else{
        header('location:round3_phase3.php');
    }
}
if($ansof4!==NULL)
{
    $conn=mysqli_connect('localhost','root','','clashofcoder');
    $insert="UPDATE coders SET ANS4='".$_POST['ans4']."',POINTS='".$_SESSION['points']."' WHERE TEAM_ID='".$_SESSION['userID']."'";
    if(mysqli_query($conn,$insert))
    {
        header('location:complete.php');
    }
    else{
        header('location:round3_phase3.php');
    }
}

?>