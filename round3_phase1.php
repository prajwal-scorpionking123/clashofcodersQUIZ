<?php 
session_start();
$_SESSION['count1']++;
$count=$_SESSION['count1'];
$que1 = array("1"=>"Que:- What is 000 & 111 ?", "2"=>"Que:what is 000 || 111??","3"=>"Que:- what is complement of 000?","4"=>"Que:=What is 000 & 111?");
$que2 = array("1"=>"Que:- What is 000 & 111 ?", "2"=>"Que:what is 000 || 111??","3"=>"Que:- what is complement of 000?","4"=>"Que:=What is 000 & 111?");

if($_SESSION['count1']>3)
{
  $_SESSION['count1']=4;
  $count=$_SESSION['count1'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Quiz</title>
  </head>
  <body>
 
  <div class="jumbotron">
  <h1 class="display-4">Hello <?php echo $_SESSION['userID'];?></h1>
  <p class="lead">Welcome to Round 3 ProCode phase1</p>
  <hr class="my-4">
  <p>Solve Any One</p>
  <form action="ctr1_round3.php" method="POST">
  <label><?php echo $que1[$count];?></label>
  <input type="text" name="ans1" style="width:400px;" class="form-control"><br>
  <input type="submit" class="btn btn-primary"><hr>
  <label><?php echo $que2[$count];?></label>
  <input type="text" name="ans2" style="width:400px;" class="form-control"><br>
  <input type="submit" class="btn btn-primary">
  </form>

</div>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>