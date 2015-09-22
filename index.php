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
    <input type='checkbox' class="checkbox" value=yes name="allcaps"  <?php if(isset($_POST['allcaps']) &&
       $_POST['allcaps'] == 'yes'){echo "checked";} else {echo "";} ?>>ALL CAPS</br>
    <input type='checkbox' class="checkbox" value="yes" name="hyphen" <?php if(isset($_POST['hyphen']) &&
       $_POST['hyphen'] == 'yes'){echo "checked";} else {echo "";} ?>>hyphen-seperated</br>
    <input type='submit' value='Set New Password' class="btn-block form-control">
  </form>
  </div>
  <div class="col-lg-4">
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
  </div>

</div>
</div>

</body>
