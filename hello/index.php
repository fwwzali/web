<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hello World!</title>
  </head>
  <body>
      <?php
            // $name = "Aan";
            // echo "<p>Hello World!</p>";
            // echo "<p>Hello ".$name."</p>";
            // echo "hai $name !";
            // echo 'hi $name !';

       ?>
       <!-- jika method get -->
       <!-- <form action="data-diri.php" method="get"> -->
       <form action="data-diri.php" method="post">
            <table>
              <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
              </tr>
              <tr>
                <td>NPM</td>
                <td><input type="text" name="npm"></td>
              </tr>
              <tr>
                <td>Address</td>
                <td><input type="text" name="addr"></td>
              </tr>
              <tr>
                <td>Year Birth</td>
                <td><input type="text" name="year"></td>
              </tr>
              <tr>
                <td>Hobby</td>
                <td><input type="text" name="hobby"></td>
              </tr>
              <tr>
                <td></td>
                <td><button type="submit">Send Data!</button></td>
              </tr>
            </table>
       </form>


  </body>
</html>
