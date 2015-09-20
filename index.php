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
    <input type='number' name='numwords' min='1' max='9' value="4" class="form-control" id="numwords"><br>
    <label for="numspec">Enter Number of Special Characters: </label>
    <input type='number' name='numspec' min='0' max='9' value="0" class="form-control" id="numspec"><br>
    <label for="numnum">Enter Number of Numberic Values 0-99: </label>
    <input type='number' name='numnum' min='0' max='9' value="0" class="form-control" id="numnum"><br>
    <input type='reset' value='Set New Password' class="btn-block form-control">
  </form>
</div>
</div>
</div>

</body>
