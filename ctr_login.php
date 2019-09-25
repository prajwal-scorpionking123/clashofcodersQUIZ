<?php
session_start();
$conn=mysqli_connect('localhost','root','','clashofcoder');
if($conn)
{
    
    $get="SELECT * FROM coders WHERE TEAM_ID='".$_POST['teamID']."'";
    $fire=mysqli_query($conn,$get);
    $rows=mysqli_fetch_array($fire);
    
    if($fire)
    {
       
        $_SESSION['userID']=$rows[1];
        $_SESSION['pass']=$rows[2];
        $_SESSION['count1']=0;
        header('location:round3_phase1.php');
    }

}

?>