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
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
  <form role="form-group" method='POST' action='index.php' class="form-group"></br>
    Password Generator:</br>
    <label for="numwords">Enter Number of Words: </label>
    <input type='number' name='numwords' min='1' max='9' value="<?=$numwords?>" class="form-control" id="numwords"><br>
    <label for="numspec">Enter Number of Special Characters: </label>
    <input type='number' name='numspec' min='0' max='5' value="<?=$numspec?>" class="form-control" id="numspec"><br>
    <label for="numnum">Enter Number of Numberic Values 0-99: </label>
    <input type='number' name='numnum' min='0' max='5' value="<?=$numnum?>" class="form-control" id="numnum"><br>
    <input type='checkbox' class="checkbox" value="<?=$allcaps?>" name="allcaps">ALL CAPS</br>
    <input type='checkbox' class="checkbox" value="yes" name="hyphen" <?php if(isset($_POST['hyphen']) &&
       $_POST['hyphen'] == 'yes'){echo "checked";} else {echo "";} ?>>hyphen-seperated</br>
    <input type='submit' value='Set New Password' class="btn-block form-control">
  </form>
  </div>
  <div class="col-lg-4">
<?php
if(isset($_POST['hyphen']) &&
   $_POST['hyphen'] == 'yes')
{
    for($i = 0; $i < $total_obj; $i++){
      if($i == $total_obj-1){
      echo $passwordcomps[$i];
    }
    else {echo $passwordcomps[$i]."-";}
    };

}
else
{
  foreach($passwordcomps as $value) {
    echo $value." ";};
}
?>
<?php
foreach($passwordcomps as $value) {
  echo strtoupper($value);};
?>
  </div>

</div>
</div>

</body>
