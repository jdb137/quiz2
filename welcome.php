<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/welcome.css">
    <title>Welcome!</title>
  </head>
  <body>
    <?php
      if(!isset($_COOKIE['istheformsubmitted'])){
        Echo'<h2>This is your form!</h2>';
        Echo'<form id="theform" action="register.php" method="post">';
          Echo'<label>First Name:</label>';
          Echo'<input type="text" name="fname" value="" required>';
          Echo'<label>Last Name:</label>';
          Echo'<input type="text" name="lname" value="" required>';
          Echo'<label>Email:</label>';
          Echo'<input type="email" name="mail" value="" required>';
          Echo'<button type="submit" name="button" form="theform">Submit</button>';
        Echo'</form>';
      }else{
        Echo"<h2>Hi,'" .$_COOKIE['firstname']."', you recently signed up with the email address: '" .$_COOKIE['email']."', thank you!</h2>";
      }

    ?>
  </body>
</html>
