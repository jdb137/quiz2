<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/welcome.css">
    <title>Welcome!</title>
  </head>
  <body>
    <?php
      setcookie('istheformsubmitted','1');
      setcookie('firstname',$_POST['fname']);
      setcookie('lastname',$_POST['lname']);
      setcookie('email',$_POST['mail']);
      echo'<h2>Thanks for submitting!</h2>';
    ?>
  </body>
</html>
