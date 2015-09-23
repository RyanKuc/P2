<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <title>Project2 - Password Genertator</title>
  <link rel="stylesheet" type="text/CSS" href="css/styles.css">
    <link rel="stylesheet" type="text/CSS" href="css/bootstrap.min.css">
  <?php require 'logic.php'; ?>
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ryan Kucinski Project 2</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle"
          data-toggle="dropdown" role="button" aria-haspopup="true"
          aria-expanded="false">P1<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://P1.ryankucinski.com">View Live</a></li>
            <li><a href="https://github.com/RyanKuc/P1.git">Github</a></li>
          </ul>
        </li>
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle"
          data-toggle="dropdown" role="button" aria-haspopup="true"
          aria-expanded="false">P2<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://P2.ryankucinski.com">View Live</a></li>
            <li><a href="https://github.com/RyanKuc/P2.git">Github</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle"
          data-toggle="dropdown" role="button" aria-haspopup="true"
          aria-expanded="false">P3<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://P3.ryankucinski.com">View Live</a></li>
            <li><a href="https://github.com/RyanKuc/P3.git">Github</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle"
          data-toggle="dropdown" role="button" aria-haspopup="true"
          aria-expanded="false">P4<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://P4.ryankucinski.com">View Live</a></li>
            <li><a href="https://github.com/RyanKuc/P4.git">Github</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--++++++++++++++++++++++++++++++++++++++++++++++--->
<div class="container">
  <div class="jumbotron">
    <h1><span>Secure</span> Password Generator</h1>
    <p>Enter your preferences below to customer the perfect password.</p>
      <h3><span>
        <?php
      if(isset($allcaps) && $allcaps == 'yes' && isset($hyphensep) && $hyphensep == 'yes')
      {
      echo strtoupper($hyphen_separated);
      }
      elseif(isset($allcaps) && $allcaps == 'yes')
      {
        echo strtoupper($passreg);
      }
      elseif(isset($hyphensep) && $hyphensep == 'yes')
      {
      echo $hyphen_separated;
      }
      else
      {
      echo $passreg;
      }
      ?>
    </span>
      <h3>
    </div>

</div>
<!--++++++++++++++++++++++++++++++++++++++++++++++--->
  <div class="container">
    <div class="jumbotron" id="main">

  <form role="form" method='POST' action='index.php' class="form-group"></br>
    <label for="numwords" class="form-labels">Enter Number of Words: </label>
    <input type='number' name='numwords' min='1' max='9' value="<?=$numwords?>" class="form-control" id="numwords">


  <div class="form-group">
    <label for="numspec" class="form-labels">Enter Number of Special Characters: </label>
    <input type='number' name='numspec' min='0' max='5' value="<?=$numspec?>" class="form-control" id="numspec">
</div>
  <div class="form-group">
    <label for="numnum" class="form-labels">Enter Number of Numberic Values 0-99: </label>
    <input type='number' name='numnum' min='0' max='5' value="<?=$numnum?>" class="form-control" id="numnum">
  </div>
    <div class="form-group form-control">
      <div class="checkbox-inline">
    <input type='checkbox'  value=yes name="allcaps" class="checkbox" <?php if(isset($_POST['allcaps']) &&
       $_POST['allcaps'] == 'yes'){echo "checked";} else {echo "";} ?>>ALL CAPS
     </div>
       <div class="checkbox-inline">
    <input type='checkbox'  value="yes" name="hyphen" class="checkbox" <?php if(isset($_POST['hyphen']) &&
       $_POST['hyphen'] == 'yes'){echo "checked";} else {echo "";} ?>>hyphen-seperated
       </div>
     </div>
   <div class="form-group">
  <button type='submit' class="btn btn-default form-control">Set New Password</button>
 </div>
  </form>
  </div>
</div>
  <div class="container">
<footer>
  <p class="pull-right"><a href="#">Back to top</a></p>
  <p>&copy; 2015 Ryan Kucinski</p>
</footer>
</div>
<!-- Bootstrap core JavaScript and JQuery -->
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
