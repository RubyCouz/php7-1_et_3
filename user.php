<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Page user</title>
  </head>
  <body>
    <p>
<?php
if (isset($_GET['lastname']) && isset($_GET['firstname']))
{
  echo 'Bonjour ' . $_GET['lastname'] . $_GET['firstname'];
} else {
  echo 'Veuillez renseigner votre identité svp !!!';
}
 ?>
    </p>
  </body>
</html>
